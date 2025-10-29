<?php

namespace App\Http\Controllers;

use App\Models\Cicle;
use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function __invoke()
    {
        $alumnes = Student::all();
        $cicles = Cicle::all();
        return view('dashboard', ['alumnes' => $alumnes, 'cicles' => $cicles]);
    }
}
