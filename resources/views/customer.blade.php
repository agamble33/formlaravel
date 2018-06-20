 <!DOCTYPE html>
 <html>
 <head>
        <meta charset="utf-8">
        <title>Form For Speed Test</title>
  <meta name="csrf" value="{{ csrf_token() }}">

    </head>
    <body>
<!--make sure you add all or check csrf is working-->
        <form action="{{url('customer')}}" method="POST">            
     <input type="hidden" name="_token" value="{{csrf_token()}}">
     <input type="hidden" name="csrf" value="{{csrf_token()}}">
            <!--make sure you double check your input name on view should match migration-->

            Add your Domain name:<br>
         <input type="url" name="domain">
            
            <br>Add your URL:

            <input type="url" name="url">
            
            <br>Add your E-mail:

            <input type="email" name="email">
            
            <br>Add your Telephone Number:

            <input type="tel" name="phone">

            <button type="submit" name="button"> Submit </button>
        </form>
    </body>
</html>
