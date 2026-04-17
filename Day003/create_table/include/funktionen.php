<?php
function mk_table($row , $colm = 0){
    if ($colm == 0){
        $colm = $row;
    }

    $table = "<table border='1'>";

    for ($i = 0; $i < $row; $i++ ){
        $table .= "<tr>";

        for ($j = 0; $j < $colm; $j++){
            $table .= "<td></td>";
        }

        $table .= "</tr>";
    }

    $table .= "</table>";

    return $table;	
}
?>