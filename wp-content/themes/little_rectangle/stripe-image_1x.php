
<?php $attachment = wp_get_attachment( get_sub_field("image") ); ?>

	<div class="stripe image_1x"<?php if (get_sub_field("height")) { echo 'style="max-height:'.get_sub_field("height").'px; overflow:hidden;"'; } ?>>
		<a href="<?php echo $attachment[src] ?>" data-target="flare" data-flare-scale="fillmax"><img src="<?php echo $attachment[large] ?>"></a>
	</div>