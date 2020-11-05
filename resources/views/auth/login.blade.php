<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="{{ asset('dashboard/img/favicon.png')}}">

  <title>تسجيل دخول لوحة تحكم | مدرسة الأقصى</title>
  <link href="{{ asset('dashboard/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('dashboard/css/bootstrap-theme.css')}}" rel="stylesheet">
  <link href="{{ asset('dashboard/css/elegant-icons-style.css')}}" rel="stylesheet" />
  <link href="{{ asset('dashboard/css/font-awesome.css')}}" rel="stylesheet" />
  <link href="{{ asset('dashboard/css/style.css')}}" rel="stylesheet">
  <link href="{{ asset('dashboard/css/style-responsive.css')}}" rel="stylesheet" />

</head>

<body class="login-img3-body">

  <div class="container rtl">
<form method="POST" action="{{ route('login') }}" class="login-form">
                        @csrf
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <p>التسجيل دخول للوحة تحكم</p>
    
        <div class="input-group">
             <span class="input-group-addon"><i class="icon_profile"></i></span>

            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"   placeholder="ادخل البريد الالكتروني">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
      

        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>

            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  placeholder="ادخل كلمة المرور">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
        <label class="checkbox">
                 <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} style="
    float: right;
    margin-left: 10px;
"> تذكرني
                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="
    float: left;
">
                                        {{ __('هل نسيت كلمة المرور ؟') }}
                                    </a>
                                @endif
            </label>
        <button class="btn btn-primary btn-lg btn-block" type="submit">تسجيل دخول</button>
        <!--<button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>-->
      </div>
    </form>
  </div>


</body>

</html>
