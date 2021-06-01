<?php
class usersController
{
    // public function register()
    // {
    //     if (isset($_POST['submit'])) {
    //         $options = ['cost' => 12];
    //         $password = password_hash($_POST['password'], PASSWORD_BCRYPT, $options);
    //         $data = array(
    //             'username' => $_POST['username'],
    //             'email'    => $_POST['email'],
    //             'password' => $password,
    //         );
    //         $result = User::createUser($data);
    //         if ($result === 'ok') {
    //             Session::set('success', 'Compte crée');
    //             Redirect::to('login');
    //         } else {
    //             echo $result;
    //         }
    //     }
    // }


    public function auth() {
        if (isset($_POST['submit'])) {
            $data['username'] = $_POST['username'] ;
            $result = User::login($data);
            if ($result->username === $_POST['username'] && $result->password === $_POST['password']) 
            {
                $_SESSION['logged'] = true;
                $_SESSION['username'] = $result->username;
                Redirect::to('hooome1');
            } else {
                Session::set('error', 'user name ou mot de passe est incorrect');
                Redirect::to('login');
            }
        }
    }

    static public function logout(){
        session_destroy();
    }
}