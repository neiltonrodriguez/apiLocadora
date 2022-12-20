<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carregar dados de foto e assinatura</title>
<script>




function chamarFuncao(){
    var url = "https://localhost:8000/api/marca";//Sua URL

    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", url, false);
    xhttp.send();
    
    document.Write("carregando");
}
setInterval(chamarFuncao, 60000);

</script>
</head>
<body>
<span id="t"> </span>  

</body>
</html>