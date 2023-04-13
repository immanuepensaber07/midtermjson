<?php
header("Access-Control-Allow-Origin: *");

$foods = array(
  array(
    "name" => "Belgian Waffles",
    "price" => "599",
    "desc" => ">Two of our famous Belgian Waffles with plenty of real maple syrup",
    "calories" => "650",
    "image" => "https://s3-us-east-2.amazonaws.com/thesaltymarshmallow/wp-content/uploads/2018/08/13130522/belgian-waffles1.jpg"
  ),

  array(
    "name" => "Strawberry Belgian Waffles",
    "price" => "799",
    "desc" => ">Light Belgian waffles covered with strawberries and whipped cream",
    "calories" => "900",
    "image" => "http://3.bp.blogspot.com/_xAZreDhMPfc/THH0jy6w3iI/AAAAAAAAACs/BLtzUObPTcI/s1600/Strawberries4.jpg"
  ),

  array(
    "name" => "Berry Berry Belgian Waffles",
    "price" => "199",
    "desc" => ">Light Belgian waffles covered with an assortment of fresh berries and whipped cream",
    "calories" => "950",
    "image" => "https://i.pinimg.com/originals/a1/b9/fc/a1b9fc4fcebca16667170a6cd01c731f.jpg"
  ),
  
  array(
    "name" => "French Toast",
    "price" => "299",
    "desc" => "Thick slices made from our homemade sourdough bread",
    "calories" => "600",
    "image" => "https://www.thespruceeats.com/thmb/ucRM--oMpuYbTO7O3gOiB8LaTvo=/5190x4062/filters:fill(auto,1)/French-Toast-58addf8e5f9b58a3c9d41348.jpg"
  ),

  array(
    "name" => "Homestyle Breakfast",
    "price" => "399",
    "desc" => "Two eggs, bacon or sausage, toast, and our ever-popular hash browns",
    "calories" => "850",
    "image" => "https://i.pinimg.com/originals/ca/76/69/ca76693197af8ba3d134e3f61cbf70d0.jpg"
  ),
);

echo json_encode(array("foods" => $foods));
?>
