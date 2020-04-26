<?php

use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('travel_packages')->insert([
            'title' => 'Labuan Bajo',
            'slug' => 'labuan-bajo',
            'location' => 'Indonesia',
            'about' => 'Once a small fishing village, Labuan Bajo (also spelled Labuhanbajo and Labuanbajo) 
                        is now a tourist center as well as a centre of government for the surrounding region. 
                        Facilities to support tourist activities are expanding quickly although the rapid rise 
                        in the numbers of visitors is imposing some strains on the local environment.
                        Labuan Bajo is the gateway for trips across the nearby Komodo National Park to Komodo 
                        Island and Rinca Island, both home to the famous Komodo dragons.',
            'event' => 'Tari Kecak',
            'language' => 'Indonesia, English',
            'food' => 'Local, Western',
            'departure_date' => '2020-08-20',
            'duration' => '5D 4N',
            'type' => 'Open Public',
            'price' => 900

        ]);
    }
}
