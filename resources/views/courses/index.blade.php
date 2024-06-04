@extends('templates.template')

@section('title', 'myGym - Index')

@section('main-content')
<div class="container m-4">
    <div class="row d-flex justify-content-center">
        @foreach ($courses as $course)
            <div class="col-md-3 mb-4 g-4 gx-5">
                <div class="card text-center h-100 border border-primary border-3 rounded-4">
                    <div class="card-header bg-primary m-0 p-0 pt-3">
                        <small class="fw-bold text-light fs-6 fst-italic">Corso {{$course->id}}</small>
                        <div class="m-0 p-0"><img src="{{ asset($course->image) }}" alt="" style="width:100%" class="my-3"></div>
                    </div>
                    <div class="card-body">
                        <a href="{{route('courses.show', ['course' => $course->id])}}" class="text-decoration-none fw-bold">
                            <h5 class="card-title">{{$course->name}}</h5>
                        </a>
                     <p>{{$course->activities->type}}</p>
                        <p>{{$course->activities->description}}</p>
                        <p class="card-text">{{$course->description}}</p>
                                                <p>GIORNO: {{$course->slots->day}}</p>
                        <p>ORA: {{$course->slots->start}}-{{$course->slots->end}}</p>
                       

                         @auth
                            @if (Auth::user()->role === 'user')
                                @if (!Auth::user()->bookings()->pluck('course_id')->contains($course->id))
                                    <form action="{{ route('courses.book', ['course' => $course->id]) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Prenota</button>
                                    </form>
                                @else
                                    <form action="{{ route('courses.book', ['course' => $course->id]) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-primary" disabled>Richiesta inoltrata</button>
                                    </form>
                                @endif
                            @endif
                        @endauth
                        @guest
                            <a href="{{ route('login') }}">
                                <button type="submit" class="btn btn-primary">Prenota</button>
                            </a>
                        @endguest
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{-- <div class="my-3">{{$courses->links()}}</div> --}}
</div>
@endsection
