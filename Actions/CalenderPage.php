<?php

namespace Actions;

use Core\App;


class CalenderPage
{
    /**
     *loads the calender page
     */
    public function calender()
    {
        $events = App::get('database')->selectAll('events');

        return page('calender', compact('events'));
    }


    /**
     *display the event form
     */
    public function addEvent()
    {
        return page('add-event');
    }

    /**
     *save event to the database
     */
    public function saveEvent()
    {

        App::get('database')->insert('events',
            [
                'name' => $_POST['name'],
                'event_description' => $_POST['event_description'],
                'image' => '../images/home4.jpg',
                'date' => $_POST['date'],
                'user_id' => $_SESSION['user_id'],
            ]
        );

        $success = "Event Created Successfully";

        $events = App::get('database')->selectAll('events');

        return page('calender', compact('success', 'events'));

    }

    /**
     *books an event
     */
    public function bookEvent()
    {
        App::get('database')->insert('event_users',
            [
                'event_id' => $_POST['event_id'],
                'user_id' => $_SESSION['user_id'],
            ]
        );

        $success = "Event Booked Successfully";

        $events = App::get('database')->selectAll('events');

        return page('calender', compact('success', 'events'));
    }

}