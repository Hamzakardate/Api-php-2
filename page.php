
<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field


  $id_var = $_POST['id'];
  if (empty($id_var)) {
    echo "List is empty";
  } else {
    $url="http://localhost/php_api/api/category/read_id.php?id=".$id_var;
    //$client=curl_init($url);
    //$response= curl_exec($client);
    $response= file_get_contents($url);
    $result=json_decode($response);
    //$result->id;
    echo '<br>';

    echo $result->name;
  }
}





?>

<html>
<body>

<form method="post" action="">
  id: <input type="text" name="id">
  <input type="submit">
</form>



</body>
</html>