@extends('layout.main')
@section('content')
<div class="page-wrapper">
    <div class="card">
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            <div class="card-body" style="width: 1000px;">
                <h4 class="card-title">Thêm khách hàng mới</h4>

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
                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Id khách hàng</label>
                    <div class="col-sm-9">
                        <input type="text" disabled class="form-control" id="fname" placeholder="Id khách hàng "
                            disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Tên khách hàng </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="ten_kh" id="lname" placeholder="Tên khách hàng " value="{{$list['ten_kh']}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Email </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="email" id="lname" placeholder="Email" value="{{$list['eamil']}}">
                    </div>
                     @if (isset($error['email']) && ($error['email'] != "")) 
                    <div style="position: absolute; right: 550px; font-weight: 400; font-size: 16px; ; color: red;">
                        {{$error['email'] }}
                    </div><br>
                     @endif 
                </div>
                <div class="form-group row">
                    <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Số Điện Thoại </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="sdt" id="lname" placeholder="Số diện thoại" value="{{$list['sdt']}}">
                    </div>
                     @if (isset($error['sdt']) && ($error['sdt'] != "")) 
                    <div style="position: absolute; right: 550px; font-weight: 400; font-size: 16px; ; color: red;">
                        {{$error['sdt'] }}
                    </div><br>
                     @endif 
                </div>

                <div class="form-group row">
                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Ảnh User </label>
                    <div class="col-sm-9">
                        <div class="custom-file">
                            <input type="hidden" name="img" value="{{$list['img']}}" id="">
                            <input type="file" name="img" class="custom-file-input" id="validatedCustomFile" value="{{$list['img']}}">
                            <label class="custom-file-label" for="validatedCustomFile">Ảnh User</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="border-top">
                <div class="card-body" style="margin-bottom: 50px;">
                    {{-- <input type="hidden" name="id" value="<?= $list['id'] ?>"> --}}
                    <input type="submit" name="themmoi" class="btn btn-primary" value="Gửi dữ liệu">

                </div>
            </div>

        </form>
    </div>
</div>

@endsection