@extends('admin.layouts.main')
@section('content')

<div>
    <div class="page-wrapper">
        <div class="card m-3">
            <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body" style="width: 1000px;">
                    <h4 class="card-title">Thêm mới danh mục</h4>
                    <div class="form-group row mb-3">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Id danh mục</label>
                        <div class="col-sm-9">
                            <input type="text" disabled class="form-control" id="fname" placeholder="Id danh mục"
                                disabled>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Parent_id</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="parent_id" id="lname" placeholder="Parent_id">

                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Tên danh
                            mục</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" id="lname" placeholder="Tên danh mục">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


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
