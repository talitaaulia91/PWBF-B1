@extends('layouts.dashboard')

@section('container')

<body>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Update Data Santri</h4>
            <form class="user" action="/update-santri-{{ $santri->id }}"  method="post" enctype="multipart/form-data"              >
                @method('put')
                @csrf

              <div class="form-group">
                <input class="form-control @error('name') is-invalid @enderror" 
                id="inputName" name="name" type="text" minlength="3" maxlength="50" placeholder="Nama santri" 
                value="{{ old('name', $santri->name) }}" required/>
              </div>

              <div class="form-group">
                <input type="text" name="tgl_lhr" class="form-control"
                id="exampleInputPassword" placeholder="Tanggal lahir"
                value="{{ old('tgl_lhr', $santri->tgl_lhr) }}" onfocus="(this.type='date')" required/>
              </div>


              <div class="form-group">
                <input class="form-control @error('kota_lhr') is-invalid @enderror" 
                id="inputName" name="kota_lhr" type="text"  maxlength="40" placeholder="Kota lahir" 
                value="{{ old('kota_lhr', $santri->kota_lhr) }}" required/>
              </div>


              <div class="form-group">
                <input class="form-control @error('nama_ortu') is-invalid @enderror" 
                id="inputName" name="nama_ortu" type="text"  minlength="3" maxlength="50" placeholder="Nama orang tua" 
                value="{{ old('nama_ortu', $santri->nama_ortu) }}" required/>
              </div>
              

              <div class="form-group">
                <input type="email" name="email" class="form-control"
                id="exampleInputPassword" placeholder="Email"
                value="{{ old('email', $santri->email) }}" required/>
              </div>


              <div class="form-group">
                <input type="text" name="hp" class="form-control"
                id="exampleInputPassword" placeholder="Telepon"
                value="{{ old('hp', $santri->hp) }}" required/>
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control"
                id="exampleInputPassword" placeholder="Password">
              </div>

 
  

              <button type = "submit" class="btn btn-primary">Update</button> 
            </form>
          </div>
        </div>
      </div>


      @endsection


