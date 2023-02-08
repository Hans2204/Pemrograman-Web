<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'miqbalraihan7567@gmail.com',
            'password' => bcrypt('123'),
            'is_admin' => 1,
            'created_at' => new \DateTime,
            'updated_at' => new \DateTime
        ]);
    }
}
