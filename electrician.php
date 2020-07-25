<?php   

 session_start();  
 $total = 0;
 $connect = mysqli_connect("localhost", "root", ""); 

 if(isset($_POST["addtocart"]))  
 {  
    if(isset($_SESSION["shopping_cart"]))  
    {  
        
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
        if(!in_array($_GET["id"], $item_array_id))  
        {  
             $count = count($_SESSION["shopping_cart"]);  
             $item_array = array(  
                  'item_id'               =>     $_GET["id"],  
                  'item_name'               =>     $_POST["name"],  
                  'item_price'          =>     $_POST["price"] ,
                  'item_quantity'          =>     $_POST["number"]  
             );  
             $_SESSION["shopping_cart"][$count] = $item_array;  
        }  
        else  
        {  
             echo '<script>alert("Item Already Added")</script>';  
             echo '<script>window.location="electrician.php"</script>';  
        }  
    }
    else  
    {  
         $item_array = array(  
              'item_id'               =>     $_GET["id"],  
              'item_name'               =>     $_POST["name"],  
              'item_price'          =>     $_POST["price"],
              'item_quantity'          =>     $_POST["number"]  
         );  
         $_SESSION["shopping_cart"][0] = $item_array; 
    }  
           
 }
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="electrician.php"</script>';  
                }  
           }  
      }  
 }  
 ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>StyleEasyWeb</title>
  <base href="/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<style type="text/css">
	body{
		background-image: url("Fiapy-main-1/images/Background.jpg");
	}
	/*nav*/
	#nav{
	height: 60px;
	padding: 0px;
	}
#search{
	width: 50%;
	margin-right: 10%;
}

/*service-catagories*/
#service-menu{
    height: 100px;
    padding-top: 35px;
}
#service-menu>ul>li{
background-color: white;
border-radius: 20px;
border: .5px solid purple;
color: purple;
width: 165px;
height: 50px;
text-align: center;
margin-left: 10px;
}
#service-menu>ul>li>a{
padding-top: 10px; 
color: purple;
}
/*================Service Catogories=====================*/
#serv-nav{
    margin-bottom: 20px;
    border-radius: 10px; 
    background-color: white; 
    padding: 0px; 
    text-align: center;
    }
    .nav-link{
    color: purple;
    }
    #item{
    padding-top:10px;
    padding-bottom:20px; 
    background-color:white;
    }
    

    .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
        color: #fff;
        background-color: purple;
    }
    /*=================items-list=========================*/

    li{
        padding: 0;
        border: none;
    }
    

    /*======================items============================*/
    #item{
    height: 100px;
    width: 600px; 
    border: 1px solid #ddd; 
    margin-top: 10px; 
    margin-left: 0px; 
    padding-left: 20px;
    }
    #item-img{
    display: inline;
    position: relative;
    }
    #item-img>img{
    height: 80px;
    width: 80px;
    border: 1px solid black;
    margin-top: 10px;
    background: linear-gradient(to bottom, #FDA55F 0%, #FF6270 100%);
    }
    #item-desc{
    display: inline; 
    padding-left: 20px;
    padding-top: 20px;
    }
    #item-desc>p{
    margin-bottom: 0;
    }
    #quantity{
    display: inline;
    margin-left: 0px;
    margin-top: auto;
    margin-bottom: auto;
    }
    #addtocart-btn{
        height:40px;
        width:115px;
        background-color:purple;
        border:none;
        border-radius:10px;
        color:white;
    }
    form {
    width: 130px;
    margin-left: 10px;
    text-align: center;
    padding-top: 0px;
    }
    
    .value-button {
    display: inline-block;
    border: 1px solid #ddd;
    margin: 0px;
    width: 40px;
    height: 40px;
    background-color: purple !important;
    color: white;
    text-align: center;
    vertical-align: middle;
    padding-top: 3px;
    background: #eee;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    }
    
    .value-button:hover {
    cursor: pointer;
    }
    
    form #decrease {
    margin-right: -4px;
    border-radius: 8px 0 0 8px;
    }
    
    form #increase {
    margin-left: -4px;
    border-radius: 0 8px 8px 0;
    }
    
    form #input-wrap {
    margin: 0px;
    padding: 0px;
    }
    
    input#number {
    text-align: center;
    border: none;
    border-top: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
    width: 40px;
    height: 40px;
    }
    
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }

    /*cart*/
    #cart{
    width: 500px; 
    background: white;
    height:450px;
    border-radius: 10px;
    margin-top: 20px;
    }
    #cart-nav{
    height: 60px; 
    text-align: center; 
    padding-top: 10px;
    }
    #items-area{
    background: linear-gradient(to bottom right, #FDA55F 0%, #FF6270 100%);
    height: 390px;
    padding-top: 10px;
    }
    li{
        border: none;
        padding: 0;
        background: transparent;
    }
    #checkout{
    width: 196%;
    height: 50px; 
    margin-top: 10px; 
    margin-right: 10px;
    }
    /*======================cart-item=====================*/
    #cart-items{
        height: 30px;
        border-bottom: 1px solid #ddd;
        padding-left: 10px;
        color: black;
        margin: 10px;
        }
</style>
</head>
<body>
<section>
<nav class="navbar navbar-light bg-light" id="nav">
		<div class="container">
  			<a class="navbar-brand" href="#">
    			<h3>Company Logo</h3>
 			 </a>
 			 <div class="input-group" id="search">
  			<input type="text" class="form-control" aria-label="Text input with segmented dropdown button" placeholder="Search for a service">
  			<button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      			<span class="sr-only">Toggle Dropdown</span>
    		</button>
    		<div class="input-group-append">
    			<div class="dropdown-menu">
      				<a class="dropdown-item" href="#">Action</a>
      				<a class="dropdown-item" href="#">Another action</a>
      				<a class="dropdown-item" href="#">Something else here</a>
      				<div role="separator" class="dropdown-divider"></div>
      				<a class="dropdown-item" href="#">Separated link</a>
    			</div>
  			</div>
  			<input type="text" class="form-control" aria-label="Text input with segmented dropdown button" placeholder="Search for a service">
  			<button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      			<span class="sr-only">Toggle Dropdown</span>
    		</button>
  			<div class="input-group-append">
    			<button type="button" class="btn btn-success">Search</button>
    			<div class="dropdown-menu">
      				<a class="dropdown-item" href="#">Action</a>
      				<a class="dropdown-item" href="#">Another action</a>
      				<a class="dropdown-item" href="#">Something else here</a>
      				<div role="separator" class="dropdown-divider"></div>
      				<a class="dropdown-item" href="#">Separated link</a>
    			</div>
  			</div>
  		</div>
  			<div class="container3">
				<div class="btn-group ">
					<button type="button" class="btn btn-primary-outline"><strong>Login/SignUp</strong></button>
				</div>
			</div>
		</div>
	</nav>
	
</section>

<!-- service-catagories -->
<section>
	<div class="container" id="service-menu">
	<ul class="nav justify-content-center">
  <li class="nav-item" style="background-color:purple;">
    <a class="nav-link" (click)="electrician()"style="color: white;">Electrician</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" (click)="plumber()">Plumber</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" (click)="carpenter()">Carpenter</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" (click)="mechanic()">Mechanic</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" (click)="haircut()">Haircut/salon</a>
  </li>
  <li class="nav-item">
    <a class="nav-link">Link</a>
  </li>
</ul>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
			    <div class="row" style="width: 600px; margin-top: 20px;">
<div class="col-12" style="">
    <nav id="navbar-orders-now-status" class="navbar" style="margin-bottom: 20px;border-radius: 10px; background-color: white; padding: 0px; text-align: center;">
        <ul class="nav nav-pills">
            <li class="nav-item" style="width: 125px;">
                <a class="nav-link" href="#SECTION1" data-turbolinks="false">Switch/Socket</a>
            </li>
            <li class="nav-item" style="width: 80px;">
                <a class="nav-link" href="#SECTION2" data-turbolinks="false">Fan</a>
            </li>
            <li class="nav-item" style="width: 90px;">
                <a class="nav-link" href="#SECTION3" data-turbolinks="false">Light</a>
            </li>
			<li class="nav-item" style="width: 90px;">
                <a class="nav-link" href="#SECTION4" data-turbolinks="false">MCB/Fuse</a>
            </li>
            <li class="nav-item" style="width: 90px;">
                <a class="nav-link" href="#SECTION5" data-turbolinks="false">Wiring</a>
            </li>
			<li class="nav-item" style="width: 90px;">
                <a class="nav-link" href="#SECTION6" data-turbolinks="false">Others</a>
            </li>
        </ul>
    </nav>
</div>

        <!-- ========================Components================== -->
<div class="row" data-spy="scroll" data-target="#navbar-orders-now-status" data-offset="50" style="height: 450px; overflow-y: scroll; background-color:white">
    <div class="col-12">
        <h4 id="SECTION1"></h4>
        <?php
                 $query = "SELECT * FROM `fiapy-db` . `product` where id = 1";  
                 $result = mysqli_query($connect, $query);  
                 if(mysqli_num_rows($result) > 0)  
                {  
                     $row = mysqli_fetch_assoc($result)
                     
                        
               
        ?>
         <form action="/Fiapy-main/electrician.php?action=add&id=<?php echo $row["id"]; ?>" method="post">
        <div class="container-fluid">
			<div style="border-bottom: 1px solid #ddd;"><p style="margin-bottom: 0;">Switches/Sockets</p></div>
            <ul class="list-group">
            <li class="list-group-item" *ngFor="let items of itemList">
            	<div id="item" class="row">
	<div id="item-img"><img src=""></div>
	<div id="item-desc"><p><input name="name" value="<?php echo $row["name"]; ?>" /></p><p><input name="price" value="<?php echo $row["price"]; ?>" /></p></div>
	<div id="quantity">
    <button name="addtocart" id="addtocart-btn" (click)="handelerAddToCart()" *ngIf="quantity===0">Add to cart</button>
        <!-- <form *ngIf="quantity>0"> -->
            <div class="row">
                 <div class="value-button" id="decrease" (click)="decreseItem()" value="Decrease Value" >-</div>
                 <div><input name="number" type="number" id="number" value="1" /></div>
                 <div class="value-button" id="increase" (click)="handelerAddToCart()" value="Increase Value">+</div>
            </div>
        <!-- </form> -->
    </div>
    </form>
    <?php  
                     
                }  
    ?> 
</div>
			</li>
            </ul>
		</div>
        <h4 id="SECTION2"></h4>
        <?php
                 $query = "SELECT * FROM `fiapy-db` . `product` where id = 2";  
                 $result = mysqli_query($connect, $query);  
                 if(mysqli_num_rows($result) > 0)  
                {  
                     $row = mysqli_fetch_assoc($result)
                     
                        
               
        ?>
         <form action="/Fiapy-main/electrician.php?action=add&id=<?php echo $row["id"]; ?>" method="post">
        <div class="container-fluid">
			<div style="border-bottom: 1px solid #ddd;"><p style="margin-bottom: 0;">Switches/Sockets</p></div>
            <ul class="list-group">
            <li class="list-group-item" *ngFor="let items of itemList">
				<div id="item" class="row">
	<div id="item-img"><img src=""></div>
	<div id="item-desc"><p><input name="name" value="<?php echo $row["name"]; ?>" /></p><p><input name="price" value="<?php echo $row["price"]; ?>" /></p></div>
	<div id="quantity">
    <button name="addtocart" id="addtocart-btn" (click)="handelerAddToCart()" *ngIf="quantity===0">Add to cart</button>
        <!-- <form *ngIf="quantity>0"> -->
            <div class="row">
                 <div class="value-button" id="decrease" (click)="decreseItem()" value="Decrease Value" >-</div>
                 <div><input name="number" type="number" id="number" value="1" /></div>
                 <div class="value-button" id="increase" (click)="handelerAddToCart()" value="Increase Value">+</div>
            </div>
        <!-- </form> -->
    </div>
    </form>
    <?php  
                     
                }  
    ?> 
</div>
			</li>
            </ul>
		</div>
        <h4 id="SECTION3"></h4>
        <?php
                 $query = "SELECT * FROM `fiapy-db` . `product` where id = 3";  
                 $result = mysqli_query($connect, $query);  
                 if(mysqli_num_rows($result) > 0)  
                {  
                     $row = mysqli_fetch_assoc($result)
                     
                        
               
        ?>
         <form action="/Fiapy-main/electrician.php?action=add&id=<?php echo $row["id"]; ?>" method="post">
        <div class="container-fluid">
			<div style="border-bottom: 1px solid #ddd;"><p style="margin-bottom: 0;">Switches/Sockets</p></div>
            <ul class="list-group">
            <li class="list-group-item" *ngFor="let items of itemList">
				<div id="item" class="row">
	<div id="item-img"><img src=""></div>
	<div id="item-desc"><p><input name="name" value="<?php echo $row["name"]; ?>" /></p><p><input name="price" value="<?php echo $row["price"]; ?>" /></p></div>
	<div id="quantity">
    <button name="addtocart" id="addtocart-btn" (click)="handelerAddToCart()" *ngIf="quantity===0">Add to cart</button>
        <!-- <form *ngIf="quantity>0"> -->
            <div class="row">
                 <div class="value-button" id="decrease" (click)="decreseItem()" value="Decrease Value" >-</div>
                 <div><input name="number" type="number" id="number" value="1" /></div>
                 <div class="value-button" id="increase" (click)="handelerAddToCart()" value="Increase Value">+</div>
            </div>
        <!-- </form> -->
    </div>
    </form>
    <?php  
                     
                }  
    ?> 
</div>
			</li>
            </ul>
		</div>
        <h4 id="SECTION4"></h4>
        <?php
                 $query = "SELECT * FROM `fiapy-db` . `product` where id = 4";  
                 $result = mysqli_query($connect, $query);  
                 if(mysqli_num_rows($result) > 0)  
                {  
                     $row = mysqli_fetch_assoc($result)
                     
                        
               
        ?>
         <form action="/Fiapy-main/electrician.php?action=add&id=<?php echo $row["id"]; ?>" method="post">
		<div class="container-fluid">
			<div style="border-bottom: 1px solid #ddd;"><p style="margin-bottom: 0;">Switches/Sockets</p></div>
            <ul class="list-group">
            <li class="list-group-item" *ngFor="let items of itemList">
				<div id="item" class="row">
	<div id="item-img"><img src=""></div>
	<div id="item-desc"><p><input name="name" value="<?php echo $row["name"]; ?>" /></p><p><input name="price" value="<?php echo $row["price"]; ?>" /></p></div>
	<div id="quantity">
    <button name="addtocart" id="addtocart-btn" (click)="handelerAddToCart()" *ngIf="quantity===0">Add to cart</button>
        <!-- <form *ngIf="quantity>0"> -->
            <div class="row">
                 <div class="value-button" id="decrease" (click)="decreseItem()" value="Decrease Value" >-</div>
                 <div><input name="number" type="number" id="number" value="1" /></div>
                 <div class="value-button" id="increase" (click)="handelerAddToCart()" value="Increase Value">+</div>
            </div>
        <!-- </form> -->
    </div>
    </form>
    <?php  
                     
                }  
    ?> 
</div>
			</li>
            </ul>
		</div>
        <h4 id="SECTION5"></h4>
        <?php
                 $query = "SELECT * FROM `fiapy-db` . `product` where id = 5";  
                 $result = mysqli_query($connect, $query);  
                 if(mysqli_num_rows($result) > 0)  
                {  
                     $row = mysqli_fetch_assoc($result)
                     
                        
               
        ?>
         <form action="/Fiapy-main/electrician.php?action=add&id=<?php echo $row["id"]; ?>" method="post">
		<div class="container-fluid">
			<div style="border-bottom: 1px solid #ddd;"><p style="margin-bottom: 0;">Switches/Sockets</p></div>
            <ul class="list-group">
            <li class="list-group-item" *ngFor="let items of itemList">
				<div id="item" class="row">
	<div id="item-img"><img src=""></div>
	<div id="item-desc"><p><input name="name" value="<?php echo $row["name"]; ?>" /></p><p><input name="price" value="<?php echo $row["price"]; ?>" /></p></div>
	<div id="quantity">
    <button name="addtocart" id="addtocart-btn" (click)="handelerAddToCart()" *ngIf="quantity===0">Add to cart</button>
        <!-- <form *ngIf="quantity>0"> -->
            <div class="row">
                 <div class="value-button" id="decrease" (click)="decreseItem()" value="Decrease Value" >-</div>
                 <div><input name="number" type="number" id="number" value="1" /></div>
                 <div class="value-button" id="increase" (click)="handelerAddToCart()" value="Increase Value">+</div>
            </div>
        <!-- </form> -->
    </div>
     </form>
    <?php  
                     
                }  
    ?> 


</div>
			</li>
            </ul>
		</div>
        <h4 id="SECTION6"></h4>
        <?php
                 $query = "SELECT * FROM `fiapy-db` . `product` where id = 6";  
                 $result = mysqli_query($connect, $query);  
                 if(mysqli_num_rows($result) > 0)  
                {  
                     $row = mysqli_fetch_assoc($result)
                     
                        
               
        ?>

        <form action="/Fiapy-main/electrician.php?action=add&id=<?php echo $row["id"]; ?>" method="post">
		<div class="container-fluid">
            <div style="border-bottom: 1px solid #ddd;"><p style="margin-bottom: 0;">Switches/Sockets</p></div>
            
            <ul class="list-group">
            <li class="list-group-item" *ngFor="let items of itemList">
				<div id="item" class="row">
	<div id="item-img"><img src="<?php echo $row["image"]; ?>"></div>
	<div id="item-desc"><p><input name="name" value="<?php echo $row["name"]; ?>" /></p><p><input name="price" value="<?php echo $row["price"]; ?>" /></p></div>
	<div id="quantity">
    <button name="addtocart" id="addtocart-btn" (click)="handelerAddToCart()" *ngIf="quantity===0">Add to cart</button>
        <!-- <form *ngIf="quantity>0"> -->
            <div class="row">
                 <div class="value-button" id="decrease" (click)="decreseItem()" value="Decrease Value" >-</div>
                 <div><input name="number" type="number" id="number" value="1" /></div>
                 <div class="value-button" id="increase" (click)="handelerAddToCart()" value="Increase Value">+</div>
            </div>
        <!-- </form> -->
    </div>
</form>
    <?php  
                     
                }  
    ?> 
    
</div>
			</li>
            </ul>
		</div>
    </div>
</div>
</div>		    
</div>

        <!-- ======================= Cart Section ====================== -->
			<div class="col-lg-3">
				<div id="cart">
		<div id="cart-nav"><h3>Cart Items</h3></div>
       
		<div id="items-area">
		<div class="alert alert-info" *ngIf="cartItems.length === 0">Your's Cart</div>
		<div *ngIf="cartItems.length > 0">
			<ul class="list-group">
				<li class="list-group-item" *ngFor="let item of cartItems">
               
                           <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                              
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                    ?>  
					<p id="cart-items"><strong><?php echo $values["item_name"]; ?> X { <?php echo $values["item_quantity"]; ?>}.............{ <?php echo $values["item_price"]; ?>
                     }
                     
                     <td><a href="/Fiapy-main/electrician.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                    <?php  
                                   
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                    </strong></div>
				</li>
			</ul>
			</div>
		</div>
        
	<button type="button" class="btn btn-success" id="checkout"><strong>CheckOut</strong>{<?php echo number_format($total, 2); ?>}</button>
    <?php  
                            }
    ?>  
</div>
			</div>
		</div>
	</div>
   
</section>




  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/5f35b5df4f.js" crossorigin="anonymous"></script>
</body>
</html>