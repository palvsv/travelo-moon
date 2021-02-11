@extends('admin.layouts.app')

@section('content')

    <form action="{{route('store.why.data')}}" method="post">
        @csrf
        <div class="container">
            <div class="d-flex justify-content-between mb20">
                <div class="">
                    <h1 class="title-bar">Why Choose Section</h1>

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
                                    <input type="hidden" value="@if(!empty($data['id'])){{$data['id']}}@endif" name="id">
                                    <input type="text" value="@if(!empty($data['title'])) {{$data['title']}}  @endif" placeholder="title" name="title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>{{ __('Sub-title')}}</label>
                                    <input type="text" value="@if(!empty($data['subtitle'])) {{$data['subtitle']}}  @endif" placeholder="Subtitle title" name="subtitle" class="form-control">
                                </div>
                                <div class="form-group">
                                    {!! \Modules\Media\Helpers\FileHelper::fieldUpload('featured_image',$data['featured_image']) !!}
                                </div>
                            </div>
                            <div class="panel-title">
                                <strong>{{ __('List Item 1')}}</strong>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>{{ __('Title')}}</label>
                                    <input type="text" value="@if(!empty($data['item_one'])) {{$data['item_one']}}  @endif" placeholder="title" name="item_one" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class="control-label">{{ __('Description')}}</label>
                                    <div class="">
                                        <textarea name="content_one" class="d-none has-ckeditor" cols="30" rows="5">
                                            @if(!empty($data['content_one'])) {{ $data['content_one'] }}  @endif
                                        </textarea>
                                    </div>
                                </div>
                                <h3 class="panel-body-title">{{ __('Feature Image')}}</h3>
                                        <div class="form-group">
                                            {!! \Modules\Media\Helpers\FileHelper::fieldUpload('image_one',$data['image_one']) !!}
                                        </div>
                            </div>
                            <div class="panel-title">
                                <strong>{{ __('List Item 2')}}</strong>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>{{ __('Title')}}</label>
                                    <input type="text" value="@if(!empty($data['item_two'])) {{$data['item_two']}}  @endif" placeholder="title" name="item_two" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class="control-label">{{ __('Description')}}</label>
                                    <div class="">
                                        <textarea name="content_two" class="d-none has-ckeditor" cols="30" rows="5">
                                            @if(!empty($data['content_two'])) {{ $data['content_two'] }}  @endif
                                        </textarea>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-body">
                                        <h3 class="panel-body-title">{{ __('Feature Image')}}</h3>
                                        <div class="form-group">
                                            {!! \Modules\Media\Helpers\FileHelper::fieldUpload('image_two',$data['image_two']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-title">
                                <strong>{{ __('List Item 3')}}</strong>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>{{ __('Title')}}</label>
                                    <input type="text" value="@if(!empty($data['item_three'])) {{$data['item_three']}}  @endif" placeholder="title" name="item_three" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class="control-label">{{ __('Description')}}</label>
                                    <div class="">
                                        <textarea name="content_three" class="d-none has-ckeditor" cols="30" rows="5">
                                            @if(!empty($data['content_three'])) {{ $data['content_three'] }}  @endif
                                        </textarea>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-body">
                                        <h3 class="panel-body-title">{{ __('Feature Image')}}</h3>
                                        <div class="form-group">
                                            {!! \Modules\Media\Helpers\FileHelper::fieldUpload('image_three',$data['image_three']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-title">
                                <strong>{{ __('List Item 4')}}</strong>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>{{ __('Title')}}</label>
                                    <input type="text" value="@if(!empty($data['item_four'])) {{$data['item_four']}}  @endif" placeholder="title" name="item_four" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class="control-label">{{ __('Description')}}</label>
                                    <div class="">
                                        <textarea name="content_four" class="d-none has-ckeditor" cols="30" rows="5">
                                            @if(!empty($data['content_four'])) {{ $data['content_four'] }}  @endif
                                        </textarea>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-body">
                                        <h3 class="panel-body-title">{{ __('Feature Image')}}</h3>
                                        <div class="form-group">
                                            {!! \Modules\Media\Helpers\FileHelper::fieldUpload('image_four',$data['image_four']) !!}
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
