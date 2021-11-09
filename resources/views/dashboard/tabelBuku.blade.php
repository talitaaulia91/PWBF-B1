@extends('layouts.dashboard')

@section('container')
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <div><a href="/createBuku"><button class="btn btn-primary " type="submit">Add</button></div></a>

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
                                            <th>Bab</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($buku as $dataBuku)
                                        <tr>
                                            <td>{{ $dataBuku -> id }}</td>
                                            <td>{{ $dataBuku -> judul}}</td>
                                            <td>{{ $dataBuku -> keterangan }}</td>
                                            <td>
                                                <a href = "{{ url('/showbab') }}{{ $dataBuku->id }}">
                                                    <button class="btn btn-info btn-block" type="submit">Show</button>
                                                </a>
                                            </td>
                                            <td>
                                                <a href = "{{ url('/form-edit-buku-') }}{{ $dataBuku->id }}">
                                                    <button class="btn btn-warning btn-block" type="submit">Edit</button>
                                                </a>
                                                
                                            </td>
                                            <form action="{{ url('/delete-buku-') }} {{ $dataBuku->id }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <td><button class="btn btn-danger btn-block" type="submit">Delete</button></td>     
                                            </form>                   
                                        </tr>
                                        @endforeach
                                         
                                        
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection