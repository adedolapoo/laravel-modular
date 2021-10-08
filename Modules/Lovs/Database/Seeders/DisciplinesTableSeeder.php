<?php

namespace Modules\Lovs\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Lovs\Repositories\LovInterface;

class DisciplinesTableSeeder extends Seeder
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
                'name' => 'Discipline One',
                'type' => 'discipline'
            ],
            [
                'name' => 'Discipline Two',
                'type' => 'discipline'
            ],
            [
                'name' => 'Discipline Three',
                'type' => 'discipline'
            ]
        ];
        foreach($items as $item){
            $lov_repo = app(LovInterface::class);
            $model = $lov_repo->getFirstBy('name',$item['name']);
            if(empty($model)){
                $lov_repo->create($item);
            }
        }
    }
}
