<html>
<head>
<title>Users Detail </title>
</head>
<body>

<h1>User acc Detail</h1>
<table>
<tr>
<td>First name</td>
<td>Acc no</td>
</tr>
<?php foreach($users as $key => $user):    ?>


<tr>
<td><?php echo $user['firstname'];  ?></td>
<td><?php echo $user['AccNo'];  ?></td>
<?php endforeach; ?>
</tr>
</table>
</body>
</html>