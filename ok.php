<?php
include 'curl.php';
include 'config.php';
$tokenlist = array('token1','token2','token3'); // B1: Get token iphone ở phương bách B2 Dán token Get token page ở http://chuyhiep.net/tokenpage/
$token = $tokenlist[rand(0,count($tokenlist)-1)]; 
$feed=json_decode(file_get_contents('https://graph.fb.me/'.$id_share.'/feed?access_token='.$token.'&limit=1'),true); // giơi han 1 id tus dau tien tren wall
for($i=0;$i<count($feed[data]);$i++){
$id = $feed[data][$i][id];  
$slshare = $feed[data][$i][shares][count]; // dem so luong share
} 
$share = explode("_", $id);
$iduser= $share[0];
$idstt= $share[1];  
if($slshare <= $limitshare){
echo post_data("https://graph.facebook.com/".$idstt."/sharedposts?access_token=".$token."&method=post");
}
?>