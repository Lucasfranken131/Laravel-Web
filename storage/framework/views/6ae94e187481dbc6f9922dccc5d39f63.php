<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation Demo</title>
</head>
<body>
    <h2></h2>
    <form method="post" action="<?php echo e(route('form.process')); ?>">
        <?php echo csrf_field(); ?>
        <label for="name">Nome:</label><br>
        <input type="text" id="name" name="name"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Senha</label><br>
        <input type=password id="password" name="password" required><br><br>
        <button type="submit">Registar</button>
</body>
</html><?php /**PATH C:\Users\ADS\Documents\Projeto Laravel\appClienteServidor\resources\views/form.blade.php ENDPATH**/ ?>