<?php

    define("COST_FIRST",3.50);
    define("COST_SECOND",4.00);
    define("COST_THIRD", 5.20);
    define("COST_FOURTH", 6.50);

    class calculate{

        function set_value_bill($units) {
            if($units <= 50) {
                $bill = $units * COST_FIRST;
            }
            else if($units > 50 && $units <= 100) {
                $temp = 50 * COST_FIRST;
                $remaining_units = $units - 50;
                $bill = $temp + ($remaining_units * COST_SECOND);
            }
            else if($units > 100 && $units <= 200) {
                $temp = (50 * 3.5) + (100 * COST_SECOND);
                $remaining_units = $units - 150;
                $bill = $temp + ($remaining_units * COST_THIRD);
            }
            else {
                $temp = (50 * 3.5) + (100 * COST_SECOND) + (100 * COST_THIRD);
                $remaining_units = $units - 250;
                $bill = $temp + ($remaining_units * COST_FOURTH);
            }
            return number_format((float)$bill, 2, '.', '');
        }

    }
?>