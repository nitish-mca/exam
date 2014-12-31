<div class="studentData view">
<h2><?php echo __('Student Data'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($studentData['StudentData']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($studentData['StudentData']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($studentData['StudentData']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($studentData['User']['username'], array('controller' => 'users', 'action' => 'view', $studentData['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($studentData['StudentData']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($studentData['StudentData']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($studentData['StudentData']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Student Data'), array('action' => 'edit', $studentData['StudentData']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Student Data'), array('action' => 'delete', $studentData['StudentData']['id']), array(), __('Are you sure you want to delete # %s?', $studentData['StudentData']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Student Data'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Data'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
