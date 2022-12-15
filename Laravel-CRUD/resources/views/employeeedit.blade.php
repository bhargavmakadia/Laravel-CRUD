<form method="post" action="{{URL::to('/employeeprocess')}}">
    @method('PATCH')
    @csrf
    <input type="hidden" value="{{$fetchdata->id}}" name="txt0"/>
    Name : <input type="text" value="{{$fetchdata->name}}" name="txt1"/>
    <br/>
    Gender : <input type="text" value="{{$fetchdata->gender}}" name="txt2"/>
    <br/>
    Email : <input type="email" value="{{$fetchdata->email}}" name="txt3"/>
    <br/>
    Password : <input type="password" value="{{$fetchdata->password}}" name="txt4"/>
    <br/>
    Address : <input type="text" value="{{$fetchdata->address}}" name="txt5"/>
    <br/>
    Mobile : <input type="number" value="{{$fetchdata->mobile}}" name="txt6"/>
    <br/>
    <input type="submit"/>
</form>