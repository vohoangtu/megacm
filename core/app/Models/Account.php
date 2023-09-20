<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Account extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    
    public const TABLE = "accounts";

    public const ID = "id";

    public const USERNAME = "username";

    public const PASSWORD = "password";

    public const EMAIL = "email";

    public const FIRSTNAME = "firstname";

    public const LASTNAME = "lastname";

    public const EMAIL_VERIFIED_AT = "email_verified_at";

    public const JOB_POSITION = "job_position";

    public const JOB_AT_COMPANY = "job_at_company";

    public const COMPANY_ID = "company_id";

    public const REMEMBER_TOKEN = "remember_token";

    protected $table = self::TABLE;

    protected $fillable = [
        self::ID,
        self::USERNAME,
        self::PASSWORD,
        self::EMAIL,
        self::FIRSTNAME,
        self::LASTNAME,
        self::JOB_POSITION,
        self::JOB_AT_COMPANY,
        self::COMPANY_ID
    ];

    protected $hidden = [
        self::PASSWORD,
        self::REMEMBER_TOKEN
    ];

    protected $casts = [
        self::EMAIL_VERIFIED_AT => 'datetime',
        self::PASSWORD => 'hashed',
    ];
}
