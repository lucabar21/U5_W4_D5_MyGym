@extends('templates.template')

@section('title','User - Dashboard')
@section('main-content')

<div class=col-8>
    @foreach ($acceptedBookings as $booking)
    <div class="card text-center h-100 border border-primary border-3 rounded-4">
      <div class="card-header bg-primary ">
               <small class="fw-bold text-light">Corso: {{$booking->id}}</small></br>
            </div>
            <div class="card-body">
              <div>
                <img src="{{ asset($booking->courses->image) }}" alt="" style="width:80%" class="my-3"></div>
              
               <a href="{{route('courses.show', ['course' => $booking->courses->id])}}" class="text-decoration-none fw-bold">
           </a>
             <h5 class="card-text">{{$booking->courses->name}}</h5>
             <p class="card-text">{{$booking->courses->description}}</p>
            
            
           
      </div>
             @auth
             @if (Auth::User()->role === 'user')
             <a href="{{route('courses.show', ['course' => $booking->courses->id])}}" class="btn btn-primary rounded-top-0">Dettagli</a>
            @endif
             @endauth
           </div>
      </div>
      @endforeach
    @endsection
