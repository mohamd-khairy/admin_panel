@extends('layouts.admin')
@section('content')


<!--/End system bath-->
<div class="page_content">
    <div class="page_content">
        <div class="quick_links text-center">
            <h1 class="heading_title">الوصول السريع</h1>
            <a href="{{url('/')}}" target="_blank" style="background-color: #c0392b">
                <h4>استعراض الموقع</h4>
            </a>
            <a href="{{url('admin/user/edit/'.auth()->user()->id)}}" style="background-color: #2980b9">
                <h4>تعديل بياناتي</h4>
            </a>
            <a href="#" style="background-color: #8e44ad">
                <h4>إضافة نوع</h4>
            </a>
            <a href="#" style="background-color: #d35400">
                <h4>إضافة منتج</h4>
            </a>
            <a href="#" style="background-color: #2c3e50">
                <h4>إضافة خدمه</h4>
            </a>
        </div>
        <div class="home_statics text-center">
            <h1 class="heading_title">احصائيات عامة للموقع</h1>

            <div style="background-color: #9b59b6">
                <span class="bring_right glyphicon glyphicon-home"></span>

                <h3>المنتجات</h3>

                <p class="h4">{{$data['products'] ?? 0}}</p>
            </div>

            <div style="background-color: #34495e">
                <span class="bring_right glyphicon glyphicon-calendar"></span>

                <h3> الخدمات</h3>

                <p class="h4">{{$data['services'] ?? 0}}</p>
            </div>
            <div style="background-color: #00adbc">
                <span class="bring_right glyphicon glyphicon-user"></span>

                <h3> العملاء</h3>

                <p class="h4">{{$data['sponsers'] ?? 0}}</p>
            </div>
            <div style="background-color: #f39c12">
                <span class="bring_right glyphicon glyphicon-pencil"></span>

                <h3> الانواع</h3>

                <p class="h4">{{$data['category'] ?? 0}}</p>
            </div>
            <div style="background-color: #2ecc71">
                <span class="bring_right glyphicon glyphicon-phone-alt"></span>

                <h3>التواصل</h3>

                <p class="h4">{{$data['contact'] ?? 0}}</p>
            </div>

        </div>
    </div>
</div>

@endsection