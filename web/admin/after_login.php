<?php include "header.php"; ?>
<div class="content">
	<br><br>
	<?php include  "connect.php"; ?>
	<table border=1 cellpadding="6" cellspacing="8">
		<tr>
			 <th colspan="8">PARCEL CLIENTS</th>
		</tr>
		<tr>
			<th>Product ID</th>
			<th>User ID</th>
			<th>Customer Name</th>
			<th>Mobile</th>
			<th>Email</th>
			<th>Address</th>
			<th>View Product</th>
			<th>Delete</th>
		</tr>
		<?php
		$s = mysqli_query($con,"select * from orders");
		while($r = mysqli_fetch_array($s))
		{
		?>
		<tr>
			<td><?php echo $r['i_id']; ?></td>
			<td><?php echo $r['cust_id']; ?></td>
			<!--<td><?php echo $r['name']; ?></td>
			<td><?php echo $r['mobile']; ?></td>
			<td><?php echo $r['email']; ?></td>
			<td><?php echo $r['location']; ?></td>-->
			<td><a href="viewcart.php?pid=<?php echo $r['i_id']; ?>&uid=<?php echo $r['cust_id']; ?>">View Product</a></td>
			<td><a href="">Delete</a></td>
		<?php
		}
		?>
	</table>
	 

</div>
<!-- footer Section Starts Here -->
<section class="footer" >
        <div class="container text-center">
            <br/>
            <p> Developed by Aryan Kotru and Gauravi Kamat</p>
        </div>
    </section>
    <!-- footer Section Ends Here -->
