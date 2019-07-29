<?php

//fetch_images.php

$connect = new PDO("mysql:host=localhost;dbname=testing", "root", "");

$query = "SELECT * FROM tbl_images ORDER BY image_id DESC";

$statement = $connect->prepare($query);

$output = '<div class="row">';

if($statement->execute())
{
 $result = $statement->fetchAll();

 foreach($result as $row)
 {
  $output .= '
  <div class="col s12 m6" style="margin-bottom:16px;">
   <img src="data:image/png;base64,'.base64_encode($row['images']).'" class="img-thumbnail" />
  </div>
  ';
 }
}

$output .= '</div>';

echo $output;

?>