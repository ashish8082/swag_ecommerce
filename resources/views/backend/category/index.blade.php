@extends('backend.layouts.main')
@section('content')
<style>
.action_btn
{
  text-align:center;
  padding-left:250px !important;
}
</style>
<div class="card">
               @if(Session::has('success'))
                  <div class="alert alert-dark alert-dismissible" role="alert">
                         {{Session::get('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
               @endif
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Category</h5>

                    <a href="{{ url('/swaj/category/add') }}" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Add New Category
                    </a>
                </div>
                
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead class="table-dark">
                      <tr>
                        <th>Sr No</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th class="action_btn">Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @foreach($categories as $key=>$category)
                        <tr>
                            <td>
                              {{$key+1}}
                            </td>
                            <td>{{$category->category_name}}</td>
                            <td>
                                @if($category->status==1)
                                    <span class="badge bg-success me-1">Active</span>
                                @else
                                    <span class="badge bg-danger me-1">Inactive</span>
                                @endif
                                </td>
                            <td>
                            <div class="float-end">
                                <a class="btn btn-secondary btn-sm" href="{{url('swaj/category/change-status',$category->id)}}">Change Status</a>
                                <a class="btn btn-primary btn-sm" href="{{url('swaj/category/edit',$category->id)}}">Edit</a>
                                <a class="btn btn-danger btn-sm" href="{{ url('swaj/category/delete', $category->id) }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                            </div>
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
@endsection