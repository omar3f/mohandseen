@extends('panel.template')

@section('content')
    <div class="row">
        <div class="col-sm-6">
            <h1>Configure your website's basic info</h1>
            <hr>
            {!! Form::open(['method' => 'post', 'action' => 'Panel\Configs\MaindataController@store', 'files' => true]) !!}
            <div class="form-group">
                {!! Form::text('phone', array_key_exists('phone', $main_data) ? $main_data['phone'] : null, ["placeholder" => "Phone", "class" => "form-control"]) !!}
            </div>

            <div class="form-group">
                {!! Form::text('email', array_key_exists('email', $main_data) ? $main_data['email'] : null, ["placeholder" => "Email", "class" => "form-control"]) !!}
            </div>

            <div class="form-group">
                {!! Form::text('address', array_key_exists('address', $main_data) ? $main_data['address'] : null, ["placeholder" => "Address", "class" => "form-control"]) !!}
            </div>

            <div class="form-group">
                {!! Form::file('logo') !!}
            </div>




            <div class="form-group">
                {!! Form::submit('Change Data', ["class" => "form-control btn btn-primary"]) !!}
            </div>

            {!! Form::close() !!}
            @include('panel.includes.validation-errors')

        </div>





    </div>
@endsection
