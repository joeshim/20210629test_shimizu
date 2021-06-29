<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'taro',
            'email' => 'taro@hoge.com',
        ];
        DB::table('people')->insert($param);
        $param = [
            'name' => 'jiro',
            'email' => 'jiro@hogehoge.com',
        ];
        DB::table('people')->insert($param);
        $param = [
            'name' => 'saburo',
            'email' => 'saburo@hogeho.com',
        ];
        DB::table('people')->insert($param);
    }
}