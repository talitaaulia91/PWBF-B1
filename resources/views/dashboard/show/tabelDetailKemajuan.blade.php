@extends('layouts.dashboard')

@section('container')
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    @can('pengurus')
    <div><a href="/form-create-detail-kemajuan{{ $id }}"><button class="btn btn-primary " type="submit">Add</button></div></a>
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
                                      
                                            <th>Judul Bab</th>  
                                            <th>Keterangan</th>
                                            @can('adminpengurus')
                                            <th>Edit</th>
                                            <th>Hapus</th>    
                                            @endcan
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($detail_kemajuan as $dataDK)
                                        <tr>
                                            <td>{{ $dataDK -> id }}</td>
                                        
                                            <td>{{ $dataDK ->bab ->judul }}</td>
                                            <td>{{ $dataDK -> keterangan }}</td>


                                            @can('adminpengurus')
                                            <td>
                                                <a href = "{{ url('/form-edit-detail-kemajuan-') }}{{ $dataDK->id }}">
                                                    <button class="btn btn-warning btn-block" type="submit">Edit</button>
                                                </a>
                                                
                                            </td>
                                            <form action="{{ url('/delete-detail-kemajuan-') }} {{ $dataDK->id }}" method="POST">
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