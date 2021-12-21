@extends('layouts.dashboard')

@section('container')
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    {{-- <div><button class="btn btn-primary " type="submit">Add</button></div> --}}

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
                                            <th>Nama pengurus</th>
                                            <th>Status</th>                
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($detail_peran as $dataDK)
                                        <tr>
                                            <td>{{ $dataDK ->id }}</td>
                                            <td>{{ $dataDK ->pengurus ->nama_pengurus }}</td>
                                            <td> @if ($dataDK ->pengurus ->aktif == 1)
                                                Aktif
                                                @else
                                                Tidak aktif
                                                @endif
                                            </td>
                                       
                                            <td><div class="d-grid"><button class="btn btn-danger btn-block" type="submit">Hapus</button></div></td>
                                            
                                        </tr>
                                        @endforeach
                                         
                                        
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection