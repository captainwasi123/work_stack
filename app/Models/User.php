<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $table = 'tbl_users_info';

    public static function addUser(array $data)
    {
        $l = new User;
        $l->first_name = $data['first_name'];
        $l->last_name = $data['last_name'];
        $l->email = $data['email'];
        $l->phone = $data['phone'];
        $l->password = bcrypt($data['password']);
        $l->address = $data['address'];
        $l->postcode = $data['postcode'];
        $l->userType = $data['userType'] = '1';
        $l->status = $data['status'] = '1';
        $l->save();
    }

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
}
