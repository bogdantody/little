<?php

$attachment1 = wp_get_attachment( get_sub_field("image_1") );
$attachment2 = wp_get_attachment( get_sub_field("image_2") );
$attachment3 = wp_get_attachment( get_sub_field("image_3") );
$attachment4 = wp_get_attachment( get_sub_field("image_4") );

?>

<div class="stripe image_4x">
	<div class="image first" data-stretch="<?php echo $attachment1[large] ?>"></div>
	<div class="image second" data-stretch="<?php echo $attachment2[large] ?>"></div>
	<div class="image third" data-stretch="<?php echo $attachment3[large] ?>"></div>
	<div class="image fourth" data-stretch="<?php echo $attachment4[large] ?>"></div>
</div>

<div class="stripe image_4x captions">

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

	<a href="<?php echo $attachment3[src] ?>" class="caption third" data-target="flare" data-flare-scale="fillmax">
		<span>3</span>
		<p><?php echo $attachment3['caption']; ?></p>
		<small><?php echo $attachment3['description']; ?></small>
	</a>

	<a href="<?php echo $attachment4[src] ?>" class="caption fourth" data-target="flare" data-flare-scale="fillmax">
		<span>4</span>
		<p><?php echo $attachment4['caption']; ?></p>
		<small><?php echo $attachment4['description']; ?></small>
	</a>

</div>