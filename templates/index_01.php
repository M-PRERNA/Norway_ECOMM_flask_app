

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0" >
    <meta http-equiv = "X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap css library -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/stylesheet_01.css" >
    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/sticky-footer/">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <title>Kamseen Orders Form</title>

</head>

<body> 
    <header><center><h2>KAMSEEN ORDERS FORM</h2></center></header>
    
    <div class="container">

<!--Form begins-->
        <form id="orderform" action = "./" method="post" novalidate >
            
            <span class="cus-name">
                <label for="name"><strong> Customer Name:</strong></label>  
                <input type="text" name="customer-name" id="name">
            </span>
            <span class="ord-date">
                <label for="order-date"> Ordered On:</label> 
                <input type="date" name="order-date" id="order-date">
            </span>
            <span class="del-date">
                <label for="delivery-date">Deliver By:</label>  
                <input type="date" name="delivery-date" id="delivery-date">
            </span>
        
            <div class="wrk-status">
                <label for="work-in-progress"> Order Status:</label> 
                Work in Progress: <input type="radio" name="status" id="work-in-progress" value="work-in-progress"> 
                Completed: <input type="radio" name="status" id="completed" value="completed"> 
                Pending: <input type="radio" name="status" id="pending" value="pending"> 
                Cancelled: <input type="radio" name="status" id="cancelled" value="cancelled"> 
            </div>
            <div class="form-group fieldGroup">
                <span class="frag-group">
                    <label for="fragrance"><strong>Fragrance Type:</strong></label>
                    <select name="fragrance-type" id="fragrance">
                    <option value="KUSH">KUSH</option>
                    <option value="17TH MAI">17TH MAI</option>
                    <option value="JINGLES">JINGLES</option>
                    <option value="FIR">FIR</option>
                    <option value="WREATH">WREATH</option>
                    <option value="JOY">JOY</option>
                    <option value="BELLS">BELLS</option>
                    <option value="NORDLYS">NORDLYS</option>
                    <option value="KAPAS">KAPAS</option>
                    <option value="CAROLS">CAROLS</option>
                    <option value="MADHU">MADHU</option>
                    <option value="FJORDS & FJELL">FJORDS & FJELL</option>
                    <option value="PARI">PARI</option>
                    <option value="MERRY">MERRY</option>
                    <option value="FIRESIDE">FIRESIDE</option>
                    <option value="ELVES">ELVES</option>
                    <option value="TAZA">TAZA</option>
                    <option value="SAMISK">SAMISK</option>
                    <option value="LAVONILLA">LAVONILLA</option>
                    <option value="VIKINGS">VIKINGS</option>
                    <option value="MOJITO">MOJITO</option>
                    <option value="EROS">EROS</option>
                    <option value="GLOG">GLOG</option>
                    <option value="NUTCARCKER">NUTCARCKER</option>
                    <option value="BEWITCHED">BEWITCHED</option>
                    <option value="SAGAR">SAGAR</option>
                    <option value="BLOOMING">BLOOMING</option>
                    <option value="BAZAAR">BAZAAR</option>
                    <option value="VIVAAH">VIVAAH</option>
                    <option value="MAYA">MAYA</option>
                    <option value="ALLURE">ALLURE</option>
                    <option value="GULAAB">GULAAB</option>
                    <option value="TROLLS">TROLLS</option>
                    <option value="CHEER LEMON">CHEER LEMON</option>
                    <option value="HUGS">HUGS</option>
                    <option value="THE WISH">THE WISH</option>
                    <option value="L'AMOUR">L'AMOUR</option>
                    <option value="PRANA">PRANA</option>
                    <option value="LUBH">LUBH</option>
                    <option value="FROST">FROST</option>
                    <option value="HOLLY">HOLLY</option>
                    </select>
                </span>

                <span class="container-group">
                    <label for="container"><strong>Container Type:</strong></label> 
                        <select name="container-type" id="container">
                            <option value="20-CL-Glass">20 CL Glass</option>
                            <option value="30-CL-Glass">30 CL Glass</option>
                            <option value="silver-tin">Silver Tin</option>
                            <option value="Rose-Gold-Tin">Rose Gold Tin</option>
                            <option value="Gold-Tin">Gold Tin</option>
                        </select>
                </span>

                <span class="qty">
                    <label for="order-quantity"><strong>Quantity: </strong></label> <input type="number" name="quantity" id="order-quantity">
                </span>
                <span class="button-addmore"> 
                    <a href="javascript:void(0)" class="btn btn-success addMore"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                </span>

            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="SUBMIT"/>
            
        </form>
<!--form ends-->

<!--Repeating Group-->
        <div class="form-group fieldGroupCopy" style="display: none;">
            <span class="frag-group">
            <label for="fragrance"><strong>Fragrance Type:</strong></label>
            <select name="fragrance-type" id="fragrance">
            <option value="KUSH">KUSH</option>
            <option value="17TH MAI">17TH MAI</option>
            <option value="JINGLES">JINGLES</option>
            <option value="FIR">FIR</option>
            <option value="WREATH">WREATH</option>
            <option value="JOY">JOY</option>
            <option value="BELLS">BELLS</option>
            <option value="NORDLYS">NORDLYS</option>
            <option value="KAPAS">KAPAS</option>
            <option value="CAROLS">CAROLS</option>
            <option value="MADHU">MADHU</option>
            <option value="FJORDS & FJELL">FJORDS & FJELL</option>
            <option value="PARI">PARI</option>
            <option value="MERRY">MERRY</option>
            <option value="FIRESIDE">FIRESIDE</option>
            <option value="ELVES">ELVES</option>
            <option value="TAZA">TAZA</option>
            <option value="SAMISK">SAMISK</option>
            <option value="LAVONILLA">LAVONILLA</option>
            <option value="VIKINGS">VIKINGS</option>
            <option value="MOJITO">MOJITO</option>
            <option value="EROS">EROS</option>
            <option value="GLOG">GLOG</option>
            <option value="NUTCARCKER">NUTCARCKER</option>
            <option value="BEWITCHED">BEWITCHED</option>
            <option value="SAGAR">SAGAR</option>
            <option value="BLOOMING">BLOOMING</option>
            <option value="BAZAAR">BAZAAR</option>
            <option value="VIVAAH">VIVAAH</option>
            <option value="MAYA">MAYA</option>
            <option value="ALLURE">ALLURE</option>
            <option value="GULAAB">GULAAB</option>
            <option value="TROLLS">TROLLS</option>
            <option value="CHEER LEMON">CHEER LEMON</option>
            <option value="HUGS">HUGS</option>
            <option value="THE WISH">THE WISH</option>
            <option value="L'AMOUR">L'AMOUR</option>
            <option value="PRANA">PRANA</option>
            <option value="LUBH">LUBH</option>
            <option value="FROST">FROST</option>
            <option value="HOLLY">HOLLY</option>
            </select>
        </span>

            <span class="container-group">
                <label for="container"><strong>Container Type:</strong></label> 
                    <select name="container-type" id="container">
                        <option value="20-CL-Glass">20 CL Glass</option>
                        <option value="30-CL-Glass">30 CL Glass</option>
                        <option value="silver-tin">Silver Tin</option>
                        <option value="Rose-Gold-Tin">Rose Gold Tin</option>
                        <option value="Gold-Tin">Gold Tin</option>
                    </select>
                </span>
            <span class="qty">
                <label for="order-quantity"><strong>Quantity: </strong></label> <input type="number" name="quantity" id="order-quantity">
            </span>

        

            <span class="button-remove"> 
                <a href="javascript:void(0)" class="btn btn-danger remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> 
                    </a>
            </span>

        </div>
<!--repeating group ends-->
<!--footer start-->
        <footer class="footer">
            
              <span > 2021 &copy; WWW.KAMSEEN.NO</span>
           
          </footer>
<!--footer ends-->
    </div>

<script>
    $(document).ready(function(){
        //group add limit
        var maxGroup = 10;
        
        //add more fields group
        $(".addMore").click(function(){
            if($('body').find('.fieldGroup').length < maxGroup){
                var fieldHTML = '<div class="form-group fieldGroup">'+$(".fieldGroupCopy").html()+'</div>';
                $('body').find('.fieldGroup:last').after(fieldHTML);
            }else{
                alert('Maximum '+maxGroup+' items are allowed.');
            }
        });
        
        //remove fields group
        $("body").on("click",".remove",function(){ 
            $(this).parents(".fieldGroup").remove();
        });
    });
    
    </script>




</body>


</html>


