
@extends('layouts.dashboard')

@section('container')

<body>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Update Data Buku</h4>
            <form class="user" action="/update-buku-{{ $buku->id }}"  method="post">
                @method('put')
                @csrf

              <div class="form-group">
              <input type="name" class="form-control"
                id="exampleInputEmail" name="judul" aria-describedby="emailHelp" value="{{ old('judul', $buku->judul) }}"
                placeholder="Judul">
              </div>
              <div class="form-group">
                <textarea rows="5" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" placeholder="Keterangan" required >{{ old('keterangan', $buku->keterangan) }}</textarea>
              </div>

              <button type = "submit" class="btn btn-primary">Update</button> 
              {{-- <button class="btn btn-light">Cancel</button> --}}
            </form>
          </div>
        </div>
      </div>


 @endsection


