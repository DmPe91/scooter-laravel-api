<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    \App\Models\Type::create(['name' => 'Электросамокат']);
    \App\Models\Type::create(['name' => 'Электровелосипед']);
    \App\Models\Type::create(['name' => 'Аксессуары']);
}
}
