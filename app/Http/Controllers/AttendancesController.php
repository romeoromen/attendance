<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Attendance;

class AttendancesController extends Controller
{
    public function index() {
        $attendances = Attendance::latest()->get();
        return view('attendances.index', ['attendances' => $attendances]);
    }
    public function create()
    {
        return view('attendances.attend');
    }
}
