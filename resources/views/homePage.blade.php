<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>
    <h1><strong>HomePage</strong></h1>

    <?php  foreach($users as $user)  :?>
        <p><?= $user->first_name ." " . $user->last_name ." "  . $user->email;  ?></p>
    <?php endforeach; ?>
</body>
</html>

