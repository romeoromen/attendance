<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Attendance;
use App\Http\Resources\AttendanceResource;

class AttendancesController extends Controller
{
    public function index()
    {
        $attendances = Attendance::latest()
            ->ignoreFlagged()
            ->paginate(5); //1ページに５件取得

        return AttendanceResource::collection($attendances);
    }

    public function show(Attendance $attendance)
    {
        return new AttendanceResource($attendance);
    }

    public function store(Request $request)
    {
        $attendance = $this->validate( $request, [
            'name'  => 'required|min:3|max:50',
            'email' => 'required|email',
            'body'  => 'required|min:3',
        ] );

        $attendance = Attendance::create($attendance);

        return new AttendanceResource($attendance);
    }
}
