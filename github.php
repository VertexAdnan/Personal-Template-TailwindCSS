<?php
function getPosts()
{
    $username = "VertexAdnan";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.github.com/users/" . $username . "/repos");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_USERAGENT, "php/curl");
    curl_setopt($ch, CURLOPT_CAINFO, "E:/xampp\apache\bin\curl-ca-bundle.crt");
    $output = curl_exec($ch);
    $err     = curl_errno($ch);
    $errmsg  = curl_error($ch);
    $info = curl_getinfo($ch);
    curl_close($ch);

//    die(var_dump($output));

    if (!$err) {
        return json_decode($output);
    } else {
        var_dump($errmsg);
    }
}
if (isset($_POST['getPost'])) {
    foreach (getPosts() as $row) {
        echo '<div class="border-2 border-black w-80 h-28 bg-gray-600 hover:bg-gray-900 duration-500">
        <div class="text-white text-center font-bold font-mono">'. $row->name .'</div>
        <div class="text-white text-center font-bold font-mono">'.$row->created_at.'</div>
        <div class="text-white text-center font-bold font-mono max-w-sm">'. substr($row->html_url, 0, 32) .'...</div>
      </div>
      ';
    }
}
