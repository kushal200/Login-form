<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
        <div class="container-fluid bg">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <form id="log">
                        <h1>Login Form</h1>
                       
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox">Remember me</label>

                        </div>
                        <button type="submit" class="btn btn-success btn-block">Login</button><br>
                        <a href="#">Forget Password?</a><br>
                        <a href="#">Create a new Account</a>
                    </form>
                </div>
              
                <div class="col-md-4 col-sm-4 col-xs-12"></div>
              

            </div>
        </div>       
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body> 
</html>