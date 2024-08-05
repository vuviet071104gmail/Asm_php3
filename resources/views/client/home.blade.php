@extends('client.layouts.main')
@section('content')
<section>
    <section class="box-category d-flex justify-content-between gap-3">
        <div class="box-category-middle " style="width: 70%">
            @foreach($outstanding as $item)

            @if($loop->first)<div class="item-first d-flex justify-content-between gap-5"
                style="background-color: #d4d3d3">
                <div class="img_item_first  ">
                    <img src="{{asset($item->img)}}" alt="lỗi ảnh " id="anh" width="450px">
                </div>
                <a href="{{route('article',$item)}}" class="w-50 text-decoration-none text-dark "
                    style="font-size: 15px ">
                    <h4>
                        {{$item->title}}
                    </h4>
                    <div>
                        {!!$item->summary!!}
                    </div>
                </a>
                @endif
                @endforeach
            </div>
            <div class="item-related d-flex justify-content-between gap-4 mt-4">
                @for($i = 0; $i < $article->count(); $i++)
                    @if ($i <4 && $i>0 )
                        <a href="{{route('article',$article[$i])}}"
                            class="item-related_content text-decoration-none text-dark pe-3"
                            style="font-size: 13px ; border-right: 1px solid #c2c1c1">
                            <h6>
                                {{$article[$i]->title}}
                            </h6>
                            <div > {!! $article[$i]->summary !!}</div>
                        </a>
                        @endif
                        @endfor
            </div>
            <div class="banner_slot_live mt-4 ">
                <img src="{{asset('images/bann-1711606757468.jpeg')}}" alt="lỗi ảnh " id="anh" width="100%">
                <hr>
            </div>
            <div class="box-news-tag d-flex justify-content-between align-items-center ">
                <div>
                    <i class="fa-solid fa-arrow-up-from-bracket fa-rotate-90"
                        style="font-size: 20px ; color: #cfcfcf;"></i>
                    <span class="fw-semibold ms-2" style="font-size: 20px; color: rgb(201, 197, 197)">Tiêu điểm
                    </span>
                </div>
                <div>
                    <span>
                        <i class="fa-solid fa-chevron-up fa-rotate-270" style="color: #74C0FC;"></i>
                        <i class="fa-solid fa-chevron-up fa-rotate-90" style="color: #74C0FC;"></i>

                    </span>
                </div>
            </div>
            <hr>
            <div class="col-12">
                <div class="row d-flex flex-wrap">
                    @for($i = 0; $i < $articleview->count() ; $i++)

                        @if($i <8) <div class="col-3 gap-3">
                            <a href="{{route('article',$articleview[$i])}}"
                                class="img_cate_item text-dark text-decoration-none">
                                <img src="{{asset($articleview[$i]->img )}}" alt="lỗi ảnh " id="anh"
                                    style="width: 209px; height: 135px;">
                                <p>{{$articleview[$i]->title}}</p>
                            </a>
                </div>
                @endif
                @endfor
            </div>
            <hr>
        </div>
        </div>
        <div class="section__hf-sub " style="width: 25%">
            @include('client.components.formControl')
        </div>
        </div>
        <div class="form-control mt-3">
            <span class="text-info">Chào ngày mới với sự may mắn </span>
            <h6>Sự cứng rắn cần thiết</h6>
            <div class="mt-3 d-flex gap-3">
                <span class="p-2" style="border: 1px solid #c2c1c1; border-radius: 25px "><i class="fa-regular fa-user"
                        style="color: #a0a0a2;"></i></span>
                <div>
                    <span style="color: #cfcfcf">Tác giả </span><br>
                    <span>Nguyễn Trường </span>
                </div>
            </div>
        </div>
        </div>
    </section>
    <div class="banner_doi d-flex justify-content-evenly align-items-center gap-3">
        <img src="{{asset('images/banner_đôi_one.png')}}" alt="lỗi ảnh " id="anh" width="">
        <img src="{{asset('images/banner_đôi_two.png')}}" alt="lỗi ảnh " id="anh" width="">
        <img src="{{asset('images/banner_đôi_one.png')}}" alt="lỗi ảnh " id="anh" width="">


    </div>
    <section class="section__nsp d-flex justify-content-between mt-5">
        <div class="section__nsp-main " style="width: 70%;">

            <div class="tin_flast_360">
                <h4 class="text-center">Nổi bật</h4>
                <div class="row d-flex flex-wrap gap-4 ">
                    @foreach($outstanding as $item)
                    @if(!$loop->first)
                    <div class="  p-3 mb-4  mb-4 text-center text-light"
                        style=' width: 270px ;background-color: #C6EBF9'>
                        <a href="{{route('article',$item)}}" class="img_cate_item text-dark text-decoration-none">
                            <img src="{{asset($item->img )}}" alt="lỗi ảnh " id="anh" width="90%">
                            <p>{{$item->title}}</p>
                        </a>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
            <!-- post show -->
            <div class="row" style=" background-color: rgb(235, 235, 235);">
                <nav class="navbar navbar-expand-lg fw-semibold" style="background-color: #d7d9e4; font-size: 14px">
                    <div class="container-fluid">
                        <a class="nav-after navbar-brand" style="color: rgb(9, 9, 138);" href="#">

                            Góc nhìn tổng quan

                        </a>

                    </div>
                </nav>
                @include('client.components.slideShow')
            </div>
        </div>
        <div class="section__nsp-extra" style="width: 25%">
            @include('client.components.allArticle')
        </div>
    </section>


</section>
@endsection
