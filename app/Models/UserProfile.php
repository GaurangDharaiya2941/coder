<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $table = 'user_profiles';

    protected $fillable = [
        'user_id',
        'follows',
        'followers',
        'friends',
        'pages',
        'groups',
        'blogs',
        'posts',
        'profile_likes',
        'cover_image'
    ];

    public $timestamps = true;
}
