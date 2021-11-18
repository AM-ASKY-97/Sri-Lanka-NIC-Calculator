<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="Asseets/style.css">

    <script>
        $(document).ready(function(){
            <?php 
                
                $years = 0;
                $months = 0;
                $weeks =0;
                $days = 0;
                $mins = 0;
                $seconds =0;
                $hours =0;
            ?>    
        });
    </script>
</head>
  <body>

  <?php
        
        
        if(isset($_POST['submit']))
        {
                $hours_in_day   = 24;
                $minutes_in_hour= 60;
                $seconds_in_mins= 60;
                

                $datei = $_POST['B_date'];
                
                $birth_date     = new DateTime($datei);
                $current_date   = new DateTime();
                
                $diff           = $birth_date->diff($current_date);
                
                
                $years     = $diff->y; ;
                $months    = ($diff->y * 12) + $diff->m ; 
                $weeks     = floor($diff->days/7);
                $days      = $diff->days; 
                $hours     = $diff->h + ($diff->days * $hours_in_day); 
                $mins      = $diff->h + ($diff->days * $hours_in_day * $minutes_in_hour) ; 
                $seconds   = $diff->h + ($diff->days * $hours_in_day * $minutes_in_hour * $seconds_in_mins) ; 
        }
                
        
        
    ?>
      
   <div class="container">
       <div class="row">
          <div class="col mt-3">
              <form method="post">
            
                <input type="text" class="form-control" name="B_date" id="" placeholder="Plese Enter Your NIC number" Required>

                <div class="row ">
                    <div class="col mt-3">
                        <button type="submit" id="btn" class="btn btn-success text-center" name="submit" >Calculate</button>
                    </div>
                </div>

              </form>
            </div>
       </div>

       <div class="row">
           <div class="col-lg-6 mt-3">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                        <div class="row">
                            <div class="col">Date of Birth : </div>
                        </div></li>
                        <div class="row text-center mt-1">
                            <div class="col">Year</div>
                            <div class="col">Month</div>
                            <div class="col">Day</div>
                        </div>

                        <div class="row text-center mt-1">
                            <div class="col">1997</div>
                            <div class="col">10</div>
                            <div class="col">02</div>
                        </div>
                    </ul>
                </div>
           </div>

           

           <div class="col-lg-6 mt-3">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                        <div class="row">
                            <div class="col">Age : </div>
                        </div></li>
                        <div class="row text-center mt-1">
                            <div class="col">Year</div>
                            <div class="col">Month</div>
                            <div class="col">Day</div>
                        </div>

                        <div class="row text-center mt-1">
                            <div class="col">1997</div>
                            <div class="col">10</div>
                            <div class="col">02</div>
                        </div>
                    </ul>
                </div>
           </div>



           <div class="col-lg-6 mt-3">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                        <div class="row">
                            <div class="col">Extra (Total) : </div>
                        </div></li>
                        <div class="row text-center mt-1">
                            <div class="col">Months</div>
                            <div class="col">Weeks</div>
                            <div class="col">Days</div>
                            <div class="col">Hours</div>

                        </div>

                        <div class="row text-center mt-1">
                            <div class="col">00</div>
                            <div class="col">00</div>
                            <div class="col">00</div>
                            <div class="col">00</div>
                        </div>
                    </ul>
                </div>
           </div>


        </div>

        <!-- Footer -->
        <div class="row text-center mt-2">
                <div class="col bg-dark text-light text-uppercase pt-3">
                    <h6>&#169 Copyright 2021. All right reserved. </h6> 
                    <p>| Designed By : <a href="https://am-asky-resume.herokuapp.com/"> A.M. Asky</a> </p>
                </div>
            </div>
        <!-- End Footer -->
        
    </div>

    

  
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>