<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CtvLike extends Model
{
    use HasFactory;
    protected $table = "ctv_likes";

    public function post()
    {
        return $this->belongsTo('App\Models\CtvPost', 'post_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
