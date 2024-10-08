<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="b-divider"></div>
    <main>
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-md-1"></div>
                <div class="col-md-10"> 
                    <h1 class="mt-5 text-center">Login</h1>      
                    <!-- Login form bootstrap 5 -->
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check
                                -input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Remember me
                                </label>

                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </form>                   
                </div> <!--col-md-10-->
                <div class="col-md-1"></div>
            </div>
        </div>
    </main>       
</body>
</html>