<?php

use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
        // $user = App\User::findOrFail(auth()->user()->id);
        // for ($i=0; $i < 5; $i++) { 
        //     $todo = new App\Todo;
        //     $user->todos()->create(
        //         [
        //             'name'=> 'New Todo '.$i,
        //             'done'=> 0,
        //             'due'=> date("Y-m-d h:i:s")
        //         ]
        //     );

        // }

        for ($i=0; $i < 950 ; $i++) { 
            $todo = new App\Todo;
            // $user->todo()->create();
            // $todo->userId = auth()->user()->id;
            $todo->name = 'New Todo '.$i;
            $todo->done = 0;
            $todo->due = date("Y-m-d h:i:s");

            $todo->save();

        }
    }
}
