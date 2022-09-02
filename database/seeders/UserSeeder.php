<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        Schema::disableForeignKeyConstraints(); 
        User::truncate();  // 既存データを削除する場合のみ
        Schema::enableForeignKeyConstraints();
        User::factory(10)->create();  // 10個作成ね！
    }
}
