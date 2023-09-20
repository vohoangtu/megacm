<?php
namespace App\Repository\Settings;

use App\Repository\BaseRepository;
use App\Models\Settings;

class SettingsRepository extends BaseRepository implements SettingsRepositoryContract{

    public function model(): string
    {
        return Settings::class;
    }
}
