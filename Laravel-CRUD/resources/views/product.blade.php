<form method="post" action="{{URL::to('/addproductprocess')}}">
    @csrf
    <h3>Product</h3>
    Name : <input type="text" name="txt1"/>
    <br/>
    Price : <input type="number" name="txt2"/>
    <br/>
    Image : <input type="text" name="txt3"/>
    <br/>
    Details : <input type="text" name="txt4"/>
    <br/>
    Qty : <input type="number" name="txt5"/>
    <br/>
    <input type="submit"/>
</form>