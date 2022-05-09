<?php 
if(isset($_GET['del'])){
	$query=mysqli_query($conn,"DELETE FROM queries WHERE query_id = '".$_GET['id']."'");
  if($query){
    $_SESSION['msg'] = "Query deleted successfully";
    echo "<script>swal('Success!', 'Query deleted successfully', 'success');</script>";
    "Location:../../userhome.php";
  }else{
    $_SESSION['msg'] = "Query failed to delete";
    echo "<script>swal('Failed!', 'Query failed to delete', 'danger');</script>";
    "Location:../../userhome.php";
  } 		
}
?>
<link rel="stylesheet" href="assets/css/admin.css">
<section class="shop_grid_area" style="padding-top:120px">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-4 col-lg-3">
        <div class="shop_sidebar_area">
          <?php include "includes/pages/general/adminsidebar.php";?>
        </div>
      </div>
      <div class="col-12 col-md-8 col-lg-9">
        <div class="shop_grid_product_area">
          <div class="row">
            <div class="col-12">
              <div class="product-topbar d-flex align-items-center justify-content-between">
                <div class="row align-content-lg-end">
                <a href="addquery.php"><button type="button" class="admin-btn"  ><i class="fa fa-plus-circle fx-5"></i> &nbsp;Add a New Question</button></a>
                <a href="unansweredadmin.php"><button type="button" class="admin-btn"  ><i class="fa fa-plus-circle fx-5"></i> &nbsp;Unanswered Question</button></a>
                 <h3 class="text-center">Questions and Answers For the Chat Bot</h3>
                  <table id="example2" class="table table-striped table-hover responsive" style="width:100%">
                    <thead>
                      <tr>
                                                    <th>S/N</th>
                                                    <th>Question</th>
                                                    <th>Response</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $cnt=1;
                                                $sql = "SELECT * FROM queries WHERE response = ''";
                                                $result = mysqli_query($conn, $sql);
                                                while($row = mysqli_fetch_array($result)){
                                                $queryId=$row['query_id'];                                                
                                                if ($row==null){
                                                echo '<tr>No query to display</tr>';		            
                                                }else{?>
                                                    <tr>                  
                                                        <?php echo '<td>'.$cnt.'</td>';?>
                                                        <td><?= $row['incoming_message']; ?></td>
                                                        <td><?= $row['response']; ?></td>
                                                        <td>
                                                        <a href="editresponse.php?&id=<?php echo $queryId?>"><button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button></a>
                                                        <a href="unansweredadmin.php?id=<?php echo  $queryId?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                                                        </td>                                                    
                                                    </tr>
                                                    <?php  }
                                                $cnt++;
                                                } ?>  
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>S/N</th>                  
                                                    <th>Questions</th>
                                                    <th>Response</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    