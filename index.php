<?php include_once 'inc/header.php';?>

<section class="container">
	<div class="row">
		 <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>ID Number</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>City</th>
        <th>Country</th>
         <th>Action</th>
      </tr>
    </thead>


    <?php if ($result->num_rows > 0) { ?>
      <?php while($row = $result->fetch_assoc()) { ?>
  <tbody>
      <tr>
        <td><?php  echo  $row["id"]; ?></td>
       <td><?php  echo  $row["fname"]; ?></td>
       <td><?php  echo  $row["lname"]; ?></td>
       <td><?php  echo  $row["age"]; ?></td>
       <td><?php  echo  $row["city"]; ?></td>
       <td><?php  echo  $row["country"]; ?></td>
       <td class="btn btn-primary"><a href="update.php?id=<?php echo $row["id"]; ?>">Update </a> </td>
        <td class="btn btn-danger"><a href="update.php?id=<?php echo $row["id"];?>">Delete </a> </td>
      </tr>
    </tbody>
  

<?php }?>


<?php }else{ ?>

<p>No Results or something went wrong!</p>
}
<?php } ?>






  </table>
  </div>
	</div>
  
</section>

<section class="add-to-database">
<div class="container">
  <div class="row">
   
    <button class="fa fa-plus btn btn-primary">
      <a href="create.php?create"> Register New Student </a> 
     </button>
   
 
  </div>
</div>
</section>









<?php 
  include_once 'inc/footer.php';
 ?>
