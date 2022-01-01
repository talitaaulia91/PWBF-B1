@extends('layouts.dashboard')

@section('container')

<body>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Data Kemajuan</h4>
            <form action="/create-kemajuan" method="post">
                @csrf

                <div class="form-group">
                  <select class="form-control" name="id_santri" required>
                      <option value="" disabled selected hidden>Nama Santri</option>
                      <option value="{{ $santri->id }}"> {{ $santri->name }}</option>                   
                  </select>
              </div>

              <div class="form-group">
                <select class="form-control" name="id_pengurus" required>
                    <option value="" disabled selected hidden>Nama Pengurus</option>
                    <option value="{{ auth()->user()->id_pengurus }}">{{ auth()->user()->name }}</option>                   
                </select>
            </div>


              <div class="form-group">
                    <input type="text" name="tanggal" class="form-control" placeholder="Tanggal " onfocus="(this.type='date')" required />
                </div>

              <div class="form-group">
                <select class="form-control @error('status') is-invalid @enderror" name="status" required>
                  <option value="" disabled selected hidden>Status</option>
                  <option value="naik">Naik</option>
                  <option value="tetap">Tetap</option>
                  <option value="turun">Turun</option>
              </select>

              </div>


              <button type = "submit" class="btn btn-primary">Tambah</button> 
              {{-- <button class="btn btn-light">Cancel</button> --}}
            </form>
          </div>
        </div>
      </div>


      @endsection








