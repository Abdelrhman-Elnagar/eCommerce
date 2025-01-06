@php
    $active = 'category';
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


                    {{-- inputs --}}
                    <div class="card-body">
                        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            {{-- ?? --}}
                            @if (session('error_catch'))
                                <div class="bg-danger">{{ session('error_catch') }}</div>
                            @endif

                            <!-- /.col -->

                            {{-- @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif --}}

                            <div class="row">
                                <div class="col">
                                    <label for="name_ar">{{ trans('dashb.name_ar') }}</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control @error('name_ar') is-invalid @enderror"
                                            name="name_ar" value="{{ old('name_ar') }}">
                                    </div>
                                    @error('name_ar')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col">
                                    <label for="name_en">{{ trans('dashb.name_en') }}</label>
                                    <div class="input-group mb-3 col">
                                        <input type="text" class="form-control @error('name_en') is-invalid @enderror " name="name_en"
                                            value="{{ old('name_en') }}">
                                    </div>
                                    @error('name_en')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="slug">{{ trans('dashb.slug') }}</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control @error('slug') is-invalid @enderror " name="slug"
                                            value="{{ old('slug') }}">
                                    </div>
                                    @error('slug')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col">
                                    <label for="picture">{{ trans('dashb.Picture') }}</label>
                                    <div class="input-group mb-3 col">
                                        <input type="file" class="form-control @error('picture') is-invalid @enderror " name="picture"
                                            value="{{ old('picture') }}">
                                    </div>
                                    @error('picture')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="description_ar">{{ trans('dashb.description_ar') }}</label>
                                    <div class="input-group mb-3">
                                        <textarea name="description_ar" rows="3" cols="3" class="form-control @error('description_ar') is-invalid @enderror ">{{ old('description_ar') }}</textarea>
                                    </div>
                                    @error('description_ar')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col">
                                    <label for="description_en">{{ trans('dashb.description_en') }}</label>
                                    <div class="input-group mb-3">
                                        <textarea name="description_en" rows="3" cols="3" class="form-control @error('description_en') is-invalid @enderror ">{{ old('description_en') }}</textarea>
                                    </div>
                                    @error('description_en')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="showen">{{ trans('dashb.Showen') }}</label>
                                    <div class="input-group mb-3">
                                        <input type="checkbox" class="" id="showen" name="showen">
                                            {{-- value="{{ old('showen') }}"> --}}
                                    </div>
                                </div>

                                <div class="col">
                                    <label for="offer">{{ trans('dashb.Offer') }}</label>
                                    <div class="input-group mb-3 col">
                                        <input type="checkbox" class="" id="offer" name="offer">
                                            {{-- value="{{ old('offer') }}"> --}}
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-primary">{{ trans('dashb.Save') }}</button>
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
