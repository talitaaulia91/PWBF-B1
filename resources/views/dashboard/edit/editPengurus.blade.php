@extends('layouts.dashboard')

@section('container')

<body>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Update Data Pengurus</h4>
            <form class="user" action="/update-pengurus-{{ $pengurus->id }}"  method="post">
                @method('put')
                @csrf
              <div class="form-group">
                <input class="form-control @error('nama_pengurus') is-invalid @enderror" id="inputName" name="nama_pengurus" type="text" minlength="3" maxlength="50" placeholder="Nama Pengurus" 
                value="{{ old('nama_pengurus', $pengurus->nama_pengurus) }}" required/>
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control"
                id="exampleInputPassword" placeholder="Email"
                value="{{ old('email', $pengurus->email) }}" required/>
              </div>
              <div class="form-group">
                <input type="text" name="hp" class="form-control"
                id="exampleInputPassword" placeholder="Telepon"
                value="{{ old('hp', $pengurus->hp) }}" required/>
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control"
                id="exampleInputPassword" placeholder="Password">
              </div>

              <button type = "submit" class="btn btn-primary">Update</button> 
              {{-- <button class="btn btn-light">Cancel</button> --}}
            </form>
          </div>
        </div>
      </div>


      @endsection


