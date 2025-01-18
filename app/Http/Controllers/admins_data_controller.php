<?php

namespace App\Http\Controllers;

use App\Models\admin_model;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class admins_data_controller extends Controller
{
    public function index(Request $request)
    {
        $request=admin_model::get();
        return view('admin.admin_dashboard' ,compact('request'));
    }
    public function about(Request $request)
    {
        $request=admin_model::get();
        return view('other_webpage.aboutus' ,compact('request'));
    }
    public function portfolio(Request $request)
    {
        $request=admin_model::get();
        return view('other_webpage.portfolio' ,compact('request'));
    }
    public function approach(Request $request)
    {
        $request=admin_model::get();
        return view('other_webpage.approach' ,compact('request'));
    }
    public function news(Request $request)
    {
        $request=admin_model::get();
        return view('other_webpage.news' ,compact('request'));
    }
    public function contact(Request $request)
    {
        $request=admin_model::get();
        return view('other_webpage.contact' ,compact('request'));
    }

    public function insert_data_for_admin(Request $request)
    {
        $request->validate([
            'about'=>'string|required|max:1000',
            'portfolio'=>'string|required|max:255',
            'approach'=>'string|required|max:255',
            'news'=>'string|required|max:2500',
            'contact'=>'string|required|max:20'
        ]);

        admin_model::create([
            'about'=>$request->about,
            'portfolio'=>$request->portfolio,
            'approach'=>$request->approach,
            'news'=>$request->news,
            'contact'=>$request->contact,
        ]);
        return redirect('admin_dashboard')->with('status', 'Data has been added');
    }
}
