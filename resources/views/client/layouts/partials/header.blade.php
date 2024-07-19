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
                    <input style="border: none ; outline: none" class="ms-2" type="text" name="key"
                        value="" id="" placeholder="Tìm kiếm " required>
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
                <!-- Button trigger modal -->
                <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <span>
                        <i class="fa-regular fa-user" style="color: #000000;"></i>
                    </span><br>
                    <span>
                        Đăng nhập
                    </span>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item d-flex justify-content-center" role="presentation"
                                        style="width: 228px;">
                                        <button class="nav-link active w-100" id="pills-dn-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-dn" type="button" role="tab" aria-controls="pills-dn"
                                            aria-selected="true">Đăng
                                            nhập</button>
                                    </li>
                                    <li class="nav-item d-flex justify-content-center" role="presentation"
                                        style="width: 228px;">
                                        <button class="nut-bt nav-link w-100" id="pills-dk-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-dk" type="button" role="tab" aria-controls="pills-dk"
                                            aria-selected="true">Đăng
                                            ký</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="modal-body">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-dn" role="tabpanel"
                                        aria-labelledby="pills-dn-tab" tabindex="0">
                                        <div class="col-12 mt-1 p-3 ">
                                            <h2 class="text-center mb-4">ĐĂNG
                                                NHẬP TÀI KHOẢN</h2>
                                            <div class="duongke row d-flex justify-content-center ">
                                                <div class="col-12 d-flex justify-content-center gap-2">
                                                    <div class="d-flex justify-content-center bg-primary p-2  rounded-2"
                                                        style="width: 220px;"><a href="#"
                                                            class="text-light text-decoration-none"><i
                                                                class="fa-brands fa-facebook text-bg-primary"></i>
                                                            FACEBOOK</a></div>
                                                    <div class="d-flex justify-content-center bg-danger p-2 rounded-2"
                                                        style="width: 220px;"><a href="#"
                                                            class="text-decoration-none text-light"><i
                                                                class="fa-brands fa-google me-1"></i>GOOGLE</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-5 mb-2  ">
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="" class="d-flex fw-semibold">Email</label>
                                                        <input type="email" class="form-control" placeholder="Email">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="d-flex fw-semibold">Mật khẩu</label>
                                                        <input type="password" class="form-control"
                                                            placeholder="Mật khẩu">
                                                    </div>
                                                    <div class="mb-3 form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="exampleCheck1">
                                                        <label class="form-check-label d-flex" for="exampleCheck1">Ghi
                                                            nhớ tài
                                                            khoản</label>
                                                    </div>
                                                    <button type="submit" class="btn btn-secondary"
                                                        style="width: 100%;">Đăng
                                                        nhập</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-dk" role="tabpanel"
                                        aria-labelledby="pills-dk-tab" tabindex="0">
                                        <div class="col-12 mt-1 p-3 ">
                                            <h2 class="text-center mb-4">ĐĂNG
                                                KÝ TÀI KHOẢN</h2>

                                            <div class="duongke row d-flex justify-content-center ">
                                                <div class="col-12 d-flex justify-content-center gap-2">
                                                    <div class="d-flex justify-content-center bg-primary p-2 rounded-2"
                                                        style="width: 220px;"><a href="#"
                                                            class="text-light text-decoration-none"><i
                                                                class="fa-brands fa-facebook text-bg-primary"></i>
                                                            FACEBOOK</a></div>
                                                    <div class="d-flex justify-content-center bg-danger p-2 rounded-2"
                                                        style="width: 220px;"><a href="#"
                                                            class="text-decoration-none text-light"><i
                                                                class="fa-brands fa-google me-1"></i>GOOGLE</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-5 mb-2">
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="" class="d-flex fw-semibold">Họ tên </label>

                                                        <input type="text" class="form-control" placeholder="Họ và Tên">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="d-flex fw-semibold">Email</label>

                                                        <input type="email" class="form-control" placeholder="Email">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="d-flex fw-semibold">Mật khẩu</label>

                                                        <input type="password" class="form-control"
                                                            placeholder="Tạo mật khẩu">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="d-flex fw-semibold">Nhập lại mật
                                                            khẩu</label>

                                                        <input type="password" class="form-control"
                                                            placeholder="Xác nhận lại mật khẩu">
                                                    </div>
                                                    <div class="mb-3 form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="exampleCheck1">
                                                        <label class="form-check-label" for="exampleCheck1">Ghi
                                                            nhớ tài
                                                            khoản</label>
                                                    </div>
                                                    <button type="submit" class="btn btn-secondary"
                                                        style="width: 100%;">Đăng
                                                        ký
                                                        ngay</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                Bạn đã đăng nhập hoặc tạo cài khoản là đồng ý với điều khoản sử dụng và chính sách
                                bảo mật của BÁO Thanh niên
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



</header>