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
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>

