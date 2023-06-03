<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>BCC Faculty Evaluation System</title>
    <meta property="og:title" content="BCC Faculty Evaluation System">
    <meta property="og:description"
        content="Faculty evaluation system with online admin be significant to the following departments in school to manage the evaluation by using our system. Evaluation can, and should, however be used as an ongoing management and learning tool to improve the organizations effectiveness...">
    <meta property="og:url" content="https://www.bccevaluationsystem.online">
    <meta property="og:image" content="img/uwu.jpg">
    <!-- jquery cdn minified -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>
<script src="timeScript.js"></script>

<body>

    <nav class="navbar" style="background-color: #000041">
        <div class="container">
            <span class="navbar-brand text-center text-white mx-3"><b>Faculty Evaluation System</b><br>
                <h6>Baao Community College</h6>
            </span>
            <img src="img/bcc.png" alt="Logo" width="60" height="60" class="d-inline-block align-text-top">
        </div>
    </nav>

    <!-- PH Standard Time -->
    <div class="container-fluid bg-light">
        <div class="row">
            <div class="col-lg-12 text-center p-0">
                <div class="fs-5" style="height: 60px; width: 100%; background-color: #e9e491">
                    <b>Philippine Standard Time</b>
                    <div id="runningTime"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <div class="col-lg-12 border-0 shadow-lg my-5">
                    <div class="p-4">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Faculty Evaluation System</h1>
                        </div>
                        <form action="check-password.php" method="POST">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="username"
                                    placeholder="Username" required autofocus>
                                <label for="floatingInput">Username</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingPassword" name="password"
                                    placeholder="Password" required>
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="mt-3 d-grid gap-2">
                                <input type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

<footer class="py-1 mt-5 fixed-bottom" style="background-color: #000041">
    <div class="container text-light text-center">
        <!-- <p class="display-5 mb-3">2022 © ACLC College of Iriga inc. All rights reserved.</p> -->
        <small class="text-white-70">&copy; Copyright by Baao Community College. All rights reserved.</small>
    </div>
</footer>

</html>


















<body>

</body>

</html>

<!-- <div class="col-xl-3 col-lg-12 col-md-5">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image m-auto"></div>
                            <img src="img/bcc.png" alt="" width="10%" height="10%">
                            <div class="col-lg-12">
                                <div class="p-4">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Faculty Evaluation System</h1>
                                    </div>
                                    <form action="check-password.php" method="POST">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" name="username"
                                                placeholder="Username" required>
                                            <label for="floatingInput">Username</label>
                                        </div>
                                        <div class="form-floating">
                                            <input type="password" class="form-control" id="floatingPassword"
                                                name="password" placeholder="Password" required>
                                            <label for="floatingPassword">Password</label>
                                            <hr>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="submit"
                                                class="btn btn-primary btn-user btn-block">
                                        </div>
                                        <hr>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->