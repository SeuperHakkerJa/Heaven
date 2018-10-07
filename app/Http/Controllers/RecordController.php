<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Record;
use App\Task;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function index($id, $task_id) {
        $patient = Patient::findorfail($id);
        return view('upload', ['patient' => $patient, 'task_id' => $task_id]);
    }

    public function store($id, $task_id, Request $request) {
        $patient = Patient::findorfail($id);
        $record = new Record();
        $record->record_body = $request->input('record');
        $record->pic = $request->input('pic');
        $record->patient_id = $id;
        $record->save();

        $task = Task::findorfail($task_id);
        $task->status = 'complete';
        $task->save();

        return redirect('/patient/'.$id)->with(['patient' => $patient]);
    }
}
