<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\computer;
use App\Models\issues;

class ThesisController extends Controller
{
    public function index()
    {
        $students = issues::with('computer')->paginate(10);
        return view("home", compact("students"));
    }
    public function create()
    {
        $students = issues::all();
        $computers = computer::all(); // Lấy danh sách sinh viên để chọn
        return view('create', compact('computers','students'));
    }
    public function destroy($id)
    {
        $students = issues::findOrFail($id);
        $students->delete();

        return redirect()->route('home')->with('success', 'Đồ án đã được xóa thành công!');
    }
    public function store(Request $request)
    {
    $request->validate([
        'reported_by' => 'required|max:100',
        'reported_date' => 'required|date',
        'urgency' => 'required|max:50',
        'status' => 'required|max:50',
    ]);
    issues::create($request->all());
    return redirect()->route('home')->with('success', 'Đồ án đã được thêm thành công!');
    }
    
    public function edit($id)
    {
        $students = issues::findOrFail($id);
        $computers = computer::all();
        return view('edit', compact('students', 'computers'));
    }
    
    public function update(Request $request, $id) {
        // Kiểm tra dữ liệu đầu vào (validation)
        $request->validate([
            'reported_by' => 'required|max:100',
            'reported_date' => 'required|date',
            'urgency' => 'required|max:50',
            'status' => 'required|max:50',
        ]);
    
        $students = issues::find($id);
        
        $students->update($request->all());
    
        return redirect()->route('home')->with('success', 'Đồ án được cập nhật thành công');
    }
    public function show($id)
    {
        $students = issues::findOrFail($id);
        $computers = computer::all();
        return view('show', compact('students', 'computers'));
    }
    

}