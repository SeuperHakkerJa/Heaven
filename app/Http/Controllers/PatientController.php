<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index($id) {
        $patient = Patient::findorfail($id);
        $tasks = $patient->tasks;
//        $tasks_arr = array();
//        foreach ($tasks as $task) {
//            array_push($tasks_arr, $task);
//        }
//        $sorted_tasks = array();
//        $earliest = $tasks_arr[0];
//        for($i = 0; $i < count($tasks_arr); $i++) {
//            for($j = 0; $j < count($tasks_arr); $j++) {
//                if(strtotime($earliest)>strtotime($tasks_arr[$j])) {
//                    $earliest = $tasks_arr[$j];
//                }
//                unset($tasks_arr[$j]);
//            }
//            array_push($sorted_tasks, $earliest);
//        }
//        usort($tasks_arr, 'date_compare');
        return view('patient', ['patient' => $patient, 'tasks' => $tasks, 'records' => $patient->records]);
    }
    function date_compare($a, $b)
    {
        $t1 = strtotime($a->assigned_time);
        $t2 = strtotime($b->assigned_time);
        return $t1 - $t2;
    }

    public function detail($doc_id, $pa_id) {
        $doctor = Doctor::findorfail($doc_id);
        $patient = Patient::findorfail($pa_id);
        $tasks = $patient->tasks;
        return view('patient_detail', ['doctor' => $doctor, 'patient' => $patient, 'tasks' => $tasks, 'records' => $patient->records]);
    }
}
