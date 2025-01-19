<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\investors_data_model;
class investors_controller extends Controller
{
    public function investors(Request $display_data)
    {
        $display_data=investors_data_model::get();
        return view('investors_file.investors_dashboard', compact('display_data'));
    }
    public function insert_data(Request $insert)
    {
        $insert->validate([
            'profile_pic'=>'image|required|mimes:jpeg,jpg,png,gif,jfif|max:2048',
            'name'=>'string|required|max:255',
            'years'=>'string|required|max:255',
            'risk'=>'string|required|max:255',
            'preferred_industry'=>'string|required|max:255',
            'net_worth'=>'string|required|max:255',
            'investable_amount'=>'string|required|max:255',
        ]);
        if($insert->has('profile_pic'))
        {
            $file=$insert->file('profile_pic');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;

            $path='investors/profile/';
            $file->move($path,$filename);
        }
        investors_data_model::create([
            'profile_pic'=>$path.$filename,
            'name'=>$insert->name,
            'years'=>$insert->years,
            'risk'=>$insert->risk,
            'preferred_industry'=>$insert->preferred_industry,
            'net_worth'=>$insert->net_worth,
            'investable_amount'=>$insert->investable_amount,
        ]);

        return redirect('investors_dashboard')->with('status', 'Data has been added');
    }
    
    public function destroy_investors(Request $delete_data, int $id)
    {
        $delete_data=investors_data_model::findOrFail($id);
        $public_path=public_path($delete_data->profile_pic);
        if(file_exists($public_path))
        {
            unlink($public_path);
        }

        $delete_data->delete();
        return redirect('investors_dashboard')->with('status', 'Data has been deleted');
    }

    public function edit_investors(Request $edit_data, int $id)
    {
        $edit_data=investors_data_model::findOrFail($id);
        return view('investors_file.update_investors_data', compact('edit_data'));
    }
    public function update_investors_image(Request $update_investors_image, int $id)
    {
        $update_investors_image->validate([
            'profile_pic'=>'image|required|mimes:jpeg,jpg,png,gif,jfif|max:2048',
            ]);

            if($update_investors_image->has('profile_pic'))
            {
                $old_image=investors_data_model::findOrFail($id);
                $public_path=public_path($old_image->profile_pic);
                if(file_exists($public_path))
                {
                    unlink($public_path);
                }
                    $file=$update_investors_image->file('profile_pic');
                    $extension=$file->getClientOriginalExtension();
                    $filename=time().'.'.$extension;
 
                    $path='investors/profile/';
                    $file->move($path,$filename);
            }
            investors_data_model::findOrFail($id)->update([
                'profile_pic'=>($path.$filename)
            ]);
            return redirect()->back();
    }

    public function update_investors_data(Request $update_investors_data, int $id)
    {
        $update_investors_data->validate([
            'name'=>'string|required|max:255',
            'years'=>'string|required|max:255',
            'risk'=>'string|required|max:255',
            'preferred_industry'=>'string|required|max:255',
            'net_worth'=>'string|required|max:255',
            'investable_amount'=>'string|required|max:255',
        ]);

        investors_data_model::findOrFail($id)->update([
            'name'=>$update_investors_data->name,
            'years'=>$update_investors_data->years,
            'risk'=>$update_investors_data->risk,
            'preferred_industry'=>$update_investors_data->preferred_industry,
            'net_worth'=>$update_investors_data->net_worth,
            'investable_amount'=>$update_investors_data->investable_amount,
        ]);
        return redirect('investors_dashboard')->with('status','Data has been updated');
    }
}