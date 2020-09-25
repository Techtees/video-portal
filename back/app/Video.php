<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
    use SoftDeletes;
        
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'source', 'user_id', 'video', 'title', 'description', 'reference'
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
    * Affliate belongs to  User
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
