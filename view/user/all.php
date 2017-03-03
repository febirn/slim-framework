<?php

$this->layout('templates/template', ['title' => 'User Profile']);

?>

<h1>All User</h1>
<p>Hello, </p>

<table border="1" cellpadding="5" cellspacing="0">
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