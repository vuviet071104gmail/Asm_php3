@extends('client.layouts.main')
@section('content')

<section class="store_article_main row">

    <section class=" store_article_main_left pe-4 col-9">
        <section class="title_category_name_main">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    @foreach($categoryAll as $item)
                    {{-- {{dd($item)}} --}}
                    @if($item->id === $articleDetail->parent_id)

                    <li class="breadcrumb-item"><a class="text-dark text-decoration-none" href="#">{{$item->name}}</a>
                    </li>
                    @endif @endforeach

                    <li class="breadcrumb-item active" aria-current="page">{{$articleDetail->namecate}}</li>
                </ol>
            </nav>
            <div class="article_name w-75">
                <h3>{{$articleDetail->title}}</h3>
            </div>
        </section>
        <section class="author_article ps-2 pe-2 pt-2 pb-2" style=" background-color: aliceblue ">
            <div class=" d-flex justify-content-between ">
                <a class="text-dark text-decoration-none" href="#">
                    <img class="avarta img-thumbnail" src="{{asset($articleDetail->img)}}" alt="lỗi ảnh "
                        id="anh" width="50px">
                    <span>{{$articleDetail->nameuser}} </span>
                    <span><i class="fa-solid fa-minus" style="color: #000000;"></i></span>
                    <span>{{$articleDetail->email}}</span>
                </a>
                <span>
                    {{$articleDetail->created_at}}
                </span>
            </div>
            <div class=" d-flex justify-content-between align-items-center mt-3 mb-3 ">
                <div style="font-size: 13px">
                    <span class="text-light" style=" border-radius: 5px; background-color: #4080FF; padding: 3px"><i
                            class="fa-solid fa-check" style="color: #ffffff;"></i> like : 94</span>
                    <span style=" color: #ffffff; border-radius: 5px; background-color: #4080FF; padding: 3px">chia sẻ
                    </span>
                    <span><i class="fa-brands fa-facebook-messenger ms-2"
                            style=" font-size: 18px; color: #32a0f5;"></i></span>
                </div>
                <div class="d-flex gap-3">
                    <span><i class="fa-brands fa-twitter" style=" font-size: 18px;color: #c6c7c8;"></i></span>
                    <span><i class="fa-regular fa-envelope" style="font-size: 18px;color: #d0d1d2;"></i></span>

                    <span><i class="fa-brands fa-facebook" style="font-size: 18px;color: #cfcfcf;"></i></span>

                </div>
            </div>
        </section>

        <section>
            <div class="content_article">
                {!! $articleDetail->content !!}
            </div>
            <form class="form-control mt-5">
                <div class="mb-3">
                    <label class="fw-bold fs-5 mb-2" style="border-bottom: 1px solid #62b8f9"
                        for="floatingTextarea2 ">Bình luận </label>
                    <textarea class="form-control" placeholder="Nội dung bình luận" id="floatingTextarea2"
                        style="height: 100px"></textarea>

                </div>
                <button type="submit" class="btn btn-primary">Gửi bình luận </button>
            </form>

            {{-- <form action="" method="post">
                @csrf
                <textarea id="editor1" name="content"></textarea>
                <button type="submit">Gửi </button>
            </form> --}}
            {{-- <div style="width: 800px">
                {!! $articleDetail['content'] !!}
            </div> --}}
        </section>
    </section>
    <section class="store_article_main_right col-3 " style="margin-top: 100px ">
        <div>
            <div class="d-flex justify-content-center mb-2">
                <div style="width: 150px;  ">
                    <h4 style=" padding-bottom: 10px; border-bottom: 1px solid #8fc3ea "> Tin đọc nhiều </h4>
                </div>
            </div>
            <div>
                @foreach($articleview as $item)
                <a href="{{route('article',$item)}}"
                    class=" d-flex align-items-center img_cate_item text-dark text-decoration-none gap-3"
                    style="border-bottom: 1px solid #ebebeb; height: 100px">
                    <img src="{{asset($item->img)}}" alt="lỗi ảnh " id="anh" width="110px" height="70px">
                    <span>{{$item->title}}</span>
                </a>
                @endforeach
            </div>
        </div>
    </section>
</section>

<section class="content_lq mt-3">
    <div class="d-flex justify-content-center">
        <h5 style=" padding-bottom: 5px; text-align: center; width: 200px; border-bottom: 1px solid #62b8f9">Nội dung
            liên quan </h5>
    </div>
    <div class="row gap-3">
        @foreach($articleChild as $item)
        <div class="" style="width: 317px; border-bottom: 1px solid #dbdbdb">
            <a href="{{route('article',$item)}}" class="text-dark text-decoration-none">
                <img src="{{asset($item->img)}}" alt="lỗi ảnh " id="anh" width="100% " style="height: 200px">
                <p> {{$item->title}}</p>
            </a>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mb-3 mt-3">
        <h5 style=" padding-bottom: 5px; text-align: center; width: 200px; border-bottom: 1px solid #62b8f9"> Tin mới
        </h5>
    </div>
    <div class="row">
        @foreach($articletime as $item)
        <div class="col-3 pe-4">
            <a href="{{route('article',$item)}}" class=" d-flex  img_cate_item text-dark text-decoration-none gap-3"
                style="border-bottom: 1px solid #ebebeb; height: 100px">
                <img src="{{asset($item->img)}}" alt="lỗi ảnh " id="anh" width="84px" height="84px">
                <span>{{$item->title}}</span>
            </a>
        </div>
        @endforeach
    </div>
</section>
@endsection
