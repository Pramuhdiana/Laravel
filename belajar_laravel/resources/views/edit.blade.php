<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tutorial Edit</title>
</head>
<body>
    <h3>Edit Pegawai</h3>
    <a href="/pegawai">Kembali</a>
    <br/>
    <br/>

    @foreach ($pegawai as $p)
    <form action="/pegawai/update" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{$p->id}}"><br/>
    Nama <input type="text" required="required" name="nama" value="{{ $p->nama }}"><br/>
    Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->jabatan }}"><br/>
    Umur <input type="number" required="required" name="umur" value="{{ $p->umur }}"><br/>
    Alamat <textarea name="alamat" required="required">{{ $p->alamat }}</textarea><br/>
    <input type="submit" value="Simpan Data">
    </form>
    @endforeach
    
</body>
</html>