<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Devprox</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">

    <script type="text/javascript">
    function validate(){
    x=document.myForm
    input=x.idnum.value
    if (input.length !== 13){
        alert("The ID Number should be 13 characters long!")
        return false
    }else {
        return true
    }
}
</script>


</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">DevProx Registration Form</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="register.php" name="myForm" onsubmit="return validate()">
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="first_name" pattern="[A-Za-z]+">
                                            <label class="label--desc">first name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="last_name" pattern="[A-Za-z]+">
                                            <label class="label--desc">Surname</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p style="color: red;">
                            <?php
 
                                if(isset($_GET['id']) == 2){

                                echo "ID already exist.";
                                }
                            ?>
                        </p>
                        <div class="form-row">

                            <div class="name">ID Number</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" name="idnum" id="idnum" >
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Date Of Birth</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="date" name="dob">
                                </div>
                            </div>
                        </div>

         
               
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" name="submit_data" >Register</button>

                            <button class="btn btn--radius-2 btn--red" type="">Cancel</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

    <script src="main.js"></script>

</body> 

</html> 