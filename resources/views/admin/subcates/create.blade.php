@extends('layouts.admin')
@section('title', __("admin/cates.subcates_create_page_title"))

@section('content')

<div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{route('admin.dashboard')}}">
                                        <span>{{ __('admin/cates.main_page') }}</span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('subcategories.index') }}">
                                        <span>{{ __('admin/cates.subcates') }}</span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">{{ __('admin/cates.add_new') }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4
                                        class="card-title"
                                        id="basic-layout-form">{{ __('admin/cates.subcates_create_header_title') }}</h4>
                                    <a class="heading-elements-toggle">
                                        <i class="la la-ellipsis-v font-medium-3"></i>
                                    </a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li>
                                                <a data-action="collapse">
                                                    <i class="ft-minus"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-action="reload">
                                                    <i class="ft-rotate-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-action="expand">
                                                    <i class="ft-maximize"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-action="close">
                                                    <i class="ft-x"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                @include('admin.includes.alerts.success')
                                @include('admin.includes.alerts.errors')

                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form
                                            class="form"
                                            action="{{route('subcategories.store')}}"
                                            method="POST"
                                            enctype="multipart/form-data">

                                            @csrf
                                            
                                            <input
                                                type="hidden"
                                                name="sub"
                                                value="" />

                                            <div class="form-body">
                                                <h4 class="form-section">
                                                    <i class="ft-home"></i>
                                                    <span>{{ __('admin/cates.create_details') }}</span>
                                                </h4>

                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="cate_name">{{ __('admin/cates.cate_name') }}</label>
                                                            <input
                                                                type="text"
                                                                value="{{old('cate_name')}}"
                                                                id="cate_name"
                                                                name="cate_name"
                                                                class="form-control"
                                                                placeholder="{{ __('admin/cates.cate_name_placeholder') }}" />

                                                            @error('cate_name')
                                                                <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="cate_slug">{{ __('admin/cates.cate_slug') }}</label>
                                                            <input
                                                                type="text"
                                                                value="{{old('cate_slug')}}"
                                                                id="cate_slug"
                                                                name="cate_slug"
                                                                class="form-control"
                                                                placeholder="{{ __('admin/cates.cate_slug_placeholder') }}" />

                                                            @error('cate_slug')
                                                                <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                            
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="col-md-10">
                                                        <div class="form-group">
                                                            <label for="cate_imag">{{ __('admin/cates.cate_imag') }}</label>
                                                            <input
                                                                type="file"
                                                                class="form-control form-control-lg form-control-file"
                                                                name="cate_imag"
                                                                value="{{ old('cate_img') }}"
                                                                id="cate_imag" />

                                                            @error('cate_imag')
                                                                <div>
                                                                    <span class="text-danger">{{$message}}</span>
                                                                </div>
                                                            @enderror

                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group text-center" style="{{--margin-top: 30px;--}}">
                                                            <label
                                                                style="display: block; margin-bottom: 13px;"
                                                                for="switcheryColor4"
                                                                class="card-title">{{ __('admin/cates.cate_stat') }}</label>
                                                            <input
                                                                type="checkbox"
                                                                name="cate_stat"
                                                                value="1"
                                                                id="switcheryColor4"
                                                                class="switchery"
                                                                data-color="success"
                                                                checked />

                                                            @error('cate_stat')
                                                                <div>
                                                                    <span class="text-danger">{{$message}}</span>
                                                                </div>
                                                            @enderror

                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="cate_main">{{ __('admin/cates.cate_main') }}</label>
                                                            <select
                                                                id="cate_main"
                                                                name="cate_main"
                                                                class="custom-select custom-select-lg">

                                                                <option value="">{{ __('admin/cates.cate_main_placeholder') }}</option>

                                                                    @if (isset($cates) && $cates->count() > 0)
    
                                                                        @foreach ($cates as $cate)
                                                                            <option value="{{$cate->id}}">{{$cate->name}}</option>
                                                                        @endforeach
                                                                        
                                                                    @endif
                                                                    
                                                                </optgroup>
                                                            </select>
    
                                                            @error('cate_main')
                                                                <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                            
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="form-actions">
                                                <button
                                                    type="button"
                                                    class="btn btn-warning mr-1"
                                                    onclick="history.back();">
                                                    
                                                    <i class="ft-x"></i>
                                                    <span>{{ __('admin/cates.cate_cancel_action') }}</span>
                                                </button>

                                                <button
                                                    type="submit"
                                                    class="btn btn-primary">

                                                    <i class="la la-check-square-o"></i>
                                                    <span>{{ __('admin/cates.cate_create_action') }}</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>

@endsection