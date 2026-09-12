<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Patrick Calabia', 'email' => 'patrickcalabia2@gmail.com', 'phone' => '123456789'
            ],
            [
                'full_name' => 'Patrick Calabia', 'email' => 'patrickcalabia2@gmail.com', 'phone' => '123456789'
            ],
            [
                'full_name' => 'Patrick Calabia', 'email' => 'patrickcalabia2@gmail.com', 'phone' => '123456789'
            ],
            [
                'full_name' => 'Patrick Calabia', 'email' => 'patrickcalabia2@gmail.com', 'phone' => '123456789'
            ],
            [
                'full_name' => 'Patrick Calabia', 'email' => 'patrickcalabia2@gmail.com', 'phone' => '123456789'
            ]
        ];
        return view ('customers',['customers' => $customers]);
    }
}