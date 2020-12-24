<?php

$views = 0;

$visitors_file = "views.txt";

// Load up the persisted value from the file and update $views
if (file_exists($visitors_file))
{
    $views = (int)file_get_contents($visitors_file);
  
}

// Increment the views counter since a new visitor has loaded the page
$views++;

// Save the contents of this variable back into the file for next time
file_put_contents($visitors_file, $views);


  // $views_folder = 'images';
  //
  // //creating a path to images
  //   $images_path = [];
  //
  // // to check if the $views_folder is a directory
  //
  // if(is_dir($views_folder)){
  //   $vsfolder = opendir($views_folder);
  //     // to get the name of the images;
  //     while (($image = readdir($vsfolder)) !== false) {
  //         array_push($images_path,$image);
  //     }
  //
  //     //close the direcroty;
  //     closedir($vsfolder);
  // }
  //
  // var_dump($images_path);

 ?>
