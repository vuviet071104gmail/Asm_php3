@extends('admin.layouts.main')
@section('content')

<div>
    <div class="page-wrapper">
        <div class="card m-3">
            <form action="{{route('article.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body" style="width: 1000px;">
                    <h4 class="card-title">Thêm mới bài viết</h4>
                    <div class="form-group row mb-3">
                        <label for="fname" class="col-3 text-right control-label col-form-label">Id danh mục</label>
                        <div class="col-9">
                            <input type="text" disabled class="form-control" id="fname" placeholder="Id danh mục"
                                disabled>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="title" id="lname" placeholder="Title">
                        </div>
                        @error('title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group row mb-3">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Summary </label>
                        <div class="col-sm-9">
                            <textarea name="summary" id="summary" cols="30" rows="10"></textarea>
                            {{-- <input type="text" class="form-control" name="summary" id="lname"
                                placeholder="Summary"> --}}
                        </div>
                        @error('summary')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group row mb-3">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Content </label>
                        <div class="col-sm-9">
                            {{-- <input type="text" class="form-control" name="content" id="lname"
                                placeholder="Content"> --}}
                            <textarea name="content" id="content" cols="30" rows="10"></textarea>
                        </div>
                        @error('content')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group row mb-3">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Img </label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="img" placeholder="Enter img" name="img">
                        </div>
                        @error('img')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- <div class="form-group row mb-3">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Views </label>
                        <div class="col-sm-9">
                            <input type="number " class="form-control" id="views" placeholder="View" name="views">
                        </div>
                    </div> --}}
                    <div class="form-group row mb-3  ">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Category: </label>
                        <div class="col-sm-9">
                            <select class="form-select " id="category_id" name="category_id">
                                @foreach($category as $id=>$name)
                                <option value="{{$id}}">{{$name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('category_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group row mb-3">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> User: </label>
                        <div class="col-sm-9">
                            <select class="form-select" id="user_id" name="user_id">
                                @foreach($user as $id=>$name)
                                <option value="{{$id}}">{{$name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('user_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-check form-switch row mb-3 d-flex align-items-center gap-5 w-100">
                        <label class="form-check-label col-sm-3  control-label col-form-label me-2"
                            style="margin-left: -40px " for="flexSwitchCheckDefault  ">Status</label>

                        {{-- <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Status
                        </label> --}}
                        <div class="col-sm-9 w-50">
                            <input class="form-check-input" type="checkbox" name="status" role="switch" id="status"
                                value="1">

                        </div>

                    </div>
                    {{-- <div class="form-check form-switch mb-3">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Status </label>
                        <div class="col-sm-9">
                            <input class="form-check-input" type="checkbox" name="status" role="switch" id="status"
                                value="1">
                        </div>
                    </div> --}}
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a class="btn btn-dark text-light" href="{{route('category.index')}}">Quay trở lại danh sách
                        </a>

                    </div>

            </form>
        </div>
    </div>
</div>

@endsection
