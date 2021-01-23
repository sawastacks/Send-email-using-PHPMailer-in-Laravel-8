<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send Email via PHPMailer in Laravel 8</title>
    <link rel="stylesheet" href="{{ asset('packs/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>

   <div class="container">
      <div class="row" style="margin-top:45px">
         <div class="col-md-4 offset-md-4">
         <h4>Send Email via PHPMailer in Laravel 8</h4><hr>
         <form action="{{ route('email.send') }}" method="post">
            @csrf
            <div class="form-group">
               <label for="">Name</label>
               <input type="text" class="form-control" name="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
               <label for="">Email</label>
               <input type="text" class="form-control" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
               <label for="">Subject</label>
               <input type="text" class="form-control" name="subject" placeholder="Enter subject">
            </div>
            <div class="form-group">
              <textarea name="message" cols="4" rows="4" class="form-control" placeholder="Message here...."></textarea>
            </div>
            <button type="submit" class="btn btn-block btn-success">Send Email</button>
         </form>
         </div>
      </div>
   </div>
    
</body>
</html>