@extends('layouts.dashboard')

@section('container')

<body>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Data Detail Kemajuan</h4>
            <form action="/create-detail-kemajuan" method="post">
                @csrf


              <div class="form-group">
                <select class="form-control" name="id_bab" required>
                  @foreach ($bab as $dataBab)
                    <option value="" disabled selected hidden>Bab</option>
                    <option value="{{ $dataBab->id }}"> {{ $dataBab->judul }}</option> 
                    @endforeach                  
                </select>
            </div>

            <div class="form-group">
              <input type="text" class="form-control" hidden name="id_kemajuan" value="{{ $title }}">

              @error('Keterangan')
              <div class="invalid-feedback">
              {{ $message }}
              </div>
              @enderror

          </div>


            <div class="form-group">
              <textarea rows="5" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" placeholder="Keterangan" required></textarea>
              @error('Keterangan')
              <div class="invalid-feedback">
              {{ $message }}
              </div>
              @enderror

          </div>


              <button type = "submit" class="btn btn-primary">Tambah</button> 
              {{-- <button class="btn btn-light">Cancel</button> --}}
            </form>
          </div>
        </div>
      </div>


      @endsection








