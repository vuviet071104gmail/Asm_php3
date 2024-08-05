@extends('admin.layouts.main')
@section('content')
<div>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-3">
                        <div class="card-body">
                            <h5 class="card-title">Bảng quản lý danh mục bài viết </h5>
                            <div class="table-responsive">
                                <form class="search_phim" action="index.php?action=&act=danhmuc" method="post">
                                    <input type="text" name="kyw" placeholder="Tra cứu Thể loại">
                                    <input class="btn btn-primary" type="submit" name="listseacher" value="Gửi">
                                </form>
                                @if ($message = Session::get('success'))
                                <p class="fw-semibold text-success">{{ $message }}</p>
                                @endif
                                <table id="zero_config" class="table table-striped table-bordered text-center mt-3">
                                    <thead>
                                        <tr>
                                            <th style="width: 400px;">Id Danh mục</th>
                                            <th>Tên Danh mục</th>
                                            <th>Parent_id</th>
                                            <th colspan="3">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($category as $item)
                                        <tr class="" style="line-height: 70px">
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{ $item->parent_id === null ? 'Null' : $item->parent_id }}</td>
                                            <td>
                                                <a class="btn btn-dark text-light mt-3"
                                                    href="{{route('category.edit',$item)}}">Edit </a>
                                            </td>
                                            <td> <a class="btn btn-info text-light mt-3"
                                                    href="{{route('category.show',$item)}}">Show </a></td>
                                            <td>
                                                <form action="{{route('category.destroy',$item)}}" method="post"
                                                    class="mt-2">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger"
                                                        onclick="return confirm('có chắc muốn xóa không')"
                                                        type="submit">DELETE</button>
                                                </form>
                                            </td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Id Danh mục</th>
                                            <th>Tên Danh mục</th>
                                            <th colspan="3">Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                {{$category->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn_dieuhuong ">
                <h2>
                    <a class="btn btn-success text-light" href=" {{route('category.create')}}   ">Thêm mới danh mục </a>

                </h2>
            </div>
        </div>
    </div>
</div>
@endsection
