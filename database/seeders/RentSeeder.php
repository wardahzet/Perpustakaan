<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RentSeeder extends Seeder
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
                'user_email' => 'aa01@test.com',
                'book_isbn' => '1000000',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa02@test.com',
                'book_isbn' => '1000001',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa03@test.com',
                'book_isbn' => '1000002',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa04@test.com',
                'book_isbn' => '1000003',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa05@test.com',
                'book_isbn' => '1000004',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa06@test.com',
                'book_isbn' => '1000005',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa07@test.com',
                'book_isbn' => '1000006',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa08@test.com',
                'book_isbn' => '1000007',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa09@test.com',
                'book_isbn' => '1000008',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa10@test.com',
                'book_isbn' => '1000009',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa11@test.com',
                'book_isbn' => '1000000',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa12@test.com',
                'book_isbn' => '1000001',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa13@test.com',
                'book_isbn' => '1000002',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa14@test.com',
                'book_isbn' => '1000003',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa15@test.com',
                'book_isbn' => '1000004',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa16@test.com',
                'book_isbn' => '1000005',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa17@test.com',
                'book_isbn' => '1000006',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa18@test.com',
                'book_isbn' => '1000007',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa19@test.com',
                'book_isbn' => '1000008',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa20@test.com',
                'book_isbn' => '1000009',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa21@test.com',
                'book_isbn' => '1000000',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa22@test.com',
                'book_isbn' => '1000001',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa23@test.com',
                'book_isbn' => '1000002',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa24@test.com',
                'book_isbn' => '1000003',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa25@test.com',
                'book_isbn' => '1000004',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa26@test.com',
                'book_isbn' => '1000005',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa27@test.com',
                'book_isbn' => '1000006',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa28@test.com',
                'book_isbn' => '1000007',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa29@test.com',
                'book_isbn' => '1000008',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa30@test.com',
                'book_isbn' => '1000009',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa31@test.com',
                'book_isbn' => '1000000',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa32@test.com',
                'book_isbn' => '1000001',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa33@test.com',
                'book_isbn' => '1000002',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa34@test.com',
                'book_isbn' => '1000003',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa35@test.com',
                'book_isbn' => '1000004',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa36@test.com',
                'book_isbn' => '1000005',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa37@test.com',
                'book_isbn' => '1000006',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa38@test.com',
                'book_isbn' => '1000007',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa39@test.com',
                'book_isbn' => '1000008',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa40@test.com',
                'book_isbn' => '1000009',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa41@test.com',
                'book_isbn' => '1000000',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa42@test.com',
                'book_isbn' => '1000001',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa43@test.com',
                'book_isbn' => '1000002',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa44@test.com',
                'book_isbn' => '1000003',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa45@test.com',
                'book_isbn' => '1000004',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa46@test.com',
                'book_isbn' => '1000005',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa47@test.com',
                'book_isbn' => '1000006',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa48@test.com',
                'book_isbn' => '1000007',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa49@test.com',
                'book_isbn' => '1000008',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa50@test.com',
                'book_isbn' => '1000009',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa51@test.com',
                'book_isbn' => '1000000',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa52@test.com',
                'book_isbn' => '1000001',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa53@test.com',
                'book_isbn' => '1000002',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa54@test.com',
                'book_isbn' => '1000003',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa55@test.com',
                'book_isbn' => '1000004',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa56@test.com',
                'book_isbn' => '1000005',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa57@test.com',
                'book_isbn' => '1000006',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa58@test.com',
                'book_isbn' => '1000007',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa59@test.com',
                'book_isbn' => '1000008',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa60@test.com',
                'book_isbn' => '1000009',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa61@test.com',
                'book_isbn' => '1000000',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa62@test.com',
                'book_isbn' => '1000001',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa63@test.com',
                'book_isbn' => '1000002',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa64@test.com',
                'book_isbn' => '1000003',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            [
                'user_email' => 'aa65@test.com',
                'book_isbn' => '1000004',
                'rent_date' => '2008-01-01 00:00:01',
                'due_date' => '2008-01-03 00:00:01',
                'status' => FALSE
            ],
            
        ];

        DB::table('rents')->insert($data);

    }
}
