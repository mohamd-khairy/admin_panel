@extends('layouts.admin')
@section('content')

<!--/End system bath-->
<div class="page_content">
    <h1 class="heading_title">عرض كل المستخدمين</h1>

    <a href="{{url('admin/user/add')}}" style="margin: 5px;" class="btn btn-success">{{__('admin.add_item')}}</a>

    <div class="wrap">
        <table class="table table-bordered">
            <tr>
                <td>#</td>
                <td>{{__('admin.users.feilds.first_name')}}</td>
                <td>{{__('admin.users.feilds.second_name')}}</td>
                <td>{{__('admin.users.feilds.last_name')}}</td>
                <td>{{__('admin.users.feilds.mobile')}}</td>
                <td>{{__('admin.users.feilds.country')}}</td>
                <td>{{__('admin.users.feilds.city')}}</td>
                <td>{{__('admin.users.feilds.email')}}</td>
                <td>{{__('admin.users.feilds.gender')}}</td>
                <td>{{__('admin.users.feilds.role')}}</td>
                <td>{{__('admin.control')}}</td>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->first_name}}</td>
                <td>{{$user->second_name}}</td>
                <td>{{$user->last_name}}</td>
                <td>{{$user->mobile}}</td>
                <td>{{$user->country}}</td>
                <td>{{$user->city}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->gender ? 'male' : 'female'}}</td>
                <td>{{$user->role}}</td>
                <td>
                    <a href="{{ route('admin.edit_user', $user->id) }}" class="btn btn-primary">
                        <div class="glyphicon glyphicon-pencil"></div>
                    </a>

                    <form action="{{ route('admin.delete_user', $user->id) }}" method="POST" onsubmit="return confirm('هل انت متاكد؟');" style="display: inline-block;">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-danger">
                            <div class='glyphicon glyphicon-remove'></div>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>

        {!! $users->links() !!}
    </div>
</div>

@endsection