@extends('layouts.auth')

@section('content')
    <div class="w1/2">
        @if (session('status'))
            <div class="bg-gray-300 border border-gray-500 text-gray-500" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>
    <div class="w-1/3">
        <div class="text-start mb-3">
            {{ __('Insert your e-mail and you will receive a reset link in your inbox.')  }}
        </div>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="relative">
                <input
                    type="email"
                    class="block w-full bg-white p-4 border rounded @error('email') border-red-500 @enderror"
                    name="email"
                    placeholder="{{ __('Insert your email') }}"
                    value="{{ old('email') }}"
                    required
                    autocomplete="email" autofocus
                />
                <input type="submit" class="w-full py-3 mt-2" value="{{ __('Send Password Reset Link') }}">
            </div>
        </form>
        <a href="{{ route('login') }}">back to login</a>
    </div>

{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Reset Password') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    <form method="POST" action="{{ route('password.email') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Send Password Reset Link') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@endsection
