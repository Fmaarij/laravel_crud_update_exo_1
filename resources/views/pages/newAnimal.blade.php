@extends('layouts.index')
@section('content')

<form action="createAnimal" method="post" enctype="multipart/form-data">
    @csrf
    <label for="">Genre</label>
    <input type="text" name="genre" id="">
    <label for="">Age</label>
    <input type="number" name="age" id="">
    <button type="submit">Ajouter</button>
</form>

@endsection
