<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class District extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = ['name', 'slug', 'type', 'name_with_type', 'code' , 'path', 'path_with_type', 'parent_code'];

    protected $visible = [
        'id', 'name', 'name_with_type', 'path_with_type', 'city_id'
    ];

    protected $with = ['wards', 'city'];

    public function city(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function wards(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Ward::class);
    }
}
