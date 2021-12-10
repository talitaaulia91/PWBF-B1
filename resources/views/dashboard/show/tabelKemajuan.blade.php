@extends('layouts.dashboard')

@section('container')
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    {{-- @can('adminpengurus')
    <div><a href="/form-create-kemajuan{{ $santri->id }}"><button class="btn btn-primary " type="submit">Add</button></div></a>
    @endcan --}}

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
                                            <th>Tanggal</th>
                                            <th>Status</th>  
                                            <th>Nama pengurus</th>
                                            <th>Show</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kemajuan as $dataKemajuan)
                                        <tr>
                                            <td>{{ $dataKemajuan -> id }}</td>
                                            <td>{{ $dataKemajuan -> tanggal }}</td>
                                            <td>{{ $dataKemajuan -> status }}</td>
                                            <td></td>
                                            <td>  <a href = "{{ url('/show-detail-kemajuan') }}{{ $dataKemajuan->id }}">
                                                <button class="btn btn-info btn-block" type="submit">Show</button>
                                            </a></td>
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