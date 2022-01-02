<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table.static{
            position: relative;
            border: 1px solid #543535;
        }
    </style>
    <title>Cetak</title>
</head>
<body>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="static"  id="dataTable" width="100%" rules="all" cellspacing="10">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Gender</th>
                            <th>No hp</th>
                            <th>Email</th>                                         
                            <th>Status</th>
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
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<script type="text/javascript">
 window.print();
</script>

</body>
</html>