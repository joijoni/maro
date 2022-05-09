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
              <h2>Add a Question and Response for Chat</h2>
            </div>
            <form action="includes/processing/processor.php" method="POST">
                       <div class="row">
                            <div class=" col-md-6">
                                <label for="category" class="col-sm-6">Category</label>
                                <select class="form-control" name="category">
                                    <option  disabled selected>Category</option>
                                    <?php
                                        $sql ="SELECT * FROM category";
                                        $result = mysqli_query($conn, $sql);
                                        while($row = mysqli_fetch_array($result)){
                                    ?>
                                    <option value="<?= $row['category_id']; ?>" >
                                       <?= $row['name']; ?>
                                    </option>
                                    <?php } ?> 
                                </select>                    
                            </div>
                            <div class=" col-md-6">
                                <label for="link" class="col-sm-6">Link without "HTTP://"</label>
                                <input type="text" name="link" class="form-control">

                            </div>
                        </div>
                        <div class="row">
                            <div class=" col-md-6">
                                <label for="message" class="col-sm-6">Question</label>
                                <input type="text" name="message" class="form-control">
                            </div>
                            <div class=" col-md-6">
                                <label for="response" class="col-sm-6">Response</label>
                                <input type="text" name="response" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col-md-6">
                                <label for="status" class="col-sm-6">Question Status</label>
                                <select class="form-control" name="status">
                                    <option  disabled selected>Question Status</option>
                                    <?php
                                    $sql ="SELECT * FROM status";
                                    $result = mysqli_query($conn, $sql);
                                    while($row = mysqli_fetch_array($result)){
                                    ?>
                                    <option value="<?= $row['status_id']; ?>" >
                                    <?= $row['name']; ?>
                                    </option>
                                    <?php } ?> 
                                </select>                    
                            </div>
                       
                            <div class=" col-md-6">
                                <label for="type" class="col-sm-6">Type</label>
                                <select class="form-control" name="type">
                                    <option  disabled selected>Question Type</option>
                                    <?php
                                    $sql ="SELECT * FROM type";
                                    $result = mysqli_query($conn, $sql);
                                    while($row = mysqli_fetch_array($result)){
                                    ?>
                                    <option value="<?= $row['type_id']; ?>" >
                                    <?= $row['name']; ?>
                                    </option>
                                    <?php } ?> 
                                </select>   
                            </div>
                        </div>   
               
                        <div class="col-md-12 text-center mt-3">
                            <button type="submit" name="addquery" class="btn btn-warning"><i class="fa fa-plus-circle"></i> Add Question</button>
                        </div>    
                    </form>
                </div>
        </div>
      </div>
    </div>
  </div>
</section>
