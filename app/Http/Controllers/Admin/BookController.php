<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Books;
use Illuminate\Support\Facades\Validator;
use DB;

class BookController extends Controller
{
    public function book(Request $request)
    {
        $rules = [
            'book_name' => ['required','string'],
            'book_author' => ['required','string'],
            'rate' => ['required','integer'],
            'category' => ['required'],
            'desc' => ['required','string'],
            'book_image'=>['required'],
            'pdf'=>['required']
        ];

        $customMessages = [
            'required'=>'The :attribute field is required.',
            'rate.integer'=>'Book Rate must in the integer format'
        ]; 

         $validate =  Validator::make($request->all(),$rules,$customMessages);
        if($validate->fails()){
            return redirect('/error')->withInput()->withErrors($validate->messages());
        }
        else{

            $image = $request->book_image;

            $imageName = time().'.'.$image->getClientOriginalExtension();
            //$request->book_image -> move('asset',$imageName);
            $request->book_image->move(public_path('images'),$imageName);  

            $pdf = $request->pdf;
            $pdfName = time().'.'.$pdf->getClientOriginalExtension();
            $request->pdf->move(public_path('pdf'),$pdfName);         

            $insert = [
                'book_name'=>$request->book_name,
                'book_author'=>$request->book_author,
                'rate'=>$request->rate,
                'book_image'=>$imageName,
                'pdf'=>$pdfName,
                'category'=>$request->category,
                'desc'=>$request->desc
            ];
            if(DB::table('books')->insert($insert)){
                return back();
            }

        }        
    }

    public function getBook()
    {
        $get_books = DB::table('books')->get();
        return view('dashboard',compact('get_books'));
    }
}
