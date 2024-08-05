@extends('client.layouts.main')
@section('content')


<div class=" d-flex justify-content-center">
    <div class="border border-1 col-6 mt-5 p-5 rounded-2 mb-5">
        <h2 class="text-center mb-4">ĐĂNG
            NHẬP TÀI KHOẢN</h2>
        <div class="duongke row d-flex justify-content-center ">
            <div class="col-12 d-flex justify-content-center gap-2">
                <div class="d-flex justify-content-center bg-primary p-2  rounded-2" style="width: 220px;"><a href="#"
                        class="text-light text-decoration-none"><i class="fa-brands fa-facebook text-bg-primary"></i>
                        FACEBOOK</a></div>
                <div class="d-flex justify-content-center bg-danger p-2 rounded-2" style="width: 220px;"><a href="#"
                        class="text-decoration-none text-light"><i class="fa-brands fa-google me-1"></i>GOOGLE</a>
                </div>
            </div>
        </div>
        <div class="row mt-5 mb-2  ">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <label for="" class="d-flex fw-semibold">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="" class="d-flex fw-semibold">Mật khẩu</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-4 form-check d-flex justify-content-between">
                    <div>
                        <a href="{{ route('register') }}" class="text-danger text-decoration-none">Create account</a>
                    </div>
                    <div>
                        <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember')
                            ? 'checked' : '' }}>

                        <label class="form-check-label d-flex" for="remember">Ghi nhớ tài khoản</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-secondary w-100 fw-bold" style="height: 50px">Đăng nhập</button>
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </form>
        </div>
        <div class="text-center mt-3">
            Bạn đã đăng nhập hoặc tạo tài khoản là đồng ý <br> Với điều khoản sử dụng và chính sách
            bảo mật của BÁO Thanh niên
        </div>
    </div>
</div>
@endsection
