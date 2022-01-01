@extends('layouts.dashboard')

@section('container')

<body>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Data Detail Peran</h4>
            <form action="/create-detail-peran" method="post">
                @csrf


             
                <div class="form-group">
                    <select class="form-control" name="id_peran" required>
                      @foreach ($peran as $dataPeran)
                        <option value="" disabled selected hidden>Peran</option>
                        <option value="{{ $dataPeran->id }}"> {{ $dataPeran->peran }}</option> 
                        @endforeach                  
                    </select>
                </div>



            <div class="form-group">
              <input type="text" class="form-control" hidden name="id_pengurus" value="{{ $title }}">

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








