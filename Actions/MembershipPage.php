<?php

namespace Actions;

use Core\App;
use Exception;

class MembershipPage
{
    /**
     *loads the membership page
     */
    public function membership()
    {
        return page('membership');
    }

    /**
     * signs in a member
     * @throws Exception
     */
    public function signIn()
    {
        $response = App::get('database')->select('users', ['email'=>$_POST['email']]);


        if (!empty($response) && ($response->password === $_POST['password'])) {

            $_SESSION['name'] = $response->name;
            $_SESSION['email'] = $response->email;
            $_SESSION['password'] = $response->password;
            $_SESSION['user_id'] = $response->id;

            return $this->allMembers();
        }

        $error = "Log in Failed Check You Details and try again";

        return page('membership', compact('error'));


    }

    /**
     * display all members
     * @throws Exception
     */
    public function allMembers()
    {
        $users = App::get('database')->selectAll('users');

        return page('all-members', compact('users'));
    }

    /**
     *logs out a user
     */
    public function logout()
    {

        $_SESSION['name'] = null;
        $_SESSION['email'] = null;
        $_SESSION['password'] = null;

        $_SESSION = array();

        session_destroy();

        $this->membership();
    }

    /**
     *deletes a member
     */
    public function deleteMember()
    {
        App::get('database')->delete('users',['id'=>$_POST['user_id']]);

        $this->allMembers();

    }

    /**
     * @throws Exception
     */
    public function viewMember()
    {
        $user = App::get('database')->select('users',['id'=>$_POST['user_id']]);

        dd(extract($user));

        return page('subscribe', compact('user'));
    }

}