<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>User Profile</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="{{asset('css/sideBar.css')}}">



    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>

    <div class="wrapper ml-5 pl-5">


        <div class="container ml-5 pl-5">
            <div class="container d-flex justify-content-center col-12 ml-5 pl-5">
                
                
                <form class="shadow pt-5 bg-white rounded col-md-7 m-5">
                    <a href="./home.php"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
                    
                    <h3 class="my-3 text-center"> Edit Your Profile</h3>
                    <div class="form-group">
                    <input type="text" class="form-control"  placeholder="Voter's ID">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control"    placeholder="First Name" >
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control"   placeholder="Last Name">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Photo</label>
                       <input type="file" class="form-control"  >
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control " placeholder="Old password" >
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control " placeholder="New Password" >
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control " placeholder="Confirm Password" >
                    </div>

                    <div class="ml-5 pl-5">
                        <div class="ml-5 pl-5">
                            <button class="btn btn-primary col-3 ml-5 mb-3" type="submit">Edit</button>
                        </div>
                    </div>

                </form>


            </div>


        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>