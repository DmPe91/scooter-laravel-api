<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
{
    \App\Models\Condition::create(['name' => 'Новый']);
    \App\Models\Condition::create(['name' => 'Б/у']);
    \App\Models\Condition::create(['name' => 'Витрина']);
}
}
