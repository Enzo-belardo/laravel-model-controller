@extends('layouts.app')

@section('main-content')
 

  <div class="container p-4">
       <div class="row">
           @foreach ($movies as $movie)
               <div class="col-lg-4 col-md-6 col-sm-12">
                   <div class="card mb-3">
                        <div class="card-body">
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