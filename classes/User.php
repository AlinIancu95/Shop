<?php


class User extends Base
{
    const STATUS_ACTIVE_PAID=1;

    const STATUS_ACTIVE=2;

    const STATUS_INACTIVE=0;

    public $firstName;

    public $lastName;

    public $email;

    public $password;

    public $role;

    public $avatar;

    public $status;


    public function getAddresses()
    {
        $addresses =[];

        foreach (Address::findBy('userId', $this->getId()) as $item){
            $addresses[]=new Address($item->getId());
        }

        return $addresses;
    }

    public function getCarts(){

    }

    public static function getTableName()
    {
        return 'users';
    }
}