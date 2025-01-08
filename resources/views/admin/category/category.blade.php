@php
    $active = 'category';
@endphp
@extends('admin.layout.app')
@section('title', 'Dashboard-Category')
@section('content_admin')
    <div class="content-wrapper">
        {{-- @dd($Categories); --}}
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
                    <div class="card-body">
                        <a href="{{ route('category.create') }}" type="button"
                            class="btn btn-outline-primary mb-3 ">{{ trans('dashb.Create') }}</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>{{ trans('dashb.Categories') }}</th>
                                    <th>{{ trans('dashb.Picture') }}</th>
                                    <th>{{ trans('dashb.Showen') }}</th>
                                    <th>{{ trans('dashb.Offer') }}</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Categories as $Category)
                                    <tr>
                                        <td>{{ $Category->id }}</td>
                                        <td>{{ $Category->name }}</td>
                                        <td><img src="{{ Storage::url($Category->picture) }}" alt=""
                                                class="img-thumbnail" style="width: 70px; height: 70px; object-fit: cover;"></td>
                                        @include('admin.includes.check')
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('category.show',$Category->id) }}" type="button"
                                                    class="btn btn-outline-success btn-sm">{{ trans('dashb.Show') }}</a>
                                                <button type="button"
                                                    class="btn btn-outline-info btn-sm">{{ trans('dashb.Edit') }}</button>
                                                <button type="button"
                                                    class="btn btn-outline-danger btn-sm">{{ trans('dashb.Delete') }}</button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    </div>
@endsection
