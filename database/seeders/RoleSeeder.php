<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'title' => 'Admin',
            'created_at' => Carbon::now()->toDateTimeString(),            
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('roles')->insert([
            'title' => 'Agent',
            'created_at' => Carbon::now()->toDateTimeString(),            
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('roles')->insert([
            'title' => 'User',
            'created_at' => Carbon::now()->toDateTimeString(),            
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
}