@extends('layouts.dashboard')

@section('container')

<body>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Data Bab</h4>
            <form action="/create-bab" method="post">
                @csrf

              <div class="form-group">
                <select class="form-control" name="id_buku" required>
                    <option value="" disabled selected hidden>Judul Buku</option>
                    <option value="{{ $buku->id }}"> {{ $buku->judul }}</option>                 
                </select>
              </div>

              <div class="form-group">
                <input type="name" class="form-control"
                    id="exampleInputEmail" name="judul" aria-describedby="emailHelp"
                    placeholder="Judul">
            </div>

              <div class="form-group">
                <textarea rows="5" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" placeholder="Keterangan" required></textarea>
            </div>




            
              
              <div class="form-check form-check-flat form-check-primary">

              </div>
              <button type = "submit" class="btn btn-primary">Tambah</button> 
              {{-- <button class="btn btn-light">Cancel</button> --}}
            </form>
          </div>
        </div>
      </div>


      @endsection








