@extends('layouts.dashboard')

@section('container')
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <div><a href="/form-create-pengurus"><button class="btn btn-primary " type="submit">Add</button></div></a>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="/cetak-pengurus" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
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
                                            <th>Status</th>
                                            <th>add peran</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pengurus as $dataPengurus)
                                        <tr>
                                            <td>{{ $dataPengurus -> id }}</td>
                                            <td>{{ $dataPengurus -> nama_pengurus }}</td>
                                            <td>{{ $dataPengurus -> gender }}</td>
                                            <td>{{ $dataPengurus -> hp }}</td>
                                            <td>{{ $dataPengurus -> email }}</td>
                                            <td>
                                                @if ($dataPengurus->aktif === 1)
                                                    Aktif
                                                @else
                                                    Tidak Aktif
                                                @endif
                                            </td>
                                            <td>
                                                <a href="/form-create-detail-peran{{ $dataPengurus->id }}">
                                                <div class="d-grid"><button class="btn btn-info btn-block" type="submit">Add</button></div>
                                               </a>
                                            </td>
                                            <td>
                                                <a href="{{ url('/form-edit-pengurus-') }} {{ $dataPengurus->id }}">
                                                <div class="d-grid"><button class="btn btn-warning btn-block" type="submit">Edit</button></div>
                                               </a>
                                            </td>
                                            
                                            <td>
                                                <form action="{{ url('/delete-pengurus-') }} {{ $dataPengurus->id }}" method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    
                                                        <div class="d-grid"><button class="btn btn-danger btn-block" type="submit">Delete</button></div>
                                                    
                                                </form> 
                                            </td>  
                                        </tr>
                                        @endforeach
                                         
                                        
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection