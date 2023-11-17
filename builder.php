<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <noscript>
      <p>Please enable JavaScript to view this website</p>
      <iframe src="https://cekdptonline.kpu.go.id/"></iframe>
    </noscript>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    var url = "https://cekdptonline.kpu.go.id/";
    $(document).ready(function(){
        $.ajax({
            method:"get",
            url:url,
            success: function(response)
            {
                console.log(response);
            }
        })
    })
</script>
</html>