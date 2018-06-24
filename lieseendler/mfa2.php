<?php
    if (isset($_POST['password'])) {
        if($_POST['password'] == 'Jalfrezi'){
            header ('Location: https://drive.google.com/uc?id=1FaCzWJxlVGC67sJFI0qPv_Ymk_vQd3LE&export=download');
        }
        else {
            echo('Wrong password');
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Liese Endler | Download Media</title>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="/css/style.css">
</head>
<body style="background-color: #ddd;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 map">
                <div class="bg-image">
                    <img src="/img/location1.jpg">
                    <aside id="zero" class="zero icon" draggable="true"></aside>
                    <aside id="archivist" class="archivist icon" draggable="true"></aside>
                    <aside id="compiler" class="compiler icon" draggable="true"></aside>
                    <aside id="troublemaker" class="troublemaker icon" draggable="true"></aside>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <h1>Willkommen</h1>
                <h2>Bitte geben Sie das Passwort ein</h2>
                <form action="mfa.php" name="password-form" method="post">
                    <input name="password" type="text" placeholder="Passwort">
                    <input type="submit" class="button" value=">">
                </form>
            </div>
        </div>
        
            
                
    </div>
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script>
        $('.icon').draggable({ containment: ".bg-image" });
        var zero = document.getElementById('zero'); 
        var archivist = document.getElementById('archivist');
        var compiler = document.getElementById('compiler');
        var troublemaker = document.getElementById('troublemaker');
        var item = null;
        document.body.addEventListener('dragstart', function(e){
            item = e.target;
            var style = window.getComputedStyle(item, null);
            e.dataTransfer.setData('text/plain', (parseInt(style.getPropertyValue("left"),10) - e.clientX) + ',' + (parseInt(style.getPropertyValue("top"),10) - e.clientY));
            }, false);
        document.body.addEventListener('dragover', function(e){
            e.preventDefault(); 
            return false; 
            }, false); 
        document.body.addEventListener('drop', function(e){
            var offset = e.dataTransfer.getData("text/plain").split(',');
            item.style.left = (e.clientX + parseInt(offset[0],10)) + 'px';
            item.style.top = (e.clientY + parseInt(offset[1],10)) + 'px';
            e.preventDefault();
            return false;
            }, false);


    </script>
</body>
</html>