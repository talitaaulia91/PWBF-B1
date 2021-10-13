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
                                            <th>No hp</th>
                                            <th>Email</th>                                         
                                            <th>Aktif</th>
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
                                            
                                        </tr>
                                        @endforeach
                                         
                                        
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection