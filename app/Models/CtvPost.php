<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
class CtvPost extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = 
    [
    'name',
    'title',
    'adress',
    'theme',
    'type',
    'price',
    'location',
    'content',
    'status',
    'image',
    ];
    protected $table = "ctv_posts";
    public function ctvcomment()
    {
        return $this->hasMany('App\Models\CtvComment', 'post_id', 'id');
    }
    public function ctvlike()
    {
        return $this->hasMany('App\Models\CtvLike', 'post_id', 'id');
    }

    public function ctvis_liked_by_auth_user()
    {
        $id = Auth::id();
        $likers = array();
        
        foreach($this->ctvlike as $like):
            array_push($likers, $like->user_id);
        endforeach;

        if(in_array($id, $likers))
        {
            return true;
        }
    
        else
        {
            return false;
        }
    }
}
