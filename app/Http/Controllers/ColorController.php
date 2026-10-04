<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Color;
use Validator;
class ColorController extends Controller
{
     public function color()
    {
        $colors =Color::get();
        return view('backend.color.index',compact('colors'));
    }
     public function add()
    {
         return view('backend.color.create');
    }
     public function store(Request $request)
    {
         $messages = [
            'color_name.required'=>'Enter Color name',
            'color_name.string' => 'Color name must contain only text.',
            'color_name.min'=>'Color name must be at least 3 characters.',
            'color_name.unique'=>'Color name already exists',
         ];

         $validator = Validator::make($request->all(),[
            'color_name'=>'required|string|unique:colors,color_name|min:3'
         ],$messages);

         if($validator->fails())
            {
                return redirect()->back()->withErrors($validator)->withInput();
            }
        else
        {
            $objColor = new Color;
            $objColor->color_name  = $request->color_name;
            $objColor->save();
            return redirect('swaj/color')->with('success','Color added successfully');
        }
    }
    public function changeStatus($id)
    {
        $objColor = Color::find($id);
        $objColor->status = !$objColor->status;
        $objColor->save();
        return redirect('swaj/color')->with('success','Color status change successfully');
    }
    public function delete($id)
    {
        $objColor = Color::find($id);
        $objColor->delete();
        return redirect('swaj/color')->with('success','Color deleted  successfully');
   
    }
    public function edit($id)
    {
         $objColor = Color::find($id);
        return view('backend.color.edit',compact('objColor'));
       
    }
    public function update(Request $request)
    {
        $messages = [
            'color_name.required'=>'Enter Color name',
            'color_name.string' => 'Color name must contain only text.',
            'color_name.min'=>'Color name must be at least 3 characters.',
            'color_name.unique'=>'Color name already exists',
         ];

         $validator = Validator::make($request->all(),[
           'color_name' => 'required|string|min:3|unique:colors,color_name,' . $request->cid
         ],$messages);

         if($validator->fails())
            {
                return redirect()->back()->withErrors($validator)->withInput();
            }
        else
        {
            $objColor = Color::find($request->cid);
            $objColor->color_name  = $request->color_name;
            $objColor->save();
            return redirect('swaj/color')->with('success','Color updated successfully');
        }
    }
}
