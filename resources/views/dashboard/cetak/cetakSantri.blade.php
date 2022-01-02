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
                <table class="static" rules="all" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Gender</th>
                            <th>Tanggal lahir</th>
                            <th>Kota Lahir</th>
                            <th>Nama orang tua</th>
                            <th>Alamat orang tua</th>
                            <th>No hp</th>
                            <th>Email</th>                                         
                            <th>Tanggal masuk</th>
                            <th>Aktif</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($santri as $dataSantri)
                        <tr>
                            <td>{{ $dataSantri -> id }}</td>
                            <td>{{ $dataSantri -> name }}</td>
                            <td>{{ $dataSantri -> gender }}</td>
                            <td>{{ $dataSantri -> tgl_lhr }}</td>
                            <td>{{ $dataSantri -> kota_lhr }}</td>
                            <td>{{ $dataSantri -> nama_ortu }}</td>
                            <td>{{ $dataSantri -> alamat_ortu }}</td>
                            <td>{{ $dataSantri -> hp }}</td>
                            <td>{{ $dataSantri -> email }}</td>
                            <td>{{ $dataSantri -> tgl_masuk }}</td>
                            <td>{{ $dataSantri -> aktif }}</td>

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