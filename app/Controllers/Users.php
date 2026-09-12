<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin',
                'fullname' => 'patrick',
                'role' => 'Administrator'
            ],
            [
                'username' => 'manager',
                'fullname' => 'archie',
                'role' => 'Manager'
            ],
            [
                'username' => 'cashier1',
                'fullname' => 'silayan',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier2',
                'fullname' => 'calabia',
                'role' => 'Cashier'
            ],
            [
                'username' => 'staff',
                'fullname' => 'ted',
                'role' => 'Staff'
            ]
        ];
        return view ('users', ['users' => $users]);
    }
}