<footer style="background-color: #F6F6F6 ;clear: both;" >
    <section class="container">
        <section class="cate_bao pt-4">
            <div class="cate_item ">
                <ul class=" list-unstyled lh-lg text-dark  d-flex flex-wrap">
                    @foreach($categoryAll as $item)
                    <li class="col-3"><a class="text-decoration-none text-dark"
                            href="{{route('category',$item)}}">{{$item->name}}</a></li>
                    @endforeach
                </ul>

            </div>
        </section>
        <hr>
        <section class="benefit d-flex justify-content-between align-items-center">
            <div class="benefit_logo ">
                <img src="{{asset('images/logo_baothanhnien.webp')}}" alt="lỗi ảnh " id="anh" width="100%">
            </div>
            <div class="benefit_content d-flex justify-content-start align-items-baseline">
                <div class="benefit_content_item d-flex pe-4" style="border-right: 1px solid #c2c1c1; height: 35px;">
                    <ul class=" list-unstyled lh-lg text-dark d-flex gap-3  fw-semibold">
                        <li><a class="text-decoration-none text-dark" href="">Đặt báo</a></li>
                        <li><a class="text-decoration-none text-dark" href="">Quảng cáo </a></li>
                        <li><a class="text-decoration-none text-dark" href="">RSS</a></li>
                        <li><a class="text-decoration-none text-dark" href="">Tòa soạn </a></li>
                        <li><a class="text-decoration-none text-dark" href="">Chính sách bảo mật</a></li>

                    </ul>
                </div>
                <div class="social d-flex justify-content-between align-items-center ms-3 ">
                    <span class="me-3">Theo dõi báo trên</span>
                    <div class="list-sc">
                        <a href="https://www.facebook.com/thanhnien" class="item" rel="nofollow" target="_blank"
                            title="Facebook">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="#8B8B8B"></rect>
                                <path
                                    d="M16.7922 16.5585H19.7699L20.2374 13.5151H16.7916V11.8518C16.7916 10.5875 17.2022 9.46638 18.3776 9.46638H20.2665V6.81048C19.9346 6.76539 19.2327 6.66669 17.9065 6.66669C15.1371 6.66669 13.5134 8.13813 13.5134 11.4904V13.5151H10.6665V16.5585H13.5134V24.9235C14.0773 25.0088 14.6483 25.0667 15.2346 25.0667C15.7645 25.0667 16.2816 25.0179 16.7922 24.9485V16.5585Z"
                                    fill="#8B8B8B"></path>
                            </svg>

                        </a>
                        <a href="https://zalo.me/2431025964363015388" class="item" rel="nofollow" target="_blank"
                            title="Zalo">
                            <svg width="32" height="33" viewBox="0 0 32 33" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="1" width="31" height="31" rx="15.5" stroke="#8B8B8B"></rect>
                                <g clip-path="url(#clip0_2275_15028)">
                                    <path
                                        d="M25.3331 16.119C25.3331 16.222 25.3331 16.333 25.3331 16.436C25.3098 16.5231 25.2709 16.6103 25.2631 16.6974C25.092 19.1536 24.0653 21.1977 22.222 22.7585C19.4064 25.1434 16.2098 25.6505 12.7487 24.5254C12.4687 24.4382 12.2431 24.4303 11.9787 24.5729C11.2864 24.9532 10.5709 25.3018 9.8631 25.6584C9.74643 25.7218 9.61421 25.7614 9.45088 25.8327C9.45088 25.6584 9.4431 25.5554 9.45088 25.4524C9.50532 24.6918 9.54421 23.9232 9.61421 23.1626C9.64532 22.8299 9.54421 22.5922 9.3031 22.3624C8.26866 21.3799 7.52199 20.1994 7.10977 18.8287C6.89977 18.1315 6.79866 17.3947 6.65088 16.6737C6.65088 16.2537 6.65088 15.8259 6.65088 15.406C6.7131 15.0653 6.75977 14.7167 6.84532 14.376C7.74755 10.7472 10.0342 8.51293 13.5187 7.49086C14.0242 7.34032 14.5531 7.26902 15.0664 7.16602C15.6653 7.16602 16.2564 7.16602 16.8553 7.16602C16.9253 7.18978 16.9953 7.2294 17.0731 7.23732C18.1542 7.34032 19.1809 7.62555 20.1531 8.11678C22.782 9.432 24.4931 11.4999 25.1153 14.4473C25.2242 14.994 25.2631 15.5644 25.3331 16.119ZM11.9553 14.3601C11.7609 14.6295 11.6442 14.7959 11.5198 14.9623C10.8431 15.8576 10.1431 16.745 9.48977 17.664C9.11643 18.187 9.39644 18.7178 10.0264 18.7336C11.0453 18.7574 12.072 18.7416 13.0987 18.7416C13.4253 18.7416 13.6431 18.5831 13.6664 18.2266C13.6898 17.8859 13.5109 17.664 13.1375 17.6403C12.6087 17.6086 12.0798 17.6244 11.5431 17.6244C11.372 17.6244 11.2009 17.6244 10.9364 17.6244C11.3253 17.1094 11.652 16.6895 11.9631 16.2537C12.4687 15.5644 12.9664 14.8831 13.4409 14.17C13.7053 13.7738 13.5342 13.4252 13.0831 13.3143C12.982 13.2905 12.8809 13.2747 12.7798 13.2747C11.9087 13.2668 11.0453 13.2668 10.1742 13.2747C10.0342 13.2747 9.8631 13.2747 9.76199 13.3539C9.61421 13.4728 9.43532 13.6629 9.43532 13.8293C9.43532 13.9877 9.62199 14.1779 9.76977 14.2967C9.8631 14.376 10.042 14.3601 10.182 14.3601C10.7342 14.3601 11.2864 14.3601 11.9553 14.3601ZM16.3031 18.4088C16.3653 18.4643 16.4198 18.5356 16.4975 18.5831C16.8475 18.8287 17.3298 18.6544 17.3453 18.2266C17.3764 17.2837 17.3764 16.333 17.3453 15.3822C17.3298 14.9544 16.902 14.7801 16.5364 15.0019C16.4509 15.0574 16.3731 15.1287 16.2953 15.1841C15.4242 14.6691 14.6387 14.7563 14.0942 15.4297C13.4564 16.2141 13.4487 17.4026 14.0709 18.1711C14.6075 18.8366 15.4087 18.9317 16.3031 18.4088ZM20.962 18.7495C22.0275 18.8446 22.852 17.87 22.8598 16.8876C22.8675 15.7229 22.1209 14.8593 21.0475 14.8434C19.912 14.8197 19.1264 15.604 19.0953 16.737C19.0642 17.8621 19.8809 18.8129 20.962 18.7495ZM17.7031 15.9606C17.6953 15.9606 17.6953 15.9606 17.7031 15.9606C17.7031 16.6499 17.7031 17.3313 17.7031 18.0206C17.7031 18.4801 17.8664 18.6782 18.232 18.6782C18.6053 18.6782 18.7842 18.4801 18.792 18.0364C18.7998 17.4184 18.792 16.7925 18.792 16.1745C18.792 15.406 18.7998 14.6454 18.7842 13.8768C18.7764 13.4648 18.5587 13.2588 18.2242 13.2668C17.8898 13.2747 17.7109 13.4886 17.7109 13.9006C17.6953 14.5899 17.7031 15.2713 17.7031 15.9606Z"
                                        fill="#8B8B8B"></path>
                                    <path
                                        d="M16.2332 16.8002C16.2332 17.3865 15.9454 17.743 15.4709 17.743C15.0198 17.743 14.7165 17.3548 14.7243 16.7764C14.732 16.2059 15.012 15.8652 15.4787 15.8652C15.9687 15.8732 16.2332 16.198 16.2332 16.8002Z"
                                        fill="#8B8B8B"></path>
                                    <path
                                        d="M21.7554 16.8081C21.7554 17.3627 21.4365 17.7351 20.9776 17.7351C20.5265 17.7351 20.2154 17.3548 20.2076 16.8002C20.1999 16.2693 20.5421 15.8652 20.9932 15.8652C21.4443 15.8652 21.7554 16.2455 21.7554 16.8081Z"
                                        fill="#8B8B8B"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_2275_15028">
                                        <rect width="18.6667" height="18.6667" fill="white"
                                            transform="translate(6.6665 7.16602)"></rect>
                                    </clipPath>
                                </defs>
                            </svg>

                        </a>
                        <a href="https://www.youtube.com/channel/UCIW9cGgoRuGJnky3K3tbzNg" class="item" rel="nofollow"
                            target="_blank" title="Youtube">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="#8B8B8B"></rect>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9.0097 21.6455C8.69589 21.5526 8.40956 21.3874 8.17487 21.1639C7.94019 20.9403 7.76403 20.665 7.66126 20.361C7.07404 18.7899 6.90005 12.2295 8.031 10.9345C8.4074 10.5132 8.93882 10.2538 9.50992 10.2126C12.5439 9.89414 21.9177 9.93661 22.9943 10.3188C23.2971 10.4147 23.5737 10.5762 23.8035 10.7913C24.0332 11.0064 24.2101 11.2695 24.3209 11.5608C24.9625 13.1849 24.9843 19.0871 24.2339 20.6476C24.0349 21.0538 23.7017 21.3828 23.2879 21.5818C22.1569 22.1338 10.5104 22.1231 9.0097 21.6455ZM13.8271 18.567L19.2643 15.807L13.8271 13.0257V18.567Z"
                                    fill="#8B8B8B"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <section class="bao_contact d-flex justify-content-between align-items-center pb-5">
            <div class=" bao_contact_left  d-flex  " style="width: 50%; gap: 150px ">
                <div class="bao_contact_hotline lh-1">

                    <p class="text" style="    color: #8b8b8b;">Hotline</p>
                    <p class="value text-primary">0906 645 777</p>
                    <p class="text" style="    color: #8b8b8b;">Liên hệ quảng cáo</p>
                    <p class="value text-primary" d-flex justify-content-between>0908 780 404</p>

                </div>
                <div class="bao_contact_info lh-1" style="    color: #8b8b8b;">
                    <p class="text">
                        Tổng biên tập: Nguyễn Ngọc Toàn
                    </p>
                    <p class="text">
                        Phó tổng biên tập: Hải Thành
                    </p>
                    <p class="text">
                        Phó tổng biên tập: Lâm Hiếu Dũng
                    </p>
                    <p class="text">Phó tổng biên tập: Trần Việt Hưng</p>
                    <p class="text">
                        Tổng thư ký tòa soạn: Đức Trung
                    </p>
                </div>
            </div>
            <div class="copy-right " style="  color: #8b8b8b; padding-left:200px  ;width: 50%;">
                <p> Giấy phép xuất bản số 110/GP - BTTTT cấp ngày 24.3.2020
                    © 2003-2024 Bản quyền thuộc về Báo Thanh Niên. Cấm sao chép dưới mọi hình thức nếu không có sự
                    chấp
                    thuận bằng văn bản.</p>


                <a href="https://tinnhiemmang.vn/danh-ba-tin-nhiem/thanhnienvn-1625711824"
                    title="Chứng nhận tín nhiệm mạng" target="_blank"
                    style="width: 150px;display: block;margin-top: 15px;">
                    <img src="https://tinnhiemmang.vn/handle_cert?id=thanhnien.vn" width="150" height="68"
                        alt="Chứng nhận tín nhiệm mạng" loading="lazy">
                </a>
            </div>
        </section>
    </section>
</footer>