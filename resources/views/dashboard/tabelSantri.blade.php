@extends('layouts.dashboard')

@section('container')
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
 

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Gender</th>
                                            <th>Tanggal lahir</th>
                                            <th>Kota Lahir</th>
                                            <th>Nama orang tua</th>
                                            <th>Alamat orang tua</th>
                                            <th>No hp</th>
                                            <th>Email</th>                                         
                                            <th>Tanggal masuk</th>
                                            <th>Aktif</th>
                                            <th>Foto</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($santri as $dataSantri)
                                        <tr>
                                            <td>{{ $dataSantri -> id }}</td>
                                            <td>{{ $dataSantri -> name }}</td>
                                            <td>{{ $dataSantri -> gender }}</td>
                                            <td>{{ $dataSantri -> tgl_lhr }}</td>
                                            <td>{{ $dataSantri -> kota_lhr }}</td>
                                            <td>{{ $dataSantri -> nama_ortu }}</td>
                                            <td>{{ $dataSantri -> alamat_ortu }}</td>
                                            <td>{{ $dataSantri -> hp }}</td>
                                            <td>{{ $dataSantri -> email }}</td>
                                            <td>{{ $dataSantri -> tgl_masuk }}</td>
                                            <td>{{ $dataSantri -> aktif }}</td>
                                            <td><img src="uploads/{{ $dataSantri->image }}" style="width: 50px;"></td>

                                            <td>
                                                <a href="{{ url('/form-edit-santri-') }} {{ $dataSantri->id }}">
                                                <div class="d-grid"><button class="btn btn-warning btn-block" type="submit">Edit</button></div>
                                               </a>
                                            </td>
                                            
                                            <form action="{{ url('/delete-santri-') }} {{ $dataSantri->id }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <td><div class="d-grid"><button class="btn btn-danger btn-block" type="submit">Delete</button></div></td>     
                                            </form> 
                                        </tr>
                                        @endforeach
                                         
                                        
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection