<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\founders_data_model;
class founders_data_controller extends Controller
{
    public function index(Request $display_data)
    {
        $display_data=founders_data_model::get();
        return view('dashboard' ,compact('display_data'));
    }
    public function view_all(Request $view_all, int $id)
    {
        $view_all=founders_data_model::findOrFail($id);
        return view('view_all', compact('view_all'));
    }
    public function edit(Request $request, int $id)
    {
        $request=founders_data_model::findOrFail($id);
        return view('update_data.founders', compact('request'));
    }
    public function insert(Request $insert_data)
    {
        $insert_data->validate([
            'title'=>'string|required|max:255',
            'description'=>'string|required|max:255',
            'cofounders'=>'string|required|max:255',
            'problem'=>'string|required|max:255',
            'solution'=>'string|required|max:255',
            'funds'=>'string|required|max:255',
            'youtube'=>'string|required|max:555',
            'business_model'=>'image|required|mimes:jfif,jpeg,jpg,png,gif|max:2048',
            'business_plan'=>'image|required|mimes:jfif,jpeg,jpg,png,gif|max:2048',

        ]);



        if($insert_data->has('business_model'))
        {
            $file=$insert_data->file('business_model');
            $extension=$file->getClientOriginalExtension();
            $filename2=time().'.'.$extension;

            $path2='uploads/business_model/';
            $file->move($path2,$filename2);
        }
        if($insert_data->has('business_plan'))
        {
            $file=$insert_data->file('business_plan');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;

            $path='uploads/business_plan/';
            $file->move($path,$filename);
        }
        founders_data_model::create([
            'title'=>$insert_data->title,
            'description'=>$insert_data->description,
            'cofounders'=>$insert_data->cofounders,
            'problem'=>$insert_data->problem,
            'solution'=>$insert_data->solution,
            'funds'=>$insert_data->funds,
            'youtube'=>$insert_data->youtube,
            'business_plan'=>$path.$filename,
            'business_model'=>$path2.$filename2,
        ]);
        return redirect ('dashboard')->with('status','Data has been added');
    }
    public function data_manage(Request $request, int $id)
    {
       $request=founders_data_model::findOrFail($id);
       return redirect('data_manage', compact('request'));
    }
    public function destroy(Request $delete_data, int $id)
    {
        $delete_data=founders_data_model::findOrFail($id);
        $public_path=public_path($delete_data->business_plan);
        $public_path1=public_path($delete_data->business_model);
        if(file_exists($public_path))
        {
            unlink($public_path);
        }
        if(file_exists($public_path1))
        {
            unlink($public_path1);
        }
        $delete_data->delete();
        return redirect('dashboard')->with('status', 'Data has been deleted');
    }
    public function update_business_plan(Request $update_image, int $id)
        {
        $update_image->validate([
            'business_plan'=>'image|required|mimes:jpeg,jpg,png,gif|max:2048'
        ]);

        if($update_image->has('business_plan'))
        {
            $old_image=founders_data_model::findOrFail($id);
            $public_path=public_path($old_image->business_plan);
            if(file_exists($public_path))
            {
                unlink($public_path);
            }
            $file=$update_image->file('business_plan');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;

            $path='uploads/business_plan/';
            $file->move($path,$filename);
        }
        $update_image=founders_data_model::findOrFail($id)->update([
            'business_plan'=>($path.$filename)
        ]);
        return redirect()->back();
    }
    public function update_business_model(Request $update_image, int $id)
    {
        $update_image->validate([
            'business_model'=>'image|required|mimes:jpeg,jpg,png,gif|max:2048'
        ]);

        if($update_image->has('business_model'))
        {
            $old_image=founders_data_model::findOrFail($id);
            $public_path=public_path($old_image->business_model);
            if(file_exists($public_path))
            {
                unlink($public_path);
            }
            $file=$update_image->file('business_model');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;

            $path='uploads/business_model/';
            $file->move($path,$filename);
        }
        $update_image=founders_data_model::findOrFail($id)->update([
            'business_model'=>($path.$filename)
        ]);

        return redirect()->back();
    }

    public function update_founders_data(Request $update_founders_data, int $id)
    {
        $update_founders_data->validate([
            'title'=>'string|required|max:255',
            'description'=>'string|required|max:255',
            'cofounders'=>'string|required|max:255',
            'problem'=>'string|required|max:255',
            'solution'=>'string|required|max:255',
            'funds'=>'string|required|max:255',
            'youtube'=>'string|required|max:555',
            
        ]);

        $update_founders_data=founders_data_model::findOrFail($id)->update([
            'title'=>$update_founders_data->title,
            'description'=>$update_founders_data->description,
            'cofounders'=>$update_founders_data->cofounders,
            'problem'=>$update_founders_data->problem,
            'solution'=>$update_founders_data->solution,
            'funds'=>$update_founders_data->funds,
            'youtube'=>$update_founders_data->youtube,
        ]);

        return redirect('dashboard')->with('status','Data has been updated');
    }
    
}
