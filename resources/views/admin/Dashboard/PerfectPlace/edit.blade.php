@extends('admin.layouts.app')

@section('content')

    <form action="{{route('update.perfect.data',$data['id'])}}" method="post">
        @csrf
        <div class="container">
            <div class="d-flex justify-content-between mb20">
                <div class="">
                    <h1 class="title-bar">Edit Perfect Place</h1>

                </div>

                    <div class="title-actions">
                        <a href="{{route('admin.perfect.place')}}" class="btn btn-primary">{{__("Back")}}</a>
                    </div>

            </div>
            {{-- @include('admin.message') --}}
            @if(session()->has('success'))
                <div class="alert alert-success">{{session()->get('success')}}</div>
            @endif
            <div class="lang-content-box">
                <div class="row">
                    <div class="col-md-9">
                        <div class="panel">

                            <div class="panel-title">
                                {{-- <strong>{{ __('List Item 1')}}</strong> --}}
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>{{ __('Place Name')}}</label>
                                    <input type="text" value="@if(!empty($data['place_name'])) {{$data['place_name']}}  @endif" placeholder="Ex Paris" name="place_name" class="form-control">
                                </div>
                                <h3 class="panel-body-title">{{ __('Feature Image')}}</h3>
                                    <div class="form-group">
                                        {!! \Modules\Media\Helpers\FileHelper::fieldUpload('place_image', $data['image_id']) !!}
                                    </div>
                                    <div class="form-group">
                                        <label>{{ __('Url')}}</label>
                                        <input type="text" value="@if(!empty($data['url'])) {{$data['url']}}  @endif" placeholder="Ex https://example.com" name="url" class="form-control">
                                    </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-3">
                        <div class="panel">
                            <div class="panel-title"><strong>{{__('Publish')}}</strong></div>
                            <div class="panel-body">

                                <div class="text-right">
                                    <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> {{__('Save Changes')}}</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection


@section ('script.body')
@endsection
