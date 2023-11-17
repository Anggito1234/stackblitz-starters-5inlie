<?php
$nik = $_POST['nik'];
// $nik = "3603310408000001";
$output = '';
$result = shell_exec("python main.py $nik");
$json  = json_encode($result);
$data = explode('\n', $json);    
$y = explode('(', $data[11]);    
$ys = isset($y[1]) ? $y[1] : '';
if($ys != ""){
    $y = explode(')', $y[1]);
    if($y[0] == "No symbol")
    {
        var_dump("None");
        exit;
    }
}
$js = [
            'nama'=>$data[1], 
            'kabupaten'=>$data[11], 
            'kecamatan'=>$data[13], 
            'kelurahan'=>$data[15], 
            'tps'=>$data[3], 
            'alamat'=>str_replace('\"',"",$data[17])
        ];
echo json_encode($js);