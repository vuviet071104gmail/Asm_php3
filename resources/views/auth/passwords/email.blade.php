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
            {{-- <div class="card-header">{{ __('Reset Password') }}</div> --}}

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
