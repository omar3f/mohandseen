

@extends('panel.template')

@section('content')
    <div class="row">
        <div class="col-sm-6">
            <h1>Configure your website's committees</h1>
            <hr>
            {!! Form::open(['method' => 'post', 'action' => 'Panel\Configs\CommitteesController@store']) !!}
            <div class="form-group">
                {!! Form::text('title',  null, ["placeholder" => "Title", "class" => "form-control"]) !!}
            </div>
            <div class="form-group">
                {!! Form::textarea('description',  null, ["placeholder" => "Description", "class" => "form-control"]) !!}
            </div>

            <div class="form-group">
                {!! Form::select('icon_id', $dropdown_icons, null, ["class" => "form-control"]) !!}
            </div>
            <div class="form-group">
                {!! Form::integer('sort',  null, ["placeholder" => "Sort", "class" => "form-control"]) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create Committee', ["class" => "form-control btn btn-primary"]) !!}
            </div>

            {!! Form::close() !!}
        </div>




        @include('panel.includes.validation-errors')
    </div>

@endsection