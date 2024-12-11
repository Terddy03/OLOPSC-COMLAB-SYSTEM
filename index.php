<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>

    <!-- Bootstrap and Custom Stylesheets -->
    <link rel="stylesheet" href="assets/custom/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/custom/css/bootstrap-table.css">
    <link rel="stylesheet" href="assets/custom/css/datepicker.css">
    <link rel="stylesheet" href="assets/custom/css/datepicker3.css">
    <link rel="stylesheet" href="assets/custom/css/styles.css">
    <link rel="stylesheet" href="assets/toastr/css/toastr.css">
    <link rel="stylesheet" href="assets/mycustom/css/styles.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        /* Global Styles */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #0a095f; /* Deep blue background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-panel {
            width: 100%;
            max-width: 500px; /* Increased width for the login panel */
            padding: 40px;
            border-radius: 8px;
            background-color: #ffffff; /* White background for the panel */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* Logo Styling */
        .logo {
            display: block;
            margin: 0 auto 20px; /* Center logo with margin at the bottom */
            width: 60px; /* Adjust logo size */
        }

        /* Panel Heading */
        .panel-heading {
            text-align: center;
            color: #ffffff; /* White text for the heading */
            margin-bottom: 20px;
            font-size: 28px;
            font-weight: 600;
            white-space: normal; /* Allow heading to wrap */
            word-wrap: break-word; /* Break long words to fit */
            overflow-wrap: break-word; /* Same as word-wrap for cross-browser support */
        }

        /* Input fields */
        .form-control {
            border-radius: 8px; /* Rounded input fields */
            border: 1px solid #ffd230; /* Yellow border */
            box-shadow: none;
            padding: 15px;
            font-size: 16px;
            margin-bottom: 20px;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            border-color: #0a095f; /* Blue border on focus */
            box-shadow: 0 0 5px rgba(10, 9, 95, 0.8);
        }

        /* Buttons */
        .btn-primary {
            background-color: #ffd230; /* Yellow background */
            color: #0a095f; /* Deep blue text */
            border: none;
            border-radius: 8px;
            padding: 15px;
            width: 100%;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #e5a800; /* Darker yellow on hover */
        }

        /* Links */
        a {
            color: #ffd230; /* Yellow color for links */
            text-align: center;
            display: block;
            margin-top: 15px;
            text-decoration: none;
        }

        a:hover {
            color: #0a095f; /* Deep blue color for links on hover */
        }

        /* Responsive Design */
        @media (max-width: 767px) {
            .login-panel {
                padding: 20px;
            }

            .panel-heading {
                font-size: 24px;
            }

            .form-control {
                padding: 12px;
            }

            .btn-primary {
                padding: 12px;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <!-- Logo on top of the panel heading -->
                        <img class="logo" src="UIupdated/olopsclogo.png" alt="Logo">
                        <div class="panel-heading">
                            OLOPSC Comlab Management System
                        </div>
                        <div class="panel-body">
                            <form class="frm_index">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" name="username" type="text" autofocus autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" required>
                                    </div>
                                    <br>
                                    <button class="btn btn-primary btn-block" type="submit">Log in</button>
                                    <br>
                                    <a href="./member/login">Go to Member's Page</a>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div><!-- /.col-->
            </div><!-- /.col-->
        </div><!-- /.row -->    
    </div><!-- /.row -->   

    <!-- Javascript -->
    <script src="assets/custom/js/jquery-1.11.1.min.js"></script>
    <script src="assets/custom/js/bootstrap.min.js"></script>
    <script src="assets/toastr/js/toastr.min.js"></script>
    <script src="assets/mycustom/js/login.js"></script>

</body>

</html>
