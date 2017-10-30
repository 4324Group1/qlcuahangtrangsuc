<div class="col-xs-16">
	<div class="box">
    	<div class="box-header">
        	<h3 class="box-title">All Classroom</h3>
        </div><!-- /.box-header -->
        <div class="box-body table-responsive">
        	<table id="example1" class="table table-bordered table-striped">
            	<thead>
                	<th>ID</th>
                    <th>Username</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Phone number</th>
                    <th>Authority</th>
                    <th>#</th>
                </thead>
                <tbody>
<?php
include_once('config.php');
$SQL = "SELECT * FROM ttdangnhap inner join chucvu on ttdangnhap.macv=chucvu.macv ";
$result=mysql_query($SQL);
$count = 0;
$cant_remove=0;
$cant_remove1=0;
if(mysql_num_rows($result) > 0) {
	while($row=mysql_fetch_assoc($result)){
	$count++;

?>   
    
                	<tr>
                    	<td><?php echo $count; ?></td>
   <!--MSK-000115-td1--><td id="td1_<?php echo $row['id']; ?>"><?php echo $row['User']; ?></td>
   <!--MSK-000115-td2--><td id="td2_<?php echo $row['id']; ?>"><?php echo $row['FullName']; ?></td>
   						<td id="td3_<?php echo $row['id']; ?>"><?php echo $row['Email']; ?></td>
   						<td id="td4_<?php echo $row['id']; ?>"><?php echo $row['PhoneNumber']; ?></td>
   						<td id="td5_<?php echo $row['id']; ?>"><?php echo $row['TenCV']; ?></td>

                    	<td> 

	<a href="#modalUpdateform" onClick="showModal(this)" class="btn btn-info btn-xs" data-id="<?php echo $row['id']; ?>" data-toggle="modal">Edit</a>
	<a href="#" class="confirm-delete btn btn-danger btn-xs"  data-id="<?php echo$row['id']; ?>">Delete</a>

                        </td>
                   </tr>
<?php } } ?>
               </tbody>
           	</table>	
		</div><!-- /.box-body -->
	</div><!-- /.box -->
</div>