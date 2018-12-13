<?php

/**
* Displays most recently added collections objects
**/
$items = $variables['items'];
$num_returned = count($items);
?>

<div class="recent-objects__wrapper">
	<?php foreach($items as $key => $value): ?>
		<?php if($key <= 9): ?>
			<div class="recently-added-object">
				<div class="object-thumb">
					<a href="/islandora/object/<?php print $value['pid']; ?>">
						<img src="<?php print $value['img']; ?>" alt="<?php print $value['label']; ?>" />
					</a>
				</div>
				<div class="object-information">
					<h4><a href="/islandora/object/<?php print $value['pid']; ?>"><?php print $value['label']; ?></a>
					</h4>
					<?php if($value['parent_is_collection'] != FALSE): ?>
					<div>
						<span><strong>In Collection:</strong> <a href="/islandora/object/<?php print $value['parent_pid']; ?>"><?php print $value['parent_label']; ?></a>
						</span>
					</div>
					<?php
						endif;
					?>
				</div>
			</div>
		<?php endif; ?>
	<?php endforeach; ?>

</div>

