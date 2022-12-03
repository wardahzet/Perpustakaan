<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'isbn' => '1000000',
            'category_id' => 1,
            'title' => 'Title01',
            'author' => 'Author01',
            'publisher' => 'Publisher01',
            'year' => 2000,
            'data' => 'data01',
            'cover' => 'Cover01',
            'sinopsis' => 'Sinopsis01',
            'readers' => 0,
            'views' => 19
        ],
        [
            'isbn' => '1000001',
            'category_id' => 1,
            'title' => 'Title02',
            'author' => 'Author02',
            'publisher' => 'Publisher02',
            'year' => 2001,
            'data' => 'data02',
            'cover' => 'Cover02',
            'sinopsis' => 'Sinopsis02',
            'readers' => 1,
            'views' => 18
        ],
        [
            'isbn' => '1000002',
            'category_id' => 1,
            'title' => 'Title03',
            'author' => 'Author03',
            'publisher' => 'Publisher03',
            'year' => 2002,
            'data' => 'data03',
            'cover' => 'Cover03',
            'sinopsis' => 'Sinopsis03',
            'readers' => 2,
            'views' => 17
        ],
        [
            'isbn' => '1000003',
            'category_id' => 1,
            'title' => 'Title04',
            'author' => 'Author04',
            'publisher' => 'Publisher04',
            'year' => 2003,
            'data' => 'data04',
            'cover' => 'Cover04',
            'sinopsis' => 'Sinopsis04',
            'readers' => 3,
            'views' => 16
        ],
        [
            'isbn' => '1000004',
            'category_id' => 1,
            'title' => 'Title05',
            'author' => 'Author05',
            'publisher' => 'Publisher05',
            'year' => 2004,
            'data' => 'data05',
            'cover' => 'Cover05',
            'sinopsis' => 'Sinopsis05',
            'readers' => 4,
            'views' => 15
        ],
        [
            'isbn' => '1000005',
            'category_id' => 1,
            'title' => 'Title06',
            'author' => 'Author06',
            'publisher' => 'Publisher06',
            'year' => 2005,
            'data' => 'data06',
            'cover' => 'Cover06',
            'sinopsis' => 'Sinopsis06',
            'readers' => 5,
            'views' => 14
        ],
        [
            'isbn' => '1000006',
            'category_id' => 2,
            'title' => 'Title07',
            'author' => 'Author07',
            'publisher' => 'Publisher07',
            'year' => 2006,
            'data' => 'data07',
            'cover' => 'Cover07',
            'sinopsis' => 'Sinopsis07',
            'readers' => 6,
            'views' => 13
        ],
        [
            'isbn' => '1000007',
            'category_id' => 2,
            'title' => 'Title08',
            'author' => 'Author08',
            'publisher' => 'Publisher08',
            'year' => 2007,
            'data' => 'data08',
            'cover' => 'Cover08',
            'sinopsis' => 'Sinopsis08',
            'readers' => 7,
            'views' => 12
        ],
        [
            'isbn' => '1000008',
            'category_id' => 2,
            'title' => 'Title09',
            'author' => 'Author09',
            'publisher' => 'Publisher09',
            'year' => 2008,
            'data' => 'data09',
            'cover' => 'Cover09',
            'sinopsis' => 'Sinopsis09',
            'readers' => 8,
            'views' => 11
        ],
        [
            'isbn' => '1000009',
            'category_id' => 2,
            'title' => 'Title10',
            'author' => 'Author10',
            'publisher' => 'Publisher10',
            'year' => 2009,
            'data' => 'data10',
            'cover' => 'Cover10',
            'sinopsis' => 'Sinopsis10',
            'readers' => 9,
            'views' => 10
        ],];
        DB::table('books')->insert($data);

    }
}
