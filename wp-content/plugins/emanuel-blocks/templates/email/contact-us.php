<p>Contact with me</p>
<table border="1">
    <tr><td>Vorname</td><td><?php echo $params['vorname'] ?? '-'; ?></td></tr>
    <tr><td>Name</td><td><?php echo $params['name'] ?? '-'; ?></td></tr>
    <tr><td>Firma</td><td><?php echo $params['firma'] ?? '-'; ?></td></tr>
    <tr><td>Email</td><td><?php echo $params['email'] ?? '-'; ?></td></tr>
    <tr><td>Telefon</td><td><?php echo $params['telefon'] ?? '-'; ?></td></tr>
    <tr><td>Content</td><td><?php echo $params['text'] ?? '-'; ?></td></tr>
</table>