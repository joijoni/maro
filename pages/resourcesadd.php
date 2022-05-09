<link rel="stylesheet" href="assets/css/admin.css">
<section class="shop_grid_area" style="padding-top:120px">
  <div class="container">
    <div class="shop_grid_product_area">
      <div class="row">
      <div class="col-md-4">
          <div class="shop_sidebar_area">
            <?php include "includes/pages/general/adminsidebar.php";?>
          </div>
        </div>
        <div class="col-md-8">
          <div class="checkout_details_area clearfix">

            <div class="text-center  cart-page-heading mb-30">
              <h2>Add a Product</h2>
            </div>
            <form action="includes/processing/processor.php" method="POST">
                       <div class="row">
                            <div class="col-md-6" >
                                <label for="title">Title<span>*</span></label>
                                <input id="title" name="title" type="text" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                  <label for="category">Category *</label>
                  <select  class="form-control" name="category" required>
                    <option value="">Select Category</option>
                    <?php
                    $query ="SELECT * FROM category";
                    $stmt2 = $conn->prepare($query);
                    $stmt2->execute();
                    $res=$stmt2->get_result();
                    while($rowd=$res->fetch_object())
                    {
                      ?>
                      <option value="<?php echo $rowd->category_id;?>" ><?php echo $rowd->name;?></option>
                    <?php } ?>
                  </select>
                </div>
                       </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="message">Question about Resource<span>*</span></label>
                                <input type="text" name="message" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="response">Response<span>*</span></label>
                                <input type="text" name="response" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-6">
                                    <label for="link">Link without "HTTP://"<span>*</span></label>
                                    <input type="text" name="link" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="status">Status<span>*</span></label>
                                    <select class="form-control" name="status">
                                        <option style="background-color:rgba(40, 58, 90, 0.9)" disabled selected>Status</option>
                                        <?php
                                        $sql ="SELECT * FROM status";
                                        $result = mysqli_query($conn, $sql);
                                        while($row = mysqli_fetch_array($result)){
                                        ?>
                                        <option value="<?= $row['status_id']; ?>" style="background-color:rgba(40, 58, 90, 0.9)">
                                        <?= $row['name']; ?>
                                        </option>
                                        <?php } ?> 
                                    </select>                    
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="summary">Summary<span>*</span></label>
                                <input id="summary" type="text" name="summary" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="type">Type<span>*</span></label>
                                <select class="form-control" name="type">
                                        <option style="background-color:rgba(40, 58, 90, 0.9)" disabled selected>Type</option>
                                        <?php
                                        $sql ="SELECT * FROM type";
                                        $result = mysqli_query($conn, $sql);
                                        while($row = mysqli_fetch_array($result)){
                                        ?>
                                        <option value="<?= $row['type_id']; ?>" style="background-color:rgba(40, 58, 90, 0.9)">
                                        <?= $row['name']; ?>
                                        </option>
                                        <?php } ?> 
                                </select>   
                            </div>
                        </div>          
                        <div class="col-md-12">
                            <label for="details">Details<span>*</span></label>
                            <textarea class="form-control" id="details" row="5" name="details"></textarea>
                        </div>   
                        <div class="col-md-12 text-center mt-3">
                            <button type="submit" name="addresources" class="btn btn-warning"><i class="fa fa-plus-circle"></i> Add Resources</button>
                        </div>    
                    </form>
                </div>
        </div>
      </div>
    </div>
  </div>
</section>
