<!DOCTYPE html>
<html>

<head>

    <script src="scripts.js"> </script>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="styles.css">

    <title>New Order Page</title>


</head>

<body>
    <h1>Warehouse Order</h1>

    <?php

    include "db_connection.php";

    ?>


    <form action="result_page.php" id="mainForm" method="post">

        <div id="info"> 
            <label> Warehouse Number:</label> 
            <input type="number" name="W_ID" class="required hilightable"> <br>

            <label> District Number:</label> 
            <input type="number" name="D_ID" class="required hilightable"> <br>

            <label> Customer Number:</label> 
            <input type="number" name="C_ID" class="required hilightable"> <br>
        </div>


        <div id="tableButtons">
            <input type="button" value="Add Row" onclick="addRow('tbl_id')" id="add"/>

            <input type="button" value="Delete Row" onclick="deleteRow('tbl_id')" id="delete"/>
        </div>

        <div id="tableDiv">

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
                        <td> <input type="number" name="OL_I_ID1" id="bottom_form" class="required hilightable" /> </td> 
                        <td> <input type="number" name="OL_SUPPLY_W_ID1" id="bottom_form" class="required hilightable" /> </td>
                        <td> <input type="number" name="OL_QUANTITY1" id="bottom_form" class="required hilightable" /> </td>
                    </tr>

                    <tr>
                        <td> <input type="number" name="OL_I_ID2" id="bottom_form" class="required hilightable" /> </td>
                        <td> <input type="number" name="OL_SUPPLY_W_ID2" id="bottom_form" class="required hilightable" /> </td>
                        <td> <input type="number" name="OL_QUANTITY2" id="bottom_form" class="required hilightable" /> </td>
                    </tr>

                    <tr>
                        <td> <input type="number" name="OL_I_ID3" id="bottom_form" class="required hilightable" /> </td>
                        <td> <input type="number" name="OL_SUPPLY_W_ID3" id="bottom_form" class="required hilightable" /> </td>
                        <td> <input type="number" name="OL_QUANTITY3" id="bottom_form" class="required hilightable" /> </td>
                    </tr>

                    <tr>
                        <td> <input type="number" name="OL_I_ID4" id="bottom_form" class="required hilightable" /> </td>
                        <td> <input type="number" name="OL_SUPPLY_W_ID4" id="bottom_form" class="required hilightable" /> </td>
                        <td> <input type="number" name="OL_QUANTITY4" id="bottom_form" class="required hilightable" /> </td>
                    </tr>

                    <tr>
                        <td> <input type="number" name="OL_I_ID5" id="bottom_form" class="required hilightable" /> </td>
                        <td> <input type="number" name="OL_SUPPLY_W_ID5" id="bottom_form" class="required hilightable" /> </td>
                        <td> <input type="number" name="OL_QUANTITY5" id="bottom_form" class="required hilightable" /> </td>
                    </tr>

                </tbody>
            </table>

        </div>

        <div id="submitButton">

         <input type="submit" value="Submit">

        </div>

    </form>




    <?php

    //close the connection
    //$mysqli->close();
    ?>

</body>



</html>