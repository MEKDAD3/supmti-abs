<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/laravel_test/public/assets/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body ng-app="mainApp">

    <form class="form-group" method="post">
        <label for="nom">Nom : </label>
        <input type="text" name="nom" id="nom" class="form-control">
        <label for="prenom">Prénom : </label>
        <input type="text" name="prenom" id="prenom" class="form-control">
        <input type="submit" value="Ajouter" class="btn btn-info">
    </form>
    <button name="btn_send" id="btn_send" class="btn btn-primary">Envoyer</button>

<script type="text/javascript" src="/laravel_test/public/assets/scripts/jquery-2.2.2.min.js"></script>
<script type="text/javascript" src="/laravel_test/public/assets/scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="/laravel_test/public/assets/scripts/angular.min.js"></script>
<script type="text/javascript" src="/laravel_test/public/assets/scripts/angular-animate.min.js"></script>
<script type="text/javascript" src="/laravel_test/public/assets/scripts/angular-resource.min.js"></script>
<script type="text/javascript" src="/laravel_test/public/assets/scripts/angular-route.min.js"></script>
<script type="text/javascript" src="/laravel_test/public/assets/scripts/controllers.js"></script>
<script type="text/javascript" src="/laravel_test/public/assets/scripts/app.js"></script>
</body>
</html>