
<?php 
$query = "SELECT * FROM `templates`";
$stmt2 = $conn->prepare($query);
$stmt2->execute();
$res=$stmt2->get_result();
$count2=mysqli_num_rows($res);
while($rowd=$res->fetch_object())
{
    $tempid=$rowd->template_id;
    $tempname=$rowd->title;
    $tempdownloadlink=$rowd->dlink;
    $temptypeid=$rowd->templatetype_id;
    $ret="select * from templatetype where templatetype_id = '$temptypeid'";
    $result=mysqli_query($conn, $ret);
        while ($rows=mysqli_fetch_array($result))
        {
            $temptype=$rows['name'];
            if ($temptype=='doc'||$temptype=='docx'){
                $temptype1='file-word-o text-primary';
            }else if ($temptype=='ppt'){
                $temptype1='file-powerpoint-o text-warning';
            }else if ($temptype=='pdf'){
                $temptype1='file-pdf-o text-danger';
            }else if ($temptype=='xls'||$temptype=='xlsx'){
                $temptype1='file-excel-o text-success';
            }else{
                $temptype1='file-text-o text-info';
            } 
        }
        ?>                    
    <div class="card template col-sm-2" style="margin:5px; padding-top:15px">
        <a href="<?php echo $tempdownloadlink;?>">
            <div class="template-doc">
                <i class="fa fa-<?php echo $temptype1;?> fa-5x"></i>
                <p class="template-details"><?php echo strtoupper($tempname); ?></p>
            </div>
        </a>
    </div>
<?php }?>
