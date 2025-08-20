<?php
include( "header.php" );
?>
    <div class="container-fluid pt-4 px-4">
      <div class="row g-4">
        <div class="col-sm-6 col-xl-6"> </div>
        <div class="col-sm-6 col-xl-6"> </div>
      </div>
    </div>
    
    <!-- Sale & Revenue Start -->
    <div class="container-fluid pt-4 px-4">
      <div class="row g-4">
        <div class="col-sm-6 col-xl-6">
          <?php
          include( "config.php" );
          $query = "SELECT SUM(item_price) AS total_sales FROM user_order";
          $result = mysqli_query( $connect, $query );
          $row = mysqli_fetch_assoc( $result );
          $totalSales = $row[ 'total_sales' ];
          ?>
          <div class="bg-light rounded d-flex align-items-center justify-content-between p-4"> <i class="fa fa-chart-line fa-3x text-primary"></i>
            <div class="ms-3">
              <p class="mb-2">Today Sale</p>
              <h6 class="mb-0">Rs: <?php echo $totalSales; ?></h6>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-6">
          <?php
          // Assuming you have a database connection established

          $query = "SELECT SUM(item_price) AS total_sales FROM user_order";
          $result = mysqli_query( $connect, $query );
          $row = mysqli_fetch_assoc( $result );
          $totalSales = $row[ 'total_sales' ];

          // Assuming you have the cost of goods sold (COGS) value available
          $costOfGoodsSold = 3597; // Replace with the actual COGS value

          $revenue = $totalSales - $costOfGoodsSold;
          ?>
          <div class="bg-light rounded d-flex align-items-center justify-content-between p-4"> <i class="fa fa-chart-bar fa-3x text-primary"></i>
            <div class="ms-3">
              <p class="mb-2">Total Revenue</p>
              <h6 class="mb-0">Rs: <?php echo $revenue; ?></h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Sale & Revenue End --> 
    <!-- HTML section for displaying search results --> 
    
    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
      <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
          <h6 class="mb-0">Order Status</h6>
        </div>
        <div class="table-responsive">
          <table class="table text-start align-middle table-bordered table-hover mb-0">
            <thead>
              <tr class="text-dark text-center">
                <th scope="col">Order ID</th>
                <th scope="col">Product ID</th>
                <th scope="col">User ID</th>
                <th scope="col">Date</th>
                <th scope="col">Status</th>
                <th scope="col">Delivery</th>
                <th scope="col">Customer ID</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include( "config.php" );
              $query = "select * from ordertable";
              $execute = mysqli_query( $connect, $query );
              while ( $row = mysqli_fetch_array( $execute ) ) {
                ?>
              <tr class="text-center">
                <td ><?php echo $row["order_id"]?></td>
                <td><?php echo $row["pro_id"]?></td>
                <td><?php echo $row["order_qty"]?></td>
                <td><?php echo $row["order_date"]?></td>
                <td><?php echo $row["order_status"]?></td>
                <td><?php echo $row["delivery_date"]?></td>
                <td><?php echo $row["om_id_fk"]?></td>
              </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- Recent Sales End --> 
    
    <!-- Widgets Start -->
    <div class="container-fluid pt-4 px-4">
      <div class="row g-4">
        <div class="col-sm-12 col-md-6 col-xl-12">
          <div class="h-100 bg-light rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-2">
              <h6 class="mb-0">Messages</h6>
              <a href="message.php">Show All</a> </div>
            <?php
            include( "config.php" );
            $query = "select * from  contactmessage_table limit 2";
            $execute = mysqli_query( $connect, $query );
            while ( $row = mysqli_fetch_array( $execute ) ) {
              ?>
            <div class="d-flex align-items-center border-bottom py-3">
              <div class="w-100 ms-3">
                <div class="d-flex w-100 justify-content-between">
                  <p>Name: <b class="mb-0"><?php echo $row["mess_name"]?></b></p>
                  <small><?php echo $row["mess_email"]?></small> </div>
                <p>Subject: <b><?php echo $row["mess_subject"]?></b></p>
                <p>Message: <span><?php echo $row["message"]?></span></p>
              </div>
            </div>
            <?php

            }

            ?>
          </div>
        </div>
      </div>
    </div>
    <!-- Widgets End -->
    
    <?php
    include( "footer.php" );
    ?>