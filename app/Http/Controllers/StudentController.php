<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StuRecord;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::latest()->get();

        return view('pages.student.index', compact('students'));
    }

    public function save(Request $request)
    {
        $data = $request->validate([
            'stu_name' => ['required', 'string', 'max:255'],
            'stu_dob' => ['required', 'date'],
            'stu_address' => ['nullable', 'string', 'max:255'],
            'stu_status' => ['required', 'in:active,inactive'],
        ]);

        Student::create($data);

        return redirect()->route('student')->with('success', 'Student created successfully.');
    }

    public function delete($stu_id)
    {
        $student = Student::findOrFail($stu_id);
        $student->delete();

        return redirect()->route('student')->with('success', 'Student deleted successfully.');
    }

    public function edit($stu_id)
    {
        $student = Student::findOrFail($stu_id);

        return view('pages.student.edit', compact('student'));
    }

    public function update(Request $request, $student_id)
    {
        $student = Student::findOrFail($student_id);

        $data = $request->validate([
            'stu_name' => ['required', 'string', 'max:255'],
            'stu_dob' => ['required', 'date'],
            'stu_address' => ['nullable', 'string', 'max:255'],
            'stu_status' => ['required', 'in:active,inactive'],
        ]);

        $student->update($data);

        return redirect()->route('student')->with('success', 'Student updated successfully.');
    }

    public function vewRecords($stu_id)
    {
        $student = Student::findOrFail($stu_id);
        $stuRecords = StuRecord::where('stu_id', $stu_id)->latest('date')->get();

        return view('pages.student.manage', compact('student', 'stuRecords'));
    }

    public function saveRecord(Request $request)
    {
        $data = $request->validate([
            'stu_id' => ['required', 'exists:students,id'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'date' => ['required', 'date'],
        ]);

        StuRecord::create($data);

        return redirect()->route('student.manage', $data['stu_id'])
            ->with('success', 'Student record added successfully.');
    }
}
