@extends('templates.template')

@section('title','Admin - Dashboard')
@section('main-content')

<div class=col-8>
    @foreach ($pendingBookings as $booking)
    <div class="card text-center my-3  border border-primary border-3 rounded-4">
            <div class="card-header bg-primary text-light">
               <small class="fw-bold">Prenotazione: {{$booking->id}}</small></br>
               <small class="fw-bold">Stato: {{ $booking->status }}</small>
               
            </div>
        <div class="card-body gap-3 ">
            <div class="d-flex flex-column gap-3">
                <small>{{$booking->users->name}}</small>
                <h5 >{{ $booking->courses->name }}</h5>
                <p >{{ $booking->courses->activities->type }}</p>
                <p >{{ $booking->courses->activities->description }}</p>
                   <p >{{ $booking->courses->description }}</p>
                   
                   <div>
                       
                       <img src="{{ asset($booking->courses->image) }}" alt="" style="width:50%" class="my-3"></div>
                    </div>
                    
                    <p >GIORNO: {{ $booking->courses->slots->day }}</p><p></p>
                    <p >ORA: {{ $booking->courses->slots->start }}-{{ $booking->courses->slots->end }}</p>
            <div class="d-flex justify-content-center gap-2">
                <form action="{{ route('admin.booking.accept', $booking->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-success">Accetta</button>
                </form>
                <form action="{{ route('admin.booking.reject', $booking->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-danger">Rifiuta</button>
                </form>
            </div>
        </div>
      </div>
      @endforeach
    @endsection
