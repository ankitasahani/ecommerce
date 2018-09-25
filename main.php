<!DOCTYPE html>
<html>
<head>
	<title>Grocery</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 
</head>
<body>
    <!-- ------------------navigation---------------------  -->
  <nav class="navbar navbar-default navbar-inverse navbar-inherit" style="border-bottom: 0px; margin-bottom: 0px;border-top-left-radius: 0px; border-bottom-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px;"><!--  navbar-fixed-top -->
      <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
          
                 <a class="navbar-brand" href="#">Grocery</a>
                 <div class="input-group add-on" style="width: 400px; margin-left: 450px; padding-top: 7px;">
      <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text" style="border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit" style="border-top-right-radius: 10px; border-bottom-right-radius: 10px;"><i class="glyphicon glyphicon-search"></i></button>
      </div>
    </div>
           
             
        </div>

       


         
      <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
          	
            <ul class="nav navbar-nav navbar-right">
            	
                <li class="nav-item" ><a href="#" data-toggle="modal" data-target="#login-modal" >Cart</a></li>
                
                <li>
					
  							<a id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Harshit<span class="caret"></span></a>
  							
  							<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    							<li><a href="#">Account</a></li>
    							<li><a href="#">Another action</a></li>
    							<li><a href="#">Something else here</a></li>
    							<li role="separator" class="divider"></li>
    							<li><a href="#" style="text-align: center;">Logout</a></li>
  							</ul>
					
				</li>
               
            </ul>
          </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
    <!-- ------------------end navigation---------------------  -->

    <div class="container" style="background-color:#454647; height: 52px; width: 100%; border-bottom-color: black; border:1px;">
    <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
        	 <ul class="nav navbar-nav navbar-left">
      			<li>
      				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" style="color:#9d9d9d;margin-left: 75px; ">Categories <i class="fa fa-angle-down "></i></a>
                
                  <ul class="dropdown-menu row" style="width: 1314px;">
                    <li class="col-sm-3 col-xs-12">
                      <ul class="list-unstyled">
                        <li><h4>Cooking Needs</h4></li>
                        <li><a href="#">Cooking Oils</a></li>
                        <li><a href="#">Atta & Rice</a></li>
                        <li><a href="#">Dry Fruits</a></li>
                        <li><a href="#">Ghee</a></li>
                        <li><a href="#">Pulses & Cereal</a></li>
                        <li><a href="#">Salt & Sugar</a></li>

                     </ul>
                     <ul class="list-unstyled">
                        <li><h4>Branded Foods</h4></li>
                        <li><a href="#">Breakfast Food</a></li>
                        <li><a href="#">Noodles</a></li>
                        <li><a href="#">Table Spread</a></li>
                        <li><a href="#">Dairy Products</a></li>
                        <li><a href="#">Juices</a></li>
                        <li><a href="#">Tea & Coffee</a></li>
                     </ul>
                    </li>
                    <li class="col-sm-3 col-xs-12">
                      <ul class="list-unstyled">
                        <li><h4>Sport Nutrition</h4></li>
                        <li><a href="#">Proteins</a></li>
                        <li><a href="#">Amino Acids</a></li>
                        <li><a href="#">Gainers</a></li>
                        <li><a href="#">Multivitamins</a></li>
                        <li><a href="#">Protein Bars</a></li>
                        <li><a href="#">Sport Drink</a></li>
                        
                       </ul>
                       <ul class="list-unstyled">
                        <li><h4>Personal Care</h4></li>
                        <li><a href="category.php?link='oral care'" name="oralcare">Oral Care</a></li>
                        <li><a href="#">Bathing Soaps</a></li>
                        <li><a href="#">Shampoos</a></li>
                        <li><a href="#">Handwash</a></li>
                        <li><a href="#">Body Lotions</a></li>
                        <li><a href="#">Cleansers</a></li>
                       </ul>
                    </li>
                    <li class="col-sm-3 col-xs-12">
                      <ul class="list-unstyled">
                        <li><h4>Home Care</h4></li>
                        <li><a href="#">Detergents</a></li>
                        <li><a href="#">Floor Cleaners</a></li>
                        <li><a href="#">Repellants</a></li>
                        <li><a href="#">Foils & Wraps</a></li>
                        <li><a href="#">Toilet Cleaner</a></li>
                        <li><a href="#">Fabric Wash</a></li>
                     </ul>
                     <ul class="list-unstyled">
                        <li><h4>Health Care</h4></li>
                        <li><a href="#">Health Drinks</a></li>
                        <li><a href="#">Herbal Products</a></li>
                        <li><a href="#">Home Remedies</a></li>
                        <li><a href="#">Weight Loss</a></li>
                        <li><a href="#">Supplements</a></li>
                        <li><a href="#">Energy Drinks</a></li>
                     </ul>
                    </li>
                    <li class="col-sm-3 col-xs-12">
                      <ul class="list-unstyled">
                        <li><h4>Baby Care</h4></li>
                        <li><a href="#">Baby Grooming</a></li>
                        <li><a href="#">Baby Oral Care</a></li>
                        <li><a href="#">Baby Food</a></li>
                        <li><a href="#">Baby Gift Sets</a></li>
                        <li><a href="#">Childproofing</a></li>
                        

                     </ul>
                     <ul class="list-unstyled">
                        <li><h4>Men's Gromming</h4></li>
                        <li><a href="#">Razors</a></li>
                        <li><a href="#">Cream & Foams</a></li>
                        <li><a href="#">After Shave</a></li>
                        <li><a href="#">Bathing Needs</a></li>
                        <li><a href="#">Beard Care</a></li>
                        <li><a href="#">Accessories</a></li>
                     </ul>
                    </li>
                    
                  </ul>
      			</li>
      		</ul>

   
        </div>
    </div>

<!-- Columns are always 50% wide, on mobile and desktop -->
<!--<div class="row">
  <div class="col-xs-6"><h3>Cooking Needs</h3><img src="https://www.zerno-ua.com/assets/zerno/img/news/2016_09/v-mire-znachitelno-podorozhalo-prodovolstvie.jpg" class="img-thumbnail" alt="Cooking Needs"  width="304" height="236"></div>
  <div class="col-xs-6"><h3>Branded Foods</h3><img src="https://www.sprouts.com/wp-content/uploads/2017/12/ed_sproutsbrand.jpg" class="img-thumbnail" alt="Branded Foods"  width="304" height="236"></div>
</div>-->


<div class="row">
  <div class="col-md-3">
    <div class="thumbnail">
      <a href="#">
        <img src="https://food.fnr.sndimg.com/content/dam/images/food/fullset/2012/2/16/1/SHP_Pantry_s4x3.jpg.rend.hgtvcom.616.462.suffix/1371603264109.jpeg" alt="Cooking Needs" style="width:100%">
        <div class="caption">
          <p><h3>Cooking Needs</h3></p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-3">
    <div class="thumbnail">
      <a href="#">
        <img src="https://food.fnr.sndimg.com/content/dam/images/food/fullset/2013/12/9/1/FN_grocery-aisle-cereal-thinkstock_s4x3.jpg.rend.hgtvcom.616.462.suffix/1387411528507.jpeg" alt="Branded Food" style="width:100%">
        <div class="caption">
          <p><h3>Branded Food</h3></p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-3">
    <div class="thumbnail">
      <a href="#">
        <img src="https://food.fnr.sndimg.com/content/dam/images/food/fullset/2013/11/7/3/RX-HE_evolution_s4x3.jpg.rend.hgtvcom.616.462.suffix/1385046268551.jpeg" alt="Sport Nutrition" style="width:100%">
        <div class="caption">
          <p><h3>Sport Nutrition</h3></p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-3">
    <div class="thumbnail">
      <a href="#">
        <img src="https://travel.home.sndimg.com/content/dam/images/travel/fullrights/2018/4/27/0/CI_SoapBoxSoaps_DeltaHotelSoap_DisneyVolunteer.jpg.rend.hgtvcom.616.462.suffix/1524843111397.jpeg" alt="Personal Care" style="width:100%">
        <div class="caption">
          <p><h3>Personal Care</h3></p>
        </div>
      </a>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="thumbnail">
      <a href="#">
        <img src="https://diy.sndimg.com/content/dam/images/diy/fullset/2012/5/10/0/TS_124944582_Baking-Soda_s4x3.jpg.rend.hgtvcom.616.462.suffix/1420775192940.jpeg" alt="Home Care" style="width:100%">
        <div class="caption">
          <p><h3>Home Care</h3></p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-3">
    <div class="thumbnail">
      <a href="#">
        <img src="https://food.fnr.sndimg.com/content/dam/images/food/fullset/2016/5/11/0/HE_istock_grocery-store-gluten-free-aisle_s4x3.jpg.rend.hgtvcom.616.462.suffix/1463000488335.jpeg" alt="Health Care" style="width:100%">
        <div class="caption">
          <p><h3>Health Care</h3></p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-3">
    <div class="thumbnail">
      <a href="#">
        <img src="https://images-na.ssl-images-amazon.com/images/I/8181pIfUR5L._SL1500_.jpg" alt="Baby Care" style="width:100%">
        <div class="caption">
          <p><h3>Baby Care</h3></p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-3">
    <div class="thumbnail">
      <a href="#">
        <img src="https://img.etsystatic.com/il/e7c0ee/1515201067/il_570xN.1515201067_phpa.jpg?version=0" alt="Men's Gromming" style="width:100%">
        <div class="caption">
          <p><h3>Men's Gromming</h3></p>
        </div>
      </a>
    </div>
  </div>
</div>
     
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

