@extends('layouts.app')
@section('content')
<div class="wrapper wrapper-full-page">
    <div class="page-header register-page header-filter">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-8 ml-auto mr-auto">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="card card-signup">
                            <div class="card-header card-header-primary text-center">
                                <h5 class="card-title">{{ trans ('global.register') }}</h5>
                            </div>
                            @if(session('status'))
                                <div class="card-body" style="padding: .9375rem 20px;">
                                    <p class="alert alert-info">
                                        {{ session('status') }}
                                    </p>
                                </div>
                            @endif
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        {{-- Name --}}
                                        <div class="form-group bmd-form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">face</i>
                                                    </span>
                                                </div>
                                                <input name="name" type="text" class="form-control" placeholder="{{ trans ('global.user_name') }}..." value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            </div>
                                            @error('name')
                                                <div class="error" for="name">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        {{-- Surname --}}
                                        <div class="form-group bmd-form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">face</i>
                                                    </span>
                                                </div>
                                                <input name="surname" type="text" class="form-control" placeholder="{{ trans ('global.surname') }}..." value="{{ old('surname') }}" required autocomplete="name" autofocus>
                                            </div>
                                            @error('surname')
                                                <div class="error" for="surname">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        {{-- gender --}}
                                        <div class="form-group bmd-form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">male</i>
                                                    </span>
                                                </div>
                                                @foreach(App\Models\User::GENDER_RADIO as $key => $label)
                                                <div class="form-control">
                                                        <input class="form-check-input" type="radio" name="gender"  placeholder="{{ trans ('global.gender') }}..." value="{{ $label['label'] }}" {{ old('gender', '') === (string) $key ? 'checked' : '' }} required style="position: initial; padding-left: 20px; display: inline-block;">
                                                        <label class="form-check-label" for="gender {{ $key }}">{{ $label['label'] }}</label>
                                                 </div>
                                                 @endforeach
                                            </div>
                                            @error('gender')
                                                <div class="error" for="gender">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        {{-- date_of_birth --}}
                                        <div class="form-group bmd-form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">event</i>
                                                    </span>
                                                </div>
                                                <input name="date_of_birth" type="text" class="form-control date" placeholder="{{ trans ('global.date_of_birth') }}..." value="{{ old('date_of_birth') }}" required  autocomplete="date_of_birth">
                                            </div>
                                            @error('date_of_birth')
                                                <div class="error" for="date_of_birth">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                     {{-- Email --}}
                                        <div class="form-group bmd-form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">mail</i>
                                                    </span>
                                                </div>
                                                <input name="email" type="email" class="form-control" placeholder="{{ trans ('global.login_email') }}..." value="{{ old('email') }}" required autocomplete="email">
                                            </div>
                                            @error('email')
                                                <div class="error" for="email">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        {{-- Password --}}
                                        <div class="form-group bmd-form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">lock_outline</i>
                                                    </span>
                                                </div>
                                                <input name="password" type="password" class="form-control" placeholder="{{ trans ('global.login_password') }}..." value="{{ old('password') }}" required autocomplete="new-password">
                                            </div>
                                            @error('password')
                                                <div class="error" for="password">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        {{-- Password Confirm --}}
                                        <div class="form-group bmd-form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">lock_outline</i>
                                                    </span>
                                                </div>
                                                <input name="password_confirmation" type="password" class="form-control" placeholder="{{ trans ('global.login_password_confirmation') }}..." value="{{ old('password') }}" required autocomplete="new-password">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer justify-content-center flex-column">
                                <button class="btn btn-primary btn-round mt-4 mb-3">{{ trans ('global.register') }}</button>
                                {{ trans ('global.or') }}
                                <a class="btn btn-link btn-primary" href="{{ route('login') }}">
                                    {{ trans ('global.login') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
