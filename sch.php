<?php

$php = array(
"1"=>array("TBA","Space And Us!","left"),
"2"=>array(" TBA","Reasons Behind The Huge Investments In Space","right"),
"3"=>array(" TBA","Shattering The Myths!","left"),
"4"=>array(" TBA","Let’s Stargaze!","right"),


);
for ($x = 1; $x <= 4; $x++) {
echo '<div class="timeline__elem timeline__elem--'. $php[$x][2].'">
<div class="timeline__date">
<span class="timeline__date-month">Day</span>
<span class="timeline__date-day">'.$x.'</span>

</div>
<div class="timeline__event">
<div class="timeline__event-date-time">
<div class="timeline__event-date"> <span>'.$php[$x][0].'</span></div>
<div class="timeline__event-time"><span>TBA</span></div>
</div>
<h4 class="timeline__event-title">'.$php[$x][1].'</h4>
<div class="timeline__event-descr">
<p></p>
</div>
<div class="timeline__event-actions">
<a class="timeline__event-action" href="./speakers.html" title="Speakers">Speakers </a>
<a class="timeline__event-action bg"href="./register.html" title="Register">Register </a>
</div>
</div>
</div>';


}