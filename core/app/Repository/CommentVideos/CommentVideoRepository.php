<?php
namespace App\Repository\CommentVideos;

use App\Repository\BaseRepository;
use App\Models\CommentVideo;

class CommentVideoRepository extends BaseRepository implements CommentVideoRepositoryContract{

    public function model(): string
    {
        return CommentVideo::class;
    }
}
