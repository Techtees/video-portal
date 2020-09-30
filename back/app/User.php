<?php

namespace App;

use App\Video;
use App\Comment;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'photo'
    ];

    protected $appends = [
        'encoded_Id', 'first_name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * 
     * Getters
     */
    public function getFirstNameAttribute()
    {
        return substr($this->name, 0, 5);
    }

    public function getEncodedIdAttribute()
    {
        return encodeId($this->id);
    }

    public function getPhotoAttribute($value)
    {
        return url('media/'.$value);
    }

    /**
    * user has many video
    */
    public function video()
    {
        return $this->hasMany(Video::class);
    }

    /**
    * user has many Comment
    */
    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
