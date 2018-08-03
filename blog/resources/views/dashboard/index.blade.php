@extends('layouts.master')

@section('page-content')
@section('breadcrumb')
    @include('partials.message')
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="{!!URL::to('/')!!}">Tablero</a>
            </li>
        </ul>
    </div>
@endsection
    <div class="portlet-title">
        <div class="caption">
            <span class="caption-subject font-dark bold uppercase titlewow">Tablero</span>
        </div>
    </div>
<p>   </p>
    <div class="form-group m-form__group row">
    </div>
    <p>  </p>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                <div class="visual">
                    <i class="fa fa-users"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="0">0</span>
                    </div>
                    <div class="desc">Clientes nuevos</div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

            <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                <div class="visual">
                    <i class="fa fa-tags"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="0">8</span>
                    </div>
                    <div class="desc">etc</div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                <div class="visual">
                    <i class="fa fa-address-card-o"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="0">0</span>
                    </div>
                    <div class="desc">etc</div>
                </div>
            </a>
        </div>
    </div>


@endsection
