<?php
// $curl = curl_init("https://cekdptonline.kpu.go.id/");
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($curl, CURLOPT_COOKIEJAR, 'cookie.txt');
// curl_setopt($curl, CURLOPT_HTTPHEADER, array("Host: cekdptonline.kpu.go.id",
//                                                 "Connection: keep-alive",
//                                                 "Upgrade-Insecure-Requests: 1",
//                                                 "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36",
//                                                 "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8",
//                                                 "Accept-Language: en-US,en;q=0.8",
//                                                 "X-Frame-Options: SAMEORIGIN"));
// curl_setopt($curl, CURLOPT_VERBOSE, TRUE);
// $result = curl_exec ($curl); 
// echo json_encode($result);

require_once 'vendor/autoload.php';

    use GuzzleHttp\Client;

    $client = new Client();
    // $response = $client->get('https://cekdptonline.kpu.go.id');
    $response = $client->request('GET', 'https://cekdptonline.kpu.go.id/', [
        'headers'        => [
                                'Accept-Encoding' => 'gzip', 
                                'Host'=> 'cekdptonline.kpu.go.id',
                                'User-Agent'=> 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36',
                                'Accept'=>'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
                                'X-Frame-Options'=>'SAMEORIGIN'
                            ],
        'decode_content' => 'gzip'
    ]);
    $htmlContent = (string) $response->getBody();

    $dom = new DOMDocument();
    @$dom->loadHTML($htmlContent);

    print_r($dom);
// require(__DIR__ . '/vendor/2captcha/2captcha/src/autoloader.php');
// $solver = new \TwoCaptcha\TwoCaptcha('527b0feb1412bef4a4d6f13e90445633');
// // ReCaptcha
// $sitekey = "";
// $result = $solver->recaptcha([
//     'sitekey' => '6Lcs6gYaAAAAAFgluYoQBea_lCpiT9MkKH-jzhDH',
//     'url'   => 'https://cekdptonline.kpu.go.id',
//     'version' => 'v3',
// ]);

// // die('Captcha solved: ' . $result->code);
// $data = [
//     'query' => 'query {
//         findNikSidalih(
//             nik: "3603310408000003",
//             wilayah_id: 0,
//             token: "'.$result->code.'",
//         ) {
//             alamat
//             provinsi
//             kabupaten
//             kecamatan
//             kelurahan
//             lat
//             lon
//             metode
//             nama
//             nik
//             nkk
//             tps
//             lhp {
//                 alamat
//                 provinsi
//                 kabupaten
//                 kecamatan
//                 kelurahan
//                 lat
//                 lon
//                 metode
//                 nama
//                 nik
//                 nkk
//                 tps
//                 flag
//                 source
//             }
//         }
//     }'
// ];
// $proxy      =   array();
// $proxy[]    =   '1.2.3.4';
// $proxy[]    =   '5.6.7.8';
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, "https://cekdptonline.kpu.go.id/apilhp");
// curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt($ch, CURLOPT_PROXY, $proxy[array_rand($proxy)]);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
// curl_setopt($ch, CURLOPT_HEADER, true);
// curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
// curl_setopt($ch, CURLOPT_HTTPHEADER,
//     array(
//         'Content-Type:application/json',
//         'Origin :https://cekdptonline.kpu.go.id',
//         'Referer: https://cekdptonline.kpu.go.id/',
//         'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36
//         sec-ch-ua: "Google Chrome";v="119", "Chromium";v="119", "Not?A_Brand";v="24"'
//     )
// );
// $result =   curl_exec($ch);

// echo json_encode($result);
// curl_close($ch);