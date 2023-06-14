<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Divisi;
use App\Models\Employee;

class DashboardController extends Controller
{
    public function index(){
        $totalCounts = $this->getTotalCounts();
        $users = User::all();
        return view('dashboard.index', compact('users', 'totalCounts'));
    }

    public function getTotalCounts(){
        $totalUsers = User::count();
        $totalDivisi = Divisi::count();
        $totalEmployee = Employee::count();
        $totalCounts = [
            'totalUsers' => $totalUsers,
            'totalDivisi' => $totalDivisi,
            'totalEmployee' => $totalEmployee
        ];
        return $totalCounts;
    }
}
