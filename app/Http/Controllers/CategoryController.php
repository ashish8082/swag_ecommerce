<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Category;
use Validator;
class CategoryController extends Controller
{
    public function category()
    {
        $categories =Category::get();
        return view('backend.category.index',compact('categories'));
    }
    public function add()
    {
         return view('backend.category.create');
    }
    public function store(Request $request)
    {
         $messages = [
            'category_name.required'=>'Enter category name',
            'category_name.string' => 'Category name must contain only text.',
            'category_name.min'=>'Category name must be at least 3 characters.',
            'category_name.unique'=>'Category name already exists',
         ];

         $validator = Validator::make($request->all(),[
            'category_name'=>'required|string|unique:categories,category_name|min:3'
         ],$messages);

         if($validator->fails())
            {
                return redirect()->back()->withErrors($validator)->withInput();
            }
        else
        {
            $objCategory = new Category;
            $objCategory->category_name  = $request->category_name;
            $objCategory->description  = $request->description;
            if($request->hasFile('image'))
                {
                        $image = $request->file('image');
                        $imageName = time() . '_' . $image->getClientOriginalName();
                        $image->move(public_path('uploads/categories'), $imageName);
                        $objCategory->image = $imageName;

                }
            $objCategory->save();
            return redirect('swaj/category')->with('success','Category added successfully');
        }
    }
    public function changeStatus($id)
    {
        $objCategory = Category::find($id);
        $objCategory->status = !$objCategory->status;
        $objCategory->save();
        return redirect('swaj/category')->with('success','Category status change successfully');
    }
    public function delete($id)
    {
        $objCategory = Category::find($id);
        $objCategory->delete();
        return redirect('swaj/category')->with('success','Category deleted  successfully');
   
    }
    public function edit($id)
    {
         $objCategory = Category::find($id);
        return view('backend.category.edit',compact('objCategory'));
       
    }
    public function update(Request $request)
    {
        $messages = [
            'category_name.required'=>'Enter category name',
            'category_name.string' => 'Category name must contain only text.',
            'category_name.min'=>'Category name must be at least 3 characters.',
            'category_name.unique'=>'Category name already exists',
         ];

         $validator = Validator::make($request->all(),[
           'category_name' => 'required|string|min:3|unique:categories,category_name,' . $request->cid
         ],$messages);

         if($validator->fails())
            {
                return redirect()->back()->withErrors($validator)->withInput();
            }
        else
        {
            $objCategory = Category::find($request->cid);
            $objCategory->category_name  = $request->category_name;
            $objCategory->description  = $request->description;
            if($request->hasFile('image'))
                {
                        $image = $request->file('image');
                        $imageName = time() . '_' . $image->getClientOriginalName();
                        $image->move(public_path('uploads/categories'), $imageName);
                        $objCategory->image = $imageName;

                }
            $objCategory->save();
            return redirect('swaj/category')->with('success','Category updated successfully');
        }
    }
}
