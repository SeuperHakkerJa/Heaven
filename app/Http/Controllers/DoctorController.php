<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index($id) {
        $doctor = Doctor::findorfail($id);
        return view('doctor', ['doctor' => $doctor, 'schedules' => $doctor->schedules]);
    }
}
