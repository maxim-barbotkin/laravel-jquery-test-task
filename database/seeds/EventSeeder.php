<?php

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = array(
            array(
                'title' => 'Event 1',
                'date' => 'Thu, Jun 11',
                'location' => 'London',
            ),
            array(
                'title' => 'Event 2',
                'date' => 'Thu, Jun 11',
                'location' => 'Moscow',
            ),
            array(
                'title' => 'Event 3',
                'date' => 'Thu, Jun 11',
                'location' => 'London',
            ),
            array(
                'title' => 'Event 4',
                'date' => 'Thu, Jun 11',
                'location' => 'Moscow',
            ),
            array(
                'title' => 'Event 5',
                'date' => 'Thu, Jun 11',
                'location' => 'London',
            ),
            array(
                'title' => 'Event 6',
                'date' => 'Thu, Jun 11',
                'location' => 'Moscow',
            ),
            array(
                'title' => 'Event 7',
                'date' => 'Thu, Jun 11',
                'location' => 'London',
            ),
            array(
                'title' => 'Event 8',
                'date' => 'Thu, Jun 11',
                'location' => 'Moscow',
            ),
            array(
                'title' => 'Event 9',
                'date' => 'Thu, Jun 11',
                'location' => 'London',
            ),
            array(
                'title' => 'Event 10',
                'date' => 'Thu, Jun 11',
                'location' => 'Moscow',
            ),
            array(
                'title' => 'Event 11',
                'date' => 'Thu, Jun 11',
                'location' => 'London',
            ),
            array(
                'title' => 'Event 12',
                'date' => 'Thu, Jun 11',
                'location' => 'Moscow',
            ),
        );

        foreach ($events as $event){
            \App\Models\Event::create($event);
        }

    }
}
