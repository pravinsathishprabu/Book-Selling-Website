<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class BookdetailsController extends Controller
{
    public function getdetails(Request $request)
    {
        $book_id = $request->id;
        $get_details = DB::table('books')->where('id',$book_id)->get();
        //return $this->buy($get_details);

        return view('desc',compact('get_details'));
    }
}
