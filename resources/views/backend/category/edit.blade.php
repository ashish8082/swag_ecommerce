@extends('backend.layouts.main')
@section('content')
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row mb-6 gy-6">
                <div class="col-xl">
                  <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Update Category</h5>
                    </div>
                    <div class="card-body">
                      <form action="{{url('swaj/category/update')}}" method="post" enctype="multipart/form-data">@csrf
                      <input type="hidden" name="cid" value="{{$objCategory->id}}">
                        <div class="mb-6">
                          <label class="form-label" for="basic-default-fullname">Category Name <span class="text-danger">*</span></label>
                          <input type="text" name="category_name" class="form-control" id="basic-default-fullname" placeholder="add category name"  value="{{$objCategory->category_name}}" />
                          @error('category_name')
                           <span class="text-danger">{{$message}}</span>
                          @endError
                        </div>
                        <div class="mb-6">
                            <label class="form-label" for="basic-default-fullname">Category Image</label>
                            <div class="input-group">
                                <input type="file" name="image" class="form-control" id="inputGroupFile02" value="{{$objCategory->image}}" />
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>
                            @if(isset($objCategory->image))
                                <div class="mt-3">
                                    <img src="{{url('/uploads/categories',$objCategory->image)}}"alt="category name"height="300" weight="200" >
                                </div>
                            @endif
                            @error('image')
                           <span class="text-danger">{{$message}}</span>
                          @endError
                        </div>
                        <div class="mb-6">
                          <label class="form-label" for="basic-default-message">Description</label>
                          <textarea id="basic-default-message"name="description" class="form-control" rows="4" placeholder="description here .........">{{$objCategory->description}}</textarea>
                          @error('description')
                           <span class="text-danger">{{$message}}</span>
                          @endError
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                      </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>
@endsection