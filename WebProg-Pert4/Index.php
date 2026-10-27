<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan CSS dan JavaScript</title>

    <link href="style.css" rel="stylesheet">

    <style>
        
    </style>

</head>
<body>
    
    <div class="rTengah">
    <div class="kartu-profile">
        <h1>Dhifa Dyah Pitaloka</h1>
        <p>Web Programming</p>

        <button id="btnDetail" onclick="detail()"  class="btn-detail" >Info Detail</button>
    </div>
</div>
<div class="rTengah">

    <div class="info-detail" id="infobox">
        <button onclick="tutupDetail()" class="btn-close">&times;</button>
        Informasi detail Dhifa Dyah Pitaloka
    </div>

    <script>
        function detail(){
            //alert("Informasi detail Dhifa Dyah Pitaloka");
            var info = document.getElementById("infobox");
            var btnDetail = document.getElementById("btnDetail");

            if(info.style.display === "none" || info.style.display === ""){
                info.style.display = "block";
                btnDetail.style.display = "none";
            } else{ 
                info.style.display = "none";
            }
        }
    </script>

</body>
</html>