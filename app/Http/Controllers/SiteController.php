<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\ContactUs;

class SiteController extends Controller
{
    

    public function contact()
    {

        return view('site.contact');      
    }

    public function store(Request $request)
    {
        $this->validate(request(),[
                'name'  => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'title' => 'required',
                'body'  => 'required',
            ]);

        Mail::to($request->email)->send(new ContactMail());

        $succ = ContactUs::create(request(['name','email','phone','title','body']));

        if(!$succ){
            \Session::flash('alert-danger','حدث خطأ. من فضلك حاول مجددا لاحقا.');
            return redirect('/');
        }

        \Session::flash('alert-success','تم الإرسال بنجاح.');
        return redirect('/');
    }

}
