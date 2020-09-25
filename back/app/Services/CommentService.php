<?php

namespace App\Services;

use App\Comment;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class CommentService
{
    public function index()
    {
        return Comment::orderBy('id', 'desc')->paginate(15);
    }

    public function create(array $data)
    {
        return Comment::create($data);
    }

    public function find(int $comment_id)
    {
        return Comment::find($comment_id);
    }

    public function update(int $comment_id, array $data)
    {
        return Comment::where('id', $comment_id)->update($data);
    }  

    public function destroy(int $comment_id)
    {
        return Comment::find($comment_id)->delete();
    }
}