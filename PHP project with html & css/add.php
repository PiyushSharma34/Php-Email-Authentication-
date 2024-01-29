<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>NAME</label>
            <input type="text" name="name" />
        </div>

        <div class="form-group">
            <label>ID</label>
            <input type="text" name="id" />
        </div> 

        <div class="form-group">
            <label>CONTACT</label>
            <input type="text" name="contact" />
        </div>
       
        <div class="form-group">
            <label>ADDRESS</label>
            <input type="text" name="address" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
