@extends('client.layout.master')

@section('title', 'Đăng nhập')

@section('content')
    <div class="container h-100 d-flex align-items-center justify-content-center" style="height: 100vh">
        <div class="w-100 mx-auto" style="max-width: 600px;">
            <div class="card">
                <div class="card-body">
                    <h2 class="h2 text-center mb-4 fs-1">Đăng nhập</h2>
                    <form action="{{ route('admin.authenticate') }}" method="post" autocomplete="off" novalidate>
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" autocomplete="off" name="email"
                                value="{{ old('email') }}" tabindex="1">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">
                                Mật khẩu
                                <span class="form-label-description">
                                    <a href="{{ route('admin.password.forgot') }}">Quên mật khẩu ?</a>
                                </span>
                            </label>
                            <div class="input-group input-group-flat">
                                <input type="password" class="form-control" name="password" autocomplete="off"
                                    tabindex="2">

                                <span class="input-group-text">
                                    <a href="#" class="link-secondary" title="Hiển thị mật khẩu"
                                        data-bs-toggle="tooltip" id="show_password">
                                        <i class="ti ti-eye fs-3"></i>
                                    </a>
                                </span>
                            </div>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-check">
                                <input type="checkbox" class="form-check-input" name="remember" tabindex="3"
                                    value="1">
                                <span class="form-check-label">
                                    Ghi nhớ đăng nhập
                                </span>
                            </label>
                        </div>

                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary w-100">
                                Đăng nhập
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
