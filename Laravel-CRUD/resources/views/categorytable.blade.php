<h3>Display Category</h3>
<table border='3'>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    @foreach($mydata as $userdata)
    <tr>
        <td>{{$userdata->id}}</td>
        <td>{{$userdata->name}}</td>
        <td><a href="/editcategory/{{$userdata->id}}">Edit</a> |
            <a href="/deletecategory/{{$userdata->id}}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>