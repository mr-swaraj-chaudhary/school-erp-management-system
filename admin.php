<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Dashboard</title>
    <!-- Add core styles here -->
    <link rel="stylesheet" href="./assets/css/base-styles.css">
    <!-- Latest compiled and minified CSS & JS or JQuery -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container-fluid">
        <!-- Header -->
        <?php include("./includes/header.php") ?>

        <!-- card views -->
        <section class="content p-5 text-center align-items-center">
            <div class="row">

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info p-3">
                        <div class="inner">
                            <h3>150</h3>
                            <p>Students Registrations</p>
                        </div>
                        <a href="#!" class="btn">More info</a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success p-3">
                        <div class="inner">
                            <h3>150</h3>
                            <p>Students Registrations</p>
                        </div>
                        <a href="#!" class="btn">More info</a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger p-3">
                        <div class="inner">
                            <h3>150</h3>
                            <p>Students Registrations</p>
                        </div>
                        <a href="#!" class="btn">More info</a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning p-3">
                        <div class="inner">
                            <h3>150</h3>
                            <p>Students Registrations</p>
                        </div>
                        <a href="#!" class="btn">More info</a>
                    </div>
                </div>

            </div>
        </section>
    </div>
</body>
<!-- Add base scripts here -->
<script src="./assets/js/admin-script.js"></script>

</html>