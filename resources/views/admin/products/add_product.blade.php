@extends('layout.main')
@section('content')

<div class="page-wrapper">
    <div class="card">
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            <div class="card-body" style="width: 1000px;">
                <h4 class="card-title">Thêm mới sản phẩm</h4>

                @if (isset($message) && ($message != ""))
                <div style="font-weight: 400; font-size: 20px; ; color: green;">
                    {{$message}}
                </div><br>
                @elseif (isset($error['tong']) && ($error['tong'] != "")) 
                <div style="font-weight: 400; font-size: 20px; ; color: red;">
                    {{ $error['tong']}}
                </div><br>
                @endif
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Id danh mục</label>
                    <div class="col-sm-9">
                        <input type="text" disabled class="form-control" id="fname" placeholder="Id sản phẩm " disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Tên sản phảm </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="ten_sp" id="lname" placeholder="Tên sản phẩm ">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Giá </label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" name="gia" id="lname" placeholder="Tên danh mục">
                    </div>
                     @if (isset($error['gia']) && ($error['gia'] != "")) 
                    <div style="position: absolute; right: 580px; font-weight: 400; font-size: 16px; ; color: red;">
                        {{$error['gia']}} 
                    </div><br>
                    @endif  

                </div>
                <div class="form-group row">
                    <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Mô tả </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="des" id="lname" placeholder="Tên danh mục">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Ảnh Sản Phẩm </label>
                    <div class="col-sm-9">
                        <div class="custom-file">
                            <input type="file" name="img" class="custom-file-input" id="validatedCustomFile">
                            <label class="custom-file-label" for="validatedCustomFile">Ảnh SP</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Loại Sản phẩm</label>
                    <div class="col-sm-9">

                        <select class="select2 form-control custom-select" name="id_category" id="">

                            @foreach ($category as $cate)
                            <option value="{{$cate['id']}}  ">
                                {{ $cate['category_name'] }}
                            </option>   
                            @endforeach 


                        </select>
                    </div>
                </div>

            </div>
            <br>
            <div class="border-top">
                <div class="card-body" style="margin-bottom: 50px;">
                    <input type="submit" name="themmoi" class="btn btn-primary" value="Gửi dữ liệu">

                </div>
            </div>

        </form>
    </div>
</div>
@endsection
