<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>The yummi pizza</title>
    <link rel="stylesheet" href="theme.css">
  <body>
  <?php include("Connection.php");?>
  <header id="navbar" style="margin-bottom:30px;">
			<div class="container">
				<div id="branding">
					<img src="pica1.png" >
					<h1>the yummi pizza</h1>
				</div>
				<nav>
					<ul>
					
						<li><a href="menu.html">Menu</a></li>
						<li class="current"><a href="index.php">Order</a></li>
						
						
					</ul>
				</nav>
			</div>
		</header>
  
    <div class="site-wrapper">
      <div class="order-menu-wrapper">
        <div class="order-menu" onclick="funkcija();">   
          <section>
            <h2 class="color text-center">Pizza</h2>
            <article id="chicken-pizza" class="food-item price-right">
              <header>
                <h3 class="pica">Margherita</h3>
                <h4 class="price"><span>$ </span>9</h4>
                <div class="quantity">
                  <button class="minus">-</button><span class="num">0</span>
                  <button class="plus">+</button>
                </div>
              </header>
              
            </article>
            <article id="chicken-pizza" class="food-item price-right">
              <header>
                <h3 class="pica">Capricciosa</h3>
                <h4 class="price"><span>$ </span>11</h4>
                <div class="quantity">
                  <button class="minus">-</button><span class="num">0</span>
                  <button class="plus">+</button>
                </div>
              </header>
             
            </article>
            <article id="chicken-pizza" class="food-item price-right">
              <header>
                <h3 class="pica">Prosciutto</h3>
                <h4 class="price"><span>$ </span>12</h4>
                <div class="quantity">
                  <button class="minus">-</button><span class="num">0</span>
                  <button class="plus">+</button>
                </div>
              </header>
              
            </article>
            <article id="chicken-pizza" class="food-item price-right">
              <header>
                <h3 class="pica">Quattro Formaggi</h3>
                <h4 class="price"><span>$ </span>11</h4>
                <div class="quantity">
                  <button class="minus">-</button><span class="num">0</span>
                  <button class="plus">+</button>
                </div>
              </header>
             
            </article>
            <article id="chicken-pizza" class="food-item price-right">
              <header>
                <h3 class="pica">Funghi</h3>
                <h4 class="price"><span>$ </span>11</h4>
                <div class="quantity">
                  <button class="minus">-</button><span class="num">0</span>
                  <button class="plus">+</button>
                </div>
              </header>
             
            </article>
            <article id="chicken-pizza" class="food-item price-right">
              <header>
                <h3 class="pica">Spiced chicken-pizza</h3>
                <h4 class="price"><span>$ </span>11</h4>
                <div class="quantity">
                  <button class="minus">-</button><span class="num">0</span>
                  <button class="plus">+</button>
                </div>
              </header>
            </article>
           
            <article id="chicken-pizza" class="food-item price-right">
              <header>
                <h3 class="pica">Healthy pizza</h3>
                <h4 class="price"><span>$ </span>11</h4>
                <div class="quantity">
                  <button class="minus">-</button><span class="num">0</span>
                  <button class="plus">+</button>
                </div>
              </header>
             
            </article>            
            <article id="chicken-pizza" class="food-item price-right">
              <header>
                <h3 class="pica">Tuna pizza</h3>
                <h4 class="price"><span>$ </span>12</h4>
                <div class="quantity">
                  <button class="minus">-</button><span class="num">0</span>
                  <button class="plus">+</button>
                </div>
              </header>
            
            </article>            
            <article id="chicken-pizza" class="food-item price-right">
              <header>
                <h3 class="pica">Anchovies pizza</h3>
                <h4 class="price"><span>$ </span>12</h4>
                <div class="quantity">
                  <button class="minus">-</button><span class="num">0</span>
                  <button class="plus">+</button>
                </div>
              </header>
              
            </article>             
            <article id="chicken-pizza" class="food-item price-right">
              <header>
                <h3 class="pica">Calzona</h3>
                <h4 class="price"><span>$ </span>11</h4>
                <div class="quantity">
                  <button class="minus">-</button><span class="num">0</span>
                  <button class="plus">+</button>
                </div>
              </header>
              
            </article>
			
			<div class="divv" align="center">
			
			 
          <div class="order-review hidden" align="center">
            <h2 class="color text-center">Your order</h2>
            
            <form method="post">
			<div class="order-footer">
				<h6 class="price text-center color" >Total: $ <span id="cjn">0</span></h6>
				<input type="hidden" id="skriveni" name="cijena" >
            </div >
			<label id="order-summary"></label>
			<input type="hidden" id="skrivenii" name="narudzba">
            
            <h2 class="color text-center">Delivery information</h2>
              <div class="form-group">
                <input type="text" placeholder="Name" id="order-name" name="name">
              </div>
              
              <div class="form-group">
                <input type="tel" placeholder="Telephone" id="order-phone" name="phone">
              </div>
              <div class="form-group">
                <input type="text" placeholder="Address" id="order-address" name="address">
              </div>
              <div class="form-group">
                <textarea placeholder="Add Notes" name="note" class="order-notes hidden"></textarea>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <button data-menu-order="place" type="submit" class="btn btn-md">Order</button>
                </div>
              </div>
            </form>
          </div> 
			</div>		  
          </section>         
        
        </div>
      </div>
  
     
    
      <script src="jquery.js.download"></script>
      <script src="theme.js.download"></script>
      <script src="carousel.js.download"></script>
      <script src="jquery.touchSwipe.js.download"></script>
      <script src="imagesloaded.js.download"></script>
	  
    </div>
  <footer>
			<h4>theyummipizza, Copyright &copy; 2020</h4>
	</footer>
	<script>
	function funkcija(){
		document.getElementById('order-summary').innerHTML="";
		var elements=document.getElementsByClassName('pica');
		var kolicina=document.getElementsByClassName('num');
		//var ul = document.getElementById("order-summary");

		for (var i = 0; i < elements.length; i++) {
		if(kolicina[i].innerHTML=="0")continue;
		var el = elements[i].innerHTML;
		var br=kolicina[i].innerHTML;
		//var li = document.createElement('li');
		document.getElementById('order-summary').innerHTML += el+" - "+br+"<br/>";  
		
		
		
}
		document.getElementById('skriveni').value=document.getElementById('cjn').innerHTML;
		document.getElementById('skrivenii').value=document.getElementById('order-summary').innerHTML;
}

	  </script>
	  <?php 
			if(isset($_POST['name'])&&isset($_POST['phone'])&&isset($_POST['address'])&&isset($_POST['note'])){
						
						$x=$kon->prepare("insert into narudzba (customer_name,customers_order,phone,address,prize,comment) values (?,?,?,?,?,?)");
						$ime=$_POST['name'];
						$narudzba=$_POST['narudzba'];
						$tel=$_POST['phone'];
						$adr=$_POST['address'];
						$cijena=$_POST['cijena'];
						$komentar=$_POST['note'];
						
						$x->bind_param("ssssss", $ime,$narudzba,$tel,$adr,$cijena,$komentar);
						$x->execute();
						$x->close();
						
				}
?>

</body>
</html>