
<!doctype html>
<html ng-app>
    <head>
        <script src="js/angular.js"></script>
    </head>
    <body>
        <nav>
            <?php require_once 'php/nav.php'; ?>
        </nav>
        <div>
            <label>Name:</label>
            <input type="text" ng-model="yourName" placeholder="Enter a name here">
            <hr>
            <h1>Hello {{yourName}}!</h1>
        </div>
    </body>
</html>