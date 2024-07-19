
@extends('layout.main')
@section('content')
<div>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Bảng quản lí User</h5>

                            {{-- @if (isset($message) && ($message != ""))
                            <div style="font-weight: 400; font-size: 20px; ; color: green;">
                                {{$message}}
                            </div><br>
                            @endif --}}
                            <div class="table-responsive">
                                <form class="search_phim" action="index.php?action=&act=danhmuc" method="post">
                                    <input type="text" name="kyw" placeholder="Tra cứu Thể loại">
                                    <input class="btn btn-primary" type="submit" name="listseacher" value="Gửi">
                                </form>
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 400px;">Id User</th>
                                            <th>Tên khách hàng </th>
                                            <th>Email</th>
                                            <th>Số ĐiệnThoại</th>
                                            <th>Img</th>
                                            <th style="width: 100px;"></th>
                                            <th style="width: 100px;"></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach ($custom as $list) 
                                            <tr>
                                                <td>{{ $list['id'] }}</td>
                                                <td>{{ $list['ten_kh'] }}</td>
                                                <td>{{ $list['email'] }}</td>
                                                <td>{{ $list['sdt'] }}</td>
                                                <td><img src="../public/img_user/{{ $list['img'] }}" alt="" width="120px"></td>
                                                <td><button class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa sản phẩm không ?')">
                                                        <a style="color: white;" href="../admin/delete_user/{{$list['id']}}">Xoá</a>
                                                    </button>
                                                </td>
                                                <td><button class="btn btn-info" onclick="return confirm('Bạn có muốn sửa sản phẩm không ?')">
                                                        <a style="color: white;" href="../admin/edit_user/{{$list['id']}}">Sửa</a>
                                                    </button>
                                                </td>
                                                <td><button class="btn btn-info" onclick="return confirm('Bạn có muốn xóa mềm sản phẩm không ?')">
                                                        <a style="color: white;" href="../admin/softdelete_user/{{$list['id']}}">Xóa mềm</a>
                                                    </button>
                                                </td>
                                            </tr>
                                       @endforeach 
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th style="width: 400px;">Id User</th>
                                            <th>Tên khách hàng </th>
                                            <th>Email</th>
                                            <th>Số ĐiệnThoại</th>
                                            <th>Img</th>
                                            <th style="width: 100px;"></th>
                                            <th style="width: 100px;"></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn_dieuhuong btn btn-success">
                <a href="../admin/addcustom" style="color: white;">Thêm khách hàng </a>
            </div>
        </div>
    </div>
</div>
@endsection