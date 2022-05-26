<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $data['title'];?></title>
    <meta name="description" content="<?php echo $data['description'];?>">
    <meta name="keywords" content="<?php echo $data['keywords'];?>">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <link rel="stylesheet" href="">
  </head>
  <body>
  <h1><?php echo $data['title'] ?? NULL;?></h1>
  <nav>
		<ul>
			<li><a href="<?php echo DIRPAGE;?>">Home</a></li>
			<li><a href="<?php echo DIRPAGE;?>about">About</a></li>
			<li><a href="<?php echo DIRPAGE;?>contact">Contact</a></li>
			<li><a href="<?php echo DIRPAGE;?>privacy">Privacy</a></li>
		</ul>
	</nav>
  <p>This Simple MVC framework for PHP was built for learning purposes. It is perfect if you want to understand the Mode View Controller (MVC) standard. You can also start your own project from scratch.</p>
  <p>This project is available on Github. If you love it you can pay me a beer or download it <a target="_blank" href="https://github.com/givebacks/simple-mvc">here</a> for free.</p>
  <footer><?php echo date("Y");?> © simple-mvc.com</footer>
  </body>
</html>
