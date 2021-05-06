<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Validator;


class ReportController extends Controller
{

    public function hugedatacheck()
    {
        $report = DB::table('students')->get();
        $reportcount = $report->count('id');

        return datatables()->of($report)->with('reportcount', $reportcount)->make(true);
    }



}
