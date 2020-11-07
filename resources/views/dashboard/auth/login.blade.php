@extends('layouts.login')
@section('title')
    {{ trans('admin.application_name') }} |
    {{ trans('admin.login_page_title') }}
@endsection
@section('content')
<!-- ////////////////////////////////////////////////////////////////////////////-->
<section class="flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-md-4 col-10 box-shadow-2 p-0">
            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                <div class="card-header border-0">
                    <div class="card-title text-center">
                        <img src="{{asset('assets/admin/images/logo/logo-dark.png')}}" alt="branding logo">
                    </div>
                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                        <span>{{ trans('admin.login_here_now') }}</span>
                    </h6>
                </div>
                @include('dashboard.includes.alerts.errors')
                @include('dashboard.includes.alerts.success')
                <div class="card-content">
                    <div class="card-body">
                        <form class="form-horizontal" action="{{ route('admin.post.login') }}" method="post" novalidate>
                            @csrf
                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="text" name="email" class="form-control" id="user-name" placeholder="{{ trans('admin.type_your_email_here') }}" required>
                                <div class="form-control-position">
                                    <i class="ft-user"></i>
                                </div>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </fieldset>
                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="password" name="password" class="form-control" id="user-password" placeholder="{{ trans('admin.type_your_password_here') }}" required>
                                <div class="form-control-position">
                                    <i class="la la-key"></i>
                                </div>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </fieldset>
                            <div class="form-group row">
                                <div class="col-md-6 col-12 text-center text-sm-left">
                                    <fieldset>
                                        <input type="checkbox" name="remember_me" id="remember-me" class="chk-remember">
                                        <label for="remember-me"> {{ trans('admin.remember_me') }} </label>
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-12 float-sm-left text-center text-sm-right">
                                    <a href="{{ route('admin.forgetPassword') }}" class="card-link text-dark">
                                        {{ trans('admin.forgot_password_link') }}
                                    </a>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-dark btn-block">
                                <i class="ft-unlock"> </i>
                                {{ trans('admin.login_btn') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ////////////////////////////////////////////////////////////////////////////-->
@endsection
