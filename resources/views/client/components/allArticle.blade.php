<div class="mt-3">

    @foreach($cateAllAcrticle as $cate)

    <div class="d-flex justify-content-center mb-3">
        <div style="width: 180px; text-align: center ">
            <h4 style="border-bottom: 1px solid #8fc3ea "> {{$cate->name}}</h4>

        </div>
    </div>

    <div>
        @foreach($cate->articleCategory()->latest('id')->limit(1)->get() as $item )


        <a href="{{route('article',$item)}}" class="  img_cate_item text-dark text-decoration-none gap-3"
            style="border-bottom: 1px solid #ebebeb; height: 80px">
            <img src="{{asset('images/'.$item->img)}}" alt="lỗi ảnh " id="anh" width="100% "
                style="height: 180px">
            <p style="font-size: 14px">{{$item->summary}}</p>
        </a>
        @endforeach


    </div>
    <hr>

    <div>

        @foreach($cate->articleCategory()->latest('id')->limit(4)->get() as $item)

        @if(!$loop->first)
        <a href="{{route('article',$item)}}"
            class=" d-flex  img_cate_item text-dark text-decoration-none gap-3"
            style="border-bottom: 1px solid #ebebeb; height: 100px">
            <img src="{{asset('images/'.$item->img)}}" alt="lỗi ảnh " id="anh" width="84px" height="84px">
            <span>{{$item->title}}</span>
        </a>
        @endif
        @endforeach


    </div>
    @endforeach
</div>
<div class="d-flex flex-wrap justify-content-center">{{ $cateAllAcrticle->links() }}</div>