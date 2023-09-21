<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


</head>

<body>
    <h2>Fetch Data From MySQL using Ajax</h2>
    <input type="text" id="String" onkeyup="loadDoc(this.value)" style="display: flex; position: absolute; top: 12%;">
    <div id="new"></div>
</body>

<script>
    function loadDoc(s) {
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("new").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "customer.php?str=" + s + "");
        // document.write(xhttp);
        xhttp.send();
    }
</script>

</html>