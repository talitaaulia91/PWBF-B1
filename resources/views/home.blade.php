@extends('layouts.main')

@section('container')
     <h1> Home</h1>
<table>

     <thead class="pr-3">

                        <tr>
                            <th>id santri</th>
                            <th>nama</th>

                        </tr>
                    </thead>
<tbody class="pr-3">
                        @foreach($hpos as $item)
                            <tr>
                                <td class="pr-3">{{ $item->id_santri }}</td>
                                <td class="pr-3">{{ $item->nama }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                    </table>



@endsection