<?php

namespace Modules\States\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class StatesDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('states')->truncate();

        $states = array(
            array(
                'id' => 1,// row #0
                'name'       => 'Federal Capital Territory',
                'country_id' => 172,
                'geo_zone'   => 4,
            ),
            array(
                'id' => 2,// row #1
                'name'       => 'Abia',
                'country_id' => 172,
                'geo_zone'   => 1,
            ),
            array(
                'id' => 3,// row #
                'name'       => 'Adamawa',
                'country_id' => 172,
                'geo_zone'   => 5,
            ),
            array(
                'id' => 4,// row #3
                'name'       => 'Akwa Ibom',
                'country_id' => 172,
                'geo_zone'   => 2,
            ),
            array(
                'id' => 5,// row #4
                'name'       => 'Anambra',
                'country_id' => 172,
                'geo_zone'   => 1,
            ),
            array(
                'id' => 6,// row #5
                'name'       => 'Bauchi',
                'country_id' => 172,
                'geo_zone'   => 5,
            ),
            array(
                'id' => 7,// row #6
                'name'       => 'Bayelsa',
                'country_id' => 172,
                'geo_zone'   => 2,
            ),
            array(
                'id' => 8,// row #7
                'name'       => 'Benue',
                'country_id' => 172,
                'geo_zone'   => 4,
            ),
            array(
                'id' => 9,// row #8
                'name'       => 'Bornu',
                'country_id' => 172,
                'geo_zone'   => 5,
            ),
            array(
                'id' => 10,// row #9
                'name'       => 'Cross River ',
                'country_id' => 172,
                'geo_zone'   => 2,
            ),
            array(
                'id' => 11,// row #10
                'name'       => 'Delta',
                'country_id' => 172,
                'geo_zone'   => 2,
            ),
            array(
                'id' => 12,// row #11
                'name'       => 'Ebonyi ',
                'country_id' => 172,
                'geo_zone'   => 1,
            ),
            array(
                'id' => 13,// row #12
                'name'       => 'Edo',
                'country_id' => 172,
                'geo_zone'   => 2,
            ),
            array(
                'id' => 14,// row #13
                'name'       => 'Ekiti',
                'country_id' => 172,
                'geo_zone'   => 3,
            ),
            array(
                'id' => 15,// row #14
                'name'       => 'Enugu',
                'country_id' => 172,
                'geo_zone'   => 1,
            ),
            array(
                'id' => 16,// row #15
                'name'       => 'mbe',
                'country_id' => 172,
                'geo_zone'   => 5,
            ),
            array(
                'id' => 17,// row #16
                'name'       => 'Imo',
                'country_id' => 172,
                'geo_zone'   => 1,
            ),
            array(
                'id' => 18,// row #17
                'name'       => 'Jigawa',
                'country_id' => 172,
                'geo_zone'   => 6,
            ),
            array(
                'id' => 19,// row #18
                'name'       => 'Kaduna',
                'country_id' => 172,
                'geo_zone'   => 6,
            ),
            array(
                'id' => 20,// row #19
                'name'       => 'Kano',
                'country_id' => 172,
                'geo_zone'   => 6,
            ),
            array(
                'id' => 21,// row #20
                'name'       => 'Katsina',
                'country_id' => 172,
                'geo_zone'   => 6,
            ),
            array(
                'id' => 22,// row #21
                'name'       => 'Kebbi',
                'country_id' => 172,
                'geo_zone'   => 6,
            ),
            array(
                'id' => 23,// row #2
                'name'       => 'Kogi',
                'country_id' => 172,
                'geo_zone'   => 4,
            ),
            array(
                'id' => 24,// row #23
                'name'       => 'Kwara',
                'country_id' => 172,
                'geo_zone'   => 4,
            ),
            array(
                'id' => 25,// row #24
                'name'       => 'Lagos',
                'country_id' => 172,
                'geo_zone'   => 3,
            ),
            array(
                'id' => 26,// row #25
                'name'       => 'Nasarawa',
                'country_id' => 172,
                'geo_zone'   => 4,
            ),
            array(
                'id' => 27,// row #26
                'name'       => 'Niger',
                'country_id' => 172,
                'geo_zone'   => 4,
            ),
            array(
                'id' => 28,// row #27
                'name'       => 'Ogun',
                'country_id' => 172,
                'geo_zone'   => 3,
            ),
            array(
                'id' => 29,// row #28
                'name'       => 'Ondo',
                'country_id' => 172,
                'geo_zone'   => 3,
            ),
            array(
                'id' => 30,// row #29
                'name'       => 'Osun',
                'country_id' => 172,
                'geo_zone'   => 3,
            ),
            array(
                'id' => 31,// row #30
                'name'       => 'Oyo',
                'country_id' => 172,
                'geo_zone'   => 3,
            ),
            array(
                'id' => 32,// row #31
                'name'       => 'Plateau',
                'country_id' => 172,
                'geo_zone'   => 4,
            ),
            array(
                'id' => 33,// row #32
                'name'       => 'Rivers',
                'country_id' => 172,
                'geo_zone'   => 2,
            ),
            array(
                'id' => 34,// row #33
                'name'       => 'Sokoto',
                'country_id' => 172,
                'geo_zone'   => 6,
            ),
            array(
                'id' => 35,// row #34
                'name'       => 'Taraba',
                'country_id' => 172,
                'geo_zone'   => 5,
            ),
            array(
                'id' => 36,// row #35
                'name'       => 'Yobe',
                'country_id' => 172,
                'geo_zone'   => 5,
            ),
            array(
                'id' => 37,// row #36
                'name'       => 'Zamfara',
                'country_id' => 172,
                'geo_zone'   => 6,
            ),
        );
        DB::table('states')->insert($states);
    }
}
