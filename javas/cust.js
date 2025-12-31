$(document).ready(function(){
    $('.increment-btn').click(function(e){
        e.preventDefault();
        var qty=$(this).closest('.product-data').find('.qty-input').val();
        var value=parseInt(qty,10);
        value=isNaN(value)?0:value;
        if(value<10)
        {
            value++;
            $(this).closest('.product-data').find('.qty-input').val(value);
        }
    });


    $('.decrement-btn').click(function(e){
        e.preventDefault();
        var qty=$(this).closest('.product-data').find('.qty-input').val();
        var value=parseInt(qty,10);
        value=isNaN(value)?0:value;
        if(value>1)
        {
            value--;
            $(this).closest('.product-data').find('.qty-input').val(value);
        }
    });
    

    $(document).on('click','.addTo',function(e){
        e.preventDefault();
        var qty=$(this).closest('.product-data').find('.qty-input').val();
        var product_id=$(this).val();
        //alert(product_id);
        $.ajax({
            method:"POST",
            url:"function/handlecart.php",
            data:{
                "product_id":product_id,
                "qty":qty,
                "scope":"add"
            },
            success :function(response){
                if(response == 201)
                {
                    alert("Product added to cart");
                }
                else if(response == "existing"){
                    alert("Product already in cart ");
                }
                else if(response == 401)
                {
                    alert("Login To Continue");
                }
                else if(response == 500)
                {
                    alert("Somthing went wrong");
                }
            }
        });
    });

    $(document).on('click','.updateQty',function(){
        // alert("hello");
        var qty=$(this).closest('.product-data').find('.qty-input').val();
        // var product_id=$(this).val();
        var product_id=$(this).closest('.product-data').find('.prodId').val();

        // alert(qty);
        $.ajax({
            method:"POST",
            url:"function/handlecart.php",
            data:{
                "product_id":product_id,
                "qty":qty,
                "scope":"update"
            },
            success :function(response){
                // alert(response);
            }
        });
    });

    $(document).on('click','.deleteItem',function(){
        var cart_id=$(this).val();
        // alert(cart_id);
        $.ajax({
            method:"POST",
            url:"function/handlecart.php",
            data:{
                "cart_id":cart_id,
                "scope":"delete"
            },
            success :function(response){
                if(response == 200)
                {
                    alert("Product deleted successfully");
                    $('#mycart').load(location.href + "#mycart");
                }
                else{
                    alert(response);
                }
            }
        });
    });

//wishlist
   

});