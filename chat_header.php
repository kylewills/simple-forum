<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="roadster forum" content="">
    <meta name="Kyle" content="">

    <title>Roadster Forum</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">
    <link href="css/styles1.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
     <script>

function ajax(){

var req = new XMLHttpRequest();
req.onreadystatechange = function(){

if(req.readyState == 4 && req.status == 200) {
document.getElementById('chat').innerHTML = req.responseText;   
}      
}
req.open('GET', 'chat.php',true);
req.send();
}
/* set interval will refresh the forums on other peoples pages while chatting */
setInterval(function(){ajax()},1000);
</script>

</head>

<body onload="ajax();">