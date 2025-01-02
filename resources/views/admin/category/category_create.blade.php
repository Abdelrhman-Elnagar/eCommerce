@php
$active='category';
@endphp
@extends('admin.layout.app')
@section('title', 'Category-Create')
@section('content_admin')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">{{ trans('dashb.Categories') }}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">{{ trans('dashb.Home') }}</a></li>
                            <li class="breadcrumb-item active">{{ trans('dashb.Categories') }}</li>
                        </ol>
                    </div><!-- /.col -->

                    {{-- inputs --}}
                    <div class="card-body">
                        <form action="" method="" >
                            <div class="row">
                                <div class="col">
                                    <label for="name_ar">{{ trans('dashb.name_ar') }}</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control "
                                            name="name_ar">
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="name_en">{{ trans('dashb.name_en') }}</label>
                                    <div class="input-group mb-3 col">
                                        <input type="text" class="form-control "
                                            name="name_en">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="slug">{{ trans('dashb.slug') }}</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control  "
                                            name="slug">
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="picture">{{ trans('dashb.Picture') }}</label>
                                    <div class="input-group mb-3 col">
                                        <input type="file" class="form-control "
                                            name="picture">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="description_ar">{{ trans('dashb.description_ar') }}</label>
                                    <div class="input-group mb-3">
                                        <textarea name="description_ar" rows="3" cols="3"
                                            class="form-control "></textarea>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="description_en">{{ trans('dashb.description_en') }}</label>
                                    <div class="input-group mb-3">
                                        <textarea name="description_en" rows="3" cols="3"
                                            class="form-control "></textarea>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="showen">{{ trans('dashb.Showen') }}</label>
                                    <div class="input-group mb-3">
                                        <input type="checkbox" class="" id="showen" name="showen">
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="offer">{{ trans('dashb.Offer') }}</label>
                                    <div class="input-group mb-3 col">
                                        <input type="checkbox" class="" id="offer" name="offer">
                                    </div>
                                </div>
                            </div>
                            <button type="submit"
                                class="btn btn-outline-primary">{{ trans('dashb.Save') }}</button>
                        </form>
                    </div>
                    <!-- /.card-header -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    </div>
@endsection
