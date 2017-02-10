<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Aircrafttype;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        DB::table('aircrafttypes')->delete();


        $AircraftTypes = array(

            ['manufacturer' => 'Antonov', 'type' => 'An-124 Ruslan', 'description' => 'quad-jet'],
            ['manufacturer' => 'Antonov', 'type' => 'An-140', 'description' => 'twin-turboprop'],
            ['manufacturer' => 'Airbus', 'type' => 'A320', 'description' => 'twin-jet'],
            ['manufacturer' => 'asfdsadf', 'type' => 'An-1ss24 Ruslan', 'description' => 'AAquad-jet'],
            ['manufacturer' => 'PPAntonov', 'type' => 'PP-124', 'description' => 'ddd-jet'],
            ['manufacturer' => 'Antonov', 'type' => 'Ana-124 Ruslan', 'description' => 'quad-jet'],
        );

        // Loop through each user above and create the record for them in the database
        foreach ($AircraftTypes as $AircraftType)
        {
            Aircrafttype::create($AircraftType);
        }

        Model::reguard();
    }
}