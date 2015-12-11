<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $create = ['admin', 'staff', 'guest'];

        foreach ($create as $key => $value) {
            $roles = new App\Role;

            $roles->role = $value;
            $roles->save();
        }

    }
}
