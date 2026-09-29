<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class Tasks extends BaseController
{
    public function welcome()
    {
        $taskModel = new TaskModel();
        $today = date('Y-m-d');

        return view('welcome', [
            'today' => $today,
            'tasks' => $taskModel
                ->where('task_date', $today)
                ->orderBy('id', 'ASC')
                ->findAll(),
        ]);
    }

    public function index()
    {
        $taskModel = new TaskModel();

        return view('tasks', [
            'tasks' => $taskModel
                ->orderBy('task_date', 'ASC')
                ->orderBy('id', 'ASC')
                ->findAll(),
        ]);
    }

    public function profile()
    {
        $userModel = new UserModel();

        return view('profile', [
            'user' => $userModel->first(),
        ]);
    }

    public function about()
    {
        return view('about');
    }
}