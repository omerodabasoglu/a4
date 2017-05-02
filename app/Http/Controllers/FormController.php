<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class FormController extends Controller
{
  /**
  *
  * Display the form
  */
  public function index(Request $request) {

      return view('college.index');

  }

  /**
    * POST
    * /profiler
    * Process the form for adding a new college
    */
    public function storeNewCollege(Request $request) {
        # Custom error message
        # $messages = [
        #    'author_id.not_in' => 'Author not selected.',
        #];
        #$this->validate($request, [
        #    'title' => 'required|min:3',
        #    'published' => 'required|numeric',
        #    'cover' => 'required|url',
        #    'purchase_link' => 'required|url',
        #    'author_id' => 'not_in:0',
        #], $messages);

        # Add new college to database
        $college = new College();
        $college->title = $request->title;
        $college->published = $request->published;
        $college->cover = $request->cover;
        $college->purchase_link = $request->purchase_link;
        $college->author_id = $request->author_id;
        $college->user_id = $request->user()->id;
        $college->save();
        # Now handle tags.
        # Note how the book has to be created (save) first *before* tags can
        # be added; this is because the tags need a book_id to associate with
        # and we don't have a book_id until the book is created.
        $tags = ($request->tags) ?: [];
        $college->tags()->sync($tags);
        $college->save();
        Session::flash('message', 'The '.$request->title.' has been added to your school profile.');
        # Redirect the user to book index
        return redirect('/profiler');
    }


}
