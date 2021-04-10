@extends('layouts.admin')
@section('content')

<!--/End system bath-->
<div class="page_content">

    <h1 class="heading_title">{{__('admin.pages.create.title')}}</h1>

    <div class="form">
        <form class="form-horizontal" method="post" action="{{route('admin.add_page')}}">
            @csrf
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">{{__('admin.pages.feilds.name_en')}}</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name_en" name="name_en" placeholder="{{__('admin.pages.feilds.name_en')}}">
                </div>
            </div>

            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">{{__('admin.pages.feilds.name_ar')}}</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name_ar" name="name_ar" placeholder="{{__('admin.pages.feilds.name_ar')}}">
                </div>
            </div>

            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">{{__('admin.pages.feilds.image')}}</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="icon" name="icon" placeholder="{{__('admin.pages.feilds.image')}}">
                </div>
            </div>
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text"> {{__('admin.pages.feilds.url')}}</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="url" name="url" placeholder="{{__('admin.pages.feilds.url')}}">
                </div>
            </div>
            <div class="form-group">
                <label for="input3" class="col-sm-2 control-label bring_right left_text"> {{__('admin.pages.feilds.order')}}</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="order" name="order" placeholder="{{__('admin.pages.feilds.order')}}">
                </div>
            </div>
            <div class="form-group">
                <label for="input4" class="col-sm-2 control-label bring_right left_text"> {{__('admin.pages.feilds.main_page')}}</label>
                <div class="col-sm-10">
                    <select class="form-control" style="height: unset;" name="parent">
                        <option value="0">{{__('admin.pages.feilds.main_page')}}</option>
                        @foreach(\App\Models\Page::where('parent',0)->get() as $page)
                        <option value="{{$page->id}}">{{ $page->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
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