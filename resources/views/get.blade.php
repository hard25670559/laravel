@extends('heard')

@section('a')
    @foreach($test as $tmp)
        @foreach($tmp as $key => $value)
            <div>
                收尋<input type="text">
            </div>
            <div>
                <label>{{ $key }}</label>
                <button>{{ $value }}</button>
            </div>
        @endforeach
    @endforeach
@endsection