<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    </head>
    <body>
        <input id="recherche">
        <div id="autocomplete">
            
        </div>
        <script type="text/javascript">
            $('#recherche').keyup(function() {
                console.log("keyup");
                $.ajax({
                   url: "autocomplete.php",
                   dataType: 'html',
                   data: 'recherche=' + document.getElementById("recherche").value,
                   success : function(code_html, statut){
                       document.getElementById("autocomplete").innerHTML = code_html;
                   }
                });
            });
        </script>
    </body>
</html>
