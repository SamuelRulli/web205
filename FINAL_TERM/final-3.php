<?php

class Time{

    private $hour;
    private $minute;
    
    function __construct($s)
    {
        list($this->hour, $this->minute) = explode(":", $s);
    }

    function getTime()
    {
        return $this->hour . ':' . $this->minute;
    }

    function modify($d)
    {
        $datetime_from = date("H:i", strtotime($d ." minutes", strtotime($this->hour . ':' . $this->minute)));

        list($this->hour, $this->minute) = explode(":", $datetime_from);
    }
}

    $departure = new Time("22:54");
    $arrival = new Time("23:36");
    print "Your train departs at\t\t" . $departure->getTime();
    print " and arrives at " . $arrival->getTime() . "<br />\n";

    $departure->modify(-42);
    $arrival->modify(-42);
    print "The previous train departs at\t\t" . $departure->getTime();
    print " and arrives at " . $arrival->getTime() . "<br />\n";

    $departure->modify(99);
    $arrival->modify(99);
    print "The next train departs at\t\t" . $departure->getTime();
    print " and arrives at " . $arrival->getTime() . "<br />\n";
?>