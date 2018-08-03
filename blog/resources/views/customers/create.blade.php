@extends("layouts.master")
@section("styles")
    {!! Html::style("/assets/css/main.css") !!}
@endsection

@section('breadcrumb')
    <div class="page-bar">
        @include('partials.request')
        @include('partials.message')
        <ul class="page-breadcrumb">
            <li>
                <a href="{!!URL::to('/')!!}">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="{!!URL::to('/customer')!!}">Clientes</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="{!!URL::to('/customer/create')!!}">Nuevo cliente</a>
            </li>
        </ul>
    </div>
@endsection

@section("page-content")
    <div class="row content_container">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light portlet-fit bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <span class="caption-subject bold">Nuevo cliente</span>
                    </div>
                </div>
                <div class="portlet-body">
                    {!! Form::open(['route' => 'customer.store', 'method' => 'POST']) !!}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                    @include("customers.form")
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
@endsection
