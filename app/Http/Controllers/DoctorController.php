<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index($id) {
        $doctor = Doctor::findorfail($id);
        return view('doctor', ['doctor' => $doctor, 'schedules' => $doctor->schedules]);
    }

    public function check($doc_id, $pa_id, $task_id) {
        $doctor = Doctor::findorfail($doc_id);
        $task = Task::findorfail($task_id);
        $task->status = 'checked';
        $task->save();
        return redirect('/doctor/'.$doc_id.'/patient/'.$pa_id)->with(['doctor' => $doctor]);
    }
}
}