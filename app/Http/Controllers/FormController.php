<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institution;
use App\Sport;

use Session;

class FormController extends Controller
{
    public function index(Request $request) {

        $institutions = Institution::orderBy('college')->get();

        $newInstitutions = $institutions->sortByDesc('created_at')->take(8);

        return view('college.index')->with([
            'institutions' => $institutions,
            'newInstitutions' => $newInstitutions,
        ]);

}

    /**
    * /{id}
    * Shows individual institution
    */
    public function show($id) {
        $institution = Institution::find($id);
        if(!$institution) {
            Session::flash('message', 'The college could not be found.');
            return redirect('/');
        }
        $next = $institution->id + 1;
        $previous = $institution->id -1;
        return view('college.show')->with([
            'institution' => $institution,
            'next' => $next,
            'previous' => $previous,

        ]);
    }


    /**
    * ./sports
    * Display the form to add a new institution
    */
    public function addNewInstitution(Request $request) {

        $sportsForCheckboxes = Sport::getSportsForCheckboxes();

        return view('college.sports')->with([
            'sportsForCheckboxes' => $sportsForCheckboxes,
        ]);

    }

    /**
      * POST
      * ./sports
      * Process the form for adding a new institution
      */
      public function storeNewInstitution(Request $request) {

          $this->validate($request, [
              'college' => 'required|alpha|min:3',
              'level' => 'required',
              'type' => 'required',
              'logo' => 'required|url',
          ]);

          # Add new Institution to database
          $institution = new institution();
          $institution->college = $request->college;
          $institution->level = $request->level;
          $institution->type = $request->type;
          $institution->logo = $request->logo;

          #$institution->user_id = $request->user()->id;
          $institution->save();

          # Sports are syncd here

          $sports = ($request->sports) ?: [];
          $institution->sports()->sync($sports);
          $institution->save();
          Session::flash('message', 'The '.$request->college.' has been added to the database.');

          # Redirecting to the database
          return redirect('/');
      }

      /**
     * GET
     * /edit/{id}
     * Show form to edit an entry
     */
     public function edit($id) {
         $institution = Institution::with('sports')->find($id);
         if(is_null($institution)) {
             Session::flash('message', 'The institution was not found.');
             return redirect('/');
         }
         $sportsForCheckboxes = Sport::getSportsForCheckboxes();

         $sportsForThisInstitution = [];
         foreach($institution->sports as $sport) {
             $sportsForThisInstitution[] = $sport->name;
         }

         return view('college.edit')->with([
             'id' => $id,
             'institution' => $institution,
             'sportsForCheckboxes' => $sportsForCheckboxes,
             'sportsForThisInstitution' => $sportsForThisInstitution,
         ]);
     }
     /**
     * POST
     * /edit
     * Process form to save edits to an institution
     */
     public function saveEdits(Request $request) {

         $this->validate($request, [
             'college' => 'required|alpha|min:3',
             'level' => 'required',
             'type' => 'required',
             'logo' => 'required|url',
         ]);

         $institution = Institution::find($request->id);
         # Edit institution in the database
         $institution->college = $request->college;
         $institution->level = $request->level;
         $institution->type = $request->type;
         $institution->logo = $request->logo;
         # If there were sports selected...
         if($request->sports) {
             $sports = $request->sports;
         }
         # If there were no sports selected (i.e. no sports in the request)
         # default to an empty array of sports
         else {
             $sports = [];
         }

         $institution->sports()->sync($sports);
         $institution->save();
         Session::flash('message', 'Your changes to '.$institution->college.' were saved.');
         return redirect('./'.$request->id);
     }

     /**
     * GET
     * Page to confirm deletion
     */
     public function confirmDeletion($id) {
         # Get the Institution to be deleted
         $institution = Institution::find($id);
         if(!$institution) {
             Session::flash('message', 'College not found.');
             return redirect('/');
         }
         return view('college.delete')->with('institution', $institution);
     }
     /**
     * POST
     * Actually delete the institution
     */
     public function delete(Request $request) {
         # Get the institution to be deleted
         $institution = Institution::find($request->id);
         if(!$institution) {
             Session::flash('message', 'Deletion failed; college not found.');
             return redirect('/');
         }
         $institution->sports()->detach();
         $institution->delete();
         # Finish
         Session::flash('message', $institution->college.' was deleted.');
         return redirect('/');
     }
  }
