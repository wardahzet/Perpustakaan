<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'email' => 'aa01@test.com',
                'password' => 'abc10',
                'name' => 'aaa01',
                'telephone' => 1010101,
                'address' => 'bbbb01',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa02@test.com',
                'password' => 'abc11',
                'name' => 'aaa02',
                'telephone' => 1010102,
                'address' => 'bbbb02',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa03@test.com',
                'password' => 'abc12',
                'name' => 'aaa03',
                'telephone' => 1010103,
                'address' => 'bbbb03',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa04@test.com',
                'password' => 'abc13',
                'name' => 'aaa04',
                'telephone' => 1010104,
                'address' => 'bbbb04',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa05@test.com',
                'password' => 'abc14',
                'name' => 'aaa05',
                'telephone' => 1010105,
                'address' => 'bbbb05',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa06@test.com',
                'password' => 'abc15',
                'name' => 'aaa06',
                'telephone' => 1010106,
                'address' => 'bbbb06',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa07@test.com',
                'password' => 'abc16',
                'name' => 'aaa07',
                'telephone' => 1010107,
                'address' => 'bbbb07',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa08@test.com',
                'password' => 'abc17',
                'name' => 'aaa08',
                'telephone' => 1010108,
                'address' => 'bbbb08',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa09@test.com',
                'password' => 'abc18',
                'name' => 'aaa09',
                'telephone' => 1010109,
                'address' => 'bbbb09',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa10@test.com',
                'password' => 'abc19',
                'name' => 'aaa10',
                'telephone' => 1010110,
                'address' => 'bbbb10',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa11@test.com',
                'password' => 'abc20',
                'name' => 'aaa11',
                'telephone' => 1010111,
                'address' => 'bbbb11',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa12@test.com',
                'password' => 'abc21',
                'name' => 'aaa12',
                'telephone' => 1010112,
                'address' => 'bbbb12',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa13@test.com',
                'password' => 'abc22',
                'name' => 'aaa13',
                'telephone' => 1010113,
                'address' => 'bbbb13',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa14@test.com',
                'password' => 'abc23',
                'name' => 'aaa14',
                'telephone' => 1010114,
                'address' => 'bbbb14',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa15@test.com',
                'password' => 'abc24',
                'name' => 'aaa15',
                'telephone' => 1010115,
                'address' => 'bbbb15',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa16@test.com',
                'password' => 'abc25',
                'name' => 'aaa16',
                'telephone' => 1010116,
                'address' => 'bbbb16',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa17@test.com',
                'password' => 'abc26',
                'name' => 'aaa17',
                'telephone' => 1010117,
                'address' => 'bbbb17',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa18@test.com',
                'password' => 'abc27',
                'name' => 'aaa18',
                'telephone' => 1010118,
                'address' => 'bbbb18',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa19@test.com',
                'password' => 'abc28',
                'name' => 'aaa19',
                'telephone' => 1010119,
                'address' => 'bbbb19',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa20@test.com',
                'password' => 'abc29',
                'name' => 'aaa20',
                'telephone' => 1010120,
                'address' => 'bbbb20',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa21@test.com',
                'password' => 'abc30',
                'name' => 'aaa21',
                'telephone' => 1010121,
                'address' => 'bbbb21',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa22@test.com',
                'password' => 'abc31',
                'name' => 'aaa22',
                'telephone' => 1010122,
                'address' => 'bbbb22',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa23@test.com',
                'password' => 'abc32',
                'name' => 'aaa23',
                'telephone' => 1010123,
                'address' => 'bbbb23',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa24@test.com',
                'password' => 'abc33',
                'name' => 'aaa24',
                'telephone' => 1010124,
                'address' => 'bbbb24',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa25@test.com',
                'password' => 'abc34',
                'name' => 'aaa25',
                'telephone' => 1010125,
                'address' => 'bbbb25',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa26@test.com',
                'password' => 'abc35',
                'name' => 'aaa26',
                'telephone' => 1010126,
                'address' => 'bbbb26',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa27@test.com',
                'password' => 'abc36',
                'name' => 'aaa27',
                'telephone' => 1010127,
                'address' => 'bbbb27',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa28@test.com',
                'password' => 'abc37',
                'name' => 'aaa28',
                'telephone' => 1010128,
                'address' => 'bbbb28',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa29@test.com',
                'password' => 'abc38',
                'name' => 'aaa29',
                'telephone' => 1010129,
                'address' => 'bbbb29',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa30@test.com',
                'password' => 'abc39',
                'name' => 'aaa30',
                'telephone' => 1010130,
                'address' => 'bbbb30',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa31@test.com',
                'password' => 'abc40',
                'name' => 'aaa31',
                'telephone' => 1010131,
                'address' => 'bbbb31',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa32@test.com',
                'password' => 'abc41',
                'name' => 'aaa32',
                'telephone' => 1010132,
                'address' => 'bbbb32',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa33@test.com',
                'password' => 'abc42',
                'name' => 'aaa33',
                'telephone' => 1010133,
                'address' => 'bbbb33',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa34@test.com',
                'password' => 'abc43',
                'name' => 'aaa34',
                'telephone' => 1010134,
                'address' => 'bbbb34',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa35@test.com',
                'password' => 'abc44',
                'name' => 'aaa35',
                'telephone' => 1010135,
                'address' => 'bbbb35',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa36@test.com',
                'password' => 'abc45',
                'name' => 'aaa36',
                'telephone' => 1010136,
                'address' => 'bbbb36',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa37@test.com',
                'password' => 'abc46',
                'name' => 'aaa37',
                'telephone' => 1010137,
                'address' => 'bbbb37',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa38@test.com',
                'password' => 'abc47',
                'name' => 'aaa38',
                'telephone' => 1010138,
                'address' => 'bbbb38',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa39@test.com',
                'password' => 'abc48',
                'name' => 'aaa39',
                'telephone' => 1010139,
                'address' => 'bbbb39',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa40@test.com',
                'password' => 'abc49',
                'name' => 'aaa40',
                'telephone' => 1010140,
                'address' => 'bbbb40',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa41@test.com',
                'password' => 'abc50',
                'name' => 'aaa41',
                'telephone' => 1010141,
                'address' => 'bbbb41',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa42@test.com',
                'password' => 'abc51',
                'name' => 'aaa42',
                'telephone' => 1010142,
                'address' => 'bbbb42',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa43@test.com',
                'password' => 'abc52',
                'name' => 'aaa43',
                'telephone' => 1010143,
                'address' => 'bbbb43',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa44@test.com',
                'password' => 'abc53',
                'name' => 'aaa44',
                'telephone' => 1010144,
                'address' => 'bbbb44',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa45@test.com',
                'password' => 'abc54',
                'name' => 'aaa45',
                'telephone' => 1010145,
                'address' => 'bbbb45',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa46@test.com',
                'password' => 'abc55',
                'name' => 'aaa46',
                'telephone' => 1010146,
                'address' => 'bbbb46',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa47@test.com',
                'password' => 'abc56',
                'name' => 'aaa47',
                'telephone' => 1010147,
                'address' => 'bbbb47',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa48@test.com',
                'password' => 'abc57',
                'name' => 'aaa48',
                'telephone' => 1010148,
                'address' => 'bbbb48',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa49@test.com',
                'password' => 'abc58',
                'name' => 'aaa49',
                'telephone' => 1010149,
                'address' => 'bbbb49',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa50@test.com',
                'password' => 'abc59',
                'name' => 'aaa50',
                'telephone' => 1010150,
                'address' => 'bbbb50',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa51@test.com',
                'password' => 'abc60',
                'name' => 'aaa51',
                'telephone' => 1010151,
                'address' => 'bbbb51',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa52@test.com',
                'password' => 'abc61',
                'name' => 'aaa52',
                'telephone' => 1010152,
                'address' => 'bbbb52',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa53@test.com',
                'password' => 'abc62',
                'name' => 'aaa53',
                'telephone' => 1010153,
                'address' => 'bbbb53',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa54@test.com',
                'password' => 'abc63',
                'name' => 'aaa54',
                'telephone' => 1010154,
                'address' => 'bbbb54',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa55@test.com',
                'password' => 'abc64',
                'name' => 'aaa55',
                'telephone' => 1010155,
                'address' => 'bbbb55',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa56@test.com',
                'password' => 'abc65',
                'name' => 'aaa56',
                'telephone' => 1010156,
                'address' => 'bbbb56',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa57@test.com',
                'password' => 'abc66',
                'name' => 'aaa57',
                'telephone' => 1010157,
                'address' => 'bbbb57',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa58@test.com',
                'password' => 'abc67',
                'name' => 'aaa58',
                'telephone' => 1010158,
                'address' => 'bbbb58',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa59@test.com',
                'password' => 'abc68',
                'name' => 'aaa59',
                'telephone' => 1010159,
                'address' => 'bbbb59',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa60@test.com',
                'password' => 'abc69',
                'name' => 'aaa60',
                'telephone' => 1010160,
                'address' => 'bbbb60',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa61@test.com',
                'password' => 'abc70',
                'name' => 'aaa61',
                'telephone' => 1010161,
                'address' => 'bbbb61',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa62@test.com',
                'password' => 'abc71',
                'name' => 'aaa62',
                'telephone' => 1010162,
                'address' => 'bbbb62',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa63@test.com',
                'password' => 'abc72',
                'name' => 'aaa63',
                'telephone' => 1010163,
                'address' => 'bbbb63',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa64@test.com',
                'password' => 'abc73',
                'name' => 'aaa64',
                'telephone' => 1010164,
                'address' => 'bbbb64',
                'is_admin' => FALSE
            ],
            [
                'email' => 'aa65@test.com',
                'password' => 'abc74',
                'name' => 'aaa65',
                'telephone' => 1010165,
                'address' => 'bbbb65',
                'is_admin' => FALSE
            ],
        ];
        DB::table('users')->insert($data);
    }
}
