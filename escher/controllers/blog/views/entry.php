<?php $HTML->open('header'); ?>
<h1><?php $E($entry['title']); ?></h1>
<?php $HTML->closeTo('header'); ?>
<?php $F($model,'decode'); ?>
<?php $HTML->open('footer'); ?>
<?php if($_check($resource,'edit')) { ?>
<div class="actions">
<a href="<?php $E($current_path.'/edit_entry/'.$entry['id'].'/'); ?>"><?php $L('Edit'); ?></a> 
</div>
<?php } $HTML->closeTo('footer'); ?>
