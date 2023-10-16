<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Models\Department;

class AdminController extends Controller
{
    //

    public function index () {
        $departments = Department::all();
        return view ('admin.index', compact('departments'));
    }

    public function add_department () {
        return view ('admin.add_department');
    }

    public function save_department(Request $request) {
        $dept_validation = $request->validate([
            'department_name' => 'required'
        ]);
        $department = new Department();
        $save_dept = $department->create($dept_validation);
        if($save_dept) {
            return redirect('/admin');
            Alert::success('Categpry Added Successfully', 'Welcome to your dashboard');
        }
        return redirect()->back();
        Alert::error('Categpry not added', 'Sorry Department not added');
    }

    public function edit_department ($id) {
        $to_be_updated = Department::findOrFail($id);
        return view ('admin.update_department', compact('to_be_updated'));
    }

    public function update_department (Request $request ,$id) {
        $dept_update_validation = $request->validate([
            'department_name' => 'required'
        ]);
        $department_update = Department::findOrFail($id);
        $department_update->department_name = $dept_update_validation['department_name'];
        $update_dept = $department_update->save();
        if($update_dept) {
            return redirect('/admin')->with('update_department', 'Department updated successfully');
        }
        return redirect()->back()->with('update_department', 'Department not updated');
    }


    public function delete_department ($id) {
        $to_be_deleted = Department::findOrFail($id)->delete();
        if($to_be_deleted) {
            return redirect('/admin')->with('delete_department', 'Department deleted successfully');
        }
        return redirect()->back()->with('delete_department', 'Department not deleted');
    }
}
