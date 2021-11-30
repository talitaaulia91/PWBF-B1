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
                                            <th>Nama</th>
                                            <th>Email</th>                                         
                                            <th>Aktif</th>
                                            <th>Detail</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($santri as $dataSantri)
                                        <tr>
                                            <td>{{ $dataSantri -> id }}</td>
                                            <td>{{ $dataSantri -> name }}</td>
                                            <td>{{ $dataSantri -> email }}</td>
                                            <td> 
                                                @if ($dataSantri -> aktif === 1)
                                                    Aktif
                                                    @else
                                                    Tidak aktif                                     
                                                @endif
                                                             
                                            </td>
                                            <td>
                                                <a href = "{{ url('/show-kemajuan') }}{{ $dataSantri->id }}">
                                                    <button class="btn btn-info btn-block" type="submit">Show</button>
                                                </a>
                                            </td>
                                
                                        </tr>
                                        @endforeach
                                         
                                        
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection