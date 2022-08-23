<hr>
<h3>Update les données</h3>
<table>
    <tr>
        <th>ID</th>
        <th>Genre</th>
        <th>Age</th>
    </tr>
    <tr>
        {{-- @foreach ($dbAnimal as $item ) --}}

<form action="/{{$dbAnimal->id}}/update" method="post">
    @csrf
    @method('PUT')
    <tr>
    <td>{{$dbAnimal->id}}</td>
    <td><input type="text" value="{{$dbAnimal->genre}}" name="genre"></td>
    <td><input type="number" value="{{$dbAnimal->age}}" name="age"></td>
    <td><button type="submit"> Update</button></td>
</tr>
</form>
{{-- @endforeach --}}
    </tr>
    </table>
