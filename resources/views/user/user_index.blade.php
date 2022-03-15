@include ('header')

<table>
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Firstname</th>
    <th>Email</th>
</tr>

@foreach ($users as $user)
<tr>
    <td>{{ $user->id }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->firstname }}</td>
    <td>{{ $user->email}}</td>
</tr>
@endforeach

</table>

@include ('footer')