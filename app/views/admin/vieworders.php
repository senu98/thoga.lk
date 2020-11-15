<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/admin/vieworders.css">
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/font-awesome.min.css" type='text/css'>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/font-awesome.css" type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
<?php 
 include("navbar.php"); ?>

<div class="container">
    <div><a class="back-button" href="index.php">&lt;&nbsp;Back</a></div>
    <h1>Orders</h1>
    
    <div class="filters">
        <form action="">
            <div class="grid">
                <div>
                    <span class="filterTopic">Filter by Date</span><br>
                    <span>Start Date :- <input type="date"  name="filterSdate" id="FSdate"></span> <span style="display:inline-block;">  End Date :- <input type="date" name="filterEdate" id="FEdate"></span>
                    <br>
                </div> 
                <div>
                    <span class="filterTopic">Filter by Username</span> <br>
                    Username :- <input type="text" name="uname" id="" placeholder="Keep Empty to view all"> <br>
                    <input type="radio" name="utype" id="f" value="f"> <label for="f">Farmer</label>
                    <input type="radio" name="utype" id="b" value="b"> <label for="b">Buyer</label>
                    <input type="radio" name="utype" id="d" value="d"> <label for="d">Driver</label>
                    <input type="radio" name="utype" id="m" value="m"> <label for="m">Mentor</label>
                    <input type="reset" id="resetb" value="Reset">
                </div> 
            </div>
            
            <button class="sbutton" type="submit">Process</button>
        </form>
    </div>

    <div>
    <table>
  <thead>
    <tr>
      <th width="10px">Id</th>
      <th>Buyer Name</th>
      <th>Total Weight</th>
      <th>Total Price</th>
      <th width="10px">Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-column="Id">1</td>
      <td data-column="Buyer Name">James</td>
      <td data-column="Total Weight">12.75 Kg</td>
      <td data-column="Total Price">Rs.1,250.00</td>
      <td data-column="Total Price"><i class="fa fa-check" style="font-size:30px" aria-hidden="true"></i></td>
      <td data-column="Action"><a href="">View More</a></td>
    </tr>
    <tr>
      <td data-column="Id">2</td>
      <td data-column="Buyer Name">Andor</td>
      <td data-column="Total Weight">15.00 Kg</td>
      <td data-column="Total Price">Rs.1,250.00</td>
      <td data-column="Total Price"><i class="fas fa-stopwatch fa-spin" style="font-size:30px" aria-hidden="true"></i></i></td>
      <td data-column="Action"><a href="">View More</a></td>
    </tr>
    <tr>
      <td data-column="Id">3</td>
      <td data-column="Buyer Name">Tamas</td>
      <td data-column="Total Weight">15.00 Kg</td>
      <td data-column="Total Price">Rs.1,250.00</td>
      <td data-column="Total Price"><i class="fas fa-stopwatch fa-spin" style="font-size:30px"></i></td>
      <td data-column="Action"><a href="">View More</a></td>
    </tr>
    <tr>
      <td data-column="Id">4</td>
      <td data-column="Buyer Name">Zoli</td>
      <td data-column="Total Weight">15.00 Kg</td>
      <td data-column="Total Price">Rs.1,250.00</td>
      <td data-column="Total Price"><i class="fa fa-check" aria-hidden="true" style="font-size:30px"></i></td>
      <td data-column="Action"><a href="">View More</a></td>
    </tr>
    <tr>
      <td data-column="Id">5</td>
      <td data-column="Buyer Name">Szabi</td>
      <td data-column="Total Weight">15.00 Kg</td>
      <td data-column="Total Price">Rs.1,250.00</td>
      <td data-column="Total Price"><i class="fa fa-check" aria-hidden="true" style="font-size:30px"></i></td>
      <td data-column="Action"><a href="">View More</a></td>
      </tr>
  </tbody>
</table>

    </div>

    
</div>
</body>
</html>

<?php
if(isset($_GET['filterSdate']) && empty($_GET['filterSdate'])){
    //echo "done";
    //var_dump($_GET['filterSdate']);
}
?>
<script>

</script>