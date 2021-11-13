<?php
include "nav.php";


session_start();
require("dbconnection.php");			

		
	
?>

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        
        <div class="col-md-6 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Name and suname</label><input type="text" class="form-control" placeholder="first name" value="<?php echo $_SESSION['name'] ?>"></div>
                   
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Student Number</label><input type="text" class="form-control" value="<?php echo $_SESSION['stdNumber'] ?>"></div>
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control"  value="<?php echo $_SESSION['email'] ?>"></div>
                    <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" value="<?php echo $_SESSION['email'] ?>"></div>
                </div>
                
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Bus tickets</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Origin</th>
      <th scope="col">Destinatio</th>
      <th scope="col">Time</th>
      <th scope="col">Ticket No</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
        <?php
    $find = $_SESSION['stdNumber'];
    $stdExist="SELECT * FROM booking WHERE stdNumber =  ".$find ;
    $queryUser=mysqli_query($con,$stdExist);   
    $count = 0;
   
     
            while($busData=mysqli_fetch_array($queryUser))
            {
                $count++;
                ?>

       
    <tr>
      
     
      <th scope="row"><?php echo $count;?></th>
      <td> <?php echo $busData['origin'];?> </td>
      <td><?php echo $busData['destination']; ?></td>
      <td> <?php echo $busData['time'].':00'; ?></td>
      <td><?php echo $busData['reference'] ;?></td>
      <td><?php echo $busData['status']; ?></td>
      
    </tr>
    <?php
        }
    ?>  
  </tbody>
</table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>