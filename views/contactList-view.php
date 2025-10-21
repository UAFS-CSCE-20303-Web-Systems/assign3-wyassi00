<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CSCE 20303 | Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar bg-body-tertiary mb-5">
            <div class="container">
                <a class="navbar-brand" href="#">
                <img src="images/logo.png" height="40%" width="40%" alt="UAFS">
                </a>
            </div>
        </nav>
        <div class="container">
            <a href="contactAddController.php" class="btn btn-primary">Add Contact</a>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ContactID</th>
                        <th>User Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        for($index=0;$index<count($contacts);$index++){
                    ?>
                    <tr>
                        <td><?php echo $contacts[$index]->contactID ?></td>
                        <td><?php echo $contacts[$index]->username ?></td>
                        <td><?php echo $contacts[$index]->email ?></td>
                    </tr>
                    <?php
                        }
                    ?>        
                </tbody>
            </table>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>