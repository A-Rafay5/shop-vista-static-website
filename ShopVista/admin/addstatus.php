<?php
include( "header.php" );
?>
    
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
      <div class="row">
        <div class="col-sm-12">
          <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Add Status</h6>
            <?php
			  $currentDate = date('Y-m-d');

			  ?>
            <?php
            include( "config.php" );
            if ( isset( $_POST[ "btnadd" ] ) ) {
              $pro_id = $_POST[ "pro_id" ];
              $order_qty = $_POST[ "order_qty" ];
              $order_date = $currentDate;
              $order_status = $_POST[ "order_status" ];
              $delivery_date = $_POST[ "delivery_date" ];
              $om_id_fk = $_POST[ "om_id_fk" ];
              $query = "insert into ordertable (pro_id,order_qty,order_date,order_status,delivery_date,om_id_fk) values ('" . $pro_id . "','" . $order_qty . "','" . $order_date . "','" . $order_status . "','" . $delivery_date . "','" . $om_id_fk . "')";
              $execute = mysqli_query( $connect, $query );
              if ( $execute ) {
                $message = "Status Updated";
              } else {
                $message = mysqli_error( $connect );
              }

            }
            ?>
            <form method="post">
              <div class="mb-3">
                <label class="form-label">Product</label>
                <select class="form-select mb-3" aria-label="Default select example" name="pro_id">
                  <option disabled selected>Please Select</option>
                  <?php
                  include( "config.php" );
                  $exe = mysqli_query( $connect, "select * from producttable" );
                  while ( $row = mysqli_fetch_array( $exe ) ) {

                    ?>
                  <option value="<?php echo $row["pro_id"]?>"><?php echo $row["pro_name"]?></option>
                  <?php

                  }
                  ?>
                </select>
              </div>
              <div class="mb-3">
                <label  class="form-label">Quantity</label>
                <select class="form-select mb-3" aria-label="Default select example" name="order_qty">
                  <option disabled selected>Please Select</option>
                  <?php
                  include( "config.php" );
                  $exe = mysqli_query( $connect, "select * from user_order" );
                  while ( $row = mysqli_fetch_array( $exe ) ) {

                    ?>
                  <option value="<?php echo $row["order_id"]?>"><?php echo $row["item_qty"]?></option>
                  <?php

                  }
                  ?>
                </select>
              </div>
              
              <div class="mb-3">
                <label  class="form-label">Order Status</label>
                <select class="form-select mb-3" aria-label="Default select example" name="order_status">
                  <option disabled selected>Please Select</option>
                  <option  value="Paid">Paid</option>
                  <option  value="Rejected">Rejected</option>
                  <option  value="Delivered">Delivered</option>
                  <option  value="Dispatched">Dispatched</option>
                </select>
              </div>
              <div class="mb-3">
                <label  class="form-label">Delivey Date</label>
                <input type="date" class="form-control" name="delivery_date">
              </div>
              <div class="mb-3">
                <label class="form-label">Customer Name</label>
                <select class="form-select mb-3" aria-label="Default select example" name="om_id_fk">
                  <option disabled selected>Please Select</option>
                  <?php
                  include( "config.php" );
                  $exe = mysqli_query( $connect, "select * from ordermanager" );
                  while ( $row = mysqli_fetch_array( $exe ) ) {

                    ?>
                  <option value="<?php echo $row["om_id"]?>"><?php echo $row["om_fullname"]?></option>
                  <?php

                  }
                  ?>
                </select>
              </div>
              <input type="submit" value="Add Status" name="btnadd" class="btn btn-primary">
              <p><?php echo  @$message; ?></p>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Form End -->
    
    <?php
    include( "footer.php" );
    ?>