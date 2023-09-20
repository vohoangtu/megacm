<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;
use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    public function run(){
        $countries = json_decode(file_get_contents(resource_path("data/countries.json")), true);
        DB::table('countries')->insert($countries);
    }
}