<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


</head>

<body>
    <h2>Ajax - change content without page refresh</h2>
    <div id="new"></div>
</body>

<script>
    function loadDoc() {
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("new").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "images.php");
        xhttp.send();
    }
    t = setTimeout("loadDoc()", 3000);
</script>

</html>