@extends('layouts.dashboard')

@section('container')

<body>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Update Data Santri</h4>
            <form class="user" action="/update-detail-kemajuan-{{ $detail_kemajuan->id }}"  method="post">
                @method('put')
                @csrf


                <div class="form-group">
                  <input type="name" class="form-control"
                  id="exampleInputEmail" name="id_bab" aria-describedby="emailHelp" value="{{ old('id_bab', $detail_kemajuan ->id_bab) }}"
                  placeholder="Judul">
              </div>


              <div class="form-group">
                <textarea rows="5" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" 
                placeholder="Keterangan" required >{{ old('keterangan', $detail_kemajuan->keterangan) }}</textarea>
              </div>
              


              <button type = "submit" class="btn btn-primary">Update</button> 
            </form>
          </div>
        </div>
      </div>


      @endsection


