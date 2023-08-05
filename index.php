<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <Link rel="stylesheet" href="./style.css">

    <title>Document</title>
    <style>
        .btn-primary {
            color: #fff;
            background-color: #7031f6 !important;
            border-color: #7031f6 !important;
        }

        .text-head {
            color: #7031f6;
        }
    </style>
</head>

<body>
    <div class="container shadow border">
        <div class="row">
            <div class="col-md-6">
                <img src="https://media.sciencephoto.com/c0/04/16/32/c0041632-800px-wm.jpg" class="img-fluid">
            </div>
            <div class="col-md-6">
                <div class="title mb-5 text-head ">Explore & Experience</div>
                <form id="contactForm" onsubmit="submitForm(event)">
                    <div class="row mb-4">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="First name" name="firstname" id="firstname">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="Last name" name="lastname" id="lastname">
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <input type="text" class="form-control" name="username" id="username" placeholder=" Username">
                    </div>

                    <div class=" form-group mb-4">
                        <input type="email" class="form-control" name="email" placeholder="Email" id="email">
                    </div>


                    <div class="form-group mb-4">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>

                    <div class="form-group mb-4">
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password">
                    </div>

                    <button type="submit" class="btn btn-primary mb-4 w-100">Sign in</button>
                </form>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>