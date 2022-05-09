<link rel="stylesheet" href="assets/css/admin.css">
<section class="shop_grid_area" style="padding-top:120px">
  <div class="container">
    <div class="row">
      <div class="col-md-4 ">
        <div class="shop_sidebar_area">
          <?php include "includes/pages/general/adminsidebar.php";?>
        </div>
      </div>
      <div class="col-md-8 ">
        <div class="shop_grid_product_area">
              <div class="product-topbar d-flex align-items-center justify-content-between">
                <div class="row align-content-lg-end">
                  <table id="example2" class="table table-striped table-hover responsive" style="width:100%">
                    <thead>
                      <tr>
                        <th>S/N</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone Number</th>
                        <th>Occupation</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $cnt=1;
                      $sql = "SELECT * FROM users";
                      $result = mysqli_query($conn, $sql);
                      while($row = mysqli_fetch_array($result)){
                        if (empty($row)){
                          echo '<tr>No user to display</tr>';
                        }else{?>
                          <tr>
                            <?php echo '<td>'.$cnt.'</td>';?>
                            <td><b><?= $row['first_name']; ?></b></td>
                            <td><b><?= $row['last_name']; ?></b></td>
                            <td><b><?= $row['phone']; ?></b></td>
                            <td><?= $row['occupation']; ?></td> 
                        </tr>
                      <?php  }
                      $cnt++;
                    } ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>S/N</th>
                      <th>Title</th>
                      <th>Questions</th>
                      <th>Response</th>
                      <th>Link</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
   
</section>