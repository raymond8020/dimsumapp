<h1>Add Dimsum</h1>
<?php echo $this->Form->create('Dimsum'); ?>
<?php echo $this->Form->input('name'); ?>
<?php echo $this->Form->input('stock'); ?>
<?php echo $this->Form->input('type_id', array('options'=>$types)); ?>
<?php echo $this->Form->end('Add Dimsum'); ?>