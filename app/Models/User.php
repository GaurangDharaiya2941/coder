<?php

namespace App\Models;

use Illuminate\Support\Str;
use Laravel\Scout\Searchable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, Searchable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'role',
        'password',
        'token_id',
        'token_key',
        'social_type',
        'avatar',
        'google_id',
        'facebook_id',
        'twitter_id',
        'instagram_id',
        'googlePlus_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // $user->createToken('MyApp')->accessToken; using passport generate api token
    public function getAll()
    {
        return static::all();
    }

    public function findUser($id)
    {
        return static::find($id);
    }

    public function deleteUser($id)
    {
        return static::find($id)->delete();
    }

    public static function makeRandomToken()
    {
        $token = '';
        do {
            $token = Str::random(10);
        } while(self::where('token_id','=', $token)->first() instanceof self);

        return $token;
    }

    public static function makeRandomTokenKey()
    {
        $token_key = '';
        do {
            $token_key = Str::random(32);
        } while(self::where('token_key','=', $token_key)->first() instanceof self);

        return $token_key;
    }
}
