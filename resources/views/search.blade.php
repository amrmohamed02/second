<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

<form action="/search"method="post">
    
    {{ csrf_field() }}
    <h3>Search By </h3>
<div class="form-group">
    <span class="form-control">Name</span>
    <input type="text" name="name"><br>

    <span class="form-control"> OR  City</span>
    <input type="text" name="city"><br>

    <span class="form-control">OR  price Range </span>
    <input type="number" name="first" >
    <span>And</span>
    <input type="number" name="second"><br>

    <span class="form-control">OR  Availability Range </span>
    <input type="date" name="f" >
    <span>And</span>
    <input type="date" name="s"><br>
    <input type="submit">
</div>
</form>