@extends('includes/layout')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h4>Adaugă o nouă cursă</h4>
        {{ Form::open() }}
            {{ Form::input('user_phone', 'Telefon') }} <br />
            {{ Form::date('cursa_start', \Carbon\Carbon::now()) }} <br />
            {{ Form::input('opriri', 'Opriri') }} <br />
            {{ Form::submit('Hai cu mine!') }} <br />
        {{ Form::close() }}
    </div>
</div>
@endsection