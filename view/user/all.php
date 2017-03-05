<?php $this->layout('templates::template', ['title' => 'User Profile']) ?>

<h1>All User</h1>
<div class="table-responsive">
<table class="table table-bordered">
	<tr>
		<th>Nama</th>
		<th>Username</th>
		<th>E-Mail</th>
	</tr>
	<tr>
	<?php foreach ($user as $val) : ?>
		<td><?= $val['name'] ?></td>
		<td><?= $val['username'] ?></td>
		<td><?= $val['email'] ?></td>
	</tr>
	<?php endforeach ?>
</table>
</div>