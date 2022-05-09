<?php 
include "includes/processing/usedfunctions.php";
?>   
<h2>
    <div class="text-center">Latest Resources</div>
</h2>
    <?php 
    $query ="SELECT * FROM resources ORDER BY resource_id DESC LIMIT 10";
    $stmt2 = $conn->prepare($query);
    $stmt2->execute();
    $res=$stmt2->get_result();
    while($rowd=$res->fetch_object())
    {
        $spreimage=$rowd->image;
        $sid=$rowd->resource_id;
        $statusId=$rowd->status_id;
        $sdatet=$rowd->date_created;
        $sdatecreated=get_time_ago(strtotime($sdatet));
        $scategoryId=$rowd->category_id;
        $stitle=$rowd->title;
        if($scategoryId!==0){
            $sret="select * from category where category_id = '$scategoryId'";
            $sresult=mysqli_query($conn, $sret);
            while ($row=mysqli_fetch_array($sresult))
            {
                $scat=$row['name'];
            }
        }
        else{
            $scat="Uncategorized";
        }
        if($spreimage!=''){
            $simage='<img src="assets/img/resources/'.$spreimage.'" height="50px" width="50px">';
        }else{
        $simage='<img src="assets/img/template.png" height="50px" width="50">';
        }  
        if($statusId==1){
            $slink="viewdetails.php?title='.$stitle.'&id='.$sid.'";
        }
    ?>
        <div class="col-md-12">
            <div class="card mb-4 box-shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="col-sm-9">
                                <p><a href="<?php $slink; ?>"><?php echo $stitle;?></a></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted"><?php echo $sdatecreated;?></small>
                                </div>
                            </div>
                            <div class="col-sm-3 rotate-img">
                                <?php echo $simage;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    
  