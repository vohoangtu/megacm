<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Ward extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = ['name', 'slug', 'type', 'name_with_type', 'code' , 'path', 'path_with_type', 'parent_code'];

    protected $visible = [
        'id', 'name', 'name_with_type', 'path_with_type', 'district_id'
    ];

    public function district(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(District::class);
    }

}
