<?php

namespace App\Http\Controllers;

use App\Models\All_Class;
use App\Models\Prev_Prof_Scheds;
use App\Models\Prev_Room_Scheds;
use App\Models\Prev_Stud_Scheds;
use App\Models\Prof_info;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ProtoneMedia\Splade\SpladeTable;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class PreviousAdminSchedulesController extends Controller
{
    
    public function previousProfessorSchedules(){

          //getting school name
        $schoolInfo = DB::table('school_infos')->where('coordinatorId', Auth::user()->id)->value('schName');

        $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
            $query->where(function ($query) use ($value) {
                Collection::wrap($value)->each(function ($value) use ($query) {
                    $query
                        ->orWhere('subCode', 'LIKE', "%{$value}%")
                        ->orWhere('profName', 'LIKE', "%{$value}%")
                        ->orWhere('studCourse', 'LIKE', "%{$value}%")
                        ->orWhere('studYear', 'LIKE', "%{$value}%")
                        ->orWhere('studSection', 'LIKE', "%{$value}%")
                        ->orWhere('totalHours', 'LIKE', "%{$value}%")
                        ->orWhere('schedDay', 'LIKE', "%{$value}%")
                        ->orWhere('startTime', 'LIKE', "%{$value}%")
                        ->orWhere('endTime', 'LIKE', "%{$value}%")
                        ->orWhere('classroom', 'LIKE', "%{$value}%")
                        ->orWhere('sem', 'LIKE', "%{$value}%");
                });
            });
        });

        $profList = Prof_info::where('profSchool',$schoolInfo)->pluck('profFname','id')->toArray();

        $Prev_Prof_Scheds = QueryBuilder::for(Prev_Prof_Scheds::class)
        ->defaultSort('-id')
        ->allowedSorts(['subCode','profName','studCourse','studYear','studSection','totalHours','schedDay','startTime','endTime','sem','classroom'])
        ->allowedFilters(['profId', $globalSearch,
            AllowedFilter::exact('profId'),
            AllowedFilter::exact('profSchool')->default($schoolInfo),
        ]);


        return view('previousSchedules.prev-sched-prof',['Prev_Prof_Scheds' => SpladeTable::for($Prev_Prof_Scheds)
            ->withGlobalSearch('Search in all fields...', ['schedDay', 'subCode'])
            ->column('subCode', label: 'Subject Code', searchable: true, sortable: true, canBeHidden: false)
            ->column('profName', label: 'Professors Name', searchable: true, sortable: true, canBeHidden: false)
            ->column('studCourse', label: 'Course', sortable: true, canBeHidden: false)
            ->column('studYear', label: 'Year', sortable: true, canBeHidden: false)
            ->column('studSection', label: 'Section', sortable: true, canBeHidden: false)
            ->column('totalHours', label: 'Units', sortable: true, canBeHidden: false)
            ->column('schedDay', label: 'Day', sortable: true, searchable: true,  canBeHidden: false)
            ->column('startTime', label: 'Start Time', sortable: true, canBeHidden: false)
            ->column('endTime', label: 'End Time', sortable: true, canBeHidden: false)
            ->column('sem', label: 'Semester', searchable: true, sortable: true, canBeHidden: false)
            ->column('classroom', label: 'Room', sortable: true, canBeHidden: false)
            ->column('action', label: 'action')
            ->selectFilter('profId', $profList)
            ->paginate(15),
        ]);

    }


    public function previousRoomSchedules(){

        //getting school name
        $schoolInfo = DB::table('school_infos')->where('coordinatorId', Auth::user()->id)->value('schName');

        $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
            $query->where(function ($query) use ($value) {
                Collection::wrap($value)->each(function ($value) use ($query) {
                    $query
                        ->orWhere('roomNumber', 'LIKE', "%{$value}%")
                        ->orWhere('profName', 'LIKE', "%{$value}%")
                        ->orWhere('subCode', 'LIKE', "%{$value}%")
                        ->orWhere('studCourse', 'LIKE', "%{$value}%")
                        ->orWhere('studYear', 'LIKE', "%{$value}%")
                        ->orWhere('studSection', 'LIKE', "%{$value}%")
                        ->orWhere('startTime', 'LIKE', "%{$value}%")
                        ->orWhere('endTime', 'LIKE', "%{$value}%")
                        ->orWhere('schedDay', 'LIKE', "%{$value}%")
                        ->orWhere('sem', 'LIKE', "%{$value}%");
                });
            });
        });


        $Prev_Room_Scheds = QueryBuilder::for(Prev_Room_Scheds::class)
        ->defaultSort('-id')
        ->allowedSorts(['roomNumber','profName','subCode','studCourse','studYear','studSection','totalHours','schedDay','startTime','endTime','sem'])
        ->allowedFilters(['roomNumber','schedDay', $globalSearch,
            AllowedFilter::exact('roomNumber'),
            AllowedFilter::exact('profSchool')->default($schoolInfo),
        ]);
    
        $roomList = Room::where('roomSchool',$schoolInfo)->pluck('roomNumber','roomNumber')->toArray();
    
        return view('previousSchedules.prev-sched-room',['Prev_Room_Scheds' => SpladeTable::for($Prev_Room_Scheds)
            ->withGlobalSearch('Search in all fields...', ['roomNumber','subCode',
            'schedDay','studCourse',
            'studYear','studSection',
            'startTime','endTime'])
            ->column('roomNumber', label: 'Room Number',searchable: true, sortable: true, canBeHidden: false)
            ->column('profName', label: 'Professors Name',searchable: true, sortable: true, canBeHidden: false)
            ->column('subCode', label: 'Subject Code',searchable: true, sortable: true, canBeHidden: false)
            ->column('studCourse', label: 'Course',searchable: true, sortable: true, canBeHidden: false)
            ->column('studYear', label: 'Year',searchable: true, sortable: true, canBeHidden: false)
            ->column('studSection', label: 'Section',searchable: true, sortable: true, canBeHidden: false)
            ->column('totalHours', label: 'Units',searchable: true, sortable: true, canBeHidden: false)
            ->column('schedDay', label: 'Day', searchable: true, sortable: true, canBeHidden: false)
            ->column('startTime', label: 'Start Time',searchable: true, sortable: true, canBeHidden: false)
            ->column('endTime', label: 'End Time', sortable: true, canBeHidden: false)
            ->column('sem', label: 'Semester', sortable: true, canBeHidden: false)
            ->column('action', label: 'Action')
            ->selectFilter('roomNumber', $roomList)
            ->paginate(15),
        ]);
        
    }


    public function previousClassSchedules(){

        //getting school name
        $schoolInfo = DB::table('school_infos')->where('coordinatorId', Auth::user()->id)->value('schName');

        $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
            $query->where(function ($query) use ($value) {
                Collection::wrap($value)->each(function ($value) use ($query) {
                    $query
                        ->orWhere('studCourse', 'LIKE', "%{$value}%")
                        ->orWhere('studYear', 'LIKE', "%{$value}%")
                        ->orWhere('studSection', 'LIKE', "%{$value}%")
                        ->orWhere('subcode', 'LIKE', "%{$value}%")
                        ->orWhere('profName', 'LIKE', "%{$value}%")
                        ->orWhere('schedDay', 'LIKE', "%{$value}%")
                        ->orWhere('classroom', 'LIKE', "%{$value}%")
                        ->orWhere('startTime', 'LIKE', "%{$value}%")
                        ->orWhere('endTime', 'LIKE', "%{$value}%")
                        ->orWhere('sem', 'LIKE', "%{$value}%");
                });
            });
        });

        $Prev_Stud_Scheds = QueryBuilder::for(Prev_Stud_Scheds::class)
        ->defaultSort('-id')
        ->allowedSorts(['studCourse','studYear','subCode','studSection','subCode','profName','schedDay','startTime','endTime','totalHours','classroom','sem'])
        ->allowedFilters(['studCourse','studYear', 'studSection', $globalSearch,
            AllowedFilter::exact('studCourse'),
            AllowedFilter::exact('studYear'),
            AllowedFilter::exact('studSection'),
            AllowedFilter::exact('schName')->default($schoolInfo),
        ]);

        $courseName = All_Class::where('schName',$schoolInfo)->pluck('course','course')->toArray();
        $courseYear = All_Class::where('schName',$schoolInfo)->pluck('year','year')->toArray();
        $courseSection = All_Class::where('schName',$schoolInfo)->pluck('section','section')->toArray();

        return view('previousSchedules.prev-sched-class',['Prev_Stud_Scheds' => SpladeTable::for($Prev_Stud_Scheds)
        ->withGlobalSearch('Search in all fields...', ['studCourse','studYear',
        'studSection','subCode',
        'startTime','endTime',
        'classroom','schedDay'])
        ->column('studCourse', label: 'Course', searchable: true, sortable: true, canBeHidden: false)
        ->column('studYear', label: 'Year', searchable: true, sortable: true, canBeHidden: false)
        ->column('studSection', label: 'Section' , searchable: true, sortable: true, canBeHidden: false)
        ->column('subCode', label: 'Subject Code', sortable: true, canBeHidden: false)
        ->column('profName', label: 'Professors Name', sortable: true, canBeHidden: false)
        ->column('schedDay', label: 'Day' , searchable: true, sortable: true, canBeHidden: false)
        ->column('startTime', label: 'Start Time' , searchable: true, sortable: true,)
        ->column('endTime', label: 'End Time', searchable: true, sortable: true, canBeHidden: false)
        ->column('totalHours', label: 'Units', searchable: true, sortable: true, canBeHidden: false)
        ->column('classroom', label: 'Room Number', searchable: true, sortable: true, canBeHidden: false)
        ->column('sem', label: 'Semester', searchable: true, sortable: true, canBeHidden: false)
        ->column('action', label: 'Action')
        ->selectFilter('studCourse', $courseName)
        ->selectFilter('studYear', $courseYear)
        ->selectFilter('studSection', $courseSection)
        ->paginate(15),]);

    }


}
