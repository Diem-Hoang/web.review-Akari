<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Socialite;
use Exception;
use App\Models\User;

class SocialLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    protected $providers = [
        'facebook','google'
    ];

    public function redirectToProvider($driver)
    {
        if(!$this->isProviderAllowed($driver) ) {
            return $this->sendFailedResponse("{$driver} is not currently supported");
        }

        try {
            return Socialite::driver($driver)->redirect();
        } catch (Exception $e) {
            // You should show something simple fail message
            return $this->sendFailedResponse($e->getMessage());
        }
    }

    public function handleProviderCallback($driver)
    {
        try {
            $user = Socialite::driver($driver)->user();
        } catch (Exception $e) {
            return $this->sendFailedResponse($e->getMessage());
        }

        // check for email in returned user
        return empty($user->email)
            ? $this->sendFailedResponse("No email will be returned from {$driver} provider.")
            : $this->loginOrCreateAccount($user, $driver);
    }

    protected function sendFailedResponse($msg = null)
    {
        return redirect()->route('web.form.login')
            ->withErrors(['msg' => $msg ?: 'Unable to login, try with another provider to login.']);
    }

    protected function loginOrCreateAccount($providerUser, $driver)
    {
        try {
            // check for already has account
            $user = User::where('email', $providerUser->getEmail())->first();

            // if user already found
            if($user) {
                // update the avatar and provider that might have changed
                $user->update([
                    'provider' => $driver,
                    'provider_id' => $providerUser->id,
                    'access_token' => $providerUser->token
                ]);
            } else {
                // create a new user
                $user = User::create([
                    'name' => $providerUser->getName(),
                    'email' => $providerUser->getEmail(),
                    'provider' => $driver,
                    'provider_id' => $providerUser->getId(),
                    'access_token' => $providerUser->token,
                    'password' => ''
                ]);
            }

            // login the user
            Auth::login($user, true);

            return redirect('/');
        } catch (Exception $e) {
            return $this->sendFailedResponse($e->getMessage());
        }
    }

    private function isProviderAllowed($driver)
    {
        return in_array($driver, $this->providers) && config()->has("services.{$driver}");
    }
}
