<?php
$content_no=$_COOKIE["contentno"];
$ifr_links=$_COOKIE["ifrlinks"];
echo "contno=".$content_no."<br>";
$ifr_link="includes/practivity/".$ifr_links[$content_no].".html";
echo $ifr_link;
echo"
<iframe src='$ifr_link' scrolling='no' class='activity-photo-iframe'></iframe>
";
?>