<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class expenceController extends Controller
{
    public function myexpense_view():View{
        return view('includes.myexpense');
    }
    public function newsfeed_view():View{
    return view('includes.newsfeed');
    }
    public function other_expense_view():View{
    return view('includes.other_expense');
    }
}
