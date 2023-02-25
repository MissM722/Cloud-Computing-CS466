<html>

<head>

    <script src="scripts.js"> </script>
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <h1>Warehouse Order</h1>

    <?php

    //include "db_connection.php";

    ?>


    <form action="result_page.php">

        <div id="info"> 
            <label> Warehouse Number:</label> 
            <input type="number" name="W_ID"> <br>

            <label> District Number:</label> 
            <input type="number" name="D_ID"> <br>

            <label> Customer Number:</label> 
            <input type="number" name="C_ID"> <br>
        </div>

        <!--
        <label> Supplying Warehouse Number:</label>
        <input type="number" name="OL_SUPPLY_W_ID">

        <label> Quantity:</label>
        <input type="number" name="OL_QUANTITY"> <br> <br>
    -->

        <br>

        <table id="tbl_id">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Warehouse Number</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> <input type="number" name="OL_I_ID" /> </td>
                    <td> <input type="number" name="OL_SUPPLY_W_ID" /> </td>
                    <td> <input type="number" name="OL_QUANTITY" /> </td>
                </tr>

                <tr>
                    <td> <input type="number" name="OL_I_ID" /> </td>
                    <td> <input type="number" name="OL_SUPPLY_W_ID" /> </td>
                    <td> <input type="number" name="OL_QUANTITY" /> </td>
                </tr>

                <tr>
                    <td> <input type="number" name="OL_I_ID" /> </td>
                    <td> <input type="number" name="OL_SUPPLY_W_ID" /> </td>
                    <td> <input type="number" name="OL_QUANTITY" /> </td>
                </tr>

                <tr>
                    <td> <input type="number" name="OL_I_ID" /> </td>
                    <td> <input type="number" name="OL_SUPPLY_W_ID" /> </td>
                    <td> <input type="number" name="OL_QUANTITY" /> </td>
                </tr>

                <tr>
                    <td> <input type="number" name="OL_I_ID" /> </td>
                    <td> <input type="number" name="OL_SUPPLY_W_ID" /> </td>
                    <td> <input type="number" name="OL_QUANTITY" /> </td>
                </tr>

            </tbody>
        </table>
        
        <br>

        <input type="button" value="Add Row" onclick="addRow('tbl_id')" id="add"/>

        <input type="button" value="Delete Row" onclick="deleteRow('tbl_id')" id="delete"/>


        <br> <br> <input type="submit" value="Submit">
    </form>




    <?php
    //close the connection
    $mysqli->close();
    ?>

</body>



</html>