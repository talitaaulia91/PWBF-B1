@extends('layouts.dashboard')

@section('container')
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    @can('adminpengurus')
    <div><a href="/form-create-bab{{ $buku->id }}"><button class="btn btn-primary " type="submit">Add</button></div></a>
    @endcan
   


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
                                            <th>Judul</th>
                                            <th>Keterangan</th>
                                            @can('adminpengurus')
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                            @endcan
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bab as $dataBab)
                                        <tr>
                                            <td>{{ $dataBab -> id }}</td>
                                            <td>{{ $dataBab -> judul}}</td>
                                            <td>{{ $dataBab -> keterangan }}</td>   
                                            @can('adminpengurus')
                                            <td>
                                                <a href = "{{ url('/form-edit-bab-') }}{{ $dataBab->id }}">
                                                    <button class="btn btn-warning btn-block" type="submit">Edit</button>
                                                </a>
                                                
                                            </td>

                                            <form action="{{ url('/delete-bab-') }} {{ $dataBab->id }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <td><button class="btn btn-danger btn-block" type="submit">Delete</button></td>     
                                            </form>   
                                            @endcan                     
                                        </tr>
                                        @endforeach
                                         
                                        
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection