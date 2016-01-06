@extends('panel.template')

@section('content')

<div class="row">
    <div class="col-sm-6">
        <h1>Your Committees</h1>
        {!!  Html::link(action('Panel\Configs\CommitteesController@create'), 'Create a new committee', ["class" => "btn btn-primary"])  !!}
        <hr>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <table class="table table-bordered">
            <tbody>
            <tr>
                <td>#</td>
                <td>Title</td>
                <td>Description</td>
                <td>Icon</td>


                <td>Action</td>

            </tr>
            @foreach($committees as $committee)
                <tr>
                    <td>{{$committee->id}}</td>
                    <td>{{$committee->title}}</td>
                    <td>{{$committee->description}}</td>
                    <td>{{$committee->icon->title}}</td>
                    <td>
                        <div class="row">
                            <div class="col-sm-2">
                                <a class="btn btn-primary" href="{{ action('Panel\\Configs\\CommitteesController@edit', $committee->id) }}">
                                    <span class="fa fa-edit"></span>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                {!!  Form::open(["method" => "delete", "action" => ["Panel\\Configs\\CommitteesController@destroy", $committee->id], "class" => "form-inline"])  !!}
                                <button class="btn btn-danger"><span class="fa fa-trash"></span></button>
                                {!! Form::close() !!}
                            </div>
                            <div class="col-sm-2">

                            </div>

                        </div>



                    </td>
                </tr>

            @endforeach
            </tbody>

        </table>

    </div>
</div>


@endsection