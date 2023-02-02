<?php
if (isset($_POST['submit'])) {
    if (!empty($_POST['table_item'])) {
        // Counting number of checked checkboxes.
        $table_item_count = count($_POST['table_item']);
        $name = $_POST['username'];
        echo $name . " 's favourite colors are " . $table_item_count . " option(s): <br/>";
        // Loop to store and display values of individual checked checkbox.
        foreach ($_POST['table_item'] as $selected) {
            echo "<p>" . $selected . "</p>";
        }
    } else {
        echo "<b>Please Select Atleast One Option.</b>";
    }
}