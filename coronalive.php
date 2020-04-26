<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
    </head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
    <div id="header">
         <h1><font color="green">my project on corona virus</font></h1>
        <p style="color: black; text-align: center; ">your effort make everything possible</p>
       
    </div>
    <section class="corona_update conatiner-fluid">
        <div class="mb-3">
        
 <h3 class="text-center text-uppercase">live udpdates in india</h3>
        </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped text-center">
        <tr>
            <th>Dates</th>
            <th>State</th>
            <th>Confirmed</th>
            <th>Active</th>
            <th>Recovered</th>
            <th>Deaths</th>
            </tr>
            <?php
           // $data=file_get_contents('https://api.covid19india.org/data.json');
             $data=file_get_contents('https://api.covid19india.org/data.json');
            $covid=json_decode($data,true);
           // echo "<pre>";
            //print_r($covid); // to see the value in array form
            //echo "</pre>";
            $statescount=count($covid['statewise']); //if we print the value in echo count..its show total no of state
            $i=1;
            while($i< $statescount){
                ?>
            <tr>
                <td><?php echo $covid['statewise'][$i]['lastupdatedtime'] ?></td>
                 <td><?php echo $covid['statewise'][$i]['state'] ?></td>
                 <td><?php echo $covid['statewise'][$i]['confirmed'] ?></td>
                 <td><?php echo $covid['statewise'][$i]['active'] ?></td>
                 <td><?php echo $covid['statewise'][$i]['recovered'] ?></td>
                 <td><?php echo $covid['statewise'][$i]['deaths'] ?></td>
            </tr>
           <?php
              $i++ ; 
            
            }
            ?>
            
        </table>
        
        </div>
    
    </section>
    </body>
</html>
 
