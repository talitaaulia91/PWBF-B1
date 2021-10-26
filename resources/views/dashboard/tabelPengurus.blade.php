@extends('layouts.dashboard')

@section('container')
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <div><a href="/createPengurus"><button class="btn btn-primary " type="submit">Add</button></div></a>
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
                                            <th>No hp</th>
                                            <th>Email</th>                                         
                                            <th>Aktif</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pengurus as $dataPengurus)
                                        <tr>
                                            <td>{{ $dataPengurus -> id }}</td>
                                            <td>{{ $dataPengurus -> nama }}</td>
                                            <td>{{ $dataPengurus -> gender }}</td>
                                            <td>{{ $dataPengurus -> hp }}</td>
                                            <td>{{ $dataPengurus -> email }}</td>
                                            <td>{{ $dataPengurus -> aktif }}</td>
                                            <td><div class="d-grid"><button class="btn btn-warning btn-block" type="submit">Edit</button></div></td>
                                            <td><div class="d-grid"><button class="btn btn-danger btn-block" type="submit">Hapus</button></div></td>
                                        </tr>
                                        @endforeach
                                         
                                        
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection