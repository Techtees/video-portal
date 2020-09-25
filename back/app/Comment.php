<?php

namespace App;

use App\User;
use App\Video;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;
        
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'video_id', 'comment', 'video'
    ];

    protected $appends = [
        'encoded_Id'
    ];

    /**
     * Getters
     */
    public function getEncodedIdAttribute()
    {
        return encodeId($this->id);
    }

    /**
    * Comment belongs to  User
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
    * Comment belongs to  video
    */
    public function video()
    {
        return $this->belongsTo(Video::class);
    }
}
