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
                      <option value="" disabled selected hidden>Judul Bab</option>
                      <option value="{{ $bab->id }}"> {{ $bab->judul }}</option>                   
                  </select>
              </div>

              <div class="form-group">
                <select class="form-control" name="id_kemajuan" required>
                    <option value="" disabled selected hidden>Kemajuan</option>
                    <option value="{{ $kemajuan->id }}"> {{ $kemajuan->judul }}</option>                   
                </select>
            </div>


              <div class="form-group">
                    <input type="text" name="tanggal" class="form-control" placeholder="Tanggal " onfocus="(this.type='date')" required />
                </div>

              <div class="form-group">
                  <input type="name" class="form-control"
                      id="exampleInputEmail" name="status" aria-describedby="emailHelp"
                      placeholder="Status">
              </div>


              <button type = "submit" class="btn btn-primary">Tambah</button> 
              {{-- <button class="btn btn-light">Cancel</button> --}}
            </form>
          </div>
        </div>
      </div>


      @endsection








