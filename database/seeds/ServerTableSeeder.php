<?php

use App\Server;
use Illuminate\Database\Seeder;

class ServerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('servers')->truncate();

        $server = new Server();
        $server->name = 'MyStream';
        $server->url('https://mystream.to');
        $server->description = '';
        $server->save();

        $server = new Server();
        $server->name = 'MIXdrop';
        $server->url('https://mixdrop.co');
        $server->description = '';
        $server->save();

        $server = new Server();
        $server->name = 'Vidoza';
        $server->url('https://vidoza.org');
        $server->description = '';
        $server->save();
    }
}
