
<?php include('partials/menu.php'); ?>

  
  <!-- Main containt section Start -->
  <div class="main-containt">
    <div class="wrapper">
        <h1>Manage Admin</h1>
<br>
<br>

<!-- btn to add admin -->
<a href="add-admin.php" class="btn-primary">Add Admin</a>
<br>
<br>
<br>
        <table class="tbl-full">
           <tr>
            <th>S.N.</th>
            <th>Full Name</th>
            <th>Username</th>
            <th>Actions</th>
           </tr>

           <tr>
            <td>1.</td>
            <td>Ram Mishra</td>
            <td>rammishra@gmail.com</td>
            <td>
            <a href="#" class ="btn-secondary">Update Admin</a>
            <a href="#" class ="btn-danger">Delete Admin</a>
            
            </td>
          </tr>

          <tr>
            <td>2.</td>
            <td>Raman Mishra</td>
            <td>ramanmishra@gmail.com</td>
            <td>
            <a href="#" class ="btn-secondary">Update Admin</a>
            <a href="#" class ="btn-danger">Delete Admin</a>
            </td>
          </tr>

          <tr>
            <td>3.</td>
            <td>Saurabh Mishra</td>
            <td>saurabhmishra@gmail.com</td>
            <td>
            <a href="#" class ="btn-secondary">Update Admin</a>
            <a href="#" class ="btn-danger">Delete Admin</a>
            </td>
          </tr>
        </table>
     </div>
</div>
  <!-- Menu containt section End -->

  <?php include('partials/footer.php'); ?>

  