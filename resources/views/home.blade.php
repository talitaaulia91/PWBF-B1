
@extends('layouts.main')

@section('container')
     <h1> Home Page</h1>


     @foreach ($posts as $post)

     <article class="mb-6">
      <h3> 
          <a href="/home/{{ $post["slug"] }}">
           {{ $post["title"] }}  </a> 
          </h3>
      <h6> {{ $post["author"] }} </h6>
      <p> {{ $post["body"] }}</p>
     </article>
     @endforeach
  
@endsection