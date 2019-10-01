<?php

use Illuminate\Database\Seeder;

class BookTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Book::class, 100)->create();
    }
}
