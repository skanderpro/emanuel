<p>House request</p>
<table border="1">
	<tr><td>Name</td><td><?php echo $params['first_name'] ?? '-'; ?></td></tr>
	<tr><td>Email</td><td><?php echo $params['email'] ?? '-'; ?></td></tr>
	<tr><td>Phone</td><td><?php echo $params['phone'] ?? '-'; ?></td></tr>
    <tr><td>Content</td><td><?php echo $params['text'] ?? '-'; ?></td></tr>
</table>