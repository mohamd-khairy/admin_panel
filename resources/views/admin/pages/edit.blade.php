@extends('layouts.admin')
@section('content')

<!--/End system bath-->
<div class="page_content">

    <h1 class="heading_title">{{__('admin.pages.edit.title')}} </h1>
    <div class="form">
        <form class="form-horizontal" method="post" action="{{route('admin.update_page')}}">
            @csrf
            <input type="hidden" value="{{$page->id}}" name="id" />
            <input type="hidden" name="_method" value="PUT">

            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">{{__('admin.pages.feilds.name_en')}}</label>
                <div class="col-sm-10">
                    <input type="text" value="{{old('name_en',$page->name_en)}}" class="form-control" id="name_en" name="name_en" placeholder="{{__('admin.pages.feilds.name_en')}}">
                </div>
            </div>
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">{{__('admin.pages.feilds.name_ar')}}</label>
                <div class="col-sm-10">
                    <input type="text" value="{{old('name_ar',$page->name_ar)}}" class="form-control" id="name_ar" name="name_ar" placeholder="{{__('admin.pages.feilds.name_ar')}}">
                </div>
            </div>
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">{{__('admin.pages.feilds.image')}}</label>
                <div class="col-sm-10">
                    <input type="text" value="{{old('icon',$page->icon)}}" class="form-control" id="icon" name="icon" placeholder="{{__('admin.pages.feilds.image')}}">
                </div>
            </div>
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text"> {{__('admin.pages.feilds.url')}}</label>
                <div class="col-sm-10">
                    <input type="text" value="{{old('url',$page->url)}}" class="form-control" id="url" name="url" placeholder="{{__('admin.pages.feilds.url')}}">
                </div>
            </div>
            <div class="form-group">
                <label for="input3" class="col-sm-2 control-label bring_right left_text"> {{__('admin.pages.feilds.order')}}</label>
                <div class="col-sm-10">
                    <input type="number" value="{{old('order',$page->order)}}" class="form-control" id="order" name="order" placeholder=" {{__('admin.pages.feilds.order')}}">
                </div>
            </div>
            <div class="form-group">
                <label for="input4" class="col-sm-2 control-label bring_right left_text"> {{__('admin.pages.feilds.main_page')}}</label>
                <div class="col-sm-10">
                    <select class="form-control" style="height: unset;" name="parent">
                        <option value="0"> {{__('admin.pages.feilds.main_page')}}</option>
                        @foreach(\App\Models\Page::where('parent',0)->get() as $main_page)
                        <option value="{{$main_page->id}}" {{old('order',$page->parent) == $main_page->id ? 'selected' : '' }}>{{ $main_page->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12 left_text">
                    <button type="submit" class="btn btn-danger">{{__('admin.edit')}}</button>
                    <button type="reset" class="btn btn-default">{{__('admin.reset')}}</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection