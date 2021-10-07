<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $table = 'user_details';

    protected $fillable = [
        'user_id',
        'dob',
        'post',
        'education',
        'greadute',
        'post_greduate',
        'skill',
        'hobby',
        'school',
        'other_school',
        'collage',
        'post_collage',
        'address',
        'city',
        'pincode',
        'state',
        'country',
        'other_address',
        'other_city',
        'other_state',
        'other_pincode',
        'other_country',
    ];

    protected $guarded = [
        'skill'
    ];

    public $timestamps = true;
}
