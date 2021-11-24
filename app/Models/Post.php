<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = 
    [
        'category_id',
        'name',
        'content',
        'count_like',
        'view',
        'image',
        'location',
        'price',
        'count_favorite',
        'type',
        'status'
    ];
    protected $table = "posts";

    public function comment()
    {
        return $this->hasMany('App\Models\Comment', 'post_id', 'id');
    }

    public function like()
    {
        return $this->hasMany('App\Models\Like', 'post_id', 'id');
    }

    public function is_liked_by_auth_user()
    {
        $id = Auth::id();
        $likers = array();
        
        foreach($this->like as $like):
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
