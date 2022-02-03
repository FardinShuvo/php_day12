<?php


namespace App\classes;


class Users
{
    public $city='Dhaka';
    protected $country='Bangladesh';
    private $area='Kawranbazar';

    public function login()
    {
        echo 'In Login';
    }
    protected function logout()
    {
        echo 'In Logout';
    }
    private function profile()
    {
        echo 'In Profile';
    }
}