<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị website</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- <link rel="stylesheet" href="../../content/css/bootstrap.min.css"> -->
    <script src="https://kit.fontawesome.com/d2ad07b7f4.js" crossorigin="anonymous"></script>
    <style>
        body {
            margin: 0;
        }

        .group-navbar-left {
            background-color: #0d3144;
            /* height: 30px; */
            /* max-width: 100%; */
            padding: 10px 0;
            text-align: center;
            border-bottom: 2px solid #00000024;
            /* box-shadow: -4px 8px 20px 7px black; */
        }

        body {
            margin: 0;
        }

        a {
            text-decoration: none;
        }

        li {
            list-style: none;
        }

        .group-navbar-right {
            display: flex;
            justify-content: space-between;
            padding: 10px 20px;
            /* box-shadow: 10px 0 30px 1px rgb(211, 211, 211); */
        }

        .group-navbar-left-down {
            background-color: #0d3144;
            color: white;
            min-height: 100vh;
        }

        .group-navbar-left-down a {
            color: white;
        }

        .a {
            padding: 20px;
        }




        .dropbtn {
            background-color: white;
            /* color: white; */
            padding: 5px 10px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            /* min-width: 160px; */
            width: 100%;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 2;
            /* right: 0; */
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #1ea8d9;
            color: #f9f9f9;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #0d3144;
            color: white;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row hello">
                <div class="col-sm-3" style="padding: 0;">
                    @include('admin.layout_admin.menu')
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="group-navbar-right">
                            <div class="navbar-item-left"></div>
                            <div class="navbar-item-right">

                                <a href=""><img src="" style="border-radius: 50%;" width="50"
                                        alt=""></a>

                                <div class="dropdown">
                                    <button class="dropbtn"><b>Hello</b></button>
                                    <div class="dropdown-content">

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        @yield('view-main')
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
