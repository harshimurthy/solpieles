<?php

use Illuminate\Database\Seeder;
use App\Todo;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('todos')->truncate();

        factory(App\Todo::class, 150)->create();
    }
}
