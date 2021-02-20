<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Rol;
use App\Models\Producto;
use App\Models\Pedido;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Rol::factory(10)->create();
        User::factory(10)->create();
        Producto::factory(10)->create();
        Pedido::factory(10)->create();
    }
}
