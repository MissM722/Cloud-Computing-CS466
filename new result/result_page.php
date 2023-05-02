

<?php
   //logic goes here
  include "db_connection.php";

 //Get the current date to use for the order information
 $tm = time();
 $passed = true; //did anything fail?
 $total = 0.00; //total so far of cost
date_default_timezone_set('America/Chicago');
  //Store the warehouse, district, and customer data from the order form
  $dID = $_POST['D_ID'];
  $wID = $_POST['W_ID'];
  $cID = $_POST['C_ID'];
  




  //Query and results to use for the warehouse information
  $warehouseSQL = "SELECT * FROM warehouse WHERE W_ID = $wID";
  $warehouseResult = mysqli_query($mysqli, $warehouseSQL);
  $warehouseRow = mysqli_fetch_assoc($warehouseResult) or die("Warehouse doesnt exist"); //Validate warehouse ID exists

  //Query and results to use for the district information
  $districtSQL = "SELECT * FROM district WHERE D_ID = $dID";
  $districtResult = mysqli_query($mysqli, $districtSQL); 
  $districtRow = mysqli_fetch_assoc($districtResult) or die("District doesnt exist"); //Validate district ID exists

  //Query and results to use for the customer information
  $customerSQL = "SELECT * FROM customer WHERE C_ID = $cID";
  $customerResult = mysqli_query($mysqli, $customerSQL);
  $customerRow = mysqli_fetch_assoc($customerResult) or die("Customer doesnt exist"); //Validate customer ID exists

  //There is also the orders item information - OL_I_ID#, OL_SUPPLY_W_ID#, OL_QUANTITY#
  //print_r($_POST); 


  //First add the new order and orderr row into tables. Entry date will have to be generated.
  //O_ID  O_D_ID   O_W_ID   O_C_ID   O_ENTRY_D   O_CARRIER_ID   O_OL_CNT O_ALL_LOCAL
  //how?  index    index    index    generate    sql query      how?     how?        
  $O_IDq = "SELECT D_NEXT_O_ID FROM DISTRICT WHERE D_ID = $dID and D_W_ID = $wID";
  $O_ID = mysqli_query($mysqli, $O_IDq );
  $cu = mysqli_fetch_assoc($O_ID);
  echo($cu[0]);
  $orderrSQL = "INSERT INTO ORDERR (O_ID,O_D_ID,O_W_ID,O_C_ID,O_ENTRY_D,O_CARRIER_ID,O_OL_CNT,O_ALL_LOCAL)	
  )
 
   VALUES ('John', 'Doe', 'john@example.com')";
  
  //go through all order lines
  $array = $_POST;
  $rowcount = ((sizeof($array)) - 3) /3; // subtract for 3 above then divide by 3 because each row has 3 columns
  echo($rowcount);
  //go through all orderlines
   for($x =0;$x<=$rowcount;$x++){
      // OL_I_ID1
      // OL_SUPPLY_W_ID1
      // OL_QUANTITY1

   }

  //Stock will have to be updated for each item


  //then display with html & php below
  //answers go here
?>


<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="resultStyles.css">
      <link rel="stylesheet" href="normalize.css">
      <link rel="stylesheet" href="styles.css">
      <title>Results</title>
   </head>
   <body>
      <h1> New Order Results </h1>

      <table id="top_table">
         <tbody>
            <tr>
               <td> - </td>
               <td> - </td>
               <td colspan="2"> New Order </td>
            </tr>
            <tr>
               <td> Warehouse: 
                  <?php echo "{$warehouseRow['W_ID']}"; //do we need 0001/0002 or is 1/2 okay? ?>  
               </td> 
               <td> District: <?php echo "{$districtRow['D_ID']}"; ?> </td>
               <td colspan="2"> Date: <?php echo date("m-d-Y H:i:s", $tm); ?> </td>
            </tr>
            <tr>
               <td> Customer: <?php echo "{$customerRow['C_ID']}"; ?> </td>
               <td> Name: <?php echo "{$customerRow['C_FIRST']}" . " " . "{$customerRow['C_LAST']}"; ?> </td>
               <td> Credit: <?php echo "{$customerRow['C_CREDIT']}" ?> </td>
               <td> Disc: <?php echo "{$customerRow['C_DISCOUNT']}" ?> </td>
            </tr>
            <tr>
               <td> Order Number: </td>
               <td> Number of lines: <?php echo $rowcount; ?></td>
               <td> W_tax: <?php echo "{$warehouseRow['W_TAX']}"; ?> </td>
               <td> D_tax: <?php echo "{$districtRow['D_TAX']}"; ?> </td>
            </tr>
         </tbody>
      </table>


      <hr>

      <table id="bottom_table">
         <thead>
            <tr>
               <th>Supp_W</th>
               <th>Item_id</th>
               <th>Item_Name</th>
               <th>Qty</th>
               <th>Stock</th>
               <th>B/G</th>
               <th>Price</th>
               <th>Amount</th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <td id="OL_SUPPLY_W_ID"> placeholder </td>
               <td id="OL_I_ID"> placeholder </td>
               <td id="I_NAME"> placeholder </td>
               <td id="OL_QUANTITY"> placeholder </td>
               <td id="S_QUANTITY"> placeholder </td>
               <td> placeholder  </td>
               <td id="I_PRICE"> placeholder </td>
               <td id="OL_AMOUNT"> placeholder </td>
            </tr>
            <tr>
               <td id="OL_SUPPLY_W_ID"> placeholder </td>
               <td id="OL_I_ID"> placeholder </td>
               <td id="I_NAME"> placeholder </td>
               <td id="OL_QUANTITY"> placeholder </td>
               <td id="S_QUANTITY"> placeholder </td>
               <td> placeholder  </td>
               <td id="I_PRICE"> placeholder </td>
               <td id="OL_AMOUNT"> placeholder </td>
            </tr>
            <tr>
            </tr>
            <tr>
            </tr>
            <tr>
            </tr>
         </tbody>
      </table>

      <hr>

      <a href="index.php">Return to homepage</a>
         <p> <?php 
          
            ?> 
         </p>
   </body>
</html>