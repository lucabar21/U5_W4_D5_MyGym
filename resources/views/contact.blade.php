@extends('templates.template')

@section('title','myGym - Contacts')

@section('main-content')
<div class="col-8 text-center my-3">
    <h5 class="my-3">Devi chiederci qualcosa?</h5>
   <form action="" method="">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Mario Rossi">
          </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Indirizzo email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Messaggio</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Invia</button>
   </form>
</div>
@endsection