<?php
class Instagram{
	function GetImgs($usename){
		$Inst = file_get_contents("https://www.instagram.com/".$usename."/media/");
		$json = json_decode($Inst, true);

 

		foreach($json['items'] as $c):
			$im = $c['images']['standard_resolution']['url'];
			$tx = $c['caption']['text'];
			$id = $c['caption']['id'];
			$l =  $c ['likes']['count'];
			 
echo "<figure>
<a href='' class='photostack-img'><img src='".$im."' alt='' style='width:260px;height:260px'/></a>
<figcaption>
<h2 class='photostack-title' style='text-align:left !important; font-size:16px;font-color:#000 !important'><br>".
$l." Curtidas </h2>
<div class='photostack-back'>
<p>".$tx."</p>
 </div>
</figcaption>
</figure>
";
		endforeach;
 
 
	
	}




}
