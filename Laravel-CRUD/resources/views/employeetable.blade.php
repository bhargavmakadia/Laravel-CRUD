<h3>Display Employee</h3>
<table border='3'>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Password</th>
        <th>Address</th>
        <th>Mobile</th>
        <th>Action</th>
    </tr>
    @foreach($mydata as $userdata)
    <tr>
        <td>{{$userdata->id}}</td>
        <td>{{$userdata->name}}</td>
        <td>{{$userdata->gender}}</td>
        <td>{{$userdata->email}}</td>
        <td>{{$userdata->password}}</td>
        <td>{{$userdata->address}}</td>
        <td>{{$userdata->mobile}}</td>
        <td><a href="/editemployee/{{$userdata->id}}">Edit</a> |
            <a href="/deleteemployee/{{$userdata->id}}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>