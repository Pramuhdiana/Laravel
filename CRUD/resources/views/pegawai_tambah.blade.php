<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>    
    <title>View tambah</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
<div class="card-header text-center">
    Crud Data Pegawai - <strong>Tambah Data</strong>
</div>
<div class="card-body">
    <a href="/pegawai" class="btn btn-primary">Kembali</a>
    <br/>
    <br/>
    <form action="/pegawai/store" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" placeholder="Nama Pegawai...">
        @if ($errors->has('nama'))
        <div class="text-danger">
            {{ $errors->first('nama')}}
        </div>
        @endif
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control" placeholder="Alamat Pegawai..."></textarea>
        @if ($errors->has('alamat'))
        <div class="text-danger">
            {{ $errors->first('alamat')}}
        </div>
        @endif
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success" value="Simpan">
    </div>
    </form>
</div>
        </div>
    </div>
    
</body>
</html>