<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Field</title>
</head>
<body>
    <input type="text" value="" placeholder="nik" name="nik">
    <button type="button" onclick="submitNIK()">Submit</button>

    <!-- <iframe src="https://cekdptonline.kpu.go.id"></iframe> -->

    <div>
        <p>Result</p>
        <hr>
        <p>Nama  : <span class="nama"></span></p>
        <p>Kabupaten  : <span class="kab_id"></span></p>
        <p>Kecamatan  : <span class="kec_id"></span></p>
        <p>Kelurahan  : <span class="kel_id"></span></p>
        <p>TPS  : <span class="tps"></span></p>
        <p>Alamat TPS  : <span class="alamat"></span></p>
    </div>

    <!-- <iframe src="https://cekdptonline.kpu.go.id" width="200" height="200" sandbox="allow-same-origin allow-scripts allow-top-navigation allow-popups allow-pointer-lock allow-forms" name="sandb"></iframe> -->
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
   
   function submitNIK()
    {
        var url = "https://stackblitzstarterseqtgky-wqbp--3000--6a615fc0.local-corp.webcontainer.io/api"
        $.ajax({
            method:'POST',
            url: url,
            data : {
                'nik': $('input[name=nik]').val(),
            },
            success : function (response) { 
                // var response = JSON.parse(responses);
                $('.nama').text(response[0].nama);
                $('.kab_id').text(response[0].kabupaten);
                $('.kec_id').text(response[0].kecamatan);
                $('.kel_id').text(response[0].kelurahan);
                $('.tps').text(response[0].tps);
                $('.alamat').text(response[0].alamat);
             }
        })
        // window.open('https://cekdptonline.kpu.go.id');
        // var url = "https://cekdptonline.kpu.go.id";
        // fetch(url).then(function(response){
        //     response.text().then(function(html){
        //         console.log(html);
        //         // var iframe = document.createElement('iframe');
        //         // document.body.appendChild(iframe);
        //         // iframe.contentWindow.document.open();
        //         // iframe.contentWindow.document.write(html);
        //         // iframe.contentWindow.document.close();
        //     });
        // });

        // fetch("https://cekdptonline.kpu.go.id/", {
        //     "headers": {
                
        //     },
        //     "referrerPolicy": "strict-origin-when-cross-origin",
        //     "body": null,
        //     "method": "GET",
        //     "mode": "cors",
        //     "credentials": "include"
        //     });
        
        
        // popup.onload = function(e) {
    //     setTimeout(function(){ console.log(popup.document.documentElement.outerHTML) }, 2000);
            // console.log($(e).document.documentElement.outerHTML);
        // }
        
        // SendHtmlToParent();
        // function SendHtmlToParent() {
        //     popup.opener.HtmlReceiver(popup.document.outerHTML);
        // }

        // function HtmlReceiver(html) {
        //     console.log(html);
        // }
        
    }
        
    // $(document).ready(function()
    // {
    //     document.domain = 'cekdptonline.kpu.go.id';
    //     document.referrer = 'https://cekdptonline.kpu.go.id'
    //     // document.orig
    // })
   // if (window.top !== window.self) {
    //     document.write = "";
    //     window.top.location = window.self.location;
    //     setTimeout(function () {
    //         document.body.innerHTML = '';
    //     }, 1);
    //     window.self.onload = function (evt) {
    //         document.body.innerHTML = '';
    //     }; 
    // }

    // function submitNIK()
    // {
    //     var data = {
    //         nik : $('input[name=nik]').val()
    //     }
    //     $.ajax({
    //         type: "post",
    //         url: "index.php",
    //         data: data,
    //         success: function (response) {
    //             // console.log(response);
    //             var response = JSON.parse(response);
    //             $('.nama').text(response.nama);
    //             $('.kab_id').text(response.kabupaten);
    //             $('.kec_id').text(response.kecamatan);
    //             $('.kel_id').text(response.kelurahan);
    //             $('.tps').text(response.tps);
    //             $('.alamat').text(response.alamat);
    //         }
    //     });
    // }
</script>
