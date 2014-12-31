<div class="sections index">
	<h2><?php echo __('Sections'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('subject_id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($sections as $section): ?>
	<tr>
		<td><?php echo h($section['Section']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($section['Subject']['title'], array('controller' => 'subjects', 'action' => 'view', $section['Subject']['id'])); ?>
		</td>
		<td><?php echo h($section['Section']['title']); ?>&nbsp;</td>
		<td><?php echo h($section['Section']['description']); ?>&nbsp;</td>
		<td><?php echo h($section['Section']['status']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($section['User']['username'], array('controller' => 'users', 'action' => 'view', $section['User']['id'])); ?>
		</td>
		<td><?php echo h($section['Section']['created']); ?>&nbsp;</td>
		<td><?php echo h($section['Section']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $section['Section']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $section['Section']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $section['Section']['id']), array(), __('Are you sure you want to delete # %s?', $section['Section']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Section'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Subjects'), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject'), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>
