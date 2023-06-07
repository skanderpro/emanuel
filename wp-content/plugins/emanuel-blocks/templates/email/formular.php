<table border="1">
	<tr><td>Geschlecht</td><td><?php echo $params['gender'] ?? '-'; ?></td></tr>
	<tr><td>Vorname</td><td><?php echo $params['vorname'] ?? '-'; ?></td></tr>
	<tr><td>Nachname</td><td><?php echo $params['nachname'] ?? '-' ; ?></td></tr>
	<tr><td>Geburtsdatum</td><td><?php echo $params['date_d'] ?? '-' . '/' . $params['date_m'] ?? '-' . '/' . $params['date_y'] ?? '-'; ?></td></tr>
	<tr><td>Strasse und Hausnummer</td><td><?php echo $params['address'] ?? '-'; ?></td></tr>
	<tr><td>Telefonnummer</td><td><?php echo $params['phone'] ?? '-'; ?></td></tr>
	<tr><td>Nationalität</td><td><?php echo $params['national'] ?? '-'; ?></td></tr>
	<tr><td>Postleitzahl und Ort</td><td><?php echo  $params['post']; ?></td></tr>
    <tr><td>E-mail</td><td><?php echo $params['email'] ?? '-'; ?></td></tr>
</table>