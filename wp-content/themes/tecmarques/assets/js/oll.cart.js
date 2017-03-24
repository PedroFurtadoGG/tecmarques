function ollcart(_element, mode, _category){
	
   var el = $(_element);
    var elValue = $('#oll-cart span');
    var cValue = parseInt(elValue.text());
    var ollDatabase;
    var quantityEl = $(el).closest('.oll-item');
	
	
	var dataCart = {
        
		// These are the defaattruldata-ts.
        productId: $(el).attr('data-productid'),
        productName: $(el).attr('data-productname'),
        modelCode: $(el).attr('data-modelcode'),
        modelName: $(el).attr('data-modelname'),
		category: $('.oll-add').attr('data-category', _category),
        modelQuantity: $('input.oll-quantity', quantityEl).val()//input.oll-quantity
		
    }

   //CHECK FOR DATABASE
   loadOllDatabase();
   function loadOllDatabase(){
		
		$.ajax({
			url: 'http://tecmarques.com.br/cart.php?action=count',
			success: function(response) {
			   elValue.text(response);
			}
		});
		
       
   }

   //REMOVE FROM DATABASE
   function cartRemove(_id){
        delete ollDatabase._id;
       if(cValue > 0){
            elValue.text(cValue - 1);
       }
   }

    function list(){
       ollDatabase = JSON.parse(localStorage.getItem(_category)) || [];
        
        $(el).html('');
        $.each(ollDatabase, function( index, value ) {
            el.append('<tr><td>'+ value.modelCode +'<td/><td>'+ value.modelName +'<td/><td>'+ value.modelQuantity +'<td/><tr/>')
        });
        
        var table = $('#oll-content-to-gf').html();
        $('#gform_2 textarea:first-child').val(table);
        $('#gform_2 textarea:first-child').closest('.gfield').hide();
   }

	//INSERT NEW ITEM
    function cartInsert(_data){
		
		getProductId 	=  dataCart.productId;
		getProductName 	=  dataCart.productName;
		getModelCode 	=  dataCart.modelCode;
		getModelName 	=  dataCart.modelName;
		getQuantity 	=  dataCart.modelQuantity;
		getCategory		=  $('.oll-add').attr('data-category');
	
		$.ajax({
			url: 'http://tecmarques.com.br/cart.php?action=insert&codprd='+getProductId+'&name='+getProductName+'&code='+getModelCode+'&model='+getModelName+'&quantity='+getQuantity+'&category='+getCategory,
			success: function(response) {
				
				alert('Produto Inserido ao Orçamento com Sucesso!');
				window.location.reload();

			},
			error: function(response){
				alert('ERROR');
			}
			
		});
		
    }

   //ADD 
   if(mode == 'add'){
       cartInsert(dataCart);
   }
    
    //ADD 
   if(mode == 'list'){
       list();
   }

   //REMOVE
   if(mode == 'remove'){
      cartRemove(dataCart.modelCode); 
   }
}
