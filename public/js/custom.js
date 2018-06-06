$(document).on('click','.deleteProduct',function(){
	$.confirm({
	    title: 'Confirm!',
	    content: 'Simple confirm!',
	    buttons: {
	        confirm: function () {
	            $.alert('Confirmed!');
	        },
	        cancel: function () {
	            $.alert('Canceled!');
	        }
	    }
	});
});