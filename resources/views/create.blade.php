@extends('layouts')

@section('title', 'Tambah')

@section('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    <nav class="navbar navbar-default">
        <h1 style="text-align: center;"> BIODATA SISWA SMK TELKOM MALANG </h2>
    </nav>
    <div class="container">
        <form method="POST" action="{{ route('biodata.store') }}">
            {{ csrf_field() }}
            <p> Nama : <input type="text" name="name" style="border-radius: 5px; margin-left: 55px;"> </p>
            <p> Kelas : <input type="text" name="class" style="border-radius: 5px; margin-left: 57px;"> </p>
            <p> Absen : <input type="text" name="number" style="border-radius: 5px; margin-left: 54px;"> </p>
            <p> Jenis Kelamin :
                <select name="gender" style="border-radius: 5px; margin-left: 6px;">
                    <option value="Laki-laki"> Laki-laki </option>
                    <option value="Perempuan"> Perempuan </option>
                </select>
            </p>
            <p> Email : <input type="text" name="email" style="border-radius: 5px; margin-left: 59px;"> </p>
            <p> Password : <input type="password" name="password" style="border-radius: 5px; margin-left: 33px;"> </p>
            <p><button type="submit"> Tambah Biodata </button></p>
        </form>
    </div>
    
@endsection