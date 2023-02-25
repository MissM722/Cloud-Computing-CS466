function addRow() {

    var table = document.getElementById('tbl_id');
    var rowCount = table.rows.length;


    if(rowCount > 15){
        return;
     }

    var row = table.insertRow(rowCount);

    var cell0 = row.insertCell(0);
    var cell1 = row.insertCell(1);
    var cell2 = row.insertCell(2);

    var element0 = document.createElement("input");
    element0.type = "number";
    element0.name = "OL_I_ID";
    cell0.appendChild(element0);

    var element1 = document.createElement("input");
    element1.type = "number";
    element1.name = "OL_SUPPLY_W_ID";
    cell1.appendChild(element1);

    var element2 = document.createElement("input");
    element2.type = "number";
    element2.name = "OL_QUANTITY";
    cell2.appendChild(element2);

    if(rowCount == 15){
        document.getElementById('add').style.visibility='hidden';
     }

}

function deleteRow(tableID) {
    try {
        var table = document.getElementById(tableID);
        var rowCount = table.rows.length;

        if (rowCount > 6) { //only deletes bottom row if the table has more than 5 entries.
            document.getElementById('add').style.visibility='visible';
            table.deleteRow(rowCount - 1);
        } else {
            alert("Must have a min of 5 rows.")
        }
    } 
    catch (e) {
        alert(e);
    }
}
