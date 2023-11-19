<?php

namespace App\Controllers;

use App\Models\MyUsersModel;

class DashboardController extends BaseController
{
    public function index()
    {
        $usersModel = new MyUsersModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $usersModel->find($loggedUserID);
        $data = [
            'title' => 'Dashboard',
            'userInfo' => $userInfo
        ];
        return view('dashboard/index', $data);
    }
    function profile()
    {
        $usersModel = new MyUsersModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $usersModel->find($loggedUserID);
        $data = [
            'title' => 'Profile',
            'userInfo' => $userInfo
        ];
        return view('dashboard/profile22', $data);
    }
}
