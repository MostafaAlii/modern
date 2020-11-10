@extends('layouts.admin')
@section('title')
    {{ trans('admin.application_name') }} |
    {{ trans('admin.admins_management') }}
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
                    <i class="la la-user-secret"></i> /
                    {{ trans('admin.all_admins_in_website') }}
                </h1>
            </div>
            <!-- End Page Heading -->
            <hr>
            <!-- Start Export Btn -->
            <div class="dt-buttons">
                <button class="dt-button btn btn-primary" tabindex="0" aria-controls="table" type="button">
                    <span><i class="la la-plus-circle"> </i> {{ trans('admin.create_new_admin_btn') }}</span>
                </button>
                <button class="dt-button btn btn-dark" tabindex="0" aria-controls="table" type="button">
                    <span><i class="la la-print"> </i> {{ trans('admin.print_btn') }}</span>
                </button>
                <button class="dt-button btn btn-secondary" tabindex="0" aria-controls="table" type="button">
                    <span><i class="la la-file"> </i> {{ trans('admin.ex_csv') }}</span>
                </button>
                <button class="dt-button btn btn-success" tabindex="0" aria-controls="table" type="button">
                    <span><i class="la la-file"> </i> {{ trans('admin.ex_pdf') }}</span>
                </button>
                <button class="dt-button btn btn-danger" tabindex="0" aria-controls="table" type="button">
                    <span><i class="la la-trash"> </i> {{ trans('admin.delete_selected') }}</span>
                </button>
            </div>
            <!-- End Export Btn -->
            <hr>
            <!-- Start Content Body -->
            <div class="content-body">
                <!-- Start Dom -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <!-- Start Card -->
                            <div class="card">
                                <!-- Start Card Header -->
                                <div class="card-header">
                                    <!-- Start Heading elements -->
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- End Heading elements -->
                                </div>
                                <!-- End Card Header -->

                                @include('dashboard.includes.alerts.success')
                                @include('dashboard.includes.alerts.errors')
                                <!-- Start Card Content -->
                                <div class="card-content collapse show">
                                    <!-- Start Card Body -->
                                    <div class="card-body card-dashboard">
                                        <!-- Start Table -->
                                        <table id="table" class="table display nowrap table-responsive table-striped table-bordered" style="width: 100%;">
                                            <thead class="">
                                            <tr>
                                                <th><input type="checkbox" class="check_all" id="checkAll" /></th>
                                                <th>#</th>
                                                <th>{{ trans('admin.adminsName') }}</th>
                                                <th>{{ trans('admin.adminNickname') }}</th>
                                                <th>{{ trans('admin.adminEmail') }}</th>
                                                <th>{{ trans('admin.adminImage') }}</th>
                                                <th>{{ trans('admin.adminLevel') }}</th>
                                                <th>{{ trans('admin.adminEmailStatus') }}</th>
                                                <th>{{ trans('admin.adminEmailVerification') }}</th>
                                                <th>{{ trans('admin.adminEmailVerifiedDate') }}</th>
                                                <th>{{ trans('admin.adminStatus') }}</th>
                                                <th>{{ trans('admin.actions') }}</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                        <!-- End Table -->
                                        <div class="justify-content-center d-flex">

                                        </div>
                                    </div>
                                    <!-- End Card Body -->
                                </div>
                                <!-- End Card Content -->
                            </div>
                            <!-- End Card -->
                        </div>
                        <!-- End col-12 -->
                    </div>
                    <!-- End Row -->
                </section>
                <!-- End Dom -->
            </div>
        </div>
        <!-- End Content Wrapper -->
    </div>
    <!-- End app-content -->
    <!-- ////////////////////////////////////////////////////////////////////////////-->
@endsection
