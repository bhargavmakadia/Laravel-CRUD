<form method="post" action="{{URL::to('/productprocess')}}">
    @method('PATCH')
    @csrf
    <input type="hidden" value="{{$fetchdata->id}}" name="txt0"/>
    Name : <input type="text" value="{{$fetchdata->name}}" name="txt1"/>
    <br/>
    Price : <input type="number" value="{{$fetchdata->price}}" name="txt2"/>
    <br/>
    Image : <input type="text" value="{{$fetchdata->image}}" name="txt3"/>
    <br/>
    Details : <input type="text" value="{{$fetchdata->details}}" name="txt4"/>
    <br/>
    Qty : <input type="number" value="{{$fetchdata->qty}}" name="txt5"/>
    <br/>
    <input type="submit"/>
</form>