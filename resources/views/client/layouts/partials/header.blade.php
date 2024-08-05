<header style="padding: 0px 100px 0px 100px ">
    <div class="header_or_flex p-3 d-flex justify-content-between align-items-center"
        style="background-color: #f5f2f2 ">
        <div class="d-flex gap-2" style="height: 25px">
            @php
            use Carbon\Carbon;
            $now = Carbon::now();
            $formattedDate = $now->format('l , d/m/Y');
            @endphp
            <div style=" width: 190px; border-right: 1px solid #8b8b8b;">{{$formattedDate}}</div>
            <div style=" width: 100px; border-right: 1px solid #8b8b8b;">Bạn cần biết </div>
            <div style=" width: 70px; border-right: 1px solid #8b8b8b;">Tiện ích </div>
            <div style=" width: 70px; ">Liên hệ </div>
        </div>
        <div class="header__ov-social d-flex gap-3">
            <span class="text">Theo dõi báo trên</span>
            <div class="list">
                <a href="https://www.youtube.com/channel/UCIW9cGgoRuGJnky3K3tbzNg" class="item" ref="nofollow"
                    title="Youtube" target="_blank">
                    <img src="https://thanhnien-static.mediacdn.vn/thanhnien.vn/image/icon_youtube_fill.svg"
                        alt="Youtube" width="24" height="24">
                </a>
                <a href="https://www.facebook.com/thanhnien" class="item" ref="nofollow" title="Facebook"
                    target="_blank">
                    <img src="https://thanhnien-static.mediacdn.vn/thanhnien.vn/image/icon_facebook_full_color.svg"
                        alt="Facebook" width="24" height="24">
                </a>
                <a href="https://www.tiktok.com/@baothanhnien.official" class="item" ref="nofollow" title="Tiktok"
                    target="_blank">
                    <img src="https://thanhnien-static.mediacdn.vn/thanhnien.vn/image/Icon_Tiktok_fill.svg" alt="Tiktok"
                        width="24" height="24">

                </a>
                <a href="https://zalo.me/2431025964363015388" class="item" ref="nofollow" title="Zalo" target="_blank">
                    <img src="https://thanhnien-static.mediacdn.vn/thanhnien.vn/image/icon_zalo_full_color.svg"
                        alt="Zalo" width="24" height="24">
                </a>

            </div>
        </div>
    </div>
    <div class="header__container  d-flex align-items-center p-3">
        <div class="header__tf-left d-flex align-items-center  gap-3">
            <div>
                <div class="dropdown">
                    <a class="btn " href="#" role="button" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fa-solid fa-bars fs-2" style="color: #000000;"></i>
                    </a>
                    <div class="dropdown-menu mt-4 ">
                        <div class=" d-flex flex-wrap row pb-3" style="width: 1720px ;">
                            @foreach($categoryAll as $cate)
                            <div class=" col-3">

                                <ul>

                                    <a class="ps-2 text-dark text-decoration-none fw-semibold"
                                        href="{{route('category',$cate)}}">{{$cate->name}}
                                    </a>
                                </ul>
                                <ul class="" style="list-style: none;">
                                    @foreach($cate->children as $one)

                                    <li><a class="dropdown-item" href="{{route('categorychild',$one)}}">{{
                                            $one->name}}</a></li>

                                    @endforeach
                                </ul>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{ route('seacher.submit') }}" method="POST">
                @csrf
                <div style="width: 250px; height: 40px; border-radius: 5px " class="box_search border p-2 ">
                    <button type="submit" class="border-0 bg-transparent"><i class="fa-solid fa-magnifying-glass "
                            style="color: #555555;"></i></button>
                    <input style="border: none ; outline: none" class="ms-2" type="text" name="key" value="" id=""
                        placeholder="Tìm kiếm " required>
                </div>
            </form>
        </div>
        <div style="width: 1170px" class="header__tf-center text-center">
            <img src="{{asset('images/Thanh_Niên_logo.png')}}" alt="lỗi ảnh " id="anh" width="30%">
        </div>
        <div style="width: 400px" class="header__tf-right d-flex align-items-center text-center gap-3">
            <div>
                <span>
                    <i class="fa-regular fa-lightbulb" style="color: #000000;"></i>
                </span><br>
                <span>
                    Podcast
                </span>

            </div>
            <div>
                <span>
                    <i class="fa-solid fa-bullhorn" style="color: #000000;"></i>
                </span><br>
                <span>
                    Quảng cáo
                </span>

            </div>
            <div>
                <span>
                    <i class="fa-solid fa-book" style="color: #000000;"></i>
                </span><br>
                <span>
                    Đặt báo
                </span>

            </div>
            <div>
                <span>
                    <i class="fa-regular fa-user" style="color: #000000;"></i>
                </span><br>


                @guest
                <div class="d-flex align-content-center">
                    @if (Route::has('login'))
                    <li class="nav-item " style="list-style: none">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Đăng nhập') }}</a>
                    </li>
                    @endif

                    {{-- @if (Route::has('register'))
                    <li class="nav-item" style="list-style: none">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Đăng ký') }}</a>
                    </li>
                    @endif --}}
                </div>

                @else
                <li class="nav-item dropdown" style="list-style: none">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    {{-- {{ dd(Auth::user()) }} --}}

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        @if (Auth::user()->type === 'admin')
                        <div>
                            <a class="dropdown-item"
                                href="{{ route('category.index',['user' => Auth::user()->id]) }}">admin</a>
                        </div>
                        @endif
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>


                </li>
                @endguest
            </div>


        </div>
    </div>



</header>
