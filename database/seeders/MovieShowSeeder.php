<?php

namespace Database\Seeders;

use App\Models\MovieShow;
use Illuminate\Database\Seeder;

class MovieShowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MovieShow::factory(30)->create();
    }
}
