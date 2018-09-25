<?php include ('header.php'); ?>
<?php include ('../includes/applicant.php'); ?>

<section Class="container spad">

    
    <div class="panel panel-info" style = "padding-top: 50px">
        <div class="panel-heading">
            <h3 class="panel-title" style = "text-align: center">Applicant Information</h3>
        </div>

        <div class="panel-body">
            <div class="row">
            <div class="col-md-1 col-md-1 ">  </div>
                
                
            <div class=" col-md-9 col-lg-12 " style = "padding-top: 30px"> 
            <table class="table table-user-information">
                <thead>
                    <h4 style = "padding-left: 10px">Personal Details<h4>
                </thead>
                <tbody>
				
                    <tr>
                        <td>First Name:</td>
                        <td><?php echo $db_firstName ?></td>
                    </tr>
                    <tr>
                        <td>Surname:</td>
                        <td><?php echo $db_lastName ?></td>
                    </tr>
                    <tr>
                        <td>Date of Birth:</td>
                        <td><?php echo date('Y-m-d', strtotime($db_dob)) ?></td>
                    </tr>
                    <tr>
                        <td>Identify as:</td>
                        <td><?php echo $db_gender ?></td>
                    </tr>
                    <tr>
                        <td>Address 1:</td>
                        <td><?php echo $db_address ?></td>
                    </tr>
                    <tr>
                        <td>County:</td>
                        <td><?php echo $db_county ?></td>
                    </tr>
                    <tr>
                        <td>Country:</td>
                        <td><?php echo $db_country ?></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><a href="mailto:email@email.com"><?php echo $db_email ?></a></td>
                    </tr>
                        <td>Phone Number:</td>
                        <td><?php echo $db_phoneNumber ?></td>     
                    </tr>
                     
                    </tbody>
                    </table>

                
                <table class="table table-user-information">
                <thead>
                    <h4 style = "padding-left: 10px">Application Details<h4>
                </thead>
                <tbody>
                    <tr>
                        <td>Applied Course:</td>
                        <td><?php echo $db_CourseName?></td>
                    </tr>
                    <tr>
                        <td>Qualifications:</td>
                        <td><?php echo $db_highestQual?></td>
                    </tr>
                    <tr>
                        <td>Work Experience:</td>
                        <td><?php echo $db_workExp?></td>
                    </tr>
					<form action="../includes/applicant.php" method="post">
					<input type="hidden" name="userid" id="hiddenid" value="<?php echo $_GET['id'] ?>" />
					<input type="hidden" name="courseid" id="hiddenid" value="<?php echo $db_CourseID ?>" />
					<input type="hidden" name="coursename" id="hiddenid" value="<?php echo $db_CourseName ?>" />
					<input type="hidden" name="firstname" id="hiddenid" value="<?php echo $db_firstName ?>" />
					 <tr>
                        <td>Date :</td>
                       <td><input type="date" id="date" name="date" required></td>
                        </tr>
					 <tr>
                        <td>Time : </td>
                        <td><input type="time" name="time" required></td>
                    </tr>
                    
                    
                </tbody>
                </table>

					 <button type="submit" name="save" class="site-btn text-white">Schedule Interview</button>
</form>					
        </section>
<script>
var dt= new Date();
   var yyyy = dt.getFullYear().toString();
   var mm = (dt.getMonth()+1).toString(); // getMonth() is zero-based
   var dd  = dt.getDate().toString();
   var min = yyyy +'-'+ (mm[1]?mm:"0"+mm[0]) +'-'+ (dd[1]?dd:"0"+dd[0]); // padding

$('#date').prop('min',min);
</script>
<?php include ('footer.php'); ?>