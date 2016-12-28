<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\CodeFin\User::class,1)
            ->states('admin')
            ->create([
                'name' => 'Erick',
                'email' => 'erick@user.com'

            ]);

        factory(\CodeFin\User::class,2)

            ->create([
                'name' => 'cliente da silva',
                'email' => 'client@user.com'

            ]);
    }
}
