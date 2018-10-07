<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index($id) {
        $patient = Patient::findorfail($id);
        return view('patient', ['patient' => $patient, 'tasks' => $patient->tasks, 'records' => $patient->records]);
    }
}
