@extends('layouts.index')
@section('content')
<table>
<tr>
    <th>ID</th>
    <th>Genre</th>
    <th>Age</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>
@foreach ($dbAnimal as $item)
<tr>
    <td>{{$item->id }}</td>
    <td>{{$item->genre }}</td>
    <td>{{$item->age }}</td>
    <td><a href="updateAnimal/{{$item->id}}"><button>Edit</button></a></td>
    <form action="crud/{{$item->id}}/delete" method="post">
        @csrf
        |@method('DELETE')
        <td><button>Delete</button></td>
    </form>
</tr>
@endforeach

</table>

@endsection
