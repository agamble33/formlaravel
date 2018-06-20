<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Login</title>
  
    </head>
    <body>
      <form action="pickcolor" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
            Username: 
        <input type="text" name="username"><b>
        <select>
            @foreach($colors as $color)
            <option name="color" value="{{$color->color}}">{{$color->color}}</option>
            @endforeach
        </select>
        <button type="submit" >Submit</button>
      </form>
    </body>
</html>