<html lang="en">

<head>
    <title>Electronic Store a Ecommerce Online Shopping Category Bootstrap Responsive Website Template | Home ::
        w3layouts</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //for-mobile-apps -->
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/stylee.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <link rel="stylesheet" href="css/jquery.countdown.css" /> <!-- countdown -->
    <!-- //js -->
    <!-- web fonts -->
    <link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

    <?php
    session_start();
    $keyword = $_POST['search'];
    $_SESSION['key']=$keyword;
    $connection = new mysqli("localhost", "admin", "admin", "dbpost");
    $special = "SELECT * FROM products WHERE ProductName LIKE '%$keyword%' OR ProductSKU LIKE '%$keyword%'";
    
    $tablespecial = mysqli_query($connection, $special);
   


    $total = mysqli_num_rows($tablespecial);

    $limit=6;

    

    if(isset($_GET['page'])){
        $page=$_GET['page'];
    }else{
        $page=1;
    }


    ?>
</head>

<body>
    <!-- header modal -->
    <!-- header -->
    <div class="header" id="home1">
        <div class="container">
            <?php session_start();
            if ($_SESSION['auth'] == false) { ?>
                <div class="w3l_login">
                    <a href="sign_in_up.php"><span class="glyphicon glyphicon-user" aria-hidden="true"><br>Register</span></a>
                </div>
            <?php } else { ?>
                <div class="w3l_login">
                    <a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"><br> Account</span></a>
                    Hi, <?php echo $_SESSION['userfname']; ?>
                </div><?php } ?>
            <div class="w3l_logo">
                <h1><a href="index.php">Electronic Store<span>Your stores. Your place.</span></a></h1>
            </div>
            <div class="search">
                <input class="search_box" name="search" type="checkbox" id="search_box">
                <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
                <div class="search_form">
                    <form action="search_integration.php" method="post">
                        <input type="text" name="search" placeholder="Search...">
                        <input type="submit" value="Send">
                    </form>
                </div>
                <div id="display"></div>
            </div>
            <div class="cart cart box_1">
                <form action="#" method="post" class="last">
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="display" value="1" />
                    <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
                </form>
				<?php session_start(); 
				if($_SESSION['auth']){ ?>
				<form method="post">
					<input type="submit" name="sign-out" value="sign-out">
				</form>
				<?php }?>

                <?php if (isset($_POST['sign-out'])) {
                    $flag = 1;
                    session_destroy();
                    header("Location:sign_in_up.php?flag=$flag");
                } ?>
            </div>
        </div>
    </div> <!-- //header -->
    <!-- navigation -->
    <div class="navigation">
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php" class="act">Home</a></li>
                        <!-- Mega Menu -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <ul class="multi-column-dropdown">
                                            <h6>Mobiles</h6>
                                            <li><a href="products.php">Mobile Phones</a></li>
                                            <li><a href="products.php">Mp3 Players <span>New</span></a></li>
                                            <li><a href="products.php">Popular Models</a></li>
                                            <li><a href="products.php">All Tablets<span>New</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <ul class="multi-column-dropdown">
                                            <h6>Accessories</h6>
                                            <li><a href="products1.php">Laptop</a></li>
                                            <li><a href="products1.php">Desktop</a></li>
                                            <li><a href="products1.php">Wearables <span>New</span></a></li>
                                            <li><a href="products1.php"><i>Summer Store</i></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-2">
                                        <ul class="multi-column-dropdown">
                                            <h6>Home</h6>
                                            <li><a href="products2.php">Tv</a></li>
                                            <li><a href="products2.php">Camera</a></li>
                                            <li><a href="products2.php">AC</a></li>
                                            <li><a href="products2.php">Grinders</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w3ls_products_pos">
                                            <h4>30%<i>Off/-</i></h4>
                                            <img src="images/1.jpg" alt=" " class="img-responsive" />
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </ul>
                        </li>
                        <li><a href="about.php">About Us</a></li>
                        <li class="w3pages"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="icons.php">Web Icons</a></li>
                                <li><a href="codes.php">Short Codes</a></li>
                            </ul>
                        </li>
                        <li><a href="mail.php">Mail Us</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <br><br>
    <center>
        <label style="font-size:30px ;">You have searched for :<span style="color:Blue ;"> <?php session_start(); echo $_SESSION['key'] ?></span></label><br><br>
    </center>
    <?php if(strlen($keyword)>2){
     $offset = ($page-1)*$limit;
    $pages = ceil ($total / $limit);
    
            if($total>$limit){

            ?>
            <ul class="pagination pt-2 pd-5" style="align-items: center;
    justify-content: center;
    display: flex;">
                <?php
                for($i=1;$i<=$pages;$i++){ 
                    ?>
                    <li class="page-item <?= ($i==$page)?$active='active':'';?>">
                        <a href="search_integration.php?keyword=<?=$keyword?>&page=<?=$i?>" class="page-link">
                            <?= $i ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>

            <?php } ?>
            <?php
           
        //Offset to limit show
   $special1 = "SELECT * FROM products WHERE ProductName like '%$keyword%' OR ProductSKU LIKE '%$keyword%' LIMIT $offset,$limit";

   $tablespecial1 = mysqli_query($connection, $special1);
   ?>
           
    <?php while ($row = mysqli_fetch_array($tablespecial1)) {
    ?>
        <div class="w3ls_mobiles_grid_right_grid3">
            <div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
                <div class="agile_ecommerce_tab_left mobiles_grid">
                    <div class="hs-wrapper hs-wrapper2">
                        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['ProductImage']); ?>">
                        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['ProductImage']); ?>">
                        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['ProductImage']); ?>">
                        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['ProductImage']); ?>">
                        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['ProductImage']); ?>">
                        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['ProductImage']); ?>">
                        <div class="w3_hs_bottom w3_hs_bottom_sub1">
                            <ul>
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#myModal9"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h5><a href="#"><?php echo $row['ProductName']; ?></a></h5>
                    <div class="simpleCart_shelfItem">
                        <p><span>$250</span> <i class="item_price"><?php echo $row['ProductPrice']; ?></i></p>
                        <form action="#" method="post">
                            <input type="hidden" name="cmd" value="_cart" />
                            <input type="hidden" name="add" value="1" />
                            <input type="hidden" name="w3ls_item" value="<?php echo $row['ProductName']; ?>" />
                            <input type="hidden" name="amount" value="245.00" />
                            <button type="submit" class="w3ls-cart">Add to cart</button>
                        </form>
                    </div>
                    <div class="mobiles_grid_pos">
                        <h6>New</h6>
                    </div>
                </div>
            </div>
        <?php
    }
}
else if(strlen($keyword)<=2){
        ?>
        <center>
            <div style="background-color:pink; width:25%;" id="3char">
                <?php echo "Please enter atleast 3 charactors for search"; ?>
            </div>
        </center><br><br>
        <script>
            jQuery(document).ready(function($) {
                $('#3char').fadeOut(8000);
            });
        </script>
<?php }
if($total==0){
    ?>
     <center>
            <div style="background-color:pink; width:25%;" id="char">
                <?php echo "No Result found for this Search"; ?>
            </div>
        </center><br><br>
        <script>
            jQuery(document).ready(function($) {
                $('#char').fadeOut(8000);
            });
        </script>
<?php }?>
        <div class="footer">
            <div class="container">
                <div class="w3_footer_grids">
                    <div class="col-md-3 w3_footer_grid">
                        <h3>Contact</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                        <ul class="address">
                            <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block,
                                <span>New York City.</span>
                            </li>
                            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
                            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
                        </ul>
                    </div>
                    <div class="col-md-3 w3_footer_grid">
                        <h3>Information</h3>
                        <ul class="info">
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="mail.php">Contact Us</a></li>
                            <li><a href="codes.php">Short Codes</a></li>
                            <li><a href="faq.php">FAQ's</a></li>
                            <li><a href="products.php">Special Products</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 w3_footer_grid">
                        <h3>Category</h3>
                        <ul class="info">
                            <li><a href="products.php">Mobiles</a></li>
                            <li><a href="products1.php">Laptops</a></li>
                            <li><a href="products.php">Purifiers</a></li>
                            <li><a href="products1.php">Wearables</a></li>
                            <li><a href="products2.php">Kitchen</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 w3_footer_grid">
                        <h3>Profile</h3>
                        <ul class="info">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="products.php">Today's Deals</a></li>
                        </ul>
                        <h4>Follow Us</h4>
                        <div class="agileits_social_button">
                            <ul>
                                <li><a href="#" class="facebook"> </a></li>
                                <li><a href="#" class="twitter"> </a></li>
                                <li><a href="#" class="google"> </a></li>
                                <li><a href="#" class="pinterest"> </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="footer-copy">
                <div class="footer-copy1">
                    <div class="footer-copy-pos">
                        <a href="#home1" class="scroll"><img src="images/arrow.png" alt=" " class="img-responsive" /></a>
                    </div>
                </div>
                <div class="container">
                    <p>&copy; 2017 Electronic Store. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
                </div>
            </div>
        </div>
        <!-- //footer -->
        <!-- cart-js -->
        <script src="js/minicart.js"></script>
        <script>
            w3ls.render();

            w3ls.cart.on('w3sb_checkout', function(evt) {
                var items, len, i;

                if (this.subtotal() > 0) {
                    items = this.items();

                    for (i = 0, len = items.length; i < len; i++) {}
                }
            });
        </script>
        <!-- //cart-js -->
</body>

</html>