
<style>

.form-control-feedback {
  
   pointer-events: auto;
  
}

.msk-set-width-tooltip + .tooltip > .tooltip-inner { 
  
     min-width:180px;
}
.msk-set-color-tooltip + .tooltip > .tooltip-inner { 
  
     min-width:180px;
	 background-color:red;
}

</style>
    
<?php 
include_once('config.php');
include_once('src/alert.php');
$user = $_SESSION['user'];
$sql="SELECT * FROM ttdangnhap WHERE user='$user'";
$result=mysql_query($sql);
$row=mysql_fetch_assoc($result);

$full_name=$row['FullName'];
$i_name=$row['User'];
$gender="";
$address="";
$phone=$row['PhoneNumber'];
$email=$row['Email'];
$image="";
$password=$row['Pass'];


?>
    
	<section class="content"> 
    	<div class="row">
        	<div class="col-md-7">
            	<div class="panel"><!--panel bg-maroon--> 
                	<div class="panel-heading bg-aqua-active">	
                    	<h4 class="panel-title" id="hname"><?php echo $i_name; ?></h4>
                    </div>				
                    <div class="panel-body"><!--panel-body -->
                    	<div class="row" id="my_profile">
                			<div class="col-md-3"> 
                				<img id="photo2" alt="User Pic" src="../<?php echo $image; ?>" class="img-circle img-responsive"> 
                			</div>
                			<div class=" col-md-9"> 
                  				<table class="table table-bordered table-striped">
                    				<tbody>
                      					<tr>
                        					<td class="col-md-4">Full Name</td>
                        					<td id="full_name"><?php echo $full_name; ?></td>
                      					</tr>
                      					<tr>
                        					<td>Name With Initials</td>
                        					<td id="i_name"><?php echo $i_name; ?> </td>
                      					</tr>
                             			<tr>
                        					<td>Address</td>
                        					<td id="address"><?php echo $address; ?> </td>
                      					</tr>
                        				<tr>
                        					<td>Gender</td>
                        					<td id="gender"><?php echo $gender; ?> </td>
                      					</tr>
                      					<tr>
                        					<td>Email</td>
                        					<td id="email"><?php echo $email; ?> </td>
                      					</tr>
                                        <tr>
                        					<td>Phone Number</td>
                        					<td id="phone"><?php echo $phone; ?> </td>
                      					</tr>
                                        <tr>
                        					<td>User Name</td>
                        					<td id="user"><?php echo $user; ?> </td>
                      					</tr>
                                        <tr>
                        					<td>Password</td>
                        					<td id="phone"><?php echo $password; ?> </td>
                      					</tr>
                    				</tbody>
                  				</table>
                  			</div>
                   		</div>
                        <p class="alert-info" id="note1"><strong>Note: We get the email address for the user name.</strong></p>
                     </div>
                     <div class="panel-footer" id="panel_footer" >
                    	<a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" id="btnEdit1" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right" id="spanEdit">
                            <a href="#" onClick="editMyProfile('<?php echo $index; ?>')" type="button" class="btn btn-sm btn-warning" id="btnEdit"><i class="glyphicon glyphicon-edit"></i></a><!--MSK-00151-->
                            <input type="hidden" id="id1" value="">
                            <input type="hidden" id="i_path1" value="">
                        </span>
                    </div>
            	</div><!--/. panel--> 
        	</div>
		</div><!--/.row --> 
	</section><!-- /.section -->
	
