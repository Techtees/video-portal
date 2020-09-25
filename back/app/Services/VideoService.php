<?php

namespace App\Services;

use App\Video;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class VideoService
{
    public function index()
    {
        return Video::orderBy('id', 'desc')->paginate(15);
    }

    public function create(array $data)
    {
        return Video::create($data);
    }

    public function find(int $video_id)
    {
        return Video::find($video_id);
    }

    public function update(int $video_id, array $data)
    {
        return Video::where('id', $video_id)->update($data);
    }  

    public function destroy(int $video_id)
    {
        return Video::find($video_id)->delete();
    }
}