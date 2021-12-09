
@extends('layouts.dashboard')

@section('container')

<body>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Data Pengurus</h4>
            <form class="user" action="/create-pengurus" method="post">
                @csrf
              <div class="form-group">
                <input type="name" class="form-control"
                id="exampleInputEmail" name="nama_pengurus" aria-describedby="emailHelp"
                placeholder="Nama Pengurus">
              </div>
              <div class="form-group">
                <select class="form-control" name="gender" required>
                    <option value="" disabled selected hidden>Gender</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control"
                id="exampleInputPassword" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="text" name="hp" class="form-control"
                 id="exampleInputPassword" placeholder="Telepon">
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control"
                id="exampleInputPassword" placeholder="Password">
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


