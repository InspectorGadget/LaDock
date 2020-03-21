<?php

use Illuminate\Database\Seeder;

class PortsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $port = new \App\Port;
        $port->port = 19132;
        $port->in_use = false;
        $port->save();
    }
}
