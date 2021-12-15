<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>BCC Faculty Evaluation System</title>
    <meta property="og:title" content="BCC Faculty Evaluation System">
    <meta property="og:description" content="Faculty evaluation system with online admin be significant to the following departments in school to manage the evaluation by using our system. Evaluation can, and should, however be used as an ongoing management and learning tool to improve the organizations effectiveness...">
    <meta property="og:url" content="https://www.bccevaluationsystem.online">
</head>
<body>
<div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image m-auto"></div>
                            <img src="img/bcc.png" alt="">
                            <div class="col-lg-12">
                                <div class="p-4">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome!</h1>
                                    </div>
                                    <form action="check-password.php" method="POST">
                                        <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"  name="username" placeholder="Username" required>
                                        <label for="floatingInput">Username</label>
                                        </div>
                                        <div class="form-floating">
                                        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
                                        <label for="floatingPassword">Password</label>
                                        <hr>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                                        </div>
                                        <hr>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
