<?php

namespace Modules\Lcds\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LcdsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('lcds')->truncate();

        $lcds = array(
            array( // row #0
                'id' => 1,
                'name' => 'Gwagwalada ',
                'state_id' => 1,
            ),
            array( // row #1
                'id' => 2,
                'name' => 'Kuje ',
                'state_id' => 1,
            ),
            array( // row #2
                'id' => 3,
                'name' => ' Abaji ',
                'state_id' => 1,
            ),
            array( // row #3
                'id' => 4,
                'name' => ' Abuja Municipal ',
                'state_id' => 1,
            ),
            array( // row #4
                'id' => 5,
                'name' => ' Bwari ',
                'state_id' => 1,
            ),
            array( // row #5
                'id' => 6,
                'name' => ' Kwali',
                'state_id' => 1,
            ),
            array( // row #6
                'id' => 7,
                'name' => 'Aba North ',
                'state_id' => 2,
            ),
            array( // row #7
                'id' => 8,
                'name' => 'Aba South ',
                'state_id' => 2,
            ),
            array( // row #8
                'id' => 9,
                'name' => ' Arochukwu ',
                'state_id' => 2,
            ),
            array( // row #9
                'id' => 10,
                'name' => ' Bende ',
                'state_id' => 2,
            ),
            array( // row #10
                'id' => 11,
                'name' => ' Ikwuano ',
                'state_id' => 2,
            ),
            array( // row #11
                'id' => 12,
                'name' => ' Isiala-Ngwa North ',
                'state_id' => 2,
            ),
            array( // row #12
                'id' => 13,
                'name' => ' Isiala-Ngwa South ',
                'state_id' => 2,
            ),
            array( // row #13
                'id' => 14,
                'name' => ' Isuikwato ',
                'state_id' => 2,
            ),
            array( // row #14
                'id' => 15,
                'name' => ' Obi Nwa ',
                'state_id' => 2,
            ),
            array( // row #15
                'id' => 16,
                'name' => ' Ohafia ',
                'state_id' => 2,
            ),
            array( // row #16
                'id' => 17,
                'name' => ' Osisioma ',
                'state_id' => 2,
            ),
            array( // row #17
                'id' => 18,
                'name' => ' Ngwa ',
                'state_id' => 2,
            ),
            array( // row #18
                'id' => 19,
                'name' => ' Ugwunagbo ',
                'state_id' => 2,
            ),
            array( // row #19
                'id' => 20,
                'name' => ' Ukwa East ',
                'state_id' => 2,
            ),
            array( // row #20
                'id' => 21,
                'name' => ' Ukwa West ',
                'state_id' => 2,
            ),
            array( // row #21
                'id' => 22,
                'name' => ' Umuahia North ',
                'state_id' => 2,
            ),
            array( // row #22
                'id' => 23,
                'name' => ' Umuahia South ',
                'state_id' => 2,
            ),
            array( // row #23
                'id' => 24,
                'name' => ' Umu-Neochi',
                'state_id' => 2,
            ),
            array( // row #24
                'id' => 25,
                'name' => 'Demsa ',
                'state_id' => 3,
            ),
            array( // row #25
                'id' => 26,
                'name' => 'Fufore ',
                'state_id' => 3,
            ),
            array( // row #26
                'id' => 27,
                'name' => 'Ganaye ',
                'state_id' => 3,
            ),
            array( // row #27
                'id' => 28,
                'name' => 'Gireri ',
                'state_id' => 3,
            ),
            array( // row #28
                'id' => 29,
                'name' => 'mbi ',
                'state_id' => 3,
            ),
            array( // row #29
                'id' => 30,
                'name' => 'Guyuk ',
                'state_id' => 3,
            ),
            array( // row #30
                'id' => 31,
                'name' => 'Hong ',
                'state_id' => 3,
            ),
            array( // row #31
                'id' => 32,
                'name' => 'Jada ',
                'state_id' => 3,
            ),
            array( // row #32
                'id' => 33,
                'name' => 'Lamurde ',
                'state_id' => 3,
            ),
            array( // row #33
                'id' => 34,
                'name' => 'Madagali ',
                'state_id' => 3,
            ),
            array( // row #34
                'id' => 35,
                'name' => 'Maiha  ',
                'state_id' => 3,
            ),
            array( // row #35
                'id' => 36,
                'name' => 'Mayo-Belwa ',
                'state_id' => 3,
            ),
            array( // row #36
                'id' => 37,
                'name' => 'Michika ',
                'state_id' => 3,
            ),
            array( // row #37
                'id' => 38,
                'name' => 'Mubi North ',
                'state_id' => 3,
            ),
            array( // row #38
                'id' => 39,
                'name' => 'Mubi South ',
                'state_id' => 3,
            ),
            array( // row #39
                'id' => 40,
                'name' => 'Numan ',
                'state_id' => 3,
            ),
            array( // row #40
                'id' => 41,
                'name' => 'Shelleng ',
                'state_id' => 3,
            ),
            array( // row #41
                'id' => 42,
                'name' => 'Song ',
                'state_id' => 3,
            ),
            array( // row #42
                'id' => 43,
                'name' => 'Toun ',
                'state_id' => 3,
            ),
            array( // row #43
                'id' => 44,
                'name' => 'Yola North ',
                'state_id' => 3,
            ),
            array( // row #44
                'id' => 45,
                'name' => 'Yola South',
                'state_id' => 3,
            ),
            array( // row #45
                'id' => 46,
                'name' => 'Abak ',
                'state_id' => 4,
            ),
            array( // row #46
                'id' => 47,
                'name' => 'Eastern Obolo ',
                'state_id' => 4,
            ),
            array( // row #47
                'id' => 48,
                'name' => 'Eket ',
                'state_id' => 4,
            ),
            array( // row #48
                'id' => 49,
                'name' => 'Esit Eket ',
                'state_id' => 4,
            ),
            array( // row #49
                'id' => 50,
                'name' => 'Essien Udim ',
                'state_id' => 4,
            ),
            array( // row #50
                'id' => 51,
                'name' => 'Etim Ekpo ',
                'state_id' => 4,
            ),
            array( // row #51
                'id' => 52,
                'name' => 'Etinan ',
                'state_id' => 4,
            ),
            array( // row #52
                'id' => 53,
                'name' => 'Ibeno ',
                'state_id' => 4,
            ),
            array( // row #53
                'id' => 54,
                'name' => 'Ibesikpo Asutan ',
                'state_id' => 4,
            ),
            array( // row #54
                'id' => 55,
                'name' => 'Ibiono Ibom ',
                'state_id' => 4,
            ),
            array( // row #55
                'id' => 56,
                'name' => 'Ika ',
                'state_id' => 4,
            ),
            array( // row #56
                'id' => 57,
                'name' => 'Ikono ',
                'state_id' => 4,
            ),
            array( // row #57
                'id' => 58,
                'name' => 'Ikot Abasi ',
                'state_id' => 4,
            ),
            array( // row #58
                'id' => 59,
                'name' => 'Ikot Ekpene ',
                'state_id' => 4,
            ),
            array( // row #59
                'id' => 60,
                'name' => 'Ini ',
                'state_id' => 4,
            ),
            array( // row #60
                'id' => 61,
                'name' => 'Itu ',
                'state_id' => 4,
            ),
            array( // row #61
                'id' => 62,
                'name' => 'Mbo ',
                'state_id' => 4,
            ),
            array( // row #62
                'id' => 63,
                'name' => 'Mkpat Enin ',
                'state_id' => 4,
            ),
            array( // row #63
                'id' => 64,
                'name' => 'Nsit Atai ',
                'state_id' => 4,
            ),
            array( // row #64
                'id' => 65,
                'name' => 'Nsit Ibom ',
                'state_id' => 4,
            ),
            array( // row #65
                'id' => 66,
                'name' => 'Nsit Ubium ',
                'state_id' => 4,
            ),
            array( // row #66
                'id' => 67,
                'name' => 'Obot Akara ',
                'state_id' => 4,
            ),
            array( // row #67
                'id' => 68,
                'name' => 'Okobo ',
                'state_id' => 4,
            ),
            array( // row #68
                'id' => 69,
                'name' => 'Onna ',
                'state_id' => 4,
            ),
            array( // row #69
                'id' => 70,
                'name' => 'Oron  ',
                'state_id' => 4,
            ),
            array( // row #70
                'id' => 71,
                'name' => 'Oruk Anam ',
                'state_id' => 4,
            ),
            array( // row #71
                'id' => 72,
                'name' => 'Udung Uko ',
                'state_id' => 4,
            ),
            array( // row #72
                'id' => 73,
                'name' => 'Ukanafun ',
                'state_id' => 4,
            ),
            array( // row #73
                'id' => 74,
                'name' => 'Uruan ',
                'state_id' => 4,
            ),
            array( // row #74
                'id' => 75,
                'name' => 'Urue-Offong/Oruko ',
                'state_id' => 4,
            ),
            array( // row #75
                'id' => 76,
                'name' => 'Uyo',
                'state_id' => 4,
            ),
            array( // row #76
                'id' => 77,
                'name' => 'Aguata ',
                'state_id' => 5,
            ),
            array( // row #77
                'id' => 78,
                'name' => 'Anambra East ',
                'state_id' => 5,
            ),
            array( // row #78
                'id' => 79,
                'name' => 'Anambra West ',
                'state_id' => 5,
            ),
            array( // row #79
                'id' => 80,
                'name' => 'Anaocha ',
                'state_id' => 5,
            ),
            array( // row #80
                'id' => 81,
                'name' => 'Awka North ',
                'state_id' => 5,
            ),
            array( // row #81
                'id' => 82,
                'name' => 'Awka South ',
                'state_id' => 5,
            ),
            array( // row #82
                'id' => 83,
                'name' => 'Ayamelum ',
                'state_id' => 5,
            ),
            array( // row #83
                'id' => 84,
                'name' => 'Dunukofia ',
                'state_id' => 5,
            ),
            array( // row #84
                'id' => 85,
                'name' => 'Ekwusi ',
                'state_id' => 5,
            ),
            array( // row #85
                'id' => 86,
                'name' => 'Idemili North ',
                'state_id' => 5,
            ),
            array( // row #86
                'id' => 87,
                'name' => 'Idemili South ',
                'state_id' => 5,
            ),
            array( // row #87
                'id' => 88,
                'name' => 'Ihiala ',
                'state_id' => 5,
            ),
            array( // row #88
                'id' => 89,
                'name' => 'Njikoka ',
                'state_id' => 5,
            ),
            array( // row #89
                'id' => 90,
                'name' => 'Nnewi North ',
                'state_id' => 5,
            ),
            array( // row #90
                'id' => 91,
                'name' => 'Nnewi South ',
                'state_id' => 5,
            ),
            array( // row #91
                'id' => 92,
                'name' => 'Ogbaru ',
                'state_id' => 5,
            ),
            array( // row #92
                'id' => 93,
                'name' => 'Onitsha North ',
                'state_id' => 5,
            ),
            array( // row #93
                'id' => 94,
                'name' => 'Onitsha South ',
                'state_id' => 5,
            ),
            array( // row #94
                'id' => 95,
                'name' => 'Orumba North ',
                'state_id' => 5,
            ),
            array( // row #95
                'id' => 96,
                'name' => 'Orumba South ',
                'state_id' => 5,
            ),
            array( // row #96
                'id' => 97,
                'name' => 'Oyi ',
                'state_id' => 5,
            ),
            array( // row #97
                'id' => 98,
                'name' => 'Alkaleri ',
                'state_id' => 6,
            ),
            array( // row #98
                'id' => 99,
                'name' => 'Bauchi ',
                'state_id' => 6,
            ),
            array( // row #99
                'id' => 100,
                'name' => 'Boro ',
                'state_id' => 6,
            ),
            array( // row #100
                'id' => 101,
                'name' => 'Damban ',
                'state_id' => 6,
            ),
            array( // row #101
                'id' => 102,
                'name' => 'Darazo ',
                'state_id' => 6,
            ),
            array( // row #102
                'id' => 103,
                'name' => 'Dass ',
                'state_id' => 6,
            ),
            array( // row #103
                'id' => 104,
                'name' => 'Ganjuwa ',
                'state_id' => 6,
            ),
            array( // row #104
                'id' => 105,
                'name' => 'Giade ',
                'state_id' => 6,
            ),
            array( // row #105
                'id' => 106,
                'name' => 'Itas/Gadau ',
                'state_id' => 6,
            ),
            array( // row #106
                'id' => 107,
                'name' => 'Jama\'are ',
                'state_id' => 6,
            ),
            array( // row #107
                'id' => 108,
                'name' => 'Katagum ',
                'state_id' => 6,
            ),
            array( // row #108
                'id' => 109,
                'name' => 'Kirfi ',
                'state_id' => 6,
            ),
            array( // row #109
                'id' => 110,
                'name' => 'Misau ',
                'state_id' => 6,
            ),
            array( // row #110
                'id' => 111,
                'name' => 'Ningi ',
                'state_id' => 6,
            ),
            array( // row #111
                'id' => 112,
                'name' => 'Shira ',
                'state_id' => 6,
            ),
            array( // row #112
                'id' => 113,
                'name' => 'Tafawa-Balewa ',
                'state_id' => 6,
            ),
            array( // row #113
                'id' => 114,
                'name' => 'Toro ',
                'state_id' => 6,
            ),
            array( // row #114
                'id' => 115,
                'name' => 'Warji ',
                'state_id' => 6,
            ),
            array( // row #115
                'id' => 116,
                'name' => 'Zaki ',
                'state_id' => 6,
            ),
            array( // row #116
                'id' => 117,
                'name' => 'Brass ',
                'state_id' => 7,
            ),
            array( // row #117
                'id' => 118,
                'name' => 'Ekeremor ',
                'state_id' => 7,
            ),
            array( // row #118
                'id' => 119,
                'name' => 'Kolokuma/Opokuma ',
                'state_id' => 7,
            ),
            array( // row #119
                'id' => 120,
                'name' => 'Nembe ',
                'state_id' => 7,
            ),
            array( // row #120
                'id' => 121,
                'name' => 'Ogbia ',
                'state_id' => 7,
            ),
            array( // row #121
                'id' => 122,
                'name' => 'Sagbama ',
                'state_id' => 7,
            ),
            array( // row #122
                'id' => 123,
                'name' => 'Southern Jaw ',
                'state_id' => 7,
            ),
            array( // row #123
                'id' => 124,
                'name' => 'Yenagoa',
                'state_id' => 7,
            ),
            array( // row #124
                'id' => 125,
                'name' => 'Ado ',
                'state_id' => 8,
            ),
            array( // row #125
                'id' => 126,
                'name' => 'Agatu ',
                'state_id' => 8,
            ),
            array( // row #126
                'id' => 127,
                'name' => 'Apa ',
                'state_id' => 8,
            ),
            array( // row #127
                'id' => 128,
                'name' => 'Buruku ',
                'state_id' => 8,
            ),
            array( // row #128
                'id' => 129,
                'name' => 'Gboko ',
                'state_id' => 8,
            ),
            array( // row #129
                'id' => 130,
                'name' => 'Guma ',
                'state_id' => 8,
            ),
            array( // row #130
                'id' => 131,
                'name' => 'Gwer East ',
                'state_id' => 8,
            ),
            array( // row #131
                'id' => 132,
                'name' => 'Gwer West ',
                'state_id' => 8,
            ),
            array( // row #132
                'id' => 133,
                'name' => 'Katsina-Ala ',
                'state_id' => 8,
            ),
            array( // row #133
                'id' => 134,
                'name' => 'Konshisha ',
                'state_id' => 8,
            ),
            array( // row #134
                'id' => 135,
                'name' => 'Kwande ',
                'state_id' => 8,
            ),
            array( // row #135
                'id' => 136,
                'name' => 'Lo ',
                'state_id' => 8,
            ),
            array( // row #136
                'id' => 137,
                'name' => 'Makurdi ',
                'state_id' => 8,
            ),
            array( // row #137
                'id' => 138,
                'name' => 'Obi ',
                'state_id' => 8,
            ),
            array( // row #138
                'id' => 139,
                'name' => 'Ogbadibo ',
                'state_id' => 8,
            ),
            array( // row #139
                'id' => 140,
                'name' => 'Oju ',
                'state_id' => 8,
            ),
            array( // row #140
                'id' => 141,
                'name' => 'Okpokwu ',
                'state_id' => 8,
            ),
            array( // row #141
                'id' => 142,
                'name' => 'Ohimini ',
                'state_id' => 8,
            ),
            array( // row #142
                'id' => 143,
                'name' => 'Oturkpo ',
                'state_id' => 8,
            ),
            array( // row #143
                'id' => 144,
                'name' => 'Tarka ',
                'state_id' => 8,
            ),
            array( // row #144
                'id' => 145,
                'name' => 'Ukum ',
                'state_id' => 8,
            ),
            array( // row #145
                'id' => 146,
                'name' => 'Ushon ',
                'state_id' => 8,
            ),
            array( // row #146
                'id' => 147,
                'name' => 'Vandeikya ',
                'state_id' => 8,
            ),
            array( // row #147
                'id' => 148,
                'name' => 'Abadam ',
                'state_id' => 9,
            ),
            array( // row #148
                'id' => 149,
                'name' => 'Askira/Uba ',
                'state_id' => 9,
            ),
            array( // row #149
                'id' => 150,
                'name' => 'Bama ',
                'state_id' => 9,
            ),
            array( // row #150
                'id' => 151,
                'name' => 'Bayo ',
                'state_id' => 9,
            ),
            array( // row #151
                'id' => 152,
                'name' => 'Biu ',
                'state_id' => 9,
            ),
            array( // row #152
                'id' => 153,
                'name' => 'Chibok ',
                'state_id' => 9,
            ),
            array( // row #153
                'id' => 154,
                'name' => 'Damboa ',
                'state_id' => 9,
            ),
            array( // row #154
                'id' => 155,
                'name' => 'Dikwa ',
                'state_id' => 9,
            ),
            array( // row #155
                'id' => 156,
                'name' => 'Gubio ',
                'state_id' => 9,
            ),
            array( // row #156
                'id' => 157,
                'name' => 'Guzamala ',
                'state_id' => 9,
            ),
            array( // row #157
                'id' => 158,
                'name' => 'Gwoza ',
                'state_id' => 9,
            ),
            array( // row #158
                'id' => 159,
                'name' => 'Hawul ',
                'state_id' => 9,
            ),
            array( // row #159
                'id' => 160,
                'name' => 'Jere ',
                'state_id' => 9,
            ),
            array( // row #160
                'id' => 161,
                'name' => 'Kaga ',
                'state_id' => 9,
            ),
            array( // row #161
                'id' => 162,
                'name' => 'Kala/Balge ',
                'state_id' => 9,
            ),
            array( // row #162
                'id' => 163,
                'name' => 'Konduga ',
                'state_id' => 9,
            ),
            array( // row #163
                'id' => 164,
                'name' => 'Kukawa ',
                'state_id' => 9,
            ),
            array( // row #164
                'id' => 165,
                'name' => 'Kwaya Kusar ',
                'state_id' => 9,
            ),
            array( // row #165
                'id' => 166,
                'name' => 'Mafa ',
                'state_id' => 9,
            ),
            array( // row #166
                'id' => 167,
                'name' => 'Magumeri ',
                'state_id' => 9,
            ),
            array( // row #167
                'id' => 168,
                'name' => 'Maiduguri ',
                'state_id' => 9,
            ),
            array( // row #168
                'id' => 169,
                'name' => 'Marte ',
                'state_id' => 9,
            ),
            array( // row #169
                'id' => 170,
                'name' => 'Mobbar ',
                'state_id' => 9,
            ),
            array( // row #170
                'id' => 171,
                'name' => 'Monguno ',
                'state_id' => 9,
            ),
            array( // row #171
                'id' => 172,
                'name' => 'Ngala ',
                'state_id' => 9,
            ),
            array( // row #172
                'id' => 173,
                'name' => 'Nganzai ',
                'state_id' => 9,
            ),
            array( // row #173
                'id' => 174,
                'name' => 'Shani ',
                'state_id' => 9,
            ),
            array( // row #174
                'id' => 175,
                'name' => 'Akpabuyo ',
                'state_id' => 10,
            ),
            array( // row #175
                'id' => 176,
                'name' => 'Odukpani ',
                'state_id' => 10,
            ),
            array( // row #176
                'id' => 177,
                'name' => 'Akamkpa ',
                'state_id' => 10,
            ),
            array( // row #177
                'id' => 178,
                'name' => 'Biase ',
                'state_id' => 10,
            ),
            array( // row #178
                'id' => 179,
                'name' => 'Abi ',
                'state_id' => 10,
            ),
            array( // row #179
                'id' => 180,
                'name' => 'Ikom ',
                'state_id' => 10,
            ),
            array( // row #180
                'id' => 181,
                'name' => 'Yarkur ',
                'state_id' => 10,
            ),
            array( // row #181
                'id' => 182,
                'name' => 'Odubra ',
                'state_id' => 10,
            ),
            array( // row #182
                'id' => 183,
                'name' => 'Boki ',
                'state_id' => 10,
            ),
            array( // row #183
                'id' => 184,
                'name' => 'Oja ',
                'state_id' => 10,
            ),
            array( // row #184
                'id' => 185,
                'name' => 'Yala ',
                'state_id' => 10,
            ),
            array( // row #185
                'id' => 186,
                'name' => 'Obanliku ',
                'state_id' => 10,
            ),
            array( // row #186
                'id' => 187,
                'name' => 'Obudu ',
                'state_id' => 10,
            ),
            array( // row #187
                'id' => 188,
                'name' => 'Calabar South ',
                'state_id' => 10,
            ),
            array( // row #188
                'id' => 189,
                'name' => 'Etung ',
                'state_id' => 10,
            ),
            array( // row #189
                'id' => 190,
                'name' => 'Bekwara ',
                'state_id' => 10,
            ),
            array( // row #190
                'id' => 191,
                'name' => 'Bakassi ',
                'state_id' => 10,
            ),
            array( // row #191
                'id' => 192,
                'name' => 'Calabar Municipality',
                'state_id' => 10,
            ),
            array( // row #192
                'id' => 193,
                'name' => 'Oshimili ',
                'state_id' => 11,
            ),
            array( // row #193
                'id' => 194,
                'name' => 'Aniocha ',
                'state_id' => 11,
            ),
            array( // row #194
                'id' => 195,
                'name' => 'Aniocha South ',
                'state_id' => 11,
            ),
            array( // row #195
                'id' => 196,
                'name' => 'Ika South ',
                'state_id' => 11,
            ),
            array( // row #196
                'id' => 197,
                'name' => 'Ika North-East ',
                'state_id' => 11,
            ),
            array( // row #197
                'id' => 198,
                'name' => 'Ndokwa West ',
                'state_id' => 11,
            ),
            array( // row #198
                'id' => 199,
                'name' => 'Ndokwa East ',
                'state_id' => 11,
            ),
            array( // row #199
                'id' => 200,
                'name' => 'Isoko South ',
                'state_id' => 11,
            ),
            array( // row #200
                'id' => 201,
                'name' => 'Isoko North ',
                'state_id' => 11,
            ),
            array( // row #201
                'id' => 202,
                'name' => 'Bomadi ',
                'state_id' => 11,
            ),
            array( // row #202
                'id' => 203,
                'name' => 'Burutu ',
                'state_id' => 11,
            ),
            array( // row #203
                'id' => 204,
                'name' => 'Ughelli South ',
                'state_id' => 11,
            ),
            array( // row #204
                'id' => 205,
                'name' => 'Ughelli North ',
                'state_id' => 11,
            ),
            array( // row #205
                'id' => 206,
                'name' => 'Ethiope West ',
                'state_id' => 11,
            ),
            array( // row #206
                'id' => 207,
                'name' => 'Ethiope East ',
                'state_id' => 11,
            ),
            array( // row #207
                'id' => 208,
                'name' => 'Sapele ',
                'state_id' => 11,
            ),
            array( // row #208
                'id' => 209,
                'name' => 'Okpe ',
                'state_id' => 11,
            ),
            array( // row #209
                'id' => 210,
                'name' => 'Warri North ',
                'state_id' => 11,
            ),
            array( // row #210
                'id' => 211,
                'name' => 'Warri South ',
                'state_id' => 11,
            ),
            array( // row #211
                'id' => 212,
                'name' => 'Uvwie ',
                'state_id' => 11,
            ),
            array( // row #212
                'id' => 213,
                'name' => 'Udu ',
                'state_id' => 11,
            ),
            array( // row #213
                'id' => 214,
                'name' => 'Warri Central ',
                'state_id' => 11,
            ),
            array( // row #214
                'id' => 215,
                'name' => 'Ukwani ',
                'state_id' => 11,
            ),
            array( // row #215
                'id' => 216,
                'name' => 'Oshimili North ',
                'state_id' => 11,
            ),
            array( // row #216
                'id' => 217,
                'name' => 'Patani',
                'state_id' => 11,
            ),
            array( // row #217
                'id' => 218,
                'name' => 'Afikpo South ',
                'state_id' => 12,
            ),
            array( // row #218
                'id' => 219,
                'name' => 'Afikpo North ',
                'state_id' => 12,
            ),
            array( // row #219
                'id' => 220,
                'name' => 'Onicha ',
                'state_id' => 12,
            ),
            array( // row #220
                'id' => 221,
                'name' => 'Ohaozara ',
                'state_id' => 12,
            ),
            array( // row #221
                'id' => 222,
                'name' => 'Abakaliki ',
                'state_id' => 12,
            ),
            array( // row #222
                'id' => 223,
                'name' => 'Ishielu ',
                'state_id' => 12,
            ),
            array( // row #223
                'id' => 224,
                'name' => 'lkwo ',
                'state_id' => 12,
            ),
            array( // row #224
                'id' => 225,
                'name' => 'Ezza ',
                'state_id' => 12,
            ),
            array( // row #225
                'id' => 226,
                'name' => 'Ezza South ',
                'state_id' => 12,
            ),
            array( // row #226
                'id' => 227,
                'name' => 'Ohaukwu ',
                'state_id' => 12,
            ),
            array( // row #227
                'id' => 228,
                'name' => 'Ebonyi ',
                'state_id' => 12,
            ),
            array( // row #228
                'id' => 229,
                'name' => 'Ivo ',
                'state_id' => 12,
            ),
            array( // row #229
                'id' => 230,
                'name' => 'Esan North-East ',
                'state_id' => 13,
            ),
            array( // row #230
                'id' => 231,
                'name' => 'Esan Central ',
                'state_id' => 13,
            ),
            array( // row #231
                'id' => 232,
                'name' => 'Esan West ',
                'state_id' => 13,
            ),
            array( // row #232
                'id' => 233,
                'name' => 'Er ',
                'state_id' => 13,
            ),
            array( // row #233
                'id' => 234,
                'name' => 'Ukpoba ',
                'state_id' => 13,
            ),
            array( // row #234
                'id' => 235,
                'name' => 'Central ',
                'state_id' => 13,
            ),
            array( // row #235
                'id' => 236,
                'name' => 'Etsako Central ',
                'state_id' => 13,
            ),
            array( // row #236
                'id' => 237,
                'name' => 'Igueben ',
                'state_id' => 13,
            ),
            array( // row #237
                'id' => 238,
                'name' => 'Oredo ',
                'state_id' => 13,
            ),
            array( // row #238
                'id' => 239,
                'name' => 'Ovia SouthWest ',
                'state_id' => 13,
            ),
            array( // row #239
                'id' => 240,
                'name' => 'Ovia South-East ',
                'state_id' => 13,
            ),
            array( // row #240
                'id' => 241,
                'name' => 'Orhionwon ',
                'state_id' => 13,
            ),
            array( // row #241
                'id' => 242,
                'name' => 'Uhunmwonde ',
                'state_id' => 13,
            ),
            array( // row #242
                'id' => 243,
                'name' => 'Etsako East  ',
                'state_id' => 13,
            ),
            array( // row #243
                'id' => 244,
                'name' => 'Esan South-East ',
                'state_id' => 13,
            ),
            array( // row #244
                'id' => 245,
                'name' => 'Ado ',
                'state_id' => 14,
            ),
            array( // row #245
                'id' => 246,
                'name' => 'Ekiti-East ',
                'state_id' => 14,
            ),
            array( // row #246
                'id' => 247,
                'name' => 'Ekiti-West  ',
                'state_id' => 14,
            ),
            array( // row #247
                'id' => 248,
                'name' => 'Emure/Ise/Orun ',
                'state_id' => 14,
            ),
            array( // row #248
                'id' => 249,
                'name' => 'Ekiti South-West ',
                'state_id' => 14,
            ),
            array( // row #249
                'id' => 250,
                'name' => 'Ikare ',
                'state_id' => 14,
            ),
            array( // row #250
                'id' => 251,
                'name' => 'Irepodun ',
                'state_id' => 14,
            ),
            array( // row #251
                'id' => 252,
                'name' => 'Ijero,  ',
                'state_id' => 14,
            ),
            array( // row #252
                'id' => 253,
                'name' => 'Ido/Osi ',
                'state_id' => 14,
            ),
            array( // row #253
                'id' => 254,
                'name' => 'Oye ',
                'state_id' => 14,
            ),
            array( // row #254
                'id' => 255,
                'name' => 'Ikole ',
                'state_id' => 14,
            ),
            array( // row #255
                'id' => 256,
                'name' => 'Moba ',
                'state_id' => 14,
            ),
            array( // row #256
                'id' => 257,
                'name' => 'Gbonyin ',
                'state_id' => 14,
            ),
            array( // row #257
                'id' => 258,
                'name' => 'Efon ',
                'state_id' => 14,
            ),
            array( // row #258
                'id' => 259,
                'name' => 'Ise/Orun  ',
                'state_id' => 14,
            ),
            array( // row #259
                'id' => 260,
                'name' => 'Ilejemeje.',
                'state_id' => 14,
            ),
            array( // row #260
                'id' => 261,
                'name' => 'Enugu South,  ',
                'state_id' => 15,
            ),
            array( // row #261
                'id' => 262,
                'name' => 'Igbo-Eze South ',
                'state_id' => 15,
            ),
            array( // row #262
                'id' => 263,
                'name' => 'Enugu North ',
                'state_id' => 15,
            ),
            array( // row #263
                'id' => 264,
                'name' => 'Nkanu ',
                'state_id' => 15,
            ),
            array( // row #264
                'id' => 265,
                'name' => 'Udi Agwu ',
                'state_id' => 15,
            ),
            array( // row #265
                'id' => 266,
                'name' => 'Oji-River ',
                'state_id' => 15,
            ),
            array( // row #266
                'id' => 267,
                'name' => 'Ezeagu ',
                'state_id' => 15,
            ),
            array( // row #267
                'id' => 268,
                'name' => 'IgboEze North ',
                'state_id' => 15,
            ),
            array( // row #268
                'id' => 269,
                'name' => 'Isi-Uzo ',
                'state_id' => 15,
            ),
            array( // row #269
                'id' => 270,
                'name' => 'Nsukka ',
                'state_id' => 15,
            ),
            array( // row #270
                'id' => 271,
                'name' => 'Igbo-Ekiti ',
                'state_id' => 15,
            ),
            array( // row #271
                'id' => 272,
                'name' => 'Uzo-Uwani ',
                'state_id' => 15,
            ),
            array( // row #272
                'id' => 273,
                'name' => 'Enugu Eas ',
                'state_id' => 15,
            ),
            array( // row #273
                'id' => 274,
                'name' => 'Aninri ',
                'state_id' => 15,
            ),
            array( // row #274
                'id' => 275,
                'name' => 'Nkanu East ',
                'state_id' => 15,
            ),
            array( // row #275
                'id' => 276,
                'name' => 'Udenu. ',
                'state_id' => 15,
            ),
            array( // row #276
                'id' => 277,
                'name' => 'Akko ',
                'state_id' => 16,
            ),
            array( // row #277
                'id' => 278,
                'name' => 'Balanga ',
                'state_id' => 16,
            ),
            array( // row #278
                'id' => 279,
                'name' => 'Billiri ',
                'state_id' => 16,
            ),
            array( // row #279
                'id' => 280,
                'name' => 'Dukku ',
                'state_id' => 16,
            ),
            array( // row #280
                'id' => 281,
                'name' => 'Kaltun ',
                'state_id' => 16,
            ),
            array( // row #281
                'id' => 282,
                'name' => 'Kwami ',
                'state_id' => 16,
            ),
            array( // row #282
                'id' => 283,
                'name' => 'Shomm ',
                'state_id' => 16,
            ),
            array( // row #283
                'id' => 284,
                'name' => 'Funakaye ',
                'state_id' => 16,
            ),
            array( // row #284
                'id' => 285,
                'name' => 'mbe ',
                'state_id' => 16,
            ),
            array( // row #285
                'id' => 286,
                'name' => 'Nafada/Bajoga  ',
                'state_id' => 16,
            ),
            array( // row #286
                'id' => 287,
                'name' => 'Yamaltu/Delta. ',
                'state_id' => 16,
            ),
            array( // row #287
                'id' => 288,
                'name' => 'Aboh-Mbaise ',
                'state_id' => 17,
            ),
            array( // row #288
                'id' => 289,
                'name' => 'Ahiazu-Mbaise ',
                'state_id' => 17,
            ),
            array( // row #289
                'id' => 290,
                'name' => 'Ehime-Mbano ',
                'state_id' => 17,
            ),
            array( // row #290
                'id' => 291,
                'name' => 'Ezinihitte ',
                'state_id' => 17,
            ),
            array( // row #291
                'id' => 292,
                'name' => 'Ideato North ',
                'state_id' => 17,
            ),
            array( // row #292
                'id' => 293,
                'name' => 'Ideato South ',
                'state_id' => 17,
            ),
            array( // row #293
                'id' => 294,
                'name' => 'Ihitte/Uboma ',
                'state_id' => 17,
            ),
            array( // row #294
                'id' => 295,
                'name' => 'Ikeduru ',
                'state_id' => 17,
            ),
            array( // row #295
                'id' => 296,
                'name' => 'Isiala Mbano ',
                'state_id' => 17,
            ),
            array( // row #296
                'id' => 297,
                'name' => 'Isu ',
                'state_id' => 17,
            ),
            array( // row #297
                'id' => 298,
                'name' => 'Mbaitoli ',
                'state_id' => 17,
            ),
            array( // row #298
                'id' => 299,
                'name' => 'Mbaitoli ',
                'state_id' => 17,
            ),
            array( // row #299
                'id' => 300,
                'name' => 'Nr-Okpala ',
                'state_id' => 17,
            ),
            array( // row #300
                'id' => 301,
                'name' => 'Njaba ',
                'state_id' => 17,
            ),
            array( // row #301
                'id' => 302,
                'name' => 'Nwangele ',
                'state_id' => 17,
            ),
            array( // row #302
                'id' => 303,
                'name' => 'Nkwerre ',
                'state_id' => 17,
            ),
            array( // row #303
                'id' => 304,
                'name' => 'Obowo ',
                'state_id' => 17,
            ),
            array( // row #304
                'id' => 305,
                'name' => 'Oguta ',
                'state_id' => 17,
            ),
            array( // row #305
                'id' => 306,
                'name' => 'Ohaji/Egbema ',
                'state_id' => 17,
            ),
            array( // row #306
                'id' => 307,
                'name' => 'Okigwe ',
                'state_id' => 17,
            ),
            array( // row #307
                'id' => 308,
                'name' => 'Orlu ',
                'state_id' => 17,
            ),
            array( // row #308
                'id' => 309,
                'name' => 'Orsu ',
                'state_id' => 17,
            ),
            array( // row #309
                'id' => 310,
                'name' => 'Oru East ',
                'state_id' => 17,
            ),
            array( // row #310
                'id' => 311,
                'name' => 'Oru West ',
                'state_id' => 17,
            ),
            array( // row #311
                'id' => 312,
                'name' => 'Owerri-Municipal ',
                'state_id' => 17,
            ),
            array( // row #312
                'id' => 313,
                'name' => 'Owerri North ',
                'state_id' => 17,
            ),
            array( // row #313
                'id' => 314,
                'name' => 'Owerri West ',
                'state_id' => 17,
            ),
            array( // row #314
                'id' => 315,
                'name' => 'Auyo ',
                'state_id' => 18,
            ),
            array( // row #315
                'id' => 316,
                'name' => 'Babura ',
                'state_id' => 18,
            ),
            array( // row #316
                'id' => 317,
                'name' => 'Birni Kudu ',
                'state_id' => 18,
            ),
            array( // row #317
                'id' => 318,
                'name' => 'Biriniwa ',
                'state_id' => 18,
            ),
            array( // row #318
                'id' => 319,
                'name' => 'Buji ',
                'state_id' => 18,
            ),
            array( // row #319
                'id' => 320,
                'name' => 'Dutse ',
                'state_id' => 18,
            ),
            array( // row #320
                'id' => 321,
                'name' => 'Gagarawa ',
                'state_id' => 18,
            ),
            array( // row #321
                'id' => 322,
                'name' => 'Garki ',
                'state_id' => 18,
            ),
            array( // row #322
                'id' => 323,
                'name' => 'Gumel ',
                'state_id' => 18,
            ),
            array( // row #323
                'id' => 324,
                'name' => 'Guri ',
                'state_id' => 18,
            ),
            array( // row #324
                'id' => 325,
                'name' => 'Gwaram ',
                'state_id' => 18,
            ),
            array( // row #325
                'id' => 326,
                'name' => 'Gwiwa ',
                'state_id' => 18,
            ),
            array( // row #326
                'id' => 327,
                'name' => 'Hadejia ',
                'state_id' => 18,
            ),
            array( // row #327
                'id' => 328,
                'name' => 'Jahun ',
                'state_id' => 18,
            ),
            array( // row #328
                'id' => 329,
                'name' => 'Kafin Hausa ',
                'state_id' => 18,
            ),
            array( // row #329
                'id' => 330,
                'name' => 'Kaugama Kazaure ',
                'state_id' => 18,
            ),
            array( // row #330
                'id' => 331,
                'name' => 'Kiri Kasamma ',
                'state_id' => 18,
            ),
            array( // row #331
                'id' => 332,
                'name' => 'Kiyawa ',
                'state_id' => 18,
            ),
            array( // row #332
                'id' => 333,
                'name' => 'Maigatari ',
                'state_id' => 18,
            ),
            array( // row #333
                'id' => 334,
                'name' => 'Malam Madori ',
                'state_id' => 18,
            ),
            array( // row #334
                'id' => 335,
                'name' => 'Miga ',
                'state_id' => 18,
            ),
            array( // row #335
                'id' => 336,
                'name' => 'Ringim ',
                'state_id' => 18,
            ),
            array( // row #336
                'id' => 337,
                'name' => 'Roni ',
                'state_id' => 18,
            ),
            array( // row #337
                'id' => 338,
                'name' => 'Sule-Tankarkar ',
                'state_id' => 18,
            ),
            array( // row #338
                'id' => 339,
                'name' => 'Taura  ',
                'state_id' => 18,
            ),
            array( // row #339
                'id' => 340,
                'name' => 'Yankwashi ',
                'state_id' => 18,
            ),
            array( // row #340
                'id' => 341,
                'name' => 'Birni-Gwari ',
                'state_id' => 19,
            ),
            array( // row #341
                'id' => 342,
                'name' => 'Chikun ',
                'state_id' => 19,
            ),
            array( // row #342
                'id' => 343,
                'name' => 'Giwa ',
                'state_id' => 19,
            ),
            array( // row #343
                'id' => 344,
                'name' => 'Igabi ',
                'state_id' => 19,
            ),
            array( // row #344
                'id' => 345,
                'name' => 'Ikara ',
                'state_id' => 19,
            ),
            array( // row #345
                'id' => 346,
                'name' => 'jaba ',
                'state_id' => 19,
            ),
            array( // row #346
                'id' => 347,
                'name' => 'Jema\'a ',
                'state_id' => 19,
            ),
            array( // row #347
                'id' => 348,
                'name' => 'Kachia ',
                'state_id' => 19,
            ),
            array( // row #348
                'id' => 349,
                'name' => 'Kaduna North ',
                'state_id' => 19,
            ),
            array( // row #349
                'id' => 350,
                'name' => 'Kaduna South ',
                'state_id' => 19,
            ),
            array( // row #350
                'id' => 351,
                'name' => 'Kagarko ',
                'state_id' => 19,
            ),
            array( // row #351
                'id' => 352,
                'name' => 'Kajuru ',
                'state_id' => 19,
            ),
            array( // row #352
                'id' => 353,
                'name' => 'Kaura ',
                'state_id' => 19,
            ),
            array( // row #353
                'id' => 354,
                'name' => 'Kauru ',
                'state_id' => 19,
            ),
            array( // row #354
                'id' => 355,
                'name' => 'Kubau ',
                'state_id' => 19,
            ),
            array( // row #355
                'id' => 356,
                'name' => 'Kudan ',
                'state_id' => 19,
            ),
            array( // row #356
                'id' => 357,
                'name' => 'Lere ',
                'state_id' => 19,
            ),
            array( // row #357
                'id' => 358,
                'name' => 'Makarfi ',
                'state_id' => 19,
            ),
            array( // row #358
                'id' => 359,
                'name' => 'Sabon-Gari ',
                'state_id' => 19,
            ),
            array( // row #359
                'id' => 360,
                'name' => 'Sanga ',
                'state_id' => 19,
            ),
            array( // row #360
                'id' => 361,
                'name' => 'Soba ',
                'state_id' => 19,
            ),
            array( // row #361
                'id' => 362,
                'name' => 'Zan-Kataf ',
                'state_id' => 19,
            ),
            array( // row #362
                'id' => 363,
                'name' => 'Zaria ',
                'state_id' => 19,
            ),
            array( // row #363
                'id' => 364,
                'name' => 'Ajingi ',
                'state_id' => 20,
            ),
            array( // row #364
                'id' => 365,
                'name' => 'Albasu ',
                'state_id' => 20,
            ),
            array( // row #365
                'id' => 366,
                'name' => 'Bagwai ',
                'state_id' => 20,
            ),
            array( // row #366
                'id' => 367,
                'name' => 'Bebeji ',
                'state_id' => 20,
            ),
            array( // row #367
                'id' => 368,
                'name' => 'Bichi ',
                'state_id' => 20,
            ),
            array( // row #368
                'id' => 369,
                'name' => 'Bunkure ',
                'state_id' => 20,
            ),
            array( // row #369
                'id' => 370,
                'name' => 'Dala ',
                'state_id' => 20,
            ),
            array( // row #370
                'id' => 371,
                'name' => 'Dambatta ',
                'state_id' => 20,
            ),
            array( // row #371
                'id' => 372,
                'name' => 'Dawakin Kudu ',
                'state_id' => 20,
            ),
            array( // row #372
                'id' => 373,
                'name' => 'Dawakin Tofa ',
                'state_id' => 20,
            ),
            array( // row #373
                'id' => 374,
                'name' => 'Doguwa ',
                'state_id' => 20,
            ),
            array( // row #374
                'id' => 375,
                'name' => 'Fagge ',
                'state_id' => 20,
            ),
            array( // row #375
                'id' => 376,
                'name' => 'Gabasawa ',
                'state_id' => 20,
            ),
            array( // row #376
                'id' => 377,
                'name' => 'Garko ',
                'state_id' => 20,
            ),
            array( // row #377
                'id' => 378,
                'name' => 'Garum ',
                'state_id' => 20,
            ),
            array( // row #378
                'id' => 379,
                'name' => 'Mallam ',
                'state_id' => 20,
            ),
            array( // row #379
                'id' => 380,
                'name' => 'Gaya ',
                'state_id' => 20,
            ),
            array( // row #380
                'id' => 381,
                'name' => 'Gezawa ',
                'state_id' => 20,
            ),
            array( // row #381
                'id' => 382,
                'name' => 'Gwale ',
                'state_id' => 20,
            ),
            array( // row #382
                'id' => 383,
                'name' => 'Gwarzo ',
                'state_id' => 20,
            ),
            array( // row #383
                'id' => 384,
                'name' => 'Kabo ',
                'state_id' => 20,
            ),
            array( // row #384
                'id' => 385,
                'name' => 'Kano Municipal ',
                'state_id' => 20,
            ),
            array( // row #385
                'id' => 386,
                'name' => 'Karaye ',
                'state_id' => 20,
            ),
            array( // row #386
                'id' => 387,
                'name' => 'Kibiya ',
                'state_id' => 20,
            ),
            array( // row #387
                'id' => 388,
                'name' => 'Kiru ',
                'state_id' => 20,
            ),
            array( // row #388
                'id' => 389,
                'name' => 'kumbotso ',
                'state_id' => 20,
            ),
            array( // row #389
                'id' => 390,
                'name' => 'Kunchi ',
                'state_id' => 20,
            ),
            array( // row #390
                'id' => 391,
                'name' => 'Kura ',
                'state_id' => 20,
            ),
            array( // row #391
                'id' => 392,
                'name' => 'Madobi ',
                'state_id' => 20,
            ),
            array( // row #392
                'id' => 393,
                'name' => 'Makoda ',
                'state_id' => 20,
            ),
            array( // row #393
                'id' => 394,
                'name' => 'Minjibir ',
                'state_id' => 20,
            ),
            array( // row #394
                'id' => 395,
                'name' => 'Nasarawa ',
                'state_id' => 20,
            ),
            array( // row #395
                'id' => 396,
                'name' => 'Rano ',
                'state_id' => 20,
            ),
            array( // row #396
                'id' => 397,
                'name' => 'Rimin Gado ',
                'state_id' => 20,
            ),
            array( // row #397
                'id' => 398,
                'name' => 'Ro ',
                'state_id' => 20,
            ),
            array( // row #398
                'id' => 399,
                'name' => 'Shanono ',
                'state_id' => 20,
            ),
            array( // row #399
                'id' => 400,
                'name' => 'Sumaila ',
                'state_id' => 20,
            ),
            array( // row #400
                'id' => 401,
                'name' => 'Takali ',
                'state_id' => 20,
            ),
            array( // row #401
                'id' => 402,
                'name' => 'Tarauni ',
                'state_id' => 20,
            ),
            array( // row #402
                'id' => 403,
                'name' => 'Tofa ',
                'state_id' => 20,
            ),
            array( // row #403
                'id' => 404,
                'name' => 'Tsanyawa ',
                'state_id' => 20,
            ),
            array( // row #404
                'id' => 405,
                'name' => 'Tudun Wada ',
                'state_id' => 20,
            ),
            array( // row #405
                'id' => 406,
                'name' => 'Un ',
                'state_id' => 20,
            ),
            array( // row #406
                'id' => 407,
                'name' => 'Warawa ',
                'state_id' => 20,
            ),
            array( // row #407
                'id' => 408,
                'name' => 'Wudil',
                'state_id' => 20,
            ),
            array( // row #408
                'id' => 409,
                'name' => 'Bakori ',
                'state_id' => 21,
            ),
            array( // row #409
                'id' => 410,
                'name' => 'Batagarawa ',
                'state_id' => 21,
            ),
            array( // row #410
                'id' => 411,
                'name' => 'Batsari ',
                'state_id' => 21,
            ),
            array( // row #411
                'id' => 412,
                'name' => 'Baure ',
                'state_id' => 21,
            ),
            array( // row #412
                'id' => 413,
                'name' => 'Bindawa ',
                'state_id' => 21,
            ),
            array( // row #413
                'id' => 414,
                'name' => 'Charanchi ',
                'state_id' => 21,
            ),
            array( // row #414
                'id' => 415,
                'name' => 'Dandume ',
                'state_id' => 21,
            ),
            array( // row #415
                'id' => 416,
                'name' => 'Danja ',
                'state_id' => 21,
            ),
            array( // row #416
                'id' => 417,
                'name' => 'Dan Musa ',
                'state_id' => 21,
            ),
            array( // row #417
                'id' => 418,
                'name' => 'Daura ',
                'state_id' => 21,
            ),
            array( // row #418
                'id' => 419,
                'name' => 'Dutsi ',
                'state_id' => 21,
            ),
            array( // row #419
                'id' => 420,
                'name' => 'Dutsin-Ma ',
                'state_id' => 21,
            ),
            array( // row #420
                'id' => 421,
                'name' => 'Faskari ',
                'state_id' => 21,
            ),
            array( // row #421
                'id' => 422,
                'name' => 'Funtua ',
                'state_id' => 21,
            ),
            array( // row #422
                'id' => 423,
                'name' => 'Ingawa ',
                'state_id' => 21,
            ),
            array( // row #423
                'id' => 424,
                'name' => 'Jibia ',
                'state_id' => 21,
            ),
            array( // row #424
                'id' => 425,
                'name' => 'Kafur ',
                'state_id' => 21,
            ),
            array( // row #425
                'id' => 426,
                'name' => 'Kaita ',
                'state_id' => 21,
            ),
            array( // row #426
                'id' => 427,
                'name' => 'Kankara ',
                'state_id' => 21,
            ),
            array( // row #427
                'id' => 428,
                'name' => 'Kankia ',
                'state_id' => 21,
            ),
            array( // row #428
                'id' => 429,
                'name' => 'Katsina ',
                'state_id' => 21,
            ),
            array( // row #429
                'id' => 430,
                'name' => 'Kurfi ',
                'state_id' => 21,
            ),
            array( // row #430
                'id' => 431,
                'name' => 'Kusada ',
                'state_id' => 21,
            ),
            array( // row #431
                'id' => 432,
                'name' => 'Mai\'Adua ',
                'state_id' => 21,
            ),
            array( // row #432
                'id' => 433,
                'name' => 'Malumfashi ',
                'state_id' => 21,
            ),
            array( // row #433
                'id' => 434,
                'name' => 'Mani ',
                'state_id' => 21,
            ),
            array( // row #434
                'id' => 435,
                'name' => 'Mashi ',
                'state_id' => 21,
            ),
            array( // row #435
                'id' => 436,
                'name' => 'Matazuu ',
                'state_id' => 21,
            ),
            array( // row #436
                'id' => 437,
                'name' => 'Musawa ',
                'state_id' => 21,
            ),
            array( // row #437
                'id' => 438,
                'name' => 'Rimi ',
                'state_id' => 21,
            ),
            array( // row #438
                'id' => 439,
                'name' => 'Sabuwa ',
                'state_id' => 21,
            ),
            array( // row #439
                'id' => 440,
                'name' => 'Safana ',
                'state_id' => 21,
            ),
            array( // row #440
                'id' => 441,
                'name' => 'Sandamu ',
                'state_id' => 21,
            ),
            array( // row #441
                'id' => 442,
                'name' => 'Zan ',
                'state_id' => 21,
            ),
            array( // row #442
                'id' => 443,
                'name' => 'Aleiro ',
                'state_id' => 22,
            ),
            array( // row #443
                'id' => 444,
                'name' => 'Arewa-Dandi ',
                'state_id' => 22,
            ),
            array( // row #444
                'id' => 445,
                'name' => 'Argungu ',
                'state_id' => 22,
            ),
            array( // row #445
                'id' => 446,
                'name' => 'Augie ',
                'state_id' => 22,
            ),
            array( // row #446
                'id' => 447,
                'name' => 'Bagudo ',
                'state_id' => 22,
            ),
            array( // row #447
                'id' => 448,
                'name' => 'Birnin Kebbi ',
                'state_id' => 22,
            ),
            array( // row #448
                'id' => 449,
                'name' => 'Bunza ',
                'state_id' => 22,
            ),
            array( // row #449
                'id' => 450,
                'name' => 'Dandi  ',
                'state_id' => 22,
            ),
            array( // row #450
                'id' => 451,
                'name' => 'Fakai ',
                'state_id' => 22,
            ),
            array( // row #451
                'id' => 452,
                'name' => 'Gwandu ',
                'state_id' => 22,
            ),
            array( // row #452
                'id' => 453,
                'name' => 'Jega ',
                'state_id' => 22,
            ),
            array( // row #453
                'id' => 454,
                'name' => 'Kal  ',
                'state_id' => 22,
            ),
            array( // row #454
                'id' => 455,
                'name' => 'Koko/Besse ',
                'state_id' => 22,
            ),
            array( // row #455
                'id' => 456,
                'name' => 'Maiyama ',
                'state_id' => 22,
            ),
            array( // row #456
                'id' => 457,
                'name' => 'Ngaski ',
                'state_id' => 22,
            ),
            array( // row #457
                'id' => 458,
                'name' => 'Sakaba ',
                'state_id' => 22,
            ),
            array( // row #458
                'id' => 459,
                'name' => 'Shanga ',
                'state_id' => 22,
            ),
            array( // row #459
                'id' => 460,
                'name' => 'Suru ',
                'state_id' => 22,
            ),
            array( // row #460
                'id' => 461,
                'name' => 'Wasagu/Danko ',
                'state_id' => 22,
            ),
            array( // row #461
                'id' => 462,
                'name' => 'Yauri ',
                'state_id' => 22,
            ),
            array( // row #462
                'id' => 463,
                'name' => 'Zuru ',
                'state_id' => 22,
            ),
            array( // row #463
                'id' => 464,
                'name' => 'Adavi ',
                'state_id' => 23,
            ),
            array( // row #464
                'id' => 465,
                'name' => 'Ajaokuta ',
                'state_id' => 23,
            ),
            array( // row #465
                'id' => 466,
                'name' => 'Ankpa ',
                'state_id' => 23,
            ),
            array( // row #466
                'id' => 467,
                'name' => 'Bassa ',
                'state_id' => 23,
            ),
            array( // row #467
                'id' => 468,
                'name' => 'Dekina ',
                'state_id' => 23,
            ),
            array( // row #468
                'id' => 469,
                'name' => 'Ibaji ',
                'state_id' => 23,
            ),
            array( // row #469
                'id' => 470,
                'name' => 'Idah ',
                'state_id' => 23,
            ),
            array( // row #470
                'id' => 471,
                'name' => 'Igalamela-Odolu ',
                'state_id' => 23,
            ),
            array( // row #471
                'id' => 472,
                'name' => 'Ijumu ',
                'state_id' => 23,
            ),
            array( // row #472
                'id' => 473,
                'name' => 'Kabba/Bunu ',
                'state_id' => 23,
            ),
            array( // row #473
                'id' => 474,
                'name' => 'Kogi ',
                'state_id' => 23,
            ),
            array( // row #474
                'id' => 475,
                'name' => 'Lokoja ',
                'state_id' => 23,
            ),
            array( // row #475
                'id' => 476,
                'name' => 'Mopa-Muro ',
                'state_id' => 23,
            ),
            array( // row #476
                'id' => 477,
                'name' => 'Ofu ',
                'state_id' => 23,
            ),
            array( // row #477
                'id' => 478,
                'name' => 'Ori/Mann ',
                'state_id' => 23,
            ),
            array( // row #478
                'id' => 479,
                'name' => 'Okehi ',
                'state_id' => 23,
            ),
            array( // row #479
                'id' => 480,
                'name' => 'Okene ',
                'state_id' => 23,
            ),
            array( // row #480
                'id' => 481,
                'name' => 'Olamabolo ',
                'state_id' => 23,
            ),
            array( // row #481
                'id' => 482,
                'name' => 'Omala ',
                'state_id' => 23,
            ),
            array( // row #482
                'id' => 483,
                'name' => 'Yagba East  ',
                'state_id' => 23,
            ),
            array( // row #483
                'id' => 484,
                'name' => 'Yagba West',
                'state_id' => 23,
            ),
            array( // row #484
                'id' => 485,
                'name' => 'Asa ',
                'state_id' => 24,
            ),
            array( // row #485
                'id' => 486,
                'name' => 'Baruten ',
                'state_id' => 24,
            ),
            array( // row #486
                'id' => 487,
                'name' => 'Edu ',
                'state_id' => 24,
            ),
            array( // row #487
                'id' => 488,
                'name' => 'Ekiti ',
                'state_id' => 24,
            ),
            array( // row #488
                'id' => 489,
                'name' => 'Ifelodun ',
                'state_id' => 24,
            ),
            array( // row #489
                'id' => 490,
                'name' => 'Ilorin East ',
                'state_id' => 24,
            ),
            array( // row #490
                'id' => 491,
                'name' => 'Ilorin West ',
                'state_id' => 24,
            ),
            array( // row #491
                'id' => 492,
                'name' => 'Irepodun ',
                'state_id' => 24,
            ),
            array( // row #492
                'id' => 493,
                'name' => 'Isin ',
                'state_id' => 24,
            ),
            array( // row #493
                'id' => 494,
                'name' => 'Kaiama ',
                'state_id' => 24,
            ),
            array( // row #494
                'id' => 495,
                'name' => 'Moro ',
                'state_id' => 24,
            ),
            array( // row #495
                'id' => 496,
                'name' => 'Offa ',
                'state_id' => 24,
            ),
            array( // row #496
                'id' => 497,
                'name' => 'Oke-Ero ',
                'state_id' => 24,
            ),
            array( // row #497
                'id' => 498,
                'name' => 'Oyun ',
                'state_id' => 24,
            ),
            array( // row #498
                'id' => 499,
                'name' => 'Pategi ',
                'state_id' => 24,
            ),
            array( // row #499
                'id' => 500,
                'name' => 'Agege ',
                'state_id' => 25,
            ),
            array( // row #500
                'id' => 501,
                'name' => 'Ajeromi-Ifelodun ',
                'state_id' => 25,
            ),
            array( // row #501
                'id' => 502,
                'name' => 'Alimosho ',
                'state_id' => 25,
            ),
            array( // row #502
                'id' => 503,
                'name' => 'Amuwo-Odofin ',
                'state_id' => 25,
            ),
            array( // row #503
                'id' => 504,
                'name' => 'Apapa ',
                'state_id' => 25,
            ),
            array( // row #504
                'id' => 505,
                'name' => 'Badagry ',
                'state_id' => 25,
            ),
            array( // row #505
                'id' => 506,
                'name' => 'Epe ',
                'state_id' => 25,
            ),
            array( // row #506
                'id' => 507,
                'name' => 'Eti-Osa ',
                'state_id' => 25,
            ),
            array( // row #507
                'id' => 508,
                'name' => 'Ibeju/Lekki ',
                'state_id' => 25,
            ),
            array( // row #508
                'id' => 509,
                'name' => 'Ifako-Ijaye  ',
                'state_id' => 25,
            ),
            array( // row #509
                'id' => 510,
                'name' => 'Ikeja ',
                'state_id' => 25,
            ),
            array( // row #510
                'id' => 511,
                'name' => 'Ikorodu ',
                'state_id' => 25,
            ),
            array( // row #511
                'id' => 512,
                'name' => 'Kosofe ',
                'state_id' => 25,
            ),
            array( // row #512
                'id' => 513,
                'name' => 'Las Island ',
                'state_id' => 25,
            ),
            array( // row #513
                'id' => 514,
                'name' => 'Las Mainland ',
                'state_id' => 25,
            ),
            array( // row #514
                'id' => 515,
                'name' => 'Mushin ',
                'state_id' => 25,
            ),
            array( // row #515
                'id' => 516,
                'name' => 'Ojo ',
                'state_id' => 25,
            ),
            array( // row #516
                'id' => 517,
                'name' => 'Oshodi-Isolo ',
                'state_id' => 25,
            ),
            array( // row #517
                'id' => 518,
                'name' => 'Shomolu ',
                'state_id' => 25,
            ),
            array( // row #518
                'id' => 519,
                'name' => 'Surulere',
                'state_id' => 25,
            ),
            array( // row #519
                'id' => 520,
                'name' => 'Akwanga ',
                'state_id' => 26,
            ),
            array( // row #520
                'id' => 521,
                'name' => 'Awe ',
                'state_id' => 26,
            ),
            array( // row #521
                'id' => 522,
                'name' => 'Doma ',
                'state_id' => 26,
            ),
            array( // row #522
                'id' => 523,
                'name' => 'Karu ',
                'state_id' => 26,
            ),
            array( // row #523
                'id' => 524,
                'name' => 'Keana ',
                'state_id' => 26,
            ),
            array( // row #524
                'id' => 525,
                'name' => 'Keffi ',
                'state_id' => 26,
            ),
            array( // row #525
                'id' => 526,
                'name' => 'Kokona ',
                'state_id' => 26,
            ),
            array( // row #526
                'id' => 527,
                'name' => 'Lafia ',
                'state_id' => 26,
            ),
            array( // row #527
                'id' => 528,
                'name' => 'Nasarawa ',
                'state_id' => 26,
            ),
            array( // row #528
                'id' => 529,
                'name' => 'Nasarawa-Egn ',
                'state_id' => 26,
            ),
            array( // row #529
                'id' => 530,
                'name' => 'Obi ',
                'state_id' => 26,
            ),
            array( // row #530
                'id' => 531,
                'name' => 'Toto ',
                'state_id' => 26,
            ),
            array( // row #531
                'id' => 532,
                'name' => 'Wamba ',
                'state_id' => 26,
            ),
            array( // row #532
                'id' => 533,
                'name' => 'Agaie ',
                'state_id' => 27,
            ),
            array( // row #533
                'id' => 534,
                'name' => 'Agwara ',
                'state_id' => 27,
            ),
            array( // row #534
                'id' => 535,
                'name' => 'Bida ',
                'state_id' => 27,
            ),
            array( // row #535
                'id' => 536,
                'name' => 'Borgu ',
                'state_id' => 27,
            ),
            array( // row #536
                'id' => 537,
                'name' => 'Bosso ',
                'state_id' => 27,
            ),
            array( // row #537
                'id' => 538,
                'name' => 'Chanchaga ',
                'state_id' => 27,
            ),
            array( // row #538
                'id' => 539,
                'name' => 'Edati ',
                'state_id' => 27,
            ),
            array( // row #539
                'id' => 540,
                'name' => 'Gbako ',
                'state_id' => 27,
            ),
            array( // row #540
                'id' => 541,
                'name' => 'Gurara ',
                'state_id' => 27,
            ),
            array( // row #541
                'id' => 542,
                'name' => 'Katcha ',
                'state_id' => 27,
            ),
            array( // row #542
                'id' => 543,
                'name' => 'Kontara  ',
                'state_id' => 27,
            ),
            array( // row #543
                'id' => 544,
                'name' => 'Lapai ',
                'state_id' => 27,
            ),
            array( // row #544
                'id' => 545,
                'name' => 'Lavun ',
                'state_id' => 27,
            ),
            array( // row #545
                'id' => 546,
                'name' => 'Magama ',
                'state_id' => 27,
            ),
            array( // row #546
                'id' => 547,
                'name' => 'Mariga ',
                'state_id' => 27,
            ),
            array( // row #547
                'id' => 548,
                'name' => 'Mashegu ',
                'state_id' => 27,
            ),
            array( // row #548
                'id' => 549,
                'name' => 'Mokwa ',
                'state_id' => 27,
            ),
            array( // row #549
                'id' => 550,
                'name' => 'Muya ',
                'state_id' => 27,
            ),
            array( // row #550
                'id' => 551,
                'name' => 'Pailoro ',
                'state_id' => 27,
            ),
            array( // row #551
                'id' => 552,
                'name' => 'Rafi ',
                'state_id' => 27,
            ),
            array( // row #552
                'id' => 553,
                'name' => 'Rijau ',
                'state_id' => 27,
            ),
            array( // row #553
                'id' => 554,
                'name' => 'Shiroro ',
                'state_id' => 27,
            ),
            array( // row #554
                'id' => 555,
                'name' => 'Suleja ',
                'state_id' => 27,
            ),
            array( // row #555
                'id' => 556,
                'name' => 'Tafa ',
                'state_id' => 27,
            ),
            array( // row #556
                'id' => 557,
                'name' => 'Wushishi',
                'state_id' => 27,
            ),
            array( // row #557
                'id' => 558,
                'name' => 'Abeokuta North ',
                'state_id' => 28,
            ),
            array( // row #558
                'id' => 559,
                'name' => 'Abeokuta South ',
                'state_id' => 28,
            ),
            array( // row #559
                'id' => 560,
                'name' => 'Ado-Odo/Ota ',
                'state_id' => 28,
            ),
            array( // row #560
                'id' => 561,
                'name' => 'Egbado North ',
                'state_id' => 28,
            ),
            array( // row #561
                'id' => 562,
                'name' => 'Egbado South ',
                'state_id' => 28,
            ),
            array( // row #562
                'id' => 563,
                'name' => 'Ewekoro ',
                'state_id' => 28,
            ),
            array( // row #563
                'id' => 564,
                'name' => 'Ifo ',
                'state_id' => 28,
            ),
            array( // row #564
                'id' => 565,
                'name' => 'Ijebu East ',
                'state_id' => 28,
            ),
            array( // row #565
                'id' => 566,
                'name' => 'Ijebu North ',
                'state_id' => 28,
            ),
            array( // row #566
                'id' => 567,
                'name' => 'Ijebu North East ',
                'state_id' => 28,
            ),
            array( // row #567
                'id' => 568,
                'name' => 'Ijebu Ode ',
                'state_id' => 28,
            ),
            array( // row #568
                'id' => 569,
                'name' => 'Ikenne ',
                'state_id' => 28,
            ),
            array( // row #569
                'id' => 570,
                'name' => 'Imeko-Afon ',
                'state_id' => 28,
            ),
            array( // row #570
                'id' => 571,
                'name' => 'Ipokia ',
                'state_id' => 28,
            ),
            array( // row #571
                'id' => 572,
                'name' => 'Obafemi-Owode ',
                'state_id' => 28,
            ),
            array( // row #572
                'id' => 573,
                'name' => 'Ogun Waterside ',
                'state_id' => 28,
            ),
            array( // row #573
                'id' => 574,
                'name' => 'Odeda ',
                'state_id' => 28,
            ),
            array( // row #574
                'id' => 575,
                'name' => 'Odogbolu ',
                'state_id' => 28,
            ),
            array( // row #575
                'id' => 576,
                'name' => 'Remo North ',
                'state_id' => 28,
            ),
            array( // row #576
                'id' => 577,
                'name' => 'Shagamu',
                'state_id' => 28,
            ),
            array( // row #577
                'id' => 578,
                'name' => 'Akoko North East ',
                'state_id' => 29,
            ),
            array( // row #578
                'id' => 579,
                'name' => 'Akoko North West ',
                'state_id' => 29,
            ),
            array( // row #579
                'id' => 580,
                'name' => 'Akoko South Akure East ',
                'state_id' => 29,
            ),
            array( // row #580
                'id' => 581,
                'name' => 'Akoko South West ',
                'state_id' => 29,
            ),
            array( // row #581
                'id' => 582,
                'name' => 'Akure North ',
                'state_id' => 29,
            ),
            array( // row #582
                'id' => 583,
                'name' => 'Akure South ',
                'state_id' => 29,
            ),
            array( // row #583
                'id' => 584,
                'name' => 'Ese-Odo ',
                'state_id' => 29,
            ),
            array( // row #584
                'id' => 585,
                'name' => 'Idanre ',
                'state_id' => 29,
            ),
            array( // row #585
                'id' => 586,
                'name' => 'Ifedore ',
                'state_id' => 29,
            ),
            array( // row #586
                'id' => 587,
                'name' => 'Ilaje ',
                'state_id' => 29,
            ),
            array( // row #587
                'id' => 588,
                'name' => 'Ile-Oluji ',
                'state_id' => 29,
            ),
            array( // row #588
                'id' => 589,
                'name' => 'Okeigbo ',
                'state_id' => 29,
            ),
            array( // row #589
                'id' => 590,
                'name' => 'Irele ',
                'state_id' => 29,
            ),
            array( // row #590
                'id' => 591,
                'name' => 'Odigbo ',
                'state_id' => 29,
            ),
            array( // row #591
                'id' => 592,
                'name' => 'Okitipupa ',
                'state_id' => 29,
            ),
            array( // row #592
                'id' => 593,
                'name' => 'Ondo East ',
                'state_id' => 29,
            ),
            array( // row #593
                'id' => 594,
                'name' => 'Ondo West ',
                'state_id' => 29,
            ),
            array( // row #594
                'id' => 595,
                'name' => 'Ose ',
                'state_id' => 29,
            ),
            array( // row #595
                'id' => 596,
                'name' => 'Owo ',
                'state_id' => 29,
            ),
            array( // row #596
                'id' => 597,
                'name' => 'Aiyedade ',
                'state_id' => 30,
            ),
            array( // row #597
                'id' => 598,
                'name' => 'Aiyedire ',
                'state_id' => 30,
            ),
            array( // row #598
                'id' => 599,
                'name' => 'Atakumosa East ',
                'state_id' => 30,
            ),
            array( // row #599
                'id' => 600,
                'name' => 'Atakumosa West ',
                'state_id' => 30,
            ),
            array( // row #600
                'id' => 601,
                'name' => 'Boluwaduro ',
                'state_id' => 30,
            ),
            array( // row #601
                'id' => 602,
                'name' => 'Boripe ',
                'state_id' => 30,
            ),
            array( // row #602
                'id' => 603,
                'name' => 'Ede North ',
                'state_id' => 30,
            ),
            array( // row #603
                'id' => 604,
                'name' => 'Ede South ',
                'state_id' => 30,
            ),
            array( // row #604
                'id' => 605,
                'name' => 'Egbedore ',
                'state_id' => 30,
            ),
            array( // row #605
                'id' => 606,
                'name' => 'Ejigbo ',
                'state_id' => 30,
            ),
            array( // row #606
                'id' => 607,
                'name' => 'Ife Central ',
                'state_id' => 30,
            ),
            array( // row #607
                'id' => 608,
                'name' => 'Ife East ',
                'state_id' => 30,
            ),
            array( // row #608
                'id' => 609,
                'name' => 'Ife North ',
                'state_id' => 30,
            ),
            array( // row #609
                'id' => 610,
                'name' => 'Ife South ',
                'state_id' => 30,
            ),
            array( // row #610
                'id' => 611,
                'name' => 'Ifedayo ',
                'state_id' => 30,
            ),
            array( // row #611
                'id' => 612,
                'name' => 'Ifelodun ',
                'state_id' => 30,
            ),
            array( // row #612
                'id' => 613,
                'name' => 'Ila ',
                'state_id' => 30,
            ),
            array( // row #613
                'id' => 614,
                'name' => 'Ilesha East ',
                'state_id' => 30,
            ),
            array( // row #614
                'id' => 615,
                'name' => 'Ilesha West ',
                'state_id' => 30,
            ),
            array( // row #615
                'id' => 616,
                'name' => 'Irepodun ',
                'state_id' => 30,
            ),
            array( // row #616
                'id' => 617,
                'name' => 'Irewole ',
                'state_id' => 30,
            ),
            array( // row #617
                'id' => 618,
                'name' => 'Isokan ',
                'state_id' => 30,
            ),
            array( // row #618
                'id' => 619,
                'name' => 'Iwo ',
                'state_id' => 30,
            ),
            array( // row #619
                'id' => 620,
                'name' => 'Obokun ',
                'state_id' => 30,
            ),
            array( // row #620
                'id' => 621,
                'name' => 'Odo-Otin ',
                'state_id' => 30,
            ),
            array( // row #621
                'id' => 622,
                'name' => 'Ola-Oluwa ',
                'state_id' => 30,
            ),
            array( // row #622
                'id' => 623,
                'name' => 'Olorunda ',
                'state_id' => 30,
            ),
            array( // row #623
                'id' => 624,
                'name' => 'Oriade ',
                'state_id' => 30,
            ),
            array( // row #624
                'id' => 625,
                'name' => 'Orolu ',
                'state_id' => 30,
            ),
            array( // row #625
                'id' => 626,
                'name' => 'Osogbo',
                'state_id' => 30,
            ),
            array( // row #626
                'id' => 627,
                'name' => 'Afijio ',
                'state_id' => 31,
            ),
            array( // row #627
                'id' => 628,
                'name' => 'Akinyele ',
                'state_id' => 31,
            ),
            array( // row #628
                'id' => 629,
                'name' => 'Atiba ',
                'state_id' => 31,
            ),
            array( // row #629
                'id' => 630,
                'name' => 'Atigbo ',
                'state_id' => 31,
            ),
            array( // row #630
                'id' => 631,
                'name' => 'Egbeda ',
                'state_id' => 31,
            ),
            array( // row #631
                'id' => 632,
                'name' => 'IbadanCentral ',
                'state_id' => 31,
            ),
            array( // row #632
                'id' => 633,
                'name' => 'Ibadan North ',
                'state_id' => 31,
            ),
            array( // row #633
                'id' => 634,
                'name' => 'Ibadan North West ',
                'state_id' => 31,
            ),
            array( // row #634
                'id' => 635,
                'name' => 'Ibadan South East ',
                'state_id' => 31,
            ),
            array( // row #635
                'id' => 636,
                'name' => 'Ibadan South West ',
                'state_id' => 31,
            ),
            array( // row #636
                'id' => 637,
                'name' => 'Ibarapa Central ',
                'state_id' => 31,
            ),
            array( // row #637
                'id' => 638,
                'name' => 'Ibarapa East ',
                'state_id' => 31,
            ),
            array( // row #638
                'id' => 639,
                'name' => 'Ibarapa North ',
                'state_id' => 31,
            ),
            array( // row #639
                'id' => 640,
                'name' => 'Ido ',
                'state_id' => 31,
            ),
            array( // row #640
                'id' => 641,
                'name' => 'Irepo ',
                'state_id' => 31,
            ),
            array( // row #641
                'id' => 642,
                'name' => 'Iseyin ',
                'state_id' => 31,
            ),
            array( // row #642
                'id' => 643,
                'name' => 'Itesiwaju ',
                'state_id' => 31,
            ),
            array( // row #643
                'id' => 644,
                'name' => 'Iwajowa ',
                'state_id' => 31,
            ),
            array( // row #644
                'id' => 645,
                'name' => 'Kajola ',
                'state_id' => 31,
            ),
            array( // row #645
                'id' => 646,
                'name' => 'Lagelu Ogbomosho North ',
                'state_id' => 31,
            ),
            array( // row #646
                'id' => 647,
                'name' => 'Ogbmosho South ',
                'state_id' => 31,
            ),
            array( // row #647
                'id' => 648,
                'name' => 'O Oluwa ',
                'state_id' => 31,
            ),
            array( // row #648
                'id' => 649,
                'name' => 'Olorunso ',
                'state_id' => 31,
            ),
            array( // row #649
                'id' => 650,
                'name' => 'Oluyole ',
                'state_id' => 31,
            ),
            array( // row #650
                'id' => 651,
                'name' => 'Ona-Ara ',
                'state_id' => 31,
            ),
            array( // row #651
                'id' => 652,
                'name' => 'Orelope ',
                'state_id' => 31,
            ),
            array( // row #652
                'id' => 653,
                'name' => 'Ori Ire ',
                'state_id' => 31,
            ),
            array( // row #653
                'id' => 654,
                'name' => 'Oyo East ',
                'state_id' => 31,
            ),
            array( // row #654
                'id' => 655,
                'name' => 'Oyo West ',
                'state_id' => 31,
            ),
            array( // row #655
                'id' => 656,
                'name' => 'Saki East ',
                'state_id' => 31,
            ),
            array( // row #656
                'id' => 657,
                'name' => 'Saki West ',
                'state_id' => 31,
            ),
            array( // row #657
                'id' => 658,
                'name' => 'Surulere',
                'state_id' => 31,
            ),
            array( // row #658
                'id' => 659,
                'name' => 'Barikin Ladi ',
                'state_id' => 32,
            ),
            array( // row #659
                'id' => 660,
                'name' => 'Bassa ',
                'state_id' => 32,
            ),
            array( // row #660
                'id' => 661,
                'name' => 'Bokkos ',
                'state_id' => 32,
            ),
            array( // row #661
                'id' => 662,
                'name' => 'Jos East ',
                'state_id' => 32,
            ),
            array( // row #662
                'id' => 663,
                'name' => 'Jos North ',
                'state_id' => 32,
            ),
            array( // row #663
                'id' => 664,
                'name' => 'Jos South ',
                'state_id' => 32,
            ),
            array( // row #664
                'id' => 665,
                'name' => 'Kanam ',
                'state_id' => 32,
            ),
            array( // row #665
                'id' => 666,
                'name' => 'Kanke ',
                'state_id' => 32,
            ),
            array( // row #666
                'id' => 667,
                'name' => 'Langtang North ',
                'state_id' => 32,
            ),
            array( // row #667
                'id' => 668,
                'name' => 'Langtang South ',
                'state_id' => 32,
            ),
            array( // row #668
                'id' => 669,
                'name' => 'Mangu ',
                'state_id' => 32,
            ),
            array( // row #669
                'id' => 670,
                'name' => 'Mikang ',
                'state_id' => 32,
            ),
            array( // row #670
                'id' => 671,
                'name' => 'Pankshin ',
                'state_id' => 32,
            ),
            array( // row #671
                'id' => 672,
                'name' => 'Qua\'an Pan ',
                'state_id' => 32,
            ),
            array( // row #672
                'id' => 673,
                'name' => 'Riyom ',
                'state_id' => 32,
            ),
            array( // row #673
                'id' => 674,
                'name' => 'Shendam ',
                'state_id' => 32,
            ),
            array( // row #674
                'id' => 675,
                'name' => 'Wase',
                'state_id' => 32,
            ),
            array( // row #675
                'id' => 676,
                'name' => 'Abua/Odual ',
                'state_id' => 33,
            ),
            array( // row #676
                'id' => 677,
                'name' => 'Ahoada East ',
                'state_id' => 33,
            ),
            array( // row #677
                'id' => 678,
                'name' => 'Ahoada West ',
                'state_id' => 33,
            ),
            array( // row #678
                'id' => 679,
                'name' => 'Akuku Toru ',
                'state_id' => 33,
            ),
            array( // row #679
                'id' => 680,
                'name' => 'Andoni ',
                'state_id' => 33,
            ),
            array( // row #680
                'id' => 681,
                'name' => 'Asari-Toru ',
                'state_id' => 33,
            ),
            array( // row #681
                'id' => 682,
                'name' => 'Bonny ',
                'state_id' => 33,
            ),
            array( // row #682
                'id' => 683,
                'name' => 'Degema ',
                'state_id' => 33,
            ),
            array( // row #683
                'id' => 684,
                'name' => 'Emohua ',
                'state_id' => 33,
            ),
            array( // row #684
                'id' => 685,
                'name' => 'Eleme ',
                'state_id' => 33,
            ),
            array( // row #685
                'id' => 686,
                'name' => 'Etche ',
                'state_id' => 33,
            ),
            array( // row #686
                'id' => 687,
                'name' => 'kana ',
                'state_id' => 33,
            ),
            array( // row #687
                'id' => 688,
                'name' => 'Ikwerre ',
                'state_id' => 33,
            ),
            array( // row #688
                'id' => 689,
                'name' => 'Khana ',
                'state_id' => 33,
            ),
            array( // row #689
                'id' => 690,
                'name' => 'Obia/Akpor ',
                'state_id' => 33,
            ),
            array( // row #690
                'id' => 691,
                'name' => 'Ogba/Egbema/Ndoni ',
                'state_id' => 33,
            ),
            array( // row #691
                'id' => 692,
                'name' => 'Ogu/Bolo ',
                'state_id' => 33,
            ),
            array( // row #692
                'id' => 693,
                'name' => 'Okrika ',
                'state_id' => 33,
            ),
            array( // row #693
                'id' => 694,
                'name' => 'Omumma ',
                'state_id' => 33,
            ),
            array( // row #694
                'id' => 695,
                'name' => 'Opobo/Nkoro ',
                'state_id' => 33,
            ),
            array( // row #695
                'id' => 696,
                'name' => 'Oyigbo ',
                'state_id' => 33,
            ),
            array( // row #696
                'id' => 697,
                'name' => 'Port-Harcourt ',
                'state_id' => 33,
            ),
            array( // row #697
                'id' => 698,
                'name' => 'Tai ',
                'state_id' => 33,
            ),
            array( // row #698
                'id' => 699,
                'name' => 'Binji ',
                'state_id' => 34,
            ),
            array( // row #699
                'id' => 700,
                'name' => 'Bodinga ',
                'state_id' => 34,
            ),
            array( // row #700
                'id' => 701,
                'name' => 'Dange-shnsi ',
                'state_id' => 34,
            ),
            array( // row #701
                'id' => 702,
                'name' => 'Gada ',
                'state_id' => 34,
            ),
            array( // row #702
                'id' => 703,
                'name' => 'ronyo ',
                'state_id' => 34,
            ),
            array( // row #703
                'id' => 704,
                'name' => 'Gudu ',
                'state_id' => 34,
            ),
            array( // row #704
                'id' => 705,
                'name' => 'Gawabawa ',
                'state_id' => 34,
            ),
            array( // row #705
                'id' => 706,
                'name' => 'Illela ',
                'state_id' => 34,
            ),
            array( // row #706
                'id' => 707,
                'name' => 'Isa ',
                'state_id' => 34,
            ),
            array( // row #707
                'id' => 708,
                'name' => 'Kware ',
                'state_id' => 34,
            ),
            array( // row #708
                'id' => 709,
                'name' => 'kebbe ',
                'state_id' => 34,
            ),
            array( // row #709
                'id' => 710,
                'name' => 'Rabah ',
                'state_id' => 34,
            ),
            array( // row #710
                'id' => 711,
                'name' => 'Sabon birni ',
                'state_id' => 34,
            ),
            array( // row #711
                'id' => 712,
                'name' => 'Shagari ',
                'state_id' => 34,
            ),
            array( // row #712
                'id' => 713,
                'name' => 'Silame ',
                'state_id' => 34,
            ),
            array( // row #713
                'id' => 714,
                'name' => 'Sokoto North ',
                'state_id' => 34,
            ),
            array( // row #714
                'id' => 715,
                'name' => 'Sokoto South ',
                'state_id' => 34,
            ),
            array( // row #715
                'id' => 716,
                'name' => 'Tambuwal ',
                'state_id' => 34,
            ),
            array( // row #716
                'id' => 717,
                'name' => 'Tqngaza ',
                'state_id' => 34,
            ),
            array( // row #717
                'id' => 718,
                'name' => 'Tureta ',
                'state_id' => 34,
            ),
            array( // row #718
                'id' => 719,
                'name' => 'Wamako ',
                'state_id' => 34,
            ),
            array( // row #719
                'id' => 720,
                'name' => 'Wurno ',
                'state_id' => 34,
            ),
            array( // row #720
                'id' => 721,
                'name' => 'Yabo',
                'state_id' => 34,
            ),
            array( // row #721
                'id' => 722,
                'name' => 'Ardo-kola ',
                'state_id' => 35,
            ),
            array( // row #722
                'id' => 723,
                'name' => 'Bali ',
                'state_id' => 35,
            ),
            array( // row #723
                'id' => 724,
                'name' => 'Donga ',
                'state_id' => 35,
            ),
            array( // row #724
                'id' => 725,
                'name' => 'Gashaka ',
                'state_id' => 35,
            ),
            array( // row #725
                'id' => 726,
                'name' => 'Cassol ',
                'state_id' => 35,
            ),
            array( // row #726
                'id' => 727,
                'name' => 'Ibi ',
                'state_id' => 35,
            ),
            array( // row #727
                'id' => 728,
                'name' => 'Jalin ',
                'state_id' => 35,
            ),
            array( // row #728
                'id' => 729,
                'name' => 'Karin-Lamido ',
                'state_id' => 35,
            ),
            array( // row #729
                'id' => 730,
                'name' => 'Kurmi ',
                'state_id' => 35,
            ),
            array( // row #730
                'id' => 731,
                'name' => 'Lau ',
                'state_id' => 35,
            ),
            array( // row #731
                'id' => 732,
                'name' => 'Sardauna ',
                'state_id' => 35,
            ),
            array( // row #732
                'id' => 733,
                'name' => 'Takum ',
                'state_id' => 35,
            ),
            array( // row #733
                'id' => 734,
                'name' => 'Ussa ',
                'state_id' => 35,
            ),
            array( // row #734
                'id' => 735,
                'name' => 'Wukari ',
                'state_id' => 35,
            ),
            array( // row #735
                'id' => 736,
                'name' => 'Yorro ',
                'state_id' => 35,
            ),
            array( // row #736
                'id' => 737,
                'name' => 'Zing',
                'state_id' => 35,
            ),
            array( // row #737
                'id' => 738,
                'name' => 'Bade ',
                'state_id' => 36,
            ),
            array( // row #738
                'id' => 739,
                'name' => 'Bursari ',
                'state_id' => 36,
            ),
            array( // row #739
                'id' => 740,
                'name' => 'Damaturu ',
                'state_id' => 36,
            ),
            array( // row #740
                'id' => 741,
                'name' => 'Fika ',
                'state_id' => 36,
            ),
            array( // row #741
                'id' => 742,
                'name' => 'Fune ',
                'state_id' => 36,
            ),
            array( // row #742
                'id' => 743,
                'name' => 'Geidam ',
                'state_id' => 36,
            ),
            array( // row #743
                'id' => 744,
                'name' => 'Gujba ',
                'state_id' => 36,
            ),
            array( // row #744
                'id' => 745,
                'name' => 'Gulani ',
                'state_id' => 36,
            ),
            array( // row #745
                'id' => 746,
                'name' => 'Jakusko ',
                'state_id' => 36,
            ),
            array( // row #746
                'id' => 747,
                'name' => 'Karasuwa ',
                'state_id' => 36,
            ),
            array( // row #747
                'id' => 748,
                'name' => 'Karawa ',
                'state_id' => 36,
            ),
            array( // row #748
                'id' => 749,
                'name' => 'Machina ',
                'state_id' => 36,
            ),
            array( // row #749
                'id' => 750,
                'name' => 'Nangere ',
                'state_id' => 36,
            ),
            array( // row #750
                'id' => 751,
                'name' => 'Nguru Potiskum ',
                'state_id' => 36,
            ),
            array( // row #751
                'id' => 752,
                'name' => 'Tarmua ',
                'state_id' => 36,
            ),
            array( // row #752
                'id' => 753,
                'name' => 'Yunusari ',
                'state_id' => 36,
            ),
            array( // row #753
                'id' => 754,
                'name' => 'Yusufari',
                'state_id' => 36,
            ),
            array( // row #754
                'id' => 755,
                'name' => 'Anka  ',
                'state_id' => 37,
            ),
            array( // row #755
                'id' => 756,
                'name' => 'Bakura ',
                'state_id' => 37,
            ),
            array( // row #756
                'id' => 757,
                'name' => 'Birnin Magaji ',
                'state_id' => 37,
            ),
            array( // row #757
                'id' => 758,
                'name' => 'Bukkuyum ',
                'state_id' => 37,
            ),
            array( // row #758
                'id' => 759,
                'name' => 'Bungudu ',
                'state_id' => 37,
            ),
            array( // row #759
                'id' => 760,
                'name' => 'Gummi ',
                'state_id' => 37,
            ),
            array( // row #760
                'id' => 761,
                'name' => 'Gusau ',
                'state_id' => 37,
            ),
            array( // row #761
                'id' => 762,
                'name' => 'Kaura ',
                'state_id' => 37,
            ),
            array( // row #762
                'id' => 763,
                'name' => 'Namoda ',
                'state_id' => 37,
            ),
            array( // row #763
                'id' => 764,
                'name' => 'Maradun ',
                'state_id' => 37,
            ),
            array( // row #764
                'id' => 765,
                'name' => 'Maru ',
                'state_id' => 37,
            ),
            array( // row #765
                'id' => 766,
                'name' => 'Shinkafi ',
                'state_id' => 37,
            ),
            array( // row #766
                'id' => 767,
                'name' => 'Talata Mafara ',
                'state_id' => 37,
            ),
            array( // row #767
                'id' => 768,
                'name' => 'Tsafe ',
                'state_id' => 37,
            ),
            array( // row #768
                'id' => 769,
                'name' => 'Zurmi ',
                'state_id' => 37,
            ),
            array( // row #769
                'id' => 770,
                'name' => 'Owan west',
                'state_id' => 13,
            ),
            array( // row #770
                'id' => 771,
                'name' => 'Etsako West',
                'state_id' => 13,
            ),
            array( // row #771
                'id' => 772,
                'name' => 'Akoko Edo',
                'state_id' => 13,
            ),

        );
        DB::table('lcds')->insert( $lcds );
    }
}
