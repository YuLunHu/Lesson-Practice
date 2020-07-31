<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
Test: <input type="text" id="txtTest" />

<div id="report">...</div>

<hr>
<div id="debug"></div>

<script>
    function displayTime() {
        report.innerHTML= Date();
        setTimeout(displayTime, 1000);
        
    }
    displayTime();
    
    // var data = " \r\n";
    // var xhr = new XMLHttpRequest();
    // xhr.open("GET", "LongRequest_Server.php", true);
    // xhr.onprogress = function (e) {
    //     // document.getElementById("debug").innerHTML = xhr.responseText;
    //     responseText = xhr.responseText;
    //     lastEvent = responseText.replace(data, "");
    //     document.getElementById("debug").innerHTML = lastEvent;
    //     data = responseText;
    // }
    // xhr.send(null);
    
</script>

</body>
</html>