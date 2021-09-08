@extends('backend.master')

@section('content')




<h1>Schedule info</h1>

<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
</svg>

<a href="{{route('schedule.create')}}" class="btn btn-info">Arrange Schedule</a>

<table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Trip Id</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        
    <tbody>

    @foreach($schedules as $schedule)
        <tr>
            <th scope="row">{{$schedule->id}}</th>
            <th scope="row">{{$schedule->regulartrip->id}}</th>
            <td>{{$schedule->date}}</td>
            
            <td>{{$schedule->time}}</td>
            

            <td>{{$schedule->status}}</td>
            <td> <a href="{{route('schedule.trip', $schedule->id)}}" class="btn btn-success">View</a></td>
            <td><a href="" class="btn btn-warning">Edit</a></td>
      <td><a onclick="return confirm('Are you sure you want to delete this ?');" href="{{route('schedule.delete', $schedule->id)}}" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
        </tbody>
</table> 


@endsection