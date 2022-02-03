<?php


namespace App\classes;
use App\classes\Users;

class Calculator
{
    public $firstName=10;
    protected $secondName=20;
    private $operator=30;
    public $result;
    public $users;

    public function __construct($data)
    {
        $this->firstName    = $data['first_number'];
        $this->secondName   = $data['second_number'];
        $this->operator     = $data['operator'];

    }


    public function index()
    {
        switch ($this->operator)
        {
            case '+':
                $this->result = $this->add();
                break;
            case '-':
                $this->result = $this->sub();
                break;
            case '*':
                $this->result = $this->multiplication();
                break;
        }
        return $this->result;
    }
    protected function add()
    {
        return $this->firstName + $this->secondName ;
    }
    protected function sub()
    {
        return $this->firstName - $this->secondName ;
    }
    protected function multiplication()
    {
        return $this->firstName * $this->secondName ;
    }
}