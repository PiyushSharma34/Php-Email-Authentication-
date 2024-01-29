<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
<?php
    $conn = mysqli_connect("localhost","root","","allahabad-nsti")or die("connection failed");
   $stu_id = $_GET['id'];
    $sql="select * from student WHERE S_ID = {$stu_id}";
    $result = mysqli_query($conn,$sql)or die("query unsuccesful.");
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc( $result)){
        ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="text" name="sname" value="<?php echo $row['S_NAME']; ?>"/>
      </div>
      <div class="form-group">
          <label>ID</label>
          <input type="text" name="sid" value="<?php echo $row['S_ID']; ?>"/>
      </div>
      <div class="form-group">
          <label>Contact</label>
          <input type="text" name="scontact" value="<?php echo $row['S_CONTACT']; ?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $row['S_ADDRESS']; ?>"/>
      </div>
      
      
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php 
    }
    }
    ?>
</div>
</div>
</body>
</html>
