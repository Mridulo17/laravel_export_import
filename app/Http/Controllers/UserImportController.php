<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class UserImportController extends Controller
{
    public function show()
    {
        return view('users.import');
    }

    public function store(Request $request)
    {
//        $file = $request->file('file')->store('import');
////        dd($file);
//        (new UsersImport)->import($file);
//
//
//        return view('users.import');
        Excel::import(new UsersImport, request()->file('file'));
    }
}
