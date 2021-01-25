<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/admin/adminindexstyle.css">
</head>
  
<body style="margin-top:100px;background-image: url(/thoga.lk/public/images/admin/a.jpg); background-repeat:repeat;margin-top:120px"  >
    <?php include("navbar.php");?>
    <div  class="addnewcont"><a href="/thoga.lk/admin/showadmin"><button class="addnewbtn">Add New Admin</button></a>
    <a href="/thoga.lk/admin/vegetables"><button class="addnewbtn">vegetable List</button></a>
    </div>
    
    <div class="buttonContainer">
        <a href="admin/vieworders"><button class="admin-btn" >View Orders</button></a>
        <a href="admin/usermanager"><button class="admin-btn" >Manage Users</button></a>
        <a href="admin/admanager"><button class="admin-btn" >Manage Advertisements</button></a>

    </div>

    <div class="ut-hr-txt">
        <hr><span>30 Days Summary</span>
    </div>
    <div style="width:80%;margin:auto;font-size:20px;">
        <table>
            <tr style="background-color:#2E5F3E;color:white">
                <th>        <div class="card-title"> <img class="cardimg" width= 30px height=25px src="/thoga.lk/public/images/admin/usericon.png" alt=""> Users</div></th>
                <th>        <div class="card-title"> <img class="cardimg" width= 30px height=25px src="/thoga.lk/public/images/admin/ordicon.png" alt=""> Orders</div></th>
                <th>        <div class="card-title"><img class="cardimg" width= 30px height=25px src="/thoga.lk/public/images/admin/salesicon.png" alt=""> Sales</div></th>
                <th>         <div class="card-title-big"><img class="cardimg" width= 30px height=30px src="/thoga.lk/public/images/admin/tsalesicon.png" alt="" > Today Sales**</div></th>
            </tr>
            <tr style="font-size:35px">
                <td>150</td>
                <td>70</td>
                <td>Rs. 1,700.00</td>
                <td>Rs. 71,500.00</td>
            </tr>
        </table>
    </div>

    <div>
        <table class="maintables">
        <div class="ut-hr-txt">
            <hr ><span>Driver Applications</span>
        </div>
            <thead >
                <tr style="background-color:#2E5F3E;color:white">
                <th >Driver ID</th>
                <th >Driver Name</th>
                <th >District</th>
                <th >Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($results as $keys => $row){
                        $driver_id=$row['driver_id'];
                        $name=$row['firstname'] ." ". $row['lastname'] ;
                        $district=$row['name_en'];
                        
                ?>
                <tr>
                <td data-label="Driver ID"><?php printf('%03d', $driver_id) ?></td>
                <td data-label="Driver Name"><?php echo $name; ?></td>
                <td data-label="District"><?php echo $district; ?></td>
                <td data-label="Action"><a href="admin/dappl?id=<?php echo $driver_id;?>" > View More</a></td>
                </tr>
                <?php } ?>
            </tbody>
            <span id="mapplications"></span>
        </table>

    </div>

    <div>
        <table class="maintables">
        <div class="ut-hr-txt">
            <hr><span>Mentor Applications</span>
        </div>
            <thead>
                <tr  style="background-color:#2E5F3E;color:white">
                <th >Mentor ID</th>
                <th >District</th>
                <th >Request Date</th>
                <th >Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($mentors as $keys => $row){
                        $mentor_id=$row['mentor_id'];
                        $date=$row['date'];
                        $district=$row['name_en'];
                        
                ?>
                <tr>
                <td data-label="Mentor ID"><?php printf('%03d', $mentor_id) ?></td>
                <td data-label="District"><?php echo $district; ?></td>
                <td data-label="Request Date"><?php echo $date; ?></td>
                <td data-label="Action"><a href="admin/mappl?id=<?php echo $mentor_id;?>"> View More</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
    <span id="mrequests"></span>

    <div>
        <table class="maintables">
        <div class="ut-hr-txt">
            <hr><span>Mentor Requests</span>
        </div>
            <thead>
                <tr  style="background-color:#2E5F3E;color:white">
                <th >Farmer Name</th>
                <th >District</th>
                <th >City</th>
                <th >Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($farmers as $keys => $row){
                        $farmer_id=$row['farmer_id'];
                        $name=$row['firstname'] ." ".$row['lastname'] ;
                        $city=$row['city'];
                        $district=$row['district'];
                ?>

                <tr>
                <td data-label="Farmer Name"><?php echo $name; ?></td>
                <td data-label="District"><?php echo $district; ?></td>
                <td data-label="City"><?php echo $city; ?></td>
                <td data-label="Action"><a href="admin/mrequest?id=<?php echo $farmer_id; ?>">Assign Mentor</a></td>
                </tr>

                <?php } ?>
                
            </tbody>
        </table>

    </div>
    

</body> 
</html>