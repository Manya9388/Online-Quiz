<?php
include('config.php');



?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Quiz</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        
    </head>

    <body>
        
        
        
        
        
        
        <!-- My Account Start -->
        <div class="my-account">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="dashboard-nav" data-toggle="pill" href="#dashboard-tab" role="tab"><i class="fa fa-tachometer-alt"></i>Dashboard</a>
                          
                            <a class="nav-link" id="payment-nav" data-toggle="pill" href="#payment-tab" role="tab"><i class="fa fa-user"></i>Class 1</a>
                            <a class="nav-link" id="address-nav" data-toggle="pill" href="#address-tab" role="tab"><i class="fa fa-user"></i>Class 2</a>
                           <a class="nav-link" id="account-nav" data-toggle="pill" href="#account-tab" role="tab"><i class="fa fa-user"></i>Class 3</a>
                            <a class="nav-link" href="index.php"><i class="fa fa-sign-out-alt"></i>Logout</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="dashboard-tab" role="tabpanel" aria-labelledby="dashboard-nav">
                                
                                <p>
                                <?php
$image_path = "img/home.png"; // replace with the path to your image
$width = 800; // replace with the desired width of the image
$height = 500; // replace with the desired height of the image

echo "<img src='$image_path' width='$width' height='$height' alt='Image'>"; // display the image with the specified width and height
?>
</p>
                            </div>
                            
                            <div class="tab-pane fade" id="payment-tab" role="tabpanel" aria-labelledby="payment-nav">
                                <h4>Class 1</h4>
                                <p>
                                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display table-responsive" >
									<thead>
										<tr>
											<th>#</th>
											<th> Name</th>
											<th >Roll no</th>
											<th> Mark</th>
											
										</tr>
									</thead>
									<tbody>
									<?php 

$sql_query= mysqli_query($conn,"SELECT name,rollno,mark 
    FROM student1");
 
$cnt=1;
while ($row = mysqli_fetch_assoc($sql_query))  {


$name= $row['name'];
$rollno = $row['rollno'];

$mark= $row['mark'];



?>	

<tr>
        <td><?php echo htmlentities($cnt);?></td>
        <td><?php echo htmlentities($name);?></td>
        <td><?php echo htmlentities($rollno);?></td>
        <td><?php echo htmlentities($mark);?></td>
        
    
        

    </tr>



									</tbody>
                                    <?php  $cnt=$cnt+1; }

	
?>
								</table>
     <!--------------------------------------------------------------> 
                                </p>
</div>
</div>
                                <div class="table-responsive">
                                    
                                <div class="tab-pane fade" id="address-tab" role="tabpanel" aria-labelledby="address-nav">
                                <h4>Class 2</h4>
                                <p>
                                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display table-responsive" >
									<thead>
										<tr>
											<th>#</th>
											<th> Name</th>
											<th >Roll no</th>
											<th> Mark</th>
											
										</tr>
									</thead>
									<tbody>
									<?php 

$sql_query= mysqli_query($conn,"SELECT name,rollno,mark 
    FROM student2");
 
$cnt=1;
while ($row = mysqli_fetch_assoc($sql_query))  {


$name= $row['name'];
$rollno = $row['rollno'];

$mark= $row['mark'];



?>	

<tr>
        <td><?php echo htmlentities($cnt);?></td>
        <td><?php echo htmlentities($name);?></td>
        <td><?php echo htmlentities($rollno);?></td>
        <td><?php echo htmlentities($mark);?></td>
        
    
        

    </tr>



									</tbody>
                                    <?php  $cnt=$cnt+1; }

	
?>
								</table>
     <!--------------------------------------------------------------> 
                                </p></div></div>
                                
                                <div class="table-responsive">
                                          

                                <div class="tab-pane fade" id="account-tab" role="tabpanel" aria-labelledby="account-nav">
                                <h4>Class 3</h4>
                                <p>
                                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display table-responsive" >
									<thead>
										<tr>
											<th>#</th>
											<th> Name</th>
											<th >Roll no</th>
											<th> Mark</th>
											
										</tr>
									</thead>
									<tbody>
									<?php 

$sql_query= mysqli_query($conn,"SELECT name,rollno,mark 
    FROM student3");
 
$cnt=1;
while ($row = mysqli_fetch_assoc($sql_query))  {


$name= $row['name'];
$rollno = $row['rollno'];

$mark= $row['mark'];



?>	

<tr>
        <td><?php echo htmlentities($cnt);?></td>
        <td><?php echo htmlentities($name);?></td>
        <td><?php echo htmlentities($rollno);?></td>
        <td><?php echo htmlentities($mark);?></td>
        
    
        

    </tr>



									</tbody>
                                    <?php  $cnt=$cnt+1; }

	
?>
								</table>
     <!--------------------------------------------------------------> 
                                </p>
                                
                                <div class="table-responsive">
                                    


</div></div>



</html>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- My Account End -->
        
        
        
           
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
