<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Enum\WeekDay;
use App\Models\Schedule;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }
}