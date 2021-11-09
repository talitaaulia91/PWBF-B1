@extends('layouts.dashboard')

@section('container')
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <div><a href="/createPeran"><button class="btn btn-primary " type="submit">Add</button></div></a>
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
                                            <th>Peran</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($peran as $dataPeran)
                                        <tr>
                                            <td>{{ $dataPeran -> id }}</td>
                                            <td>{{ $dataPeran -> peran }}</td>
                                            <td>
                                                @if ($dataPeran->aktif === 1)
                                                    Aktif
                                                @else
                                                    Tidak Aktif
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ url('/form-edit-peran-') }} {{ $dataPeran->id }}">
                                                <div class="d-grid"><button class="btn btn-warning btn-block" type="submit">Edit</button></div>
                                               </a>
                                            </td>
                                            <form action="{{ url('/delete-peran-') }} {{ $dataPeran->id }}" method="POST">
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