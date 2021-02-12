@extends('admin.layouts.app')

@section('content')

    <form action="{{route('update.testimonial.data',$data['id'])}}" method="post">
        @csrf
        <div class="container">
            <div class="d-flex justify-content-between mb20">
                <div class="">
                    <h1 class="title-bar">Edit Testimonial</h1>

                </div>
                <div class="title-actions">
                    <a href="{{route('admin.testimonial.index')}}" class="btn btn-primary">{{__("Back")}}</a>
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
                                <strong>{{ __('List Item 1')}}</strong>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>{{ __('Name')}}</label>
                                    <input type="text" value="@if(!empty($data['name'])) {{$data['name']}}  @endif"  name="name" class="form-control">
                                </div>


                                    <div class="form-group">
                                        <label class="control-label">{{ __('Description')}}</label>
                                        <div class="">
                                            <textarea name="content" class="d-none has-ckeditor" cols="30" rows="10">
                                                @if(!empty($data['content'])) {{ $data['content'] }}  @endif
                                            </textarea>
                                        </div>
                                    </div>
                                    <h3 class="panel-body-title">{{ __('Avatar')}}</h3>
                                    <div class="form-group">
                                        {!! \Modules\Media\Helpers\FileHelper::fieldUpload('image_id', $data['image_id']) !!}
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
