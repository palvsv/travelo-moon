@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between mb20">
        <h1 class="title-bar">{{__("All Places")}}</h1>
        {{-- <div class="title-actions">
            <a href="{{route('admin.holiday.edit')}}" class="btn btn-primary">{{__("Add new Place")}}</a>
        </div> --}}
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <form action="" class="bravo-form-item">
                        <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th class="" > {{ __('#')}}</th>
                                <th class="title" > {{ __('Name')}}</th>
                                <th width="130px"> {{ __('Position')}}</th>
                                <th width="130px"> {{ __('URL')}}</th>
                                <th width="100px"> {{ __('Date')}}</th>
                                <th width="100px"></th>
                            </tr>
                            </thead>
                            <tbody>
                                @if (!empty($hh))
                                    @foreach ($hh as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td class="title">
                                                <a href="">{{$item->place_name}}</a>
                                            </td>
                                            <td>{{$item->image_pos}}</td>
                                            <td>{{$item->url}}</td>
                                            <td>{{ display_date($item->updated_at)}}</td>
                                            <td><a href="{{route('admin.holiday.edit', $item->id )}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> {{__('Edit')}}</a></td>
                                        </tr>
                                    @endforeach
                                @else
                                        <tr>
                                            <td colspan="6">{{__("No data")}}</td>
                                        </tr>
                                @endif
                            </tbody>
                        </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section ('script.body')
@endsection
