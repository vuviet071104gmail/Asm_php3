@extends('admin.layouts.main')
@section('content')
<div>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Bảng quản lý Sản phẩm </h5>
                            <div class="table-responsive">
                                <form class="search_phim" action="index.php?action=&act=danhmuc" method="post">
                                    <input type="text" name="kyw" placeholder="Tra cứu Thể loại">
                                    <input class="btn btn-primary" type="submit" name="listseacher" value="Gửi">
                                </form>
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 400px;">Id sản phẩm</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Giá sản phẩm</th>
                                            <th>Mô tả</th>
                                            <th>Image</th>
                                            <th style="width: 100px;"></th>
                                            <th style="width: 100px;"></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($products as $pro)
                                        <tr>
                                            <td>{{ $pro['id'] }}</td>
                                            <td>{{ $pro['ten_san_pham'] }}</td>
                                            <td>{{ $pro['gia'] }}</td>
                                            <td>{{ $pro['des'] }}</td>
                                            <td><img src="../public/img/{{$pro['img'] }}" alt="" width="50px"></td>
                                            <td>
                                                <a style="color: white;"
                                                    href="../admin/delete_pro/{{$pro['id']}}"><button
                                                        class="btn btn-danger"
                                                        onclick="return confirm('Bạn có muốn xóa sản phẩm không ?')">Xoá</button></a>

                                            </td>
                                            <td>
                                                <a style="color: white;"
                                                    href="../admin/edit_pro/{{$pro['id']}}"><button
                                                        class="btn btn-info"
                                                        onclick="return confirm('Bạn có muốn sửa sản phẩm không ?')">Sửa
                                                    </button></a>

                                            </td>
                                            <td>
                                                <a style="color: white;"
                                                    href="../admin/soft_delete_pro/{{$pro['id']}}"><button
                                                        class="btn btn-info"
                                                        onclick="return confirm('Bạn có muốn xóa mềm sản phẩm không ?')">Xóa
                                                        mềm </button></a>

                                            </td>
                                        </tr>
                                        @endforeach --}}
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th style="width: 400px;">Id sản phẩm</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Giá sản phẩm</th>
                                            <th>Mô tả</th>
                                            <th>Image</th>
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
                <a href="../admin/add_product" style="color: white;">Thêm danh mục</a>
            </div>
        </div>
    </div>
</div>
@endsection