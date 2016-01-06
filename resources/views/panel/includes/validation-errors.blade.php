<ul class="alert-danger errors-area">
    @if($errors->any())

        @foreach($errors->all() as $error)
            {!! "<li>" . $error . "</li>" !!}
        @endforeach
    @endif
</ul>