
         <div class="text-center text-md-center h2">All Customers</div>
              <table id="example2" class="table table-striped table-hover responsive" style="width:100%">
                <thead>
                  <tr>
                    <th>S/N</th>
                    <th>Customer Name</th>
                    <th>Phone Number</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $cnt=1;
                  $sql = "SELECT * FROM customers";
                  $result = mysqli_query($conn, $sql);
                  while($row = mysqli_fetch_array($result)){
                    if ($row==null){
                      echo '<tr>No customer to display</tr>';
                    }else{
                      $customerid=$row['customer_id'];
                      ?>
                      <tr>
                        <?php echo '<td>'.$cnt.'</td>';?>
                        <td><?= $row['firstName']." ".$row['lastName']; ?></td>
                        <td><?= $row['phone']; ?></td>
                      </tr>
                      <?php  }
                      $cnt++;
                    } ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>S/N</th>
                      <th>Customer Name</th>
                      <th>Phone</th>
                    </tr>
                  </tfoot>
                </table>
                <?php echo $mydesignationcode;?>