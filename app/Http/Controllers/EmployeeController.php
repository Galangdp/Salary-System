<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use App\Models\Divisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    public function index(){
        $user = User::all();
        $employee = Employee::all();
        $divisi = Divisi::all();
        return view('employee.index', compact('employee', 'user', 'divisi'));
    }

    public function create(Request $request){
        $employee = $request->all();
        if($request->hasFile('photo'))
        {
            $destination_path = 'public/images/employee';
            $image = $request -> file('photo');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('photo')->storeAs($destination_path, $image_name);
            $employee['photo'] = $image_name;
        }

        Employee::create($employee);
        return redirect()->route('employee.index');
    }

    public function detail($id){
        $employee = Employee::find($id);
        return view('employee.detail', compact('employee'));
    }

    public function edit($id){
        $employee = Employee::find($id);
        return view('employee.edit', compact('employee'));
    }

    public function update(Request $request, $id){
        $data = $request->all();
        $employee = Employee::find($id);
        if($request->hasFile('photo'))
        {
            if ($employee -> photo)
            {
                Storage::delete('public/images/employee/'. $employee -> photo);
            }
            $destination_path = 'public/images/employee';
            $image = $request -> file('photo');
            $name = $image->getClientOriginalName();
            $path = $request->file('photo')->storeAs($destination_path, $name);
            $data['photo'] = $name;
        }
        $employee->update($data);
        return redirect()->route('employee.index');
    }

    public function delete($id){
        $employee = Employee::find($id);
        $employee->delete();
        return redirect()->route('employee.index');
    }
}
