<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Size;
use Validator;
class SizeController extends Controller
{
   public function size()
    {
        $sizes =Size::get();
        return view('backend.size.index',compact('sizes'));
    }
     public function add()
    {
         return view('backend.size.create');
    }
     public function store(Request $request)
    {
         $messages = [
            'size_name.required'=>'Enter Size name',
            'size_name.string' => 'Size name must contain only text.',
            'size_name.min'=>'Size name must be at least 3 characters.',
            'size_name.unique'=>'Size name already exists',
         ];

         $validator = Validator::make($request->all(),[
            'size_name'=>'required|string|unique:sizes,size_name|min:3'
         ],$messages);

         if($validator->fails())
            {
                return redirect()->back()->withErrors($validator)->withInput();
            }
        else
        {
            $objSize = new Size;
            $objSize->size_name  = $request->size_name;
            $objSize->save();
            return redirect('swaj/size')->with('success','Size added successfully');
        }
    }
    public function changeStatus($id)
    {
        $objSize = Size::find($id);
        $objSize->status = !$objSize->status;
        $objSize->save();
        return redirect('swaj/size')->with('success','Size status change successfully');
    }
    public function delete($id)
    {
        $objSize = Size::find($id);
        $objSize->delete();
        return redirect('swaj/size')->with('success','Size deleted  successfully');
   
    }
    public function edit($id)
    {
         $objSize = Size::find($id);
        return view('backend.size.edit',compact('objSize'));
       
    }
    public function update(Request $request)
    {
        $messages = [
            'size_name.required'=>'Enter Size name',
            'size_name.string' => 'Size name must contain only text.',
            'size_name.min'=>'Size name must be at least 3 characters.',
            'size_name.unique'=>'Size name already exists',
         ];

         $validator = Validator::make($request->all(),[
           'size_name' => 'required|string|min:3|unique:sizes,size_name,' . $request->sid
         ],$messages);

         if($validator->fails())
            {
                return redirect()->back()->withErrors($validator)->withInput();
            }
        else
        {
            $objSize = Size::find($request->sid);
            $objSize->size_name  = $request->size_name;
            $objSize->save();
            return redirect('swaj/size')->with('success','Size updated successfully');
        }
    }
}
