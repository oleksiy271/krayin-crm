<?php

namespace Webkul\Installer\Database\Seeders\Core;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @param  array  $parameters
     * @return void
     */
    public function run($parameters = [])
    {
        DB::table('countries')->delete();

        $countries = json_decode(file_get_contents(__DIR__.'/../../../Data/countries.json'), true);

        DB::table('countries')->insert($countries);
    }
}