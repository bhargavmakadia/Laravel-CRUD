<h3>Display Product</h3>
<table border='3'>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Image</th>
        <th>Details</th>
        <th>Qty</th>
        <th>Action</th>
    </tr>
    @foreach($mydata as $userdata)
    <tr>
        <td>{{$userdata->id}}</td>
        <td>{{$userdata->name}}</td>
        <td>{{$userdata->price}}</td>
        <td>{{$userdata->image}}</td>
        <td>{{$userdata->details}}</td>
        <td>{{$userdata->qty}}</td>
        <td><a href="/editproduct/{{$userdata->id}}">Edit</a> |
            <a href="/deleteproduct/{{$userdata->id}}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>