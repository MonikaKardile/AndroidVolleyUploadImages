<?php

if (isset($_POST['image'])) {
    $image = $_POST['image'];
    upload($_POST['image']);
    exit;
}
else {
    echo 'image_not_in';
    exit;
}
function upload($image){
    $now = DateTime::ctrateFromFormat('U.u',microtime(true));
    $id =$now->format('YmdHisu');

    $upload_folder = "upload";
    $path="$upload_folder/$id.jpeg";


    if (file_put_contents($path,base64_decode($image))!=false) {
        echo "uploaded_success";
    }
    else{
        echo "uploaded_failed";

    }
}
?>
