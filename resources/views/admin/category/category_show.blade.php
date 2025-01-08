@php
    $active = 'category';
@endphp
@extends('admin.layout.app')
@section('title', 'Category-Show')
@section('content_admin')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">{{ trans('dashb.Categories') }}</h1>
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group row">
                        <div class="col">
                            <label for="name_ar">{{ trans('dashb.name_ar') }}</label>
                            <input type="text" class="form-control" readonly 
                                name="name_ar" value="{{ $Category->getTranslation('name', 'ar') }}">
                        </div>
                        <div class="col">
                            <label for="name_en">{{ trans('dashb.name_en') }}</label>
                            <input type="text" class="form-control" readonly 
                                name="name_en" value="{{ $Category->getTranslation('name', 'en') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col">
                            <label for="slug">{{ trans('dashb.slug') }}</label>
                            <input type="text" class="form-control" readonly 
                                name="slug" value="{{ $Category->slug }}">
                        </div>
                        <div class="col">
                            <label for="picture">{{ trans('dashb.Picture') }}</label>
                            <img src="{{ Storage::url($Category->picture) }}" alt="Category Picture" 
                                class="img-thumbnail img-fluid" style="max-width:200px;">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col">
                            <label for="description_ar">{{ trans('dashb.description_ar') }}</label>
                            <textarea name="description_ar" rows="3" cols="3" 
                                class="form-control" readonly>{{ $Category->getTranslation('description', 'ar') }}</textarea>
                        </div>
                        <div class="col">
                            <label for="description_en">{{ trans('dashb.description_en') }}</label>
                            <textarea name="description_en" rows="3" cols="3" 
                                class="form-control" readonly>{{ $Category->getTranslation('description', 'en') }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col">
                            @if ($Category->showen == 1)
                                <span class="badge badge-success">Show</span>
                            @else
                                <span class="badge badge-danger">Hide</span>
                            @endif
                        </div>
                        <div class="col">
                            @if ($Category->offer == 1)
                                <span class="badge badge-success">Offer</span>
                            @else
                                <span class="badge badge-danger">Normal</span>
                            @endif
                        </div>
                    </div>

                    <a href="{{ route('category.index') }}" class="btn btn-outline-primary">Back</a>
                </div>
            </div>
        </div>
    </div>

@endsection
