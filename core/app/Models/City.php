<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class City extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    public const TABLE = "cities";

    public const NAME = "name";

    public const SLUG = "slug";

    public const TYPE = "type";

    public const NAME_WITH_TYPE = "name_with_type";

    public const CODE = "code";

    public const order = "order";

    protected $fillable = [
        'name', 
        'slug', 
        'type', '
        name_with_type', 
        'code', 
        'order'
    ];

    protected $visible = [
        'id', 'name', 'name_with_type'
    ];

    public function districts(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(District::class);
    }
}
