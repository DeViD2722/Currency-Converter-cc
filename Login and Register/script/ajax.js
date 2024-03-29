$('document').ready(function() { 
	/* handling Currency Conversion Form validation */
	$("#currency-form").validate({
		rules: {
			amount: {
				required: true,
			},
		},
		messages: {
			amount:{
			  required: ""
			 },			
		},
		submitHandler: handleCurrencyConvert	
	});	   
	/* Handling Currency Convert functionality */
	function handleCurrencyConvert() {		
		var data = $("#currency-form").serialize();				
		$.ajax({				
			type : 'POST',
			url  : 'convert.php',
			dataType:'json',
			data : data,
			beforeSend: function(){	
				$("#convert").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; converting ...');
			},
			success : function(response){				
				if(response.error == 1){	
					$("#converted_rate").html('<div class="form-group has-error">Error: Please select different currency</div>'); 
					$("#converted_amount").html("");
					$("#convert").html('Convert');
					$("#converted_rate").show();	 
				} else if(response.exhangeRate){									
					$("#converted_rate").html("<strong>Exchange Rate ("+response.toCurrency+"</strong>) : "+response.exhangeRate);
					$("#converted_rate").show();
					$("#converted_amount").html("<strong>Converted Amount ("+response.toCurrency+"</strong>) : "+response.convertedAmount);
					$("#converted_amount").show();
					$("#convert").html('Convert');
				} else {	
					$("#converted_rate").html("No Result");	
					$("#converted_rate").show();	
					$("#converted_amount").html("");
				}
			}
		});
		return false;
	}   
});