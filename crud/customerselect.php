
<!DOCTYPE HTML>
<html>
<head>
<title>Valley View Furniture</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href='http://fonts.googleapis.com/css?family=Milonga' rel='stylesheet' type='text/css'>
<script type="text/javascript">
function validation()
{
document.getElementById("msg").textContent=""

   var x=document.f1.textbox.value;  
  if( /^[A-z ]+$/.test(x))

  {
   return true;

}
 document.getElementById("msg").innerHTML = "<span style='color:red'>Special Charecters and Numerics are not allowed</span>";


return false;

}
</script>
</head>
<body>
  <div class="header">
     <div class="header_top">
       <div class="wrap">
          <div class="social-icons">          
                    <ul>
                       
                       
                        <div class="clear"></div>
                    </ul>
            </div>
          <div class="menu">
              <ul>
              <li ><a href="index.html">Home</a></li>
              <li class="active"><a href="customerselect.php">Customer Details</a></li>
              <li><a href="productselect.php">Product Details</a></li>
              <li><a href="invoiceselect.php">Invoice</a></li>
              <li><a href="billselect.php">Bill of Materials</a></li>
              <li><a href="routingselect.php">Routing</a></li>
                <li><a href="aboutus.php">About Us</a></li>
              <div class="clear"></div>
            </ul>
          </div>
           <div class="clear"></div>
         </div>
      </div>
          <div class="logo">
              <a href="index.html"><h1><span>V</span>alleyView <span>F</span>urniture</h1></a>
      </div>  
  </div>    
   <div class="wrap">
     <div class="main">
      <div class="content">
       
        <div class="section group">
        <div class="cont span_2_of_3">
           <h2>Select Customer</h2>
               
               <form align='center'class="form-inline" name='f1'role="form" action='customer.php' onsubmit="return validation();" method='post'>
  <div class="form-group">
      <br>
    <label for="name">Customer Name:</label>
    <input type="text" class="form-control" name='textbox' id="inputTextBox" required>
    <br>  <br>
    <div id="msg"></div>
  </div>
  <br>  
  <button type="submit" class="btn btn-default">Submit</button>
  <br>  <br>  <br>
</form>

        </div>
        <div class="rsidebar sidebar">
              <h2>Quick Links</h2>
               <ul>
                         <li>Product Details</a></li>
                   <li>Invoice</a></li>
                    <li>Bill of Materials</a></li>
                    <br> 
                
              </ul>
              
            </div>  
            <div class="sidebar-bottom">
                
            </div>      
          </div>
        </div>         
    </div> 
    </div>  
     </div> 
       <br>  <br>  <br>
<div class="footer">
     <div class="wrap">
     <div class="footer_grides">
       <div class="section group">
        <div class="col_1_of_4 span_1_of_4">
          <h3>Latest Tweets</h3>
            <div class="post">
                <p><span><a href="#">Tuesday,June 31th,2015</a></span></p>
                <p><span><a href="#">[...]</a></span></p>
               </div>
               <div class="post">
                <p><span><a href="#">Monday,May 21th,2015</a></span></p>
                <p><span><a href="#">[...]</a></span></p>
               </div>
        </div>
        <div class="col_1_of_4 span_1_of_4">
          <h3>Connect With Us</h3>
          <div class="social_icons">
                  <ul>
                      <li><a href="#" class="facebook">
                          <span class="icon"> &nbsp;</span> <span class="inner"><strong>Facebook</strong> <br>+ 12, 297</span>
                        </a></li>
                        <li><a href="#" class="twitter">
                          <span class="icon"> &nbsp;</span> <span class="inner"><strong>Twitter</strong> <br>+ 5, 287</span>
                        </a></li>
                         <li><a href="#" class="rss">
                          <span class="icon"> &nbsp;</span> <span class="inner"><strong>Rss</strong> <br>+ 77, 287</span>
                        </a></li>
                    </ul>
                </div>
        </div>
        <div class="col_1_of_4 span_1_of_4">
          <h3>Navigate</h3>
                    <ul>
                       <li class="active"><a href="index.html">Home</a></li>
              <li><a href="customerselect.php">Customer Details</a></li>
              <li><a href="ProductSelect.php">Product Details</a></li>
              <li><a href="contact.html">Invoice</a></li>
              <li><a href="contact.html">Bill of Materials</a></li>
              <li><a href="contact.html">Routing</a></li>
            
                   </ul>
        </div>
        <div class="col_1_of_4 span_1_of_4">
          <h3>Location</h3>
                <ul>
                  <li>USA</li>
              </ul>
        </div>
      </div>
      </div>
  </div>
     <div class="copy_right">
       <div class="wrap">
        <p>Valley View Furniture Company © All Rights Reseverd | </a></p>
       </div>
    </div>  
</body>
</html>

