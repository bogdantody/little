<?php

$attachment1 = wp_get_attachment( get_sub_field("image_1") );
$attachment2 = wp_get_attachment( get_sub_field("image_2") );

?>

<div class="stripe image_2x">
	<div class="image first"><a href="<?php echo $attachment1[src] ?>" data-target="flare" data-flare-scale="fillmax"><img src="<?php echo $attachment1[large] ?>"/></a></div>
	<div class="image second"><a href="<?php echo $attachment2[src] ?>" data-target="flare" data-flare-scale="fillmax"><img src="<?php echo $attachment2[large] ?>"/></a></div>
</div>

<div class="stripe image_2x captions">

	<a href="<?php echo $attachment1[src] ?>" class="caption first" data-target="flare" data-flare-scale="fillmax">
		<span>1</span>
		<p><?php echo $attachment1['caption']; ?></p>
		<small><?php echo $attachment1['description']; ?></small>
	</a>

	<a href="<?php echo $attachment2[src] ?>" class="caption second" data-target="flare" data-flare-scale="fillmax">
		<span>2</span>
		<p><?php echo $attachment2['caption']; ?></p>
		<small><?php echo $attachment2['description']; ?></small>
	</a>

</div>