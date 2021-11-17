<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="Asseets/style.css">
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
                $days      = $diff->days . " days"; 
                $hours     = $diff->h + ($diff->days * $hours_in_day); 
                $mins      = $diff->h + ($diff->days * $hours_in_day * $minutes_in_hour) ; 
                $seconds   = $diff->h + ($diff->days * $hours_in_day * $minutes_in_hour * $seconds_in_mins) ; 
        }
                
        
        
    ?>
      
   <div class="container">
       <div class="row">
          <div class="col mt-3">
              <form method="post" action="">
                <input type="date" class="form-control" name="B_date" id="">

                <div class="row ">
                    <div class="col mt-3">
                        <button type="reset"   id="btn" class="btn btn-danger text-center"><i class="fa fa-ban" aria-hidden="true"></i><span>Reset all</span></button>
                    </div>

                    <div class="col mt-3">
                        <button type="submit" id="btn" class="btn btn-success text-center" name="submit" >Submit</button>
                    </div>
                </div>

              </form>
            </div>
       </div>

       <div class="row">
           <div class="col mt-3">
                <div class="card">
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item text-center">Year</li>
                    <li class="list-group-item"><?php echo $years ?></li>
                    <li class="list-group-item"></li>
                    </ul>
                </div>
           </div>

           <div class="col mt-3">
                <div class="card">
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item text-center">Month</li>
                    <li class="list-group-item"><?php echo  $months ?></li>
                    <li class="list-group-item"></li>
                    </ul>
                </div>
            </div>
       </div>

       <div class="row">
            <div class="col mt-3">
                <div class="card">
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item text-center">Weeks</li>
                    <li class="list-group-item"><?php echo $weeks ?></li>
                    <li class="list-group-item"></li>
                    </ul>
                </div>
            </div>

            <div class="col mt-3">
                <div class="card">
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item text-center">Days</li>
                    <li class="list-group-item"><?php echo $days ?></li>
                    <li class="list-group-item"></li>
                    </ul>
                </div>
            </div>
       </div>

       <div class="row">
            <div class="col mt-3">
                <div class="card">
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item text-center">Hours</li>
                    <li class="list-group-item"><?php echo $hours ?></li>
                    <li class="list-group-item"></li>
                    </ul>
                </div>
            </div>

            <div class="col mt-3">
                <div class="card">
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item text-center">minutest</li>
                    <li class="list-group-item"><?php echo $mins ?></li>
                    <li class="list-group-item"></li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>

  
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>