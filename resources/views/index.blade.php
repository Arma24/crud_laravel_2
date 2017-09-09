@extends('layouts')

@section('title', 'Index')

@section('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    <nav class="navbar navbar-default">
        <h1 style="text-align: center;"> BIODATA SISWA SMK TELKOM MALANG </h2>
    </nav>
    <div class="container" style="text-align: center;">
        <a href="{{ route('biodata.create') }}">Tambah Biodata</a>
    </div>
    <br>
    <div class="center">
            
            <table border="1" align="center" width="800x" style="text-align: center;">
                <tr>
                    <td>Nama</td>
                    <td>Kelas</td>
                    <td>Absen</td>
                    <td>Jenis Kelamin</td>
                    <td>Email</td>
                    <td>Aksi</td>
                </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->class }}</td>
                    <td>{{ $user->number }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('biodata.edit', $user->id) }}"> Edit </a>
                        <form method="POST" action="{{ route('biodata.destroy', $user->id) }}">
                            {{ csrf_field() }}
                            {!! method_field('delete') !!}
                            <button type="submit" class="navbar-default"> Delete </button>
                        </form>
                    </td>
                </tr>
            @endforeach    
            </table>
    </div>
@endsection