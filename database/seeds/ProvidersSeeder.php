<?php

use App\Provider;
use Illuminate\Database\Seeder;

class ProvidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('providers')->truncate();

        $type = new Provider();
        $type->name = 'N/A';
        $type->save();

        $type = new Provider();
        $type->name = 'Netflix';
        $type->save();

        $type = new Provider();
        $type->name = 'HBO';
        $type->save();

        $type = new Provider();
        $type->name = 'Amazon Prime';
        $type->save();

        $type = new Provider();
        $type->name = 'Youtube';
        $type->save();

        $type = new Provider();
        $type->name = 'Sony';
        $type->save();

        $type = new Provider();
        $type->name = 'AMC';
        $type->save();

        $type = new Provider();
        $type->name = 'Hulu';
        $type->save();

        $type = new Provider();
        $type->name = 'Disney';
        $type->save();
    }
}
