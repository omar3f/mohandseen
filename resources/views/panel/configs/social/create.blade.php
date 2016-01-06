@extends('panel.template')

@section('content')
    <div class="row">
        <div class="col-sm-6">
            <h1>Configure your website's social info</h1>
            <hr>
            {!! Form::open(['method' => 'post', 'action' => 'Panel\Configs\SocialController@store']) !!}
            <div class="form-group">
                {!! Form::text('facebook', array_key_exists('facebook', $social_data) ? $social_data['facebook'] : null, ["placeholder" => "Facebook", "class" => "form-control"]) !!}
            </div>

            <div class="form-group">
                {!! Form::text('twitter', array_key_exists('twitter', $social_data) ? $social_data['twitter'] : null, ["placeholder" => "Twitter", "class" => "form-control"]) !!}
            </div>

            <div class="form-group">
                {!! Form::text('youtube', array_key_exists('youtube', $social_data) ? $social_data['youtube'] : null, ["placeholder" => "Youtube", "class" => "form-control"]) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Change Data', ["class" => "form-control btn btn-primary"]) !!}
            </div>

            {!! Form::close() !!}
        </div>





    </div>
@endsection
