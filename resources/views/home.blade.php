@extends('layouts.app')

@section('main-content')
 

   <div class="container">
       <div class="row">
           @foreach ($movies as $movie)
               <div class="col-4">
                   <div class="card mb-3">
                        <img src="{{ $movie->image }}" alt="">
                        <div class="card-body">
                            <h3 class="card-title">{{ $movie->title }}</h3>

                            <div class="card-text">
                               <span class="fw-bold">Titolo:</span>
                               <span>{{ $movie->original_title }}</span>
                            </div>

                            <div class="card-text">
                              <span class="fw-bold">Nazionalità:</span>
                              <span>{{ $movie->nationality }}</span>
                            </div>

                            <div class="card-text ">
                              <span class="fw-bold">uscita: </span>
                              <span>{{ $movie->date }}</span>
                            </div>

                                
                            <div class="card-text">
                              <span class="fw-bold">Vote:</span>
                              <span>{{ $movie->vote }}</span>
                            </div>
                        </div>
                   </div>
               </div>
           @endforeach    
       </div>
   </div>
@endsection