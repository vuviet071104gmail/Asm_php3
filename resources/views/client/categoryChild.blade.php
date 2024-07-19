@extends('client.layouts.main')
@section('content')

<section class="cate_title">
    <div class="cate_title_main " style="border-bottom: 3px solid rgb(52, 143, 228) ">
        <a class="fs-3 fw-semibold text-dark text-decoration-none" href="">{{$cateParent->name}}</a>
    </div>
    <div class="cate_title_extras d-flex justify-content-between align-items-center"
        style="border-bottom: 1px solid rgb(207, 205, 205) ">
        <div class="cate_title_extra d-flex align-items-center gap-3 pt-3 pb-3">
            @foreach($cateParent->children as $child)
            <a href="{{route('categorychild',$child)}}"
                class="fw-semibold text-decoration-none {{ $categoryChild->name === $child->name ? 'political_category' : 'text-dark' }}">
                {{$child->name}} </a>
            @endforeach
        </div>
        <div class="link_cate_title">
            <span>
                <i class="fa-solid fa-chevron-up fa-rotate-270" style="color: #74C0FC;"></i>
                <i class="fa-solid fa-chevron-up fa-rotate-90" style="color: #74C0FC;"></i>
            </span>
        </div>
    </div>
</section>
<section class="list__focus-flex d-flex justify-content-between mt-3">
    <div class="list__focus-main " style="width: 70% ;">
        <div class="box-category-item-main d-flex justify-content-between gap-3 pb-3"
            style=" border-bottom: 1px solid gainsboro">
            @foreach($cateChildArticle->article()->latest('id')->limit(1)->get() as $art)
            <a href="{{route('article',$art)}}" class="box-category-item-main-left text-decoration-none text-dark pe-3"
                style="width: 65% ; border-right: 1px solid gainsboro ">
                <img src="{{asset('images/'.$art->img)}}" alt="lỗi ảnh " id="anh" width="100%">
                <div class="content_category-item-main-left">
                    <h4>
                        {{$art->title}}
                    </h4>
                    <p style="font-size: 13px">
                        {{$art->summary}}
                    </p>
                </div>
            </a>
            @endforeach
            <div class="box-category-item-main-right " style="width: 35%">
                @foreach($cateChildArticle->article()->latest('id')->limit(3)->get() as $art)
                @if(!$loop->first )
                <div class="mb-2 pb-2" style="font-size: 13px ; border-bottom: 1px solid #c2c1c1">
                    <a href="{{route('article',$art)}}" class="item-related_content text-decoration-none text-dark  ">
                        <img src="{{asset('images/'.$art->img)}}" alt="lỗi ảnh " id="anh" width="100%">
                        <div class="content_category-item-main-right">
                            <h6>
                                {{$art->title}}
                            </h6>
                        </div>
                    </a>
                </div>
                @endif
                @endforeach
            </div>
        </div>
        <div class="box-category-sub d-flex justify-content-between gap-3 mt-3">
            @foreach($cateChildArticle->article()->latest('id')->limit(5)->get() as $art)
            @if($loop->remaining <2) <a href="{{route('article',$art)}}"
                class=" box-title-text text-decoration-none text-dark d-flex gap-2 ">
                <img src="{{asset('images/'.$art->img)}}" alt="lỗi ảnh " id="anh" width="146px">
                <span style=" font-size: 14px"> {{$art->title}}</span>
                </a>
                @endif
                @endforeach
        </div>
    </div>
    <div class="section__hf-sub " style="width: 25%">
        @include('client.components.formControl')
    </div>
</section>
<section class="banner_img_mkt text-center mt-5 mb-5 ">
    <img src="{{asset('images/banner5.jpg')}}" alt="lỗi ảnh " id="anh" width="90%" height="90px">
</section>
<section class="list__focus-flex d-flex justify-content-between mt-3">
    <div class="list__focus-main " style="width: 70% ;">
        @foreach($cateChildArticle->article()->latest('views')->get() as $art)
        <div class="box-category-middle list__main_check">
            <a href="{{route('article',$art)}}" class=" box-title-text text-decoration-none text-dark d-flex gap-4 mb-3"
                style="height: 205px;">
                <img src="{{asset('images/'.$art->img)}}" alt="lỗi ảnh " id="anh" width="40%">
                <div class="content_title_posts" style=" width: 57%;">
                    <span class="key_cateall  fw-semibold" style="color: #cfcfcf">
                        {{$cateChildArticle->name}}
                    </span>
                    <h5 class="mt-2 mb-2">
                        {{$art->title}}
                    </h5>
                    <p class="content_title_posts_extra " style="font-size: 13px"> {{$art->summary}}</p>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    <div class="mkt_banner" style="width: 25%">
        <img src="{{asset('images/banner_mkt_1.png')}}" alt="lỗi ảnh " id="anh" width="100%" height="560px">
        @include('client.components.allArticle')
</section>


@endsection