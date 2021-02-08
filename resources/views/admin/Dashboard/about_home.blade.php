@extends('admin.layouts.app')

@section('content')

    <form action="{{route('store.about.data')}}" method="post">
        @csrf
        <div class="container">
            <div class="d-flex justify-content-between mb20">
                <div class="">
                    <h1 class="title-bar">Home About Section</h1>

                </div>
                <div class="">

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
                                <strong>{{ __('Section Content')}}</strong>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>{{ __('Title')}}</label>
                                    <input type="hidden" value="@if(!empty($data['id'])) {{$data['id']}}  @endif" name="id">
                                    <input type="text" value="@if(!empty($data['title'])) {{$data['title']}}  @endif" placeholder="title" name="title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>{{ __('Sub-title')}}</label>
                                    <input type="text" value="@if(!empty($data['subtitle'])) {{$data['subtitle']}}  @endif" placeholder="Subtitle title" name="subtitle" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">{{ __('Description')}}</label>
                                    <div class="">
                                        <textarea name="content" class="d-none has-ckeditor" cols="30" rows="10">
                                            @if(!empty($data['description'])) {{ $data['description'] }}  @endif
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>{{ __('Button Url')}}</label>
                                    <input type="text" value="@if(!empty($data['button_url'])) {{$data['button_url']}}  @endif" placeholder="button url" name="btnlink" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>{{ __('Button Name')}}</label>
                                    <input type="text" value="@if(!empty($data['button_text'])) {{$data['button_text']}}  @endif" placeholder="Button Name" name="btnname" class="form-control">
                                </div>
                                <div class="panel">
                                    <div class="panel-body">
                                        <h3 class="panel-body-title">{{ __('Feature Image')}}</h3>
                                        <div class="form-group">
                                            {!! \Modules\Media\Helpers\FileHelper::fieldUpload('image_id','11') !!}
                                        </div>
                                    </div>
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
