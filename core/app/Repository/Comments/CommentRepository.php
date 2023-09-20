<?php
namespace App\Repository\Comments;

use App\Repository\BaseRepository;
use App\Models\Comment;

class CommentRepository extends BaseRepository implements CommentRepositoryContract{

    public function model(): string
    {
        return Comment::class;
    }
}
