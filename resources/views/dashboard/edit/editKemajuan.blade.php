
@extends('layouts.dashboard')

@section('container')

<body>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Update Data Buku</h4>
            <form class="user" action="/update-kemajuan-{{ $kemajuan->id }}"  method="post">
                @method('put')
                @csrf

              <div class="form-group">
              <input type="name" class="form-control"
                id="exampleInputEmail" name="judul" aria-describedby="emailHelp" value="{{ old('status', $buku->judul) }}"
                placeholder="Judul">
              </div>
            
              <div class="form-group">
                <input type="text" name="tanggal" class="form-control" placeholder="Tanggal " onfocus="(this.type='date')" required />
            </div>

              <button type = "submit" class="btn btn-primary">Update</button> 
              {{-- <button class="btn btn-light">Cancel</button> --}}
            </form>
          </div>
        </div>
      </div>


 @endsection


