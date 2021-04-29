<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <title>Laravel CRUD Eloquent</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD Data pegawai - <strong> EDIT DATA </strong>
            </div>
            <div class="card-body">
                <a href="/pegawai" class="btn btn-primary">Kembali</a>
                <br/>
                <br/>

                <form action="/pegawai/update/{{ $pegawai-> id }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama pegawai .." value="{{ $pegawai -> nama }}">
                        @if ($errors->has ('nama'))
                        <div class="text-danger">
                            {{ $errors->first('nama')}}
                        </div>
                            
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="alamat" class="form-control" placeholder="Alamat Pegawai .."> {{ $pegawai -> alamat }} </textarea>
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