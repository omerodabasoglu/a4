<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
  /**
  *
  * Process the form and show the entries
  */
  public function entries(Request $request) {
      $this->validate($request, [
          'highschool' => 'required|alpha|min:3|max:40',
          'classof' => 'required',
          'college' => 'required',
          'students' => 'required',
          'totalStudents' => 'required',
      ]);

      $highschool = $request->input('highschool');
      $classof = $request->input('classof');
      $college = $request->input('college');
      $students = $request->input('students');
      $totalStudents = $request->input('totalStudents');



      return view('college.entries')->with([
            'highschool' => $highschool,
            'classof' => $classof,
            'college' => $college,
            'students' => $students,
            'totalStudents' => $totalStudents,
      ]);

}
}
