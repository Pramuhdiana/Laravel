<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <title>Tutorial laravel eloquent laravel</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                Crud Data Pegawai
            </div>
            <div class="card-body">
                <a href="/pegawai/tambah" class="btn btn-primary">Input Pegawai Baru</a>
                <br/>
                <br/>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>OPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pegawai as $p)
                        <tr>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->alamat }}</td>
                            <td>
                                <a href="/pegawai/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                <a href="/pegawai/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                            
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
    </body>
</html>

  {{--  </div>
    <h1>Data Pegawai</h1>
<ul>
    @foreach ($pegawai as $p)
    <li>
        {{ "Nama : ". $p->nama . ' | Alamat : ' . $p->alamat }}
    </li>
        
    @endforeach
</ul>  --}}