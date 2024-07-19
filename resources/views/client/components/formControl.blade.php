<div class="form-control">
    <div class="">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item d-flex justify-content-center" role="presentation" style="width: 149px;">
                <button class="nav-link active w-100" id="pills-view-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-view-pane" type="button" role="tab"
                    aria-controls="pills-view-pane" aria-selected="true">Đọc nhiều</button>
            </li>
            <li class="nav-item d-flex justify-content-center" role="presentation" style="width: 149px;">
                <button class="nut-bt nav-link w-100" id="pills-new-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-new-pane" type="button" role="tab" aria-controls="pills-new-pane"
                    aria-selected="true">Tin mới</button>
            </li>
        </ul>
    </div>

    {{-- Tin lọc (view và new) --}}
    {{-- tin xem nhiều --}}
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="pills-view-pane" role="tabpanel"
            aria-labelledby="home-tab" tabindex="0">
            @for($i = 0; $i < $articleview->count(); $i++)


                @if($i < 10) <div class="box-category-item box-item-news pb-3">
                    <a href="{{route('article',$articleview[$i])}}" class="text-dark text-decoration-none">
                        {{$articleview[$i]->title}}
                    </a>
        </div> @endif
        @endfor


    </div>
    {{-- tin mới --}}
    <div class="tab-pane fade" id="pills-new-pane" role="tabpanel" aria-labelledby="contact-tab"
        tabindex="0">
        @for($i = 0; $i < $articletime->count(); $i++)


            @if($i < 10) <div class="box-category-item box-item-news pb-3">
                <a href="{{route('article',$articletime[$i])}}" class="text-dark text-decoration-none">
                    {{$articletime[$i]->title}}
                </a>
    </div> @endif
    @endfor


</div>