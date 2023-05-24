<?php

namespace App\Http\Controllers;

use App\Models\All_Class;
use Illuminate\Support\Facades\Auth;
use ProtoneMedia\Splade\SpladeTable;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use ProtoneMedia\Splade\Facades\Toast;
use Illuminate\Http\Request;

class ClassListController extends Controller
{

    public function index(){

        //getting coordinator Id
        $coordinatorId = Auth::user()->id;

        //finding administrator id using coordinator id
        $administratorId = DB::table('coor_infos')->where('id', $coordinatorId)->value('coorAdminId');

        // getting school name
        $schoolInfo = DB::table('school_infos')->where('coordinatorId', $administratorId)->value('schName');

        //finding coordinator department room
        $course = DB::table('courses')->where('courseSchool', $schoolInfo)->pluck('courseName', 'courseName')->toArray();

        $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
            $query->where(function ($query) use ($value) {
                Collection::wrap($value)->each(function ($value) use ($query) {
                    $query
                        ->orWhere('course', 'LIKE', "%{$value}%")
                        ->orWhere('year', 'LIKE', "%{$value}%")
                        ->orWhere('section', 'LIKE', "%{$value}%");
                });
            });
        });

        $All_Class = QueryBuilder::for(All_Class::class)
        ->defaultSort('course')
        ->allowedSorts(['course'])
        ->allowedFilters([$globalSearch,
            AllowedFilter::exact('course'),
            AllowedFilter::exact('schName')->default($schoolInfo),
        ]);

        return view('coor.class-list',['All_Class' => SpladeTable::for($All_Class)
        ->withGlobalSearch('Search in all fields...', ['course', 'year', 'section'])
        ->column('course', label: 'Course', searchable: true, sortable: true, canBeHidden: false)
        ->column('year', label: 'Year', searchable: true, sortable: true, canBeHidden: false)
        ->column('section', label: 'Section', searchable: true, sortable: true, canBeHidden: false)
        ->column('action', label: 'Action')
        ->selectFilter('course', $course)
        ->paginate(5),]);

    }

    public function destroy(All_Class $All_Class){

        $All_Class->delete();

        Toast::success('Class Deleted Successfully. ')
        ->success()
        ->rightTop()
        ->backdrop()
        ->autoDismiss(1.5);

        return redirect()->back();

    }
    
}
