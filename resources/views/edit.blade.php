@extends('layouts')

@section('title', 'Edit')

@section('content')
    <div>
        <form method="POST" action="{{ route('biodata.update', $user->id) }}">
            {{ csrf_field() }}
            {!! method_field('patch') !!}
            <p> Nama : <input type="text" name="name" value="{{ $user->name }}"> </p>
            <p> Kelas : <input type="text" name="class" value="{{ $user->class }}"> </p>
            <p> Absen : <input type="text" name="number" value="{{ $user->number }}"> </p>
            <p> Jenis Kelamin :
                <select name="gender">
                    <option value="Laki-laki"> Laki-laki </option>
                    <option value="Perempuan"> Perempuan </option>
                </select>
            </p>
            <p> Email : <input type="text" name="email" value="{{ $user->email }}"> </p>
            <p><button type="submit"> Edit </button></p>
        </form>
    </div>
@endsection