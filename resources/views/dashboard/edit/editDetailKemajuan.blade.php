@extends('layouts.dashboard')

@section('container')

<body>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Update Data Santri</h4>
            <form class="user" action="/update-kemajuan-{{ $kemajuan->id }}"  method="post">
                @method('put')
                @csrf


                <div class="form-group">
                  <select class="form-control" name="id_pengurus" required>
                      <option value="" disabled selected hidden>Nama Pengurus</option>
                      <option value="{{ auth()->user()->id_pengurus }}">{{ auth()->user()->name }}</option>                   
                  </select>
              </div>


              <div class="form-group">
                <input type="name" class="form-control"
                    id="exampleInputEmail" name="status" aria-describedby="emailHelp"
                    placeholder="Status"
                    value="{{ old('status', $kemajuan->status) }}" required/>
              </div>
              


              <button type = "submit" class="btn btn-primary">Update</button> 
            </form>
          </div>
        </div>
      </div>


      @endsection


