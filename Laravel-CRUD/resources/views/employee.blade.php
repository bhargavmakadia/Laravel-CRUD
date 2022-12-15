<form method="post" action="{{URL::to('/addemployeeprocess')}}">
    @csrf
    <h3>Employee</h3>
    Name : <input type="text" name="txt1"/>
    <br/>
    Gender : <input type="text" name="txt2"/>
    <br/>
    Email : <input type="email" name="txt3"/>
    <br/>
    Password : <input type="password" name="txt4"/>
    <br/>
    Address : <input type="text" name="txt5"/>
    <br/>
    Mobile : <input type="number" name="txt6"/>
    <br/>
    <input type="submit"/>
</form>