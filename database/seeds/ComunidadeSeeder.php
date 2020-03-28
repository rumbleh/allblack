<?php

use Illuminate\Database\Seeder;

class ComunidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Comunidade::class, 10)->create();
    }
}
