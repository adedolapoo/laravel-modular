<?php

namespace Modules\Lovs\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Lovs\Repositories\LovInterface;

class IndustriesTableSeeder extends Seeder
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
                'name' => 'Fast-Moving Consumer Goods',
                'type' => 'industries'
            ],
            [
                'name' => 'Financial Services',
                'type' => 'industries'
            ],
            [
                'name' => 'Power',
                'type' => 'industries'
            ],
            [
                'name' => 'Public Sector',
                'type' => 'industries'
            ],
            [
                'name' => 'Telecommunication',
                'type' => 'industries'
            ],
            [
                'name' => 'Oil and Gas',
                'type' => 'industries'
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
