<form method="post" action="{{URL::to('/addcategoryprocess')}}">
    @csrf
    <h3>Category</h3>
    Name : <input type="text" name="txt1"/>
    <br/>
    <input type="submit"/>
</form>