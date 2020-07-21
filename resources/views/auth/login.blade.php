@extends('layouts.masterclean')

@section('title', config('app.name').' | Login')

@section('content')
<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
      <br>
      <br>
      <br>
        <div>
            <img src="{{asset('img/kimiafarma.jpg')}}" alt="" width="220px" height="auto">
        </div>
        <br>
        <h4 style="color:white">Selamat Datang di Kimia Farma Prediction</h4>
        <p style="color:white">Silahkan login untuk dapat melanjutkan</p>
        <form class="m-t" role="form" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="form-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </div>
        </form>
        <p class="m-t" style="color:white"> <small>Ihzanatul Khumairah</small></p>
    </div>
</div>

@endsection
