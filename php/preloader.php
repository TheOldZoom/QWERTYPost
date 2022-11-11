<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="css/preloader.css">
</head>
<body>

<div id="preloader">
    <div class="ring">
    </div>
    <span>Loading..</span>

</div>
</body>
<script >
    var loader = document.getElementById("preloader");
    window.addEventListener("load", function(){
        loader.style.display = "none";
    });
</script>
</html>