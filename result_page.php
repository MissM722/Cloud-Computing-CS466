<?php
   include "db_connection.php";

?>


<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="resultStyles.css">
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
               <td> Warehouse: </td>
               <td> District: </td>
               <td colspan="2"> Date: </td>
            </tr>
            <tr>
               <td> Customer: </td>
               <td> Name: </td>
               <td> Credit: </td>
               <td> Disc: </td>
            </tr>
            <tr>
               <td> Order Number: </td>
               <td> Number of lines: </td>
               <td> W_tax: </td>
               <td> D_txt: </td>
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
   </body>
</html>