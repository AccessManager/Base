@extends('Base::canvas')
@section('main-content')
    <div class="box">
        <div class="box-header">
            @yield('box-header-navbar')
            <h3 class="box-title">
                @yield('box-header')
                <small>
                    @yield('box-header-small')
                </small>
            </h3>
            <span class="pull-right">
                    @yield('box-header-right')
            </span>
        </div>
        <div class="box-body">
            @yield('content')
        </div>
        <div class="box-footer">
            @yield("box-footer")
        </div>
    </div> <!-- /.box -->
@endsection