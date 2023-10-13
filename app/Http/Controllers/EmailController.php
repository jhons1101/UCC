<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;


class EmailController extends Controller
{
    public function contact(Request $request)
    {
        
        try {

            Mail::to("stiven.vargas@iteria.com.co")->send(new ContactMail($request->all()));
            return redirect()->back();

            // return  redirect()->route('post.index')
            //             ->with('msgStatus',     1);
        
        } catch (\Illuminate\Database\QueryException $ex) {
            dd($ex);
            // return  redirect()->route('contacto.index')
            //         ->with('sqlerror',      $ex->errorInfo[2]);
        }
    }
}
