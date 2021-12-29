@extends('layouts.dashboard')

@section('container')

<body>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Data Detail Kemajuan</h4>
            <form action="/create-kemajuan" method="post">
                @csrf

                <div class="form-group">
                  <select class="form-control" name="id_bab" required>
                      <option value="" disabled selected hidden>Judul Buku</option>
                      <option value="{{ $bab->id }}"> {{ $bab->judul }}</option>               
                  </select>
              </div>

              <div class="form-group">
                <select class="form-control" name="id_kemajuan" required>
                    <option value="" disabled selected hidden>Kemajuan</option>
                    <option value="{{ $kemajuan->id }}"> {{ $kemajuan->id }}</option>                   
                </select>
            </div>


            <div class="form-group">
              <textarea rows="5" class="form-control @error('keterangan') is-invalid @enderror" 
              name="keterangan" placeholder="Keterangan" required></textarea>
          </div>


              <button type = "submit" class="btn btn-primary">Tambah</button> 
              {{-- <button class="btn btn-light">Cancel</button> --}}
            </form>
          </div>
        </div>
      </div>


      @endsection








