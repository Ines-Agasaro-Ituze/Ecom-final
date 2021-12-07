const paymentForm = document.getElementById('paymentForm');
	paymentForm.addEventListener("submit", payWithPaystack, false);

	// PAYMENT FUNCTION
	function payWithPaystack() {

		let handler = PaystackPop.setup({
			key: 'pk_test_34f3623788dfa6a7eeaeaa29c57723978fc3df5e', // Replace with your public key
			email: document.getElementById("email-address").value,
			amount: document.getElementById("amount").value * 100,
			currency:'GHS',
			onClose: function(){
			alert('Window closed.');
			},
			callback: function(response){
			
				// send email, amount and reference to our server using AJAX
				 $.ajax({
					url: "../actions/process_buy_now_payment.php", 
					type:"get",
					data:{'email':document.getElementById("email-address").value, 
                    'amount':document.getElementById("amount").value, 
                    'pid':document.getElementById("pid").value,
                    'qty':document.getElementById("qty").value,
                    'reference':response.reference
                },
					success: function(response){
						alert(response)
					},
					error: function(error){
						alert(error)
					}
				});

			}
		});
		handler.openIframe();
	}