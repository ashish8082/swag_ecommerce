@extends('backend.layouts.main')
@section('content')
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row mb-6 gy-6">
                <div class="col-xl">
                  <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Add Color</h5>
                    </div>
                    <div class="card-body">
                      <form action="{{url('swaj/color/store')}}" method="post" enctype="multipart/form-data">@csrf
                        <div class="mb-6">
                          <label class="form-label" for="basic-default-fullname">Color Name <span class="text-danger">*</span></label>
                          <input type="text" name="color_name" class="form-control" id="basic-default-fullname" placeholder="add color name"  value="{{old('color_name')}}" />
                          @error('color_name')
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