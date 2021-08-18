@extends('backend.master')

@section('content')




<h1>

@for($i= 1;$i<= 10;$i++)


<p>{{$i}}</p>

@endfor

</h1>

@endsection
