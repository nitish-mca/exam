<div class="questions view">
<h2><?php echo __('Question'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($question['Question']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Section'); ?></dt>
		<dd>
			<?php echo $this->Html->link($question['Section']['title'], array('controller' => 'sections', 'action' => 'view', $question['Section']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($question['Question']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image Path'); ?></dt>
		<dd>
			<?php echo h($question['Question']['image_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($question['Question']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($question['User']['username'], array('controller' => 'users', 'action' => 'view', $question['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($question['Question']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($question['Question']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Question'), array('action' => 'edit', $question['Question']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Question'), array('action' => 'delete', $question['Question']['id']), array(), __('Are you sure you want to delete # %s?', $question['Question']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Answers'), array('controller' => 'answers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Answer'), array('controller' => 'answers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Answers'); ?></h3>
	<?php if (!empty($question['Answer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Question Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Image Path'); ?></th>
		<th><?php echo __('Is Correct'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($question['Answer'] as $answer): ?>
		<tr>
			<td><?php echo $answer['id']; ?></td>
			<td><?php echo $answer['question_id']; ?></td>
			<td><?php echo $answer['name']; ?></td>
			<td><?php echo $answer['description']; ?></td>
			<td><?php echo $answer['image_path']; ?></td>
			<td><?php echo $answer['is_correct']; ?></td>
			<td><?php echo $answer['status']; ?></td>
			<td><?php echo $answer['created']; ?></td>
			<td><?php echo $answer['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'answers', 'action' => 'view', $answer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'answers', 'action' => 'edit', $answer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'answers', 'action' => 'delete', $answer['id']), array(), __('Are you sure you want to delete # %s?', $answer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Answer'), array('controller' => 'answers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
