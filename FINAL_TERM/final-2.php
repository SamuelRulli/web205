<?php

    $theData = file("file/phonebook.txt");

    print "<TABLE BORDER='1'>\n";

    foreach ($theData as $line) {
        $line = rtrim($line);
        list($name, $phone, $email) = explode(',', $line);
        print "<TR><TD> $name <TD> $phone <TD> $email \n";
    }
?>
</TABLE>