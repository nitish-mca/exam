<div class="subjects view">
<h2><?php echo __('Subject'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subject['Subject']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($subject['Subject']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subject['Course']['name'], array('controller' => 'courses', 'action' => 'view', $subject['Course']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($subject['Subject']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subject['User']['username'], array('controller' => 'users', 'action' => 'view', $subject['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($subject['Subject']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($subject['Subject']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subject'), array('action' => 'edit', $subject['Subject']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subject'), array('action' => 'delete', $subject['Subject']['id']), array(), __('Are you sure you want to delete # %s?', $subject['Subject']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subjects'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Sections'); ?></h3>
	<?php if (!empty($subject['Section'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Subject Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($subject['Section'] as $section): ?>
		<tr>
			<td><?php echo $section['id']; ?></td>
			<td><?php echo $section['subject_id']; ?></td>
			<td><?php echo $section['title']; ?></td>
			<td><?php echo $section['description']; ?></td>
			<td><?php echo $section['status']; ?></td>
			<td><?php echo $section['user_id']; ?></td>
			<td><?php echo $section['created']; ?></td>
			<td><?php echo $section['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sections', 'action' => 'view', $section['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sections', 'action' => 'edit', $section['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sections', 'action' => 'delete', $section['id']), array(), __('Are you sure you want to delete # %s?', $section['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
