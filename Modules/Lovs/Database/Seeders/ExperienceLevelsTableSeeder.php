<?php

namespace Modules\Lovs\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Lovs\Repositories\LovInterface;

class ExperienceLevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $items = [
            [
                'name' => 'Beginner',
                'type' => 'experience-levels'
            ],
            [
                'name' => 'Intermediate',
                'type' => 'experience-levels'
            ],
            [
                'name' => 'Expert',
                'type' => 'experience-levels'
            ],
        ];

        foreach ($items as $item) {
            $lov_repo = app(LovInterface::class);
            $model = $lov_repo->getFirstBy('name', $item['name']);
            if (empty($model)) {
                $lov_repo->create($item);
            }
        }
    }
}
