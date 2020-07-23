<?php

 //
 // File: moonphase.php
 //     Sample code for using moonphase.inc.php
 //	https://github.com/szarkos/php-moonphase
 //


require( 'moonphase.inc.php' );

$date = '2008-05-05';
$time = '20:36:00';
$tzone = 'PST';

$moondata = phase(strtotime($date . ' ' . $time . ' ' . $tzone));

$MoonPhase	= $moondata[0];
$MoonIllum	= $moondata[1];
$MoonAge	= $moondata[2];
$MoonDist	= $moondata[3];
$MoonAng	= $moondata[4];
$SunDist	= $moondata[5];
$SunAng		= $moondata[6];


$phase = 'Waxing';
if ( $MoonAge > SYNMONTH/2 )  {
	$phase = 'Waning';
}

// Convert $MoonIllum to percent and round to whole percent.
$MoonIllum = round( $MoonIllum, 2 );
$MoonIllum *= 100;
if ( $MoonIllum == 0 )  {
	$phase = "New Moon";
}
if ( $MoonIllum == 100 )  {
	$phase = "Full Moon";
}

print "Moon Phase: $phase\n";
print "Percent Illuminated: $MoonIllum%\n";


?>
