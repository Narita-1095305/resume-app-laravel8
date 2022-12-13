<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Resume;
use App\Models\Education;
use App\Models\Work;
use App\Models\Licence;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create(); 
        Resume::factory(10)->create();
        Education::factory(10)->create();
        Work::factory(10)->create();
        Licence::factory(10)->create();
    }
}
