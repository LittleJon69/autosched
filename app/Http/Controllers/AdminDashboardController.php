<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Department;
use App\Models\Ongoing_Class_With_Subs;
use App\Models\Prof_info;
use App\Models\Room;
use App\Models\School_info;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    public function create(){

        // getting coordinator id
        $coorId = Auth::user()->id;

        $schName = School_info::where('coordinatorId',$coorId)->value('schName');

        $subjects = Subject::where('subSchool',$schName)->distinct('subCode')->count('subCode');

        $departments = Department::where('schName',$schName)->distinct('deptCode')->count('deptCode');

        $courses = Course::where('courseSchool',$schName)->distinct('courseName')->count('courseName');

        $professors = Prof_info::where('profSchool',$schName)->distinct('email')->count('email');

        $rooms = Room::where('roomSchool',$schName)->distinct('roomNumber')->count('roomNumber');

        $unitsSum = DB::table('ongoing_subjects')->where('subSchool',$schName)->sum('subUnits');

        $hoursPerWeek = 42;

        $capacity = $hoursPerWeek * $professors; 

        return view('dashboard', compact('subjects', 'departments', 'professors', 'courses', 'capacity', 'unitsSum', 'rooms'));

    }
}
