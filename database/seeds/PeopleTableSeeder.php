<?php

use Illuminate\Database\Seeder;
use Moviekyte\Person;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->delete();

        Person::create(array(
            'name' => 'Arnold Schwarzenegger',
            'city' => 'San Fransisco',
            'type' => 'actor'
        ));

        Person::create(array(
            'name' => 'George Lucas',
            'city' => 'Los Angeles',
            'type' => 'director'
        ));

        Person::create(array(
            'name' => 'Ridley Scott',
            'city' => 'New York',
            'type' => 'producer'
        ));
    }
}
