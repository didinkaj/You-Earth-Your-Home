<?php

namespace Actions;

use Core\App;

class SubscribePage
{
    /**
     *loads the subscribe page
     */
    public function subscribe()
    {
        return page('subscribe');
    }

    public function addMember()
    {

        if (isset($_POST['id']) && !empty($_POST['id'])) {

            App::get('database')->update('users',
                [
                    'name' => $_POST['name'],
                    'sex' => $_POST['sex'],
                    'age' => $_POST['age'],
                    'email' => $_POST['email'],
                    'address' => $_POST['address'],
                    'phone_number' => $_POST['phone_number'],
                    'password' => $_POST['password'],
                ],
                $_POST['id']
            );

            $success = "Member Updated Successfully";

        } else {
            App::get('database')->insert('users',
                [
                    'name' => $_POST['name'],
                    'sex' => $_POST['sex'],
                    'age' => $_POST['age'],
                    'email' => $_POST['email'],
                    'address' => $_POST['address'],
                    'phone_number' => $_POST['phone_number'],
                    'password' => $_POST['password'],
                ]
            );

            $success = "Registration Successfully";


        }


        if (isset($_SESSION['name']) && isset($_SESSION['email'])) {
            $users = App::get('database')->selectAll('users');

            return page('all-members', compact('users'), $success);

        }
        return page('subscribe', $success);

    }

}