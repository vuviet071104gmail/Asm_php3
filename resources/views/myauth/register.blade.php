@extends('client.layouts.main')
@section('content')
<div class=" d-flex justify-content-center">
    <div class="border border-1 col-6 mt-5 p-5 rounded-2 mb-5">
        <h2 class="text-center mb-4">ĐĂNG
            KÝ TÀI KHOẢN</h2>

        <div class="duongke row d-flex justify-content-center ">
            <div class="col-12 d-flex justify-content-center gap-2">
                <div class="d-flex justify-content-center bg-primary p-2 rounded-2" style="width: 220px;"><a href="#"
                        class="text-light text-decoration-none"><i class="fa-brands fa-facebook text-bg-primary"></i>
                        FACEBOOK</a></div>
                <div class="d-flex justify-content-center bg-danger p-2 rounded-2" style="width: 220px;"><a href="#"
                        class="text-decoration-none text-light"><i class="fa-brands fa-google me-1"></i>GOOGLE</a>
                </div>
            </div>
        </div>
        <div class="row mt-5 mb-2">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="d-flex fw-semibold">Họ tên </label>
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror "
                        placeholder="Họ và Tên" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="d-flex fw-semibold">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                        value="{{ old('email') }} " id="email" name="email" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="d-flex fw-semibold">Mật khẩu</label>
                    <input type="password" name="password" id="password"
                        class="form-control @error('password') is-invalid @enderror" placeholder="Tạo mật khẩu" required
                        autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="d-flex fw-semibold">Nhập lại mật khẩu</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        placeholder="Xác nhận lại mật khẩu" required autocomplete="new-password">
                </div>
                <div class="mb-3 form-check d-flex justify-content-between">
                    <div>
                        <a href="{{ route('login') }}" class="text-danger text-decoration-none">Create account</a>
                    </div>


                </div>
                <button type="submit" class="btn btn-secondary" style="width: 100%;">Đăng ký ngay</button>
            </form>
        </div>
        <div class="text-center mt-3">
            Bạn đã đăng nhập hoặc tạo tài khoản là đồng ý <br>
            Với điều khoản sử dụng và chính sáchbảo mật của BÁO Thanh niên
        </div>
    </div>
</div>
@endsection
