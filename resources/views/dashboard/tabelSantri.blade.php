@extends('layouts.dashboard')

@section('container')
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($santri as $dataSantri)
                                        <tr>
                                            <td>{{ $dataSantri -> id }}</td>
                                            <td>{{ $dataSantri -> nama }}</td>
                                            <td>{{ $dataSantri -> gender }}</td>
                                            <td>{{ $dataSantri -> tgl_lhr }}</td>
                                            <td>{{ $dataSantri -> kota_lhr }}</td>
                                            <td>{{ $dataSantri -> nama_ortu }}</td>
                                            <td>{{ $dataSantri -> alamat_ortu }}</td>
                                            <td>{{ $dataSantri -> hp }}</td>
                                            <td>{{ $dataSantri -> email }}</td>
                                            <td>{{ $dataSantri -> tgl_masuk }}</td>
                                            <td>{{ $dataSantri -> aktif }}</td>
                                            
                                        </tr>
                                        @endforeach
                                         
                                        
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection