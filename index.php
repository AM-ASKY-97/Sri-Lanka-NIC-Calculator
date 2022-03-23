<!doctype html>
<html lang="en">
  <head>
    <title>Age Calculator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="Asseets/style.css">

    <script>
        $(document).ready(function(){
            <?php 
                
                $years = "00";
                $months ="00";
                $weeks ="00";
                $days = "00";
                $mins = "00";
                $seconds ="00";
                $hours ="00";
                $user_date ="00";
                $yaer = "00";
                $month ="00";
                $day ="00";
                $m ="00";
                $d ="00";
                $unic="Processing.....";
                $gender ="Processing.....";
                $len=0;
            ?>    
        });
    </script>

    <style>
        /* unvisited link */

        /* visited link */
        a:visited {
        color: white;
        }

        /* mouse over link */
        a:hover {
            color: blue;
        }

        /* selected link */
        a:active {
            color: hotpink;
        
        }

        .badge-pill{
            padding:7px 22px 7px 22px;
            cursor: pointer;
        }
    </style>
</head>
  <body style="font-family: 'Crimson Text', serif; font-size:16px;">

   

  <?php
        
        if(isset($_POST['submit']))
        {
            
            $nic = $_POST['nic'];

            

            $len = strlen($nic);

            if ($len==12 || $len ==10)
            {
                $unic = $nic;
            }
        
            if ($len == 12)
            {
                $yaer = substr($nic,0,4);
        
                $month = substr ($nic,4,3);
                if ($month >500)
                {
                    $month = $month - 500;
                    $gender = "Female";
                }

                else
                {
                    $gender ="Male";
                }
                if($month >=0 && $month <=31)
                {
                    $day = $month - 31;
                    $month = 01;
                }
                else if ($month >=32 && $month <=59)
                {
                    $day = $month - 32;
                    $month = 02;
                }
                else if ($month >=60 && $month <=90)
                {
                    $day = $month - 60;
                    $month = 03;
                }
                else if ($month >=91 && $month <=120)
                {
                    $day = $month - 91;
                    $month = 04;
                }
                else if ($month >=121 && $month <=151)
                {
                    $day = $month - 121;
                    $month = 05;
                }
        
                else if ($month >=152 && $month <=181)
                {
                    $day = $month - 152;
                    $month = 06;
                }
                else if ($month >=182 && $month <=212)
                {
                    $day = $month - 182;
                    $month = 07;
                }
                else if ($month >=213 && $month <=243)
                {
                    $day = $month - 213;
                    $month = 8;
                }
                else if ($month >=244 && $month <=273)
                {
                    $day = $month - 244;
                    $month =9;;
                }
                else if ($month >=274 && $month <=304)
                {
                    $day = $month - 274;
                    $month = 10;
                }
                else if ($month >=305 && $month <=334)
                {
                    $day = $month - 305;
                    $month = 11;
                }
                else if ($month >=335 && $month <=366)
                {
                    $day = $month - 335;
                    $month = 12;
                }
           
            }
        
            
        
            else if ($len == 10)
            {
                $oldnic = substr ($nic,0,2);
                $yaer = $oldnic + 1900;
        
        
                $month = substr ($nic,2,3);
                if ($month >500)
                {
                    $month = $month - 500;
                    $gender = "Female";
                }

                else
                {
                    $gender ="Male";
                }
                if($month >=0 && $month <=31)
                {
                    $day = $month - 0;
                    $month = 01;
                }
                else if ($month >=32 && $month <=59)
                {
                    $day = $month - 32;
                    $month = 02;
                }
                else if ($month >=60 && $month <=90)
                {
                    $day = $month - 60;
                    $month = 03;
                }
                else if ($month >=91 && $month <=120)
                {
                    $day = $month - 91;
                    $month = 04;
                }
                else if ($month >=121 && $month <=151)
                {
                    $day = $month - 121;
                    $month = 05;
                }
        
                else if ($month >=152 && $month <=181)
                {
                    $day = $month - 152;
                    $month = 06;
                }
                else if ($month >=182 && $month <=212)
                {
                    $day = $month - 182;
                    $month = 07;
                }
                else if ($month >=213 && $month <=243)
                {
                    $day = $month - 213;
                    $month = "08";
                }
                else if ($month >=244 && $month <=273)
                {
                    $day = $month - 244;
                    $month = "09";
                }
                else if ($month >=274 && $month <=304)
                {
                    $day = $month - 274;
                    $month = 10;
                }
                else if ($month >=305 && $month <=334)
                {
                    $day = $month - 305;
                    $month = 11;
                }
                else if ($month >=335 && $month <=366)
                {
                    $day = $month - 335;
                    $month = 12;
                }
            }
        
            else
            {
                ?> 
                <script>
                    alert ("This is an Invalid NIC number !");
                </script>
                <?php
            }
        
           if ($len==12 || $len ==10)
           {
            $hours_in_day   = 24;
            $minutes_in_hour= 60;
            $seconds_in_mins= 60;
                                        
            $birth_date     = new DateTime($yaer."-". $month."-". $day);
            $current_date   = new DateTime();
                        
            $diff           = $birth_date->diff($current_date);
                                    
            $years     = $diff->y ; 
            $m         = $diff->m;
            $d         = $diff->d;
            $months    = ($diff->y * 12) + $diff->m ; 
            $weeks     = floor($diff->days/7);
            $days      = $diff->days; 
            $hours     = $diff->h + ($diff->days * $hours_in_day); 
            $mins      = $diff->h + ($diff->days * $hours_in_day * $minutes_in_hour) ; 
            $seconds   = $diff->h + ($diff->days * $hours_in_day * $minutes_in_hour * $seconds_in_mins) ; 
           }

        }
    ?>

    <div class="container-fluid" style="background-color: #6a46bc;">
        <div class="row">
            <div class="col">
            
            <div class="row text-center">
                <div class="col bg-dark text-light p-2">
                    <h1>Welcome to my web application </h1>
                </div>
            </div>

            </div>
        </div>
        <div class="container border rounded-lg">

        
        <div class="row">
        <div class="col mt-3">
            <form method="post" autocomplete="off">

                <div class="row">
                    <div class="col mt-2 mb-3">
                        <div class="card">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item bg-dark text-white">
                                <div class="row">
                                    <div class="col">Is your number old or new? </div>
                                </div></li>

                                <div class="row text-center mt-3 mb-3">
                                    <div class="col-6">
                                        <input type="radio" name="nic" id="OLD" onclick="oldnic()">
                                        <label for="OLD" id="old"><span class="badge badge-pill badge-danger">Old</span>  </label>
                                        <label for="OLD" id="oldSuccess"><span class="badge badge-pill badge-success">Old</span>  </label>
                                    </div>

                                    <div class="col-6">
                                        <input type="radio" name="nic" id="NEW" onclick="newnic()">
                                        <label for="NEW" id="new"><span class="badge badge-pill badge-danger">New</span></label>
                                        <label for="NEW" id="newSuccess"><span class="badge badge-pill badge-success">New</span></label>
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>

            
                <input type="text" class="form-control" name="nic" id="input" placeholder="Please Enter Your NIC number" oninput="myFunction()">
                
                <div class="row ">
                    <div class="col mt-3">
                        <div class="alert alert-success" id="success">
                            <strong>Your NIC number is valid!</strong> 
                        </div>

                        <div class="alert alert-info" id="info">
                            <strong>Please Enter Your NIC Number!</strong> 
                        </div>

                        <div class="alert alert-danger" id="danger">
                            <strong>Your NIC number is invalid!</strong> 
                        </div>

                        <div class="alert alert-danger" id="Error-01">
                            <strong>Enter your valid NIC number!</strong> 
                        </div>
                        <button type="submit" id="btnSubmit" class="btn btn-success text-center btn-block" name="submit" onclick="btnSubmit()">Calculate</button>
                        <button type="button" id="btnDanger" class="btn btn-danger  text-center btn-block" name="" onclick="btnError()">Processing......</button>
                        <button type="button" id="btnWarning-01" class="btn btn-warning text-center btn-block" name="" onclick="btnError()">Loading......</button>
                    </div>
                </div>

            </form>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-6 mt-3">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-dark text-white">
                        <div class="row">
                            <div class="col">Your nic number is : </div>
                        </div></li>

                        <div class="row text-center mt-3 mb-3">
                            <div class="col"><?php echo $unic ?></div>
                        </div>
                    </ul>
                </div>
            </div>


            <div class="col-lg-6 mt-3">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-dark text-white">
                        <div class="row">
                            <div class="col">Gender : </div>
                        </div></li>

                        <div class="row text-center mt-3 mb-3">
                            <div class="col"><?php echo $gender ?></div>
                        </div>
                    </ul>
                </div>
            </div>


            <div class="col-lg-6 mt-3">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-dark text-white">
                        <div class="row">
                            <div class="col">Date of Birth : </div>
                        </div></li>
                        <div class="row text-center mt-1">
                            <div class="col">Year</div>
                            <div class="col">Month</div>
                            <div class="col">Day</div>
                        </div>

                        <div class="row text-center mt-1 mb-1">
                            <div class="col"><?php echo $yaer ?></div>
                            <div class="col"><?php echo $month ?></div>
                            <div class="col"><?php echo $day ?></div>
                        </div>
                    </ul>
                </div>
            </div>

            

            <div class="col-lg-6 mt-3">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-dark text-white">
                        <div class="row " >
                            <div class="col">Age : </div>
                        </div></li>
                        <div class="row text-center mt-1">
                            <div class="col">Year</div>
                            <div class="col">Month</div>
                            <div class="col">Day</div>
                        </div>

                        <div class="row text-center mt-1 mb-1">
                            <div class="col"><?php echo $years ?></div>
                            <div class="col"><?php echo $m ?></div>
                            <div class="col"><?php echo $d ?></div>
                        </div>
                    </ul>
                </div>
            </div>



            <div class="col-lg-6 mt-3">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-dark text-white">
                        <div class="row">
                            <div class="col">Extra (Total) : </div>
                        </div></li>
                        <div class="row text-center mt-1">
                            <div class="col">Months</div>
                            <div class="col">Weeks</div>
                            <div class="col">Days</div>

                        </div>

                        <div class="row text-center mt-1 mb-1">
                            <div class="col"><?php echo $months ?></div>
                            <div class="col"><?php echo $weeks ?></div>
                            <div class="col"><?php echo  $days ?></div>
                            
                        </div>
                    </ul>
                </div>
            </div>



            <div class="col-lg-6 mt-3 mb-3">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-dark text-white">
                        <div class="row">
                            <div class="col">Living hours: </div>
                        </div></li>
                        <div class="row text-center mt-1">
                            <div class="col">Hours</div>
                            <div class="col">Minutes</div>
                            <div class="col">Seconds</div>
                            

                        </div>

                        <div class="row text-center mt-1 mb-1">
                            <div class="col"><?php echo $hours ?></div>
                            <div class="col"><?php echo $mins ?></div>
                            <div class="col"><?php echo  $seconds ?></div>
                        </div>
                    </ul>
                </div>
            </div>

        </div>
    </div>
         <!-- Footer -->
         <div class="row text-center">
                <div class="col bg-dark text-light text-uppercase pt-3">
                    <h6>&#169 Copyright 2021. All right reserved. </h6> 
                    <p>| Designed By : <a href="http://am-asky97.herokuapp.com/"> A.M. Asky</a> </p>
                </div>
            </div>
        <!-- End Footer -->
    </div>

    
    <script>
        var input = document.getElementById("input");
        
        document.getElementById("input").disabled = true;

        document.getElementById("success").style.display = "none";
        document.getElementById("info").style.display = "none";
        document.getElementById("danger").style.display = "none";
        document.getElementById("Error-01").style.display = "none";
        
        document.getElementById("newSuccess").style.display = "none";
        document.getElementById("oldSuccess").style.display = "none";


        document.getElementById("btnSubmit").style.display = "none";
        document.getElementById("btnWarning-01").style.display = "none";
        
        function myFunction()
        {
            if(input.value.length == 0)
            {
                document.getElementById("info").style.display = "block";
                document.getElementById("success").style.display = "none";
                document.getElementById("danger").style.display = "none";
                document.getElementById("Error-01").style.display = "none";
            }

            else if(document.getElementById('OLD').checked && input.value.length == 10 && input.value.charAt(9)== "v" || input.value.charAt(9)== "V"
            || input.value.charAt(9)== "x" || input.value.charAt(9)== "X")
            {
                document.getElementById("success").style.display = "block";
                document.getElementById("info").style.display = "none";
                document.getElementById("danger").style.display = "none";
                document.getElementById("input").style.color= "green";
                document.getElementById("input").style.borderColor = "green";
                document.getElementById("Error-01").style.display = "none";
            }

            else if(document.getElementById('NEW').checked && input.value.length == 12)
            {
                document.getElementById("success").style.display = "block";
                document.getElementById("info").style.display = "none";
                document.getElementById("danger").style.display = "none";   
                document.getElementById("input").style.color= "green";
                document.getElementById("input").style.borderColor = "green";
                document.getElementById("Error-01").style.display = "none";
            }

            else
            {
                document.getElementById("danger").style.display = "block";
                document.getElementById("success").style.display = "none";
                document.getElementById("info").style.display = "none";
                document.getElementById("input").style.color= "red";
                document.getElementById("input").style.borderColor = "red";
                document.getElementById("Error-01").style.display = "none";
                
            }

            if(input.value.length > 5 && input.value.length <10)
            {
                document.getElementById("btnWarning-01").style.display = "Block";
                document.getElementById("btnDanger").style.display = "none";
                document.getElementById("btnSubmit").style.display = "none";
            }

            else if(input.value.length == 10 && input.value.charAt(9)== "v")
            {
                document.getElementById("btnSubmit").style.display = "block";
                document.getElementById("btnWarning-01").style.display = "none";
                document.getElementById("btnDanger").style.display = "none";
            }

            else if(input.value.length >= 10 && input.value.length < 12)
            {
                document.getElementById("btnWarning-01").style.display = "Block";
                document.getElementById("btnDanger").style.display = "none";
                document.getElementById("btnSubmit").style.display = "none";
            }

            else if(input.value.length == 12)
            {
                document.getElementById("btnSubmit").style.display = "block";
                document.getElementById("btnWarning-01").style.display = "none";
                document.getElementById("btnDanger").style.display = "none";
            }

            else 
            {
                document.getElementById("btnDanger").style.display = "block";
                document.getElementById("btnSubmit").style.display = "none";
                document.getElementById("btnWarning-01").style.display = "none";
            }
           

           
        }
        
        function oldnic()
        {
            document.getElementById("input").value="";
            document.getElementById("input").focus();
            document.getElementById("input").disabled = false;
            document.getElementById("input").maxLength = "10";
            document.getElementById("success").style.display = "none";
            document.getElementById("info").style.display = "none";
            document.getElementById("danger").style.display = "none";
            document.getElementById("Error-01").style.display = "none";
            document.getElementById("oldSuccess").style.display = "block";
            document.getElementById("old").style.display = "none";

            document.getElementById("newSuccess").style.display = "none";
            document.getElementById("new").style.display = "block";
        
        }

        function newnic()
        {
            document.getElementById("input").value="";
            document.getElementById("input").focus();
            document.getElementById("input").disabled = false;
            document.getElementById("input").maxLength = "12";
            document.getElementById("success").style.display = "none";
            document.getElementById("info").style.display = "none";
            document.getElementById("danger").style.display = "none";
            document.getElementById("Error-01").style.display = "none";
            document.getElementById("newSuccess").style.display = "block";
            document.getElementById("new").style.display = "none";

            document.getElementById("oldSuccess").style.display = "none";
            document.getElementById("old").style.display = "block";
        }

        function btnSubmit()
        {
            if (input.value.length ==0)
            {
                alert ("Enter your valid NIC number");
            }   
        }

        function btnError()
        {
            document.getElementById("Error-01").style.display = "block";
            document.getElementById("info").style.display = "none";
            document.getElementById("input").focus();
            document.getElementById("success").style.display = "none";
            document.getElementById("danger").style.display = "none";
        }

    </script>
  
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>