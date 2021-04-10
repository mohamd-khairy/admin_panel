@extends('layouts.admin')
@section('content')

<!--/End system bath-->
<div class="page_content">

    <h1 class="heading_title">{{__('admin.edit')}} {{$lang == 'en' ? $model_en : $model_ar}} </h1>
    <div class="form">
        <form class="form-horizontal" method="post" action="{{route('admin.'.$model_en.'.update' , $data->id)}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{$data->id}}" name="id" />
            <input type="hidden" name="_method" value="PUT">

            @foreach($fields as $en => $ar)
            @if($en == 'relation')
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">{{$ar[$lang == 'en' ? 'coulmn_en' :'coulmn_ar']}}</label>
                <div class="col-sm-10">
                    <select class="form-control" id="{{$ar['name']}}" name="{{$ar['name']}}">
                        @foreach($ar['model']::all() as $value)
                        <option value="{{$value->id}}" {{$value->id == $data[$ar['name']] ? 'selected' : ''}}>{{$value->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            @elseif($en == 'description')
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">{{$lang == 'en' ? title($en)  : $ar}}</label>
                <div class="col-sm-10">
                    <textarea row="5" class="form-control" id="{{$en}}" name="{{$en}}">{{old($en,$data->$en)}}</textarea>
                </div>
            </div>

            @elseif($en == 'image')
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">{{$lang == 'en' ? title($en)  : $ar}}</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="{{$en}}" name="{{$en}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <img src="{{asset($data->$en)}}" style="width: 100px;">
                </div>
            </div>
            @elseif($en == 'enum')
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">{{$ar[$lang == 'en' ? 'coulmn_en' :'coulmn_ar']}}</label>
                <div class="col-sm-10">
                    <select class="form-control" id="{{$ar['name']}}" name="{{$ar['name']}}">
                        @foreach($ar['enum'] as $value)
                        <option value="{{$value}}" {{$value == $data[$ar['name']] ? 'selected' : ''}}>{{$value}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            @else
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">{{$lang == 'en' ? title($en) : $ar}}</label>
                <div class="col-sm-10">
                    <input type="text" value="{{old($en,$data->$en)}}" class="form-control" id="{{$en}}" name="{{$en}}" placeholder=" {{$lang == 'en' ? $en : $ar}} ">
                </div>
            </div>
            @endif
            @endforeach


            <div class="form-group">
                <div class="col-sm-12 left_text">
                    <button type="submit" class="btn btn-danger">{{__('admin.edit')}}</button>
                    <a href="{{url('admin/'.$model_en.'/'.$data->id)}}" class="btn btn-default">{{__('admin.show_item')}}</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection