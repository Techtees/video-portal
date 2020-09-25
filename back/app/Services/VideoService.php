<?php

namespace App\Services;

use App\Video;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class VideoService
{
    public function index()
    {
        return Video::orderBy('id', 'desc')->get();
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

    public function recommendedVideos()
    {
        $videosCount = count(Video::orderBy('id','asc')->get());
        if($videosCount < 6){
            $data = Video::orderBy('id','asc')->get()->random($videosCount);
        }else {
            $data = Video::orderBy('id','asc')->get()->random(6);
        }

        return $data;
    }

    public function upNext()
    {
        $videosCount = count(Video::orderBy('id','asc')->get());
        if($videosCount < 3){
            $data = Video::orderBy('id','asc')->get()->random($videosCount);
        }else {
            $data = Video::orderBy('id','asc')->get()->random(3);
        }

        return $data;
    }

    public function findUserVideos(int $user_id)
    {
        return Video::where('user_id', $user_id)->orderBy('id', 'desc')->get();
    }
}