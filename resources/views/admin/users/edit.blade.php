@extends('layouts.admin')
@section('content')

<!--/End system bath-->
<div class="page_content">

    <h1 class="heading_title"> {{__('admin.users.edit.title')}}</h1>

    <div class="form">
        <form class="form-horizontal" method="post" action="{{route('admin.update_user')}}">
            @csrf
            <input type="hidden" value="{{$user->id}}" name="id" />
            <input type="hidden" name="_method" value="PUT">

            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">{{__('admin.users.feilds.first_name')}}</label>
                <div class="col-sm-10">
                    <input type="text" value="{{old('first_name' , $user->first_name)}}" class="form-control" id="first_name" name="first_name" placeholder="{{__('admin.users.feilds.first_name')}}">
                </div>
            </div>
            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">{{__('admin.users.feilds.second_name')}}</label>
                <div class="col-sm-10">
                    <input type="text" value="{{old('second_name' , $user->second_name)}}" class="form-control" id="second_name" name="second_name" placeholder="{{__('admin.users.feilds.second_name')}}">
                </div>
            </div>


            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text">{{__('admin.users.feilds.last_name')}}</label>
                <div class="col-sm-10">
                    <input type="text" value="{{old('last_name' , $user->last_name)}}" class="form-control" id="last_name" name="last_name" placeholder="{{__('admin.users.feilds.last_name')}}">
                </div>
            </div>

            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text"> {{__('admin.users.feilds.email')}}</label>
                <div class="col-sm-10">
                    <input type="email" value="{{old('email' , $user->email)}}" class="form-control" id="email" name="email" placeholder=" {{__('admin.users.feilds.email')}}">
                </div>
            </div>

            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text"> {{__('admin.users.feilds.password')}} </label>
                <div class="col-sm-10">
                    <input type="password" value="{{old('password' , '')}}" class="form-control" id="password" name="password" placeholder="{{__('admin.users.feilds.password')}}">
                </div>
            </div>

            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text"> {{__('admin.users.feilds.mobile')}}</label>
                <div class="col-sm-10">
                    <input type="text" value="{{old('mobile' , $user->mobile)}}" class="form-control" id="mobile" name="mobile" placeholder=" {{__('admin.users.feilds.mobile')}}">
                </div>
            </div>

            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text"> {{__('admin.users.feilds.country')}}</label>
                <div class="col-sm-10">
                    <input type="text" value="{{old('country' , $user->country)}}" class="form-control" id="country" name="country" placeholder=" {{__('admin.users.feilds.country')}}">
                </div>
            </div>

            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text"> {{__('admin.users.feilds.city')}}</label>
                <div class="col-sm-10">
                    <input type="text" value="{{old('city' , $user->city)}}" class="form-control" id="city" name="city" placeholder=" {{__('admin.users.feilds.city')}}">
                </div>
            </div>

            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text"> {{__('admin.users.feilds.gender')}}</label>
                <div class="col-sm-10">
                    <input type="radio" {{old('gender' , $user->gender) == 1 ? 'checked' : ''}} id="gender" name="gender" placeholder="الجنس" value="1"> {{__('admin.users.feilds.male')}}
                    <input type="radio" {{old('gender' ,  $user->gender) == 0 ? 'checked' : ''}} id="gender" name="gender" placeholder="الجنس" value="0"> {{__('admin.users.feilds.female')}}
                </div>
            </div>

            <div class="form-group">
                <label for="input0" class="col-sm-2 control-label bring_right left_text"> {{__('admin.users.feilds.role')}}</label>
                <div class="col-sm-10">
                    <input type="radio" {{old('role' , $user->role) == 'user' ? 'checked' : ''}} id="role" name="role"  value="user"> {{__('admin.users.feilds.user')}}
                    <input type="radio" {{old('role' ,  $user->role) == 'admin' ? 'checked' : ''}} id="role" name="role"  value="admin"> {{__('admin.users.feilds.admin')}}
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