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
                                        @foreach ($detail_peran as $dataDP)
                                        <tr>
                                            <td>{{ $dataDP ->id }}</td>
                                            <td>{{ $dataDP ->pengurus ->nama_pengurus }}</td>
                                            <td> @if ($dataDP ->pengurus ->aktif == 1)
                                                Aktif
                                                @else
                                                Tidak aktif
                                                @endif
                                            </td>
                                       
                                            <form action="{{ url('/delete-detail-peran-') }} {{ $dataDP->id }}" method="POST">
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