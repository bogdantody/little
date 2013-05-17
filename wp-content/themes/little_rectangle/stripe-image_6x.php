<?php

$attachment1 = wp_get_attachment( get_sub_field("image_1") );
$attachment2 = wp_get_attachment( get_sub_field("image_2") );
$attachment3 = wp_get_attachment( get_sub_field("image_3") );
$attachment4 = wp_get_attachment( get_sub_field("image_4") );
$attachment5 = wp_get_attachment( get_sub_field("image_5") );
$attachment6 = wp_get_attachment( get_sub_field("image_6") );

?>

<div class="stripe image_6x">
	<div class="col1">
		<div class="image" data-stretch="<?php echo $attachment1[large] ?>"></div>
	</div>
	<div class="col2">
		<div class="image" data-stretch="<?php echo $attachment2[large] ?>"></div>
		<div class="image" data-stretch="<?php echo $attachment3[large] ?>"></div>
	</div>
	<div class="col3">
		<div class="image" data-stretch="<?php echo $attachment4[large] ?>"></div>
	</div>
	<div class="col4">
		<div class="image" data-stretch="<?php echo $attachment5[large] ?>"></div>
		<div class="image" data-stretch="<?php echo $attachment6[large] ?>"></div>
	</div>
</div>

<div class="stripe caption_6x">

	<div class="col1">
	<a href="<?php echo $attachment1[src] ?>" class="caption" data-target="flare" data-flare-scale="fillmax">
		<span>1</span>
		<p><?php echo $attachment1['caption']; ?></p>
		<small><?php echo $attachment1['description']; ?></small>
	</a>
	</div>

	<div class="col2">
	<a href="<?php echo $attachment2[src] ?>" class="caption" data-target="flare" data-flare-scale="fillmax">
		<span>2</span>
		<p><?php echo $attachment2['caption']; ?></p>
		<small><?php echo $attachment2['description']; ?></small>
	</a>

	<a href="<?php echo $attachment3[src] ?>" class="caption" data-target="flare" data-flare-scale="fillmax">
		<span>3</span>
		<p><?php echo $attachment3['caption']; ?></p>
		<small><?php echo $attachment3['description']; ?></small>
	</a>
	</div>

	<div class="col3">
	<a href="<?php echo $attachment4[src] ?>" class="caption" data-target="flare" data-flare-scale="fillmax">
		<span>4</span>
		<p><?php echo $attachment4['caption']; ?></p>
		<small><?php echo $attachment4['description']; ?></small>
	</a>
	</div>

	<div class="col4">
	<a href="<?php echo $attachment5[src] ?>" class="caption" data-target="flare" data-flare-scale="fillmax">
		<span>5</span>
		<p><?php echo $attachment5['caption']; ?></p>
		<small><?php echo $attachment5['description']; ?></small>
	</a>

	<a href="<?php echo $attachment6[src] ?>" class="caption" data-target="flare" data-flare-scale="fillmax">
		<span>6</span>
		<p><?php echo $attachment6['caption']; ?></p>
		<small><?php echo $attachment6['description']; ?></small>
	</a>
	</div>

</div>