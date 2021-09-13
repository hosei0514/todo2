<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TodolistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Todo::factory()->create();
    }
}
