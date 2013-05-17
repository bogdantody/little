<div class="stripe steps pad">

	<?php 

	$steps = get_sub_field('steps');
if($steps)

{
	echo '<ul class="steps'.count($steps).'">';
 	$count = 1;
	foreach($steps as $step)
	{
		$attachment = wp_get_attachment( $step['image'] );
		echo '<li><i>'.$count.'</i><strong>'.$step['title'].'</strong><p>'.$step['description'].'</p><a href="'.$attachment[src].'" data-target="flare" data-flare-scale="fillmax"><img src="'.$attachment[large].'"/></a></li>';
		$count++;
	}
 
	echo '</ul>';
}

 ?>

</div>