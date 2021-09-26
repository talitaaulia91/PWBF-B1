@extends('layouts.main')

@section('container')
<h2>{{ $article["title"] }}</h2>
<h5>{{ $article["author"] }}</h5>
<p>{{ $article["body"] }}
</p>

<a href="/">Back to home page</a>
@endsection