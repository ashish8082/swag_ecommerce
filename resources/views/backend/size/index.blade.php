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
                    <h5 class="mb-0">Size</h5>

                    <a href="{{ url('/swaj/size/add') }}" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Add New Size
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
                     @if(count($sizes) > 0)
                      @foreach($sizes as $key=>$size)
                        <tr>
                            <td>
                              {{$key+1}}
                            </td>
                            <td>{{$size->size_name}}</td>
                          
                            <td>
                                @if($size->status==1)
                                    <span class="badge bg-success me-1">Active</span>
                                @else
                                    <span class="badge bg-danger me-1">Inactive</span>
                                @endif
                                </td>
                            <td>
                            <div class="float-end">
                                <a class="btn btn-secondary btn-sm" href="{{url('swaj/size/change-status',$size->id)}}">Change Status</a>
                                <a class="btn btn-primary btn-sm" href="{{url('swaj/size/edit',$size->id)}}">Edit</a>
                                <a class="btn btn-danger btn-sm" href="{{ url('swaj/size/delete', $size->id) }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                            </div>
                            </td>
                        </tr>
                      @endforeach
                    @else 
                     <tr>
                        <td colspan="5" class="text-center">No Size found</td>
                    </tr>
                    @endif
                    </tbody>
                  </table>
                </div>
              </div>
@endsection