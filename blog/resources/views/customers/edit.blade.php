@extends("layouts.master")
@section("styles")
    {!! Html::style("/assets/css/main.css") !!}
@endsection

@section('breadcrumb')
    <div class="page-bar">
        @include('partials.request')
        <ul class="page-breadcrumb">
            <li>
                <a href="{!!URL::to('/')!!}">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="{!!URL::to('/customer')!!}">Cliente</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a>Editar Cliente</a>
            </li>
        </ul>
    </div>
@endsection

@section("page-content")
    <div class="row content_container">
        <div class="col-md-12">
            <div class="portlet light portlet-fit bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <span class="caption-subject bold">Editar cliente</span>
                    </div>
                </div>
                <div class="portlet-body">
                    {!! Form::model($customers,['route' => ['customer.update', $customers->id], 'method' => 'PUT']) !!}

                    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                    @include("customers.form")
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section("scripts")
    {!! Html::script("/assets/scripts/validateFields.js") !!}

    <script type="application/javascript">
        $(document).ready(function(){
            $("#liUsr").addClass("active");
        });
    </script>
@endsection