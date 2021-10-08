<?php

namespace Modules\Lovs\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class LovsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(DisciplinesTableSeeder::class);
        $this->call(GradesTableSeeder::class);
        $this->call(DegreesTableSeeder::class);
        $this->call(ExperienceLevelsTableSeeder::class);
        $this->call(IndustriesTableSeeder::class);
    }
}
