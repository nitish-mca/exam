<div class="sections view">
<h2><?php echo __('Section'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($section['Section']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subject'); ?></dt>
		<dd>
			<?php echo $this->Html->link($section['Subject']['title'], array('controller' => 'subjects', 'action' => 'view', $section['Subject']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($section['Section']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($section['Section']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($section['Section']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($section['User']['username'], array('controller' => 'users', 'action' => 'view', $section['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($section['Section']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($section['Section']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Section'), array('action' => 'edit', $section['Section']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Section'), array('action' => 'delete', $section['Section']['id']), array(), __('Are you sure you want to delete # %s?', $section['Section']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subjects'), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject'), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Questions'); ?></h3>
	<?php if (!empty($section['Question'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Section Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Image Path'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($section['Question'] as $question): ?>
		<tr>
			<td><?php echo $question['id']; ?></td>
			<td><?php echo $question['section_id']; ?></td>
			<td><?php echo $question['description']; ?></td>
			<td><?php echo $question['image_path']; ?></td>
			<td><?php echo $question['status']; ?></td>
			<td><?php echo $question['user_id']; ?></td>
			<td><?php echo $question['created']; ?></td>
			<td><?php echo $question['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'questions', 'action' => 'view', $question['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'questions', 'action' => 'edit', $question['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'questions', 'action' => 'delete', $question['id']), array(), __('Are you sure you want to delete # %s?', $question['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
