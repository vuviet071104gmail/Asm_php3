@extends('admin.layouts.main')
@section('content')
<div>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-3">
                        <div class="card-body">
                            <h5 class="card-title">Chi tiết danh mục bài viết </h5>
                            <div class="table-responsive">
                                {{-- <form class="search_phim" action="index.php?action=&act=danhmuc" method="post">
                                    <input type="text" name="kyw" placeholder="Tra cứu Thể loại">
                                    <input class="btn btn-primary" type="submit" name="listseacher" value="Gửi">
                                </form> --}}
                                @if ($message = Session::get('success'))
                                <p class="fw-semibold text-success">{{ $message }}</p>
                                @endif
                                <table id="zero_config" class="table table-striped table-bordered text-center mt-3">
                                    <thead>
                                        <tr>
                                            <th>Field Name</th>
                                            <th>Value</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($article->toArray() as $field => $value)
                                        <tr>
                                            <td>{{ucfirst($field)}}</td>
                                            <td>
                                                @if($field == 'img')
                                                <img src="{{ asset($value) }}" alt="" width="120px">
                                                @elseif($field == 'category_id')
                                                {{$article->category->name}}
                                                @elseif($field == 'user_id')
                                                {{$article->user->name}}
                                                @else
                                                {!!$value!!}
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Field Name</th>
                                            <th>Value</th>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn_dieuhuong ">
                <h2>
                    <a class="btn btn-dark text-light" href="{{route('article.index')}}">Quay trở lại danh sách </a>

                </h2>
            </div>
        </div>
    </div>
</div>
@endsection
