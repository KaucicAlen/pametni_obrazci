<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Začetna Stran</title>
        <style>
            .naslov{
                color: black;
                opacity: 100%;
            }
            .middleDiv{
                opacity: 50%;
            }
            .middleDiv:hover{
                opacity: 100%;
            }

            .mainDiv{

            }
            

        </style>
    </head>
    <body>
    <?php include ("./Engine/php/header.php"); ?>  


    <div style="width: 100%; height: 500px; text-align:center;" class="mainDiv">
        <div style="width: 50%; height: 100%; float: left; background: gray;" class="middleDiv" onclick="preusmeri1()"> 
            <h1 class="naslov"><a href="./Editor/php_vmesnik/index.php" id="p1">Urejevalnik</a></h1> 
        </div>
        <div style="margin-left: 50%; height: 100%; background: lightblue;" class="middleDiv" onclick="preusmeri2()"> 
            <h1 class="naslov"><a href="./Engine/php/index.php" id="p2">Vprašalnik</a></h1>
        </div>
    </div>

    <script>
        function preusmeri1(){
            console.log("Preusmerjam v urejevalnik besedila");
            document.getElementById("p1").click();

        }
        function preusmeri2(){
            console.log("Preusmerjam v vprašalnik");
            document.getElementById("p2").click();

        }
    </script>


    <?php include ("./Engine/php/footer.php"); ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js " integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0 " crossorigin="anonymous "></script>
    </body>
</html>
