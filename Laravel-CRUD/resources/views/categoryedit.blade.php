<form method="post" action="{{URL::to('/categoryprocess')}}">
    @method('PATCH')
    @csrf
    <input type="hidden" value="{{$fetchdata->id}}" name="txt0"/>
    Name : <input type="text" value="{{$fetchdata->name}}" name="txt1"/>
    <br/>
    <input type="submit"/>
</form>