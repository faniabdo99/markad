@include('layout.header' , ['PageTitle' => 'تسجيل الدخول ' , 'PageDescription' => 'صفحة تسجيل دخول المدير'])
<body class="login-body">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">تسجيل الدخول</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                            <label for="email" class="col-md-4 col-form-label text-md-right">البريد الإلكتروني</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <label for="password" class="col-md-4 col-form-label text-md-right">كلمة السر</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input hidden type="checkbox" name="remember" id="remember" checked >
                            <button type="submit" class="login-button">
                                دخول
                            </button>
                           
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
