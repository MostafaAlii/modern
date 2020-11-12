@extends('layouts.admin')
@section('title')
    {{ trans('admin.application_name') }} |
    {{ trans('admin.admin_create') }}
@endsection

@section('content')
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <!-- Start app-content -->
    <div class="app-content content">
        <!-- Start Content Wrapper -->
        <div class="content-wrapper">
            <!-- Start Content Header -->
            <div class="content-header row">
                <div class="content-header-left col-md-12 col-12 mb-2">
                    <!-- Start Breadcrumbs -->
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item h5"><a href="{{ route('admin.dashboard') }}">{{ trans('admin.dashboard') }}</a></li>
                                <li class="breadcrumb-item h5"><a href="{{ route('admin.admins') }}"> {{ trans('admin.admins') }}</a></li>
                                <li class="breadcrumb-item h5"><a href="{{ route('admin.create') }}"> {{ trans('admin.admin_create') }}</a></li>
                            </ol>
                        </div>
                    </div>
                    <!-- End Breadcrumbs -->
                </div>
            </div>
            <!-- End Content Header -->

            <!-- Start Page Heading -->
            <div class="page-heading d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800" style="font-family: 'Cairo';">
                    <i class="la la-plus-circle"></i> /
                    {{ trans('admin.create_new_admin') }}
                </h1>
            </div>
            <!-- End Page Heading -->
            <hr>
            <!-- Start Content Body -->
            <div class="content-body">
                <h1 class="h4 mb-0 text-gray-800" style="font-family: 'Cairo';">
                    <i class="ft-edit-2"></i> /
                    {{ trans('admin.adminDetails') }}
                </h1>
            </div>
            <br><br>
            <!-- Start Form -->
            @include('dashboard.includes.alerts.errors')
            @include('dashboard.includes.alerts.success')
            <!-- Start Card Content -->
            <div class="card-content collapse show">
                <!-- Start Card Body -->
                <div class="card-body">
                    <!-- Start Form -->
                    <form class="form" action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Start Form body -->
                        <div class="form-body">
                            <!-- Start Row -->
                            <div class="row">
                                <!-- Start Name Field -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label style="font-weight: bold;" for="projectinput1">{{ trans('admin.adminsName') }}</label>
                                        <input type="text" name="name" value="" id="name" class="form-control" placeholder="{{ trans('admin.adminName_typing') }}">
                                    </div>
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- End Name Field -->

                                <!-- Start Username Field -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label style="font-weight: bold;" for="projectinput2">{{ trans('admin.adminNickname') }}</label>
                                        <input type="text" name="username" value="" id="name" class="form-control" placeholder="{{ trans('admin.adminNickname_typing') }}">
                                    </div>
                                    @error('username')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- End Username Field -->

                                <!-- Start Email Field -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label style="font-weight: bold;" for="projectinput3">{{ trans('admin.adminEmail') }}</label>
                                        <input type="email" name="email" value="" id="name" class="form-control" placeholder="{{ trans('admin.adminEmail_typing') }}">
                                    </div>
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- End Email Field -->
                            </div>
                            <!-- End Row -->

                            <div class="row">
                                <!-- Start Password Field -->
                                <div class="col-md-4">
                                    <div class="form-group position-relative">
                                        <label style="font-weight: bold;" for="projectinput2">{{ trans('admin.password') }}</label>
                                        <input type="password" name="password" class="form-control" id="user-password" placeholder="{{ trans('admin.type_your_password_here') }}" required>
                                    </div>
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- End Password Field -->
                            </div>

                            <!-- Start Status Row -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mt-1">
                                        <label for="switcheryColor4" style="font-weight: bold;">{{ trans('admin.status') }}</label>
                                        <input type="checkbox" class="switchery" value="1" name="status" id="switcheryColor4" data-color="success" checked />
                                    </div>
                                </div>
                            </div>
                            <!-- End Status Row -->
                            <hr>
                            <!-- Start Actions Row -->
                            <div class="row">
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-success">
                                        <i class="ft-check-circle"> </i>
                                        {{ trans('admin.save') }}
                                    </button>
                                    <button type="button" class="btn btn-warning" onclick="history.back();">
                                        <i class="ft-rotate-ccw"> </i>
                                        {{ trans('admin.back') }}
                                    </button>
                                </div>
                            </div>
                            <!-- End Actions Row -->
                        </div>
                        <!-- End Form body -->
                    </form>
                    <!-- End Form -->
                </div>
                <!-- End Card Body -->
            </div>
            <!-- End Card Content -->
        </div>
        <!-- End Content Wrapper -->
    </div>
    <!-- End app-content -->
    <!-- ////////////////////////////////////////////////////////////////////////////-->
@endsection
