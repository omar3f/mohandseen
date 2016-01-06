@extends('panel.template')
@section('content')
        <div class="row">
            <div class="col-sm-4 col-sm-push-4">
                <h1 class="text-center">Create a new Admin</h1>
                <hr>

                {!! Form::open(["method" => "post", "action" => "Auth\\AuthController@postRegister"]) !!}

                    <div class="form-group">
                        {!! Form::text('name',  old('name') , ["class" => "form-control", "placeholder" => "Admin Name"]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::text('email',  old('email') , ["class" => "form-control", "placeholder" => "Admin Email"]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::password('password' , ["class" => "form-control", "placeholder" => "Admin Password"]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::password('password_confirmation' , ["class" => "form-control", "placeholder" => "Confirm Password"]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Create Admin', ["class" => "form-control btn btn-primary"]) !!}
                    </div>

                {!! Form::close() !!}

            </div>
        </div>
        @include('panel.includes.validation-errors')

@endsection