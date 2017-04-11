<?php
  session_start();

  if(!isset($_SESSION['favorites'])) { $_SESSION['favorites'] = []; }

  function is_favorite($id) {
    return in_array($id, $_SESSION['favorites']);
  }

?>

<!doctype html>
<html lang="en">
<head>
<!-- Meta For character encoding -->
<meta charset="utf-8">
<!-- Meta For Chrome Frame -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--  Meta For Description -->
<meta name="description" content="">
<!--  Meta For Responsive -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>Ajax Button</title>

<!--Simple Files-->
<link rel="stylesheet" href="css/main.css"/>
</head>
<body>
<div id="blog-posts">
      <div id="blog-post-101" class="blog-post <?php if(is_favorite(101)){echo 'favorite';} ?>">
        <span class="favorite-heart">&hearts;</span>
        <h3>Blog Post 101</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque nunc malesuada mauris fermentum commodo. Integer non pellentesque augue, vitae pellentesque tortor. Ut gravida ullamcorper dolor, ac fringilla mauris interdum id. Nulla porta egestas nisi, et eleifend nisl tincidunt suscipit. Suspendisse massa ex, fringilla quis orci a, rhoncus porta nulla. Aliquam diam velit, bibendum sit amet suscipit eget, mollis in purus. Sed mattis ultricies scelerisque. Integer ligula magna, feugiat non purus eget, pharetra volutpat orci. Duis gravida neque erat, nec venenatis dui dictum vel. Maecenas molestie tortor nec justo porttitor, in sagittis libero consequat. Maecenas finibus porttitor nisl vitae tincidunt.</p>
        <button class="favorite-button">Favorite</button>
        <button class="unfavorite-button">Unfavorite</button>
      </div>
      <div id="blog-post-102" class="blog-post <?php if(is_favorite(102)){echo 'favorite';} ?>">
        <span class="favorite-heart">&hearts;</span>
        <h3>Blog Post 102</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque nunc malesuada mauris fermentum commodo. Integer non pellentesque augue, vitae pellentesque tortor. Ut gravida ullamcorper dolor, ac fringilla mauris interdum id. Nulla porta egestas nisi, et eleifend nisl tincidunt suscipit. Suspendisse massa ex, fringilla quis orci a, rhoncus porta nulla. Aliquam diam velit, bibendum sit amet suscipit eget, mollis in purus. Sed mattis ultricies scelerisque. Integer ligula magna, feugiat non purus eget, pharetra volutpat orci. Duis gravida neque erat, nec venenatis dui dictum vel. Maecenas molestie tortor nec justo porttitor, in sagittis libero consequat. Maecenas finibus porttitor nisl vitae tincidunt.</p>
        <button class="favorite-button">Favorite</button>
        <button class="unfavorite-button">Unfavorite</button>
      </div>
      <div id="blog-post-103" class="blog-post <?php if(is_favorite(103)){echo 'favorite';} ?>">
        <span class="favorite-heart">&hearts;</span>
        <h3>Blog Post 103</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque nunc malesuada mauris fermentum commodo. Integer non pellentesque augue, vitae pellentesque tortor. Ut gravida ullamcorper dolor, ac fringilla mauris interdum id. Nulla porta egestas nisi, et eleifend nisl tincidunt suscipit. Suspendisse massa ex, fringilla quis orci a, rhoncus porta nulla. Aliquam diam velit, bibendum sit amet suscipit eget, mollis in purus. Sed mattis ultricies scelerisque. Integer ligula magna, feugiat non purus eget, pharetra volutpat orci. Duis gravida neque erat, nec venenatis dui dictum vel. Maecenas molestie tortor nec justo porttitor, in sagittis libero consequat. Maecenas finibus porttitor nisl vitae tincidunt.</p>
        <button class="favorite-button">Favorite</button>
        <button class="unfavorite-button">Unfavorite</button>
      </div>
    </div>

    




<!-- Jquery Files -->
<!--<script src="js/jquery-3.1.1.min.js"></script>-->
<!-- Simple JavaScript Files -->
<script src="js/simple.js"></script>
</body>
</html>
