<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RuleSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('rules')->insert([
            ['rule' =>'Admin'],
            ['rule '=>'user'],
        ]);
    }
}
