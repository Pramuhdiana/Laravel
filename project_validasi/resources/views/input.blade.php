<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tutorial laravel membuat form validasi pada laravel</title>
    {{--  boostrap  --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/boostrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <h3 class="text-center">Validasi BOOS</h3>
                    <br/>
                    {{--  menampilkan error validasi  --}}
                    @if (count ($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li> {{ $error }}</li>
                           @endforeach
                        </ul>
                    </div>        
                    @endif
                    <br/>
                    {{--  form validasi  --}}
                    <form action="/proses" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{ old('nama') }}">
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text" class="form-control" name="pekerjaan" value="{{ old('pekerjaan') }}">
                    </div>
                    <div class="form-group">
                        <label for="usia">Usia</label>
                        <input type="text" class="form-control" name="usia" value="{{ old('usia') }}">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Proses">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>