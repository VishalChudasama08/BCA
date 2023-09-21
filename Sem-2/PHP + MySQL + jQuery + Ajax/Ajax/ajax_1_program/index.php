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
    <a href="#" onclick="loadDoc('page1.html')">page 1</a> |
    <a href="#" onclick="loadDoc('page2.html')">page 2</a> |
    <a href="#" onclick="loadDoc('page3.html')">page 3</a>
    <div id="new"></div>
</body>

<script>
    function loadDoc(page) {
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("new").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", page);
        xhttp.send();
    }
</script>

</html>