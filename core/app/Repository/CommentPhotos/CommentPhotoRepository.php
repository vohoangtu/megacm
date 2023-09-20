<?php
namespace App\Repository\CommentPhotos;

use App\Repository\BaseRepository;
use App\Models\CommentPhoto;

class CommentPhotoRepository extends BaseRepository implements CommentPhotoRepositoryContract{

    public function model(): string
    {
        return CommentPhoto::class;
    }
}
