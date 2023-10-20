<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $default = [
            'password' => '$2y$10$dQg2nXZDmDuJNdrUpXFSCOIkLIXYZdF2rFIhT3fBlh./FeCZuUmei'
        ];

        User::create(array_merge([
            'email' => 'superadmin@mail.com',
            'username' => 'superadmin',
            'fullname' => 'superadmin',

        ], $default));
    }
}
