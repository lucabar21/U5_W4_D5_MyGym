@extends('templates.template')

@section('title', 'myGym - Details')

@section('main-content')
<div class=col-7>
    <div class="card text-center mb-2 border-primary border-3 rounded-4">
        <div class="card-header bg-primary bg-gradient fw-bold text-light">
           <h3> {{$course->name}}</h3>
        </div>
        <div class="card-body">
            <div class="container">
           <div class="row ">
          <div class="col-12"> 
            <p>{{$course->activities->type}}</p>
            <p>{{$course->activities->description}}</p>
            <p class="card-text">{{$course->description}}</p>
    
            <p>GIORNO: {{$course->slots->day}}</p>
            <p>ORA: {{$course->slots->start}}-{{$course->slots->end}}</p>        </div>
              <div class="col-12">
                <img src="{{ asset($course->image) }}" alt="" style="width:80%" class="my-3"></div>
               </div>
              </div>
        </div>
                @auth
                @if (Auth::User()->role === 'user')
               <div>
                @foreach ($acceptedBookings as $booking)
                @if ($booking->status==='accepted')                                 
                  <form action="{{ route('user.booking.reject', $booking->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-danger mb-3">Annulla</button>
                </form>
                @endif
                @endforeach
               </div>
                @endif
                @endauth
            
     
      </div>
</div>
@endsection