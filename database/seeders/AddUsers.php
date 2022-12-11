<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert(
            [
                [
                    'name' => 'mg',
                    'password' => '$2y$10$J3sjr7Mnuqo67SLebjtITOW/akn5EFqeM4x.lSgzfC.V5OudgdgCK' //123
                ],
                [
                    'name' => 'user-2',
                    'password' => '$2y$10$/doDzZgEzpjgpIZzNxh1buVFSYeIFcPLPsmzNterAlOBwQdanpDCm' //000
                ],
                [
                    'name' => 'user-3',
                    'password' => '$2y$10$GHoBwnGugs5Ud/GenLOtpOVZjxBIyuU.qS60Hm8umaw5hVyo3jLwu' //111
                ]
            ]);

    }
}
