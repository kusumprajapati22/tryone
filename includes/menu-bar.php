<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.header-style-1 .header-nav .navbar-default .navbar-collapse .navbar-nav > li > a {
  background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
  color: #ffffff;
  font-family: 'FjallaOneRegular';
  font-size: 18px;
  line-height: 15px;
  padding: 15px 25px;
  text-transform: uppercase;
  -webkit-transitio: all 0.2s linear 0s;
  -moz-transition: all 0.2s linear 0s;
  -o-transition: all 0.2s linear 0s;
  transition: all 0.2s linear 0s;
}
    </style>
</head>
<body>
    
</body>
</html>
<div class="header-nav animate-dropdown">
    <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="nav-bg-class">
                <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
	<div class="nav-outer">
		<ul class="nav navbar-nav">
			<li class="active dropdown yamm-fw">
				<a href="index.php" data-hover="dropdown" class="dropdown-toggle">Home</a>
				
			</li>
              <?php $sql=mysqli_query($con,"select id,categoryName  from category limit 9");
while($row=mysqli_fetch_array($sql))
{
    ?>

			<li class="dropdown yamm">
				<a href="category.php?cid=<?php echo $row['id'];?>"> <?php echo $row['categoryName'];?></a>
			
			</li>
			<?php } ?>

			
		</ul><!-- /.navbar-nav -->
		<div class="clearfix"></div>				
	</div>
</div>


            </div>
        </div>
    </div>
</div>