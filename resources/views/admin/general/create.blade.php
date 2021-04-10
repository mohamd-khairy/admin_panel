@extends('layouts.admin')
@section('content')

<!--/End system bath-->
<div class="page_content">

    <h1 class="heading_title">{{__('admin.add')}} {{$lang =='en' ? $model_en : $model_ar}}</h1>

    <div class="form">
        <form class="form-horizontal" method="post" action="{{route('admin.'.$model_en.'.store')}}" enctype="multipart/form-data">
            @csrf

            @foreach($fields as $en => $ar)

            @if($en == 'relation')
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">{{$ar[$lang == 'en' ? 'coulmn_en' :'coulmn_ar']}}</label>
                <div class="col-sm-10">
                    <select class="form-control" id="{{$ar['name']}}" name="{{$ar['name']}}">
                        @foreach($ar['model']::all() as $value)
                        <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            @elseif($en == 'description')
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">{{$lang == 'en' ? title($en)  : $ar}}</label>
                <div class="col-sm-10">
                    <textarea row="5" class="form-control" id="{{$en}}" name="{{$en}}">{{$lang == 'en' ? title($en)  : $ar}}</textarea>
                </div>
            </div>

            @elseif($en == 'image')
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">{{$lang == 'en' ? title($en)  : $ar}}</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="{{$en}}" name="{{$en}}">
                </div>
            </div>
            @else
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">{{$lang == 'en' ? title($en) : $ar}}</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="{{$en}}" name="{{$en}}" placeholder="{{$lang == 'en' ? title($en)  : $ar}} ">
                </div>
            </div>
            @endif
            @endforeach

            <div class="form-group">
                <div class="col-sm-12 left_text">
                    <button type="submit" class="btn btn-danger">{{__('admin.add')}}</button>
                    <button type="reset" class="btn btn-default">{{__('admin.reset')}}</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection