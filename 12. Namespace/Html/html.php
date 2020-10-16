<?php

namespace Html;

include "Code/row.php";
include "Code/table.php";


use Html\Code\Row;
use Html\Code\Table;

class Html
{
    public function test()
    {
        $row = new Row();
        $table = new Table();
        return $row->row() . " " . $table->table();
    }
}
?>

<!DOCTYPE html>
<html>

<body>

    <?php
    $html = new Html();
    echo $html->test();
    ?>


</body>

</html>