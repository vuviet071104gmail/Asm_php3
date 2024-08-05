@extends('admin.layouts.main')
@section('content')
<div>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-3">
                        <div class="card-body">
                            <h5 class="card-title">Bảng quản lý bài viết </h5>
                            <div class="table-responsive">
                                <form class="search_phim" action="index.php?action=&act=danhmuc" method="post">
                                    <input type="text" name="kyw" placeholder="Tra cứu Thể loại">
                                    <input class="btn btn-primary" type="submit" name="listseacher" value="Gửi">
                                </form>
                                @if ($message = Session::get('success'))
                                <p class="fw-semibold text-success">{{ $message }}</p>
                                @endif
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Id bài viết</th>
                                            <th>Title</th>
                                            <th>Img</th>
                                            <th>Views</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th>Tác giả</th>
                                            <th colspan="3">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($article as $item)
                                        <tr class="">
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->title}}</td>
                                            <td class="text-center"> <img src="{{ asset($item->img) }}" alt=""
                                                    width="120px">
                                            <td>{{$item->views}}</td>
                                            <td>{{$item->category->name}}</td>
                                            <td>{{ $item->status === 0 ? 'Thường' : 'Nổi bật'}}</td>
                                            <td>{{$item->user->name}}</td>
                                            <td>
                                                <a class="btn btn-dark text-light mt-3"
                                                    href="{{route('article.edit',$item)}}">Edit </a>
                                            </td>
                                            <td> <a class="btn btn-info text-light mt-3"
                                                    href="{{route('article.show',$item)}}">Show </a></td>
                                            <td>
                                                <form action="{{route('article.destroy',$item)}}" method="post"
                                                    class="mt-3">
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
                                        <tr class="text-center">
                                            <th >Id bài viết</th>
                                            <th>Title</th>
                                            <th>Img</th>

                                            <th>Views</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th>Tác giả</th>
                                            <th colspan="3">Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                {{$article->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn_dieuhuong ">
                <h2>
                    <a class="btn btn-success text-light" href=" {{route('article.create')}}   ">Thêm mới bài viết</a>

                </h2>
            </div>
        </div>
    </div>
</div>
@endsection
