<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){
        $totalCounts = $this->getTotalCounts();
        $users = User::all();
        return view('dashboard.index', compact('users', 'totalCounts'));
    }

    public function getTotalCounts(){
        $totalUsers = User::count();
        $totalCounts = ['totalUsers' => $totalUsers];
        return $totalUsers;
    }
}
