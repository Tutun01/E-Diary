<?php

namespace App\Http\Controllers;

use App\Models\Grades;
use Illuminate\Http\Request;

class GradesController extends Controller
{
    public function enterTheGrade(Request $request)
    {
        $request->validate([
            'teacher' => "string|required",
            'subject' => "string|required",
            'grades' => "int|required|between: 1,5"
        ]);

        Grades::create([
            'teacher' => $request->get('teacher'),
            'subject' => $request->get('subject'),
            'grades' => $request->get('grades'),
        ]);

        return redirect("/");
    }
}
