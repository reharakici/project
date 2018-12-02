
// JavaScript Document
function alt_kategori_doldur(kategori_id){
		 
         $.get('inc/ajax.php', {kat_id: kategori_id}, function (gelen_cevap) {
			
			document.getElementById("alt_kategori_id").options.length = 0;
           $('#alt_kategori_id').append(gelen_cevap); 
         });
}
function urun_cesidi_doldur(alt_kategori_id){
		 
         $.get('inc/ajax.php', {alt_kat_id: alt_kategori_id}, function (gelen_cevap) {
			
			document.getElementById("urun_cesit_id").options.length = 0;
           $('#urun_cesit_id').append(gelen_cevap); 
         });
}
/*
$(document).ready(function (e) {
	$("#uploadimage").on('submit',(function(e) {
		e.preventDefault();
		$("#message").empty();
		$.ajax({
		url: "inc/ajax.php", // Url to which the request is send
		type: "POST",             // Type of request to be send, called as method
		data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
		contentType: false,       // The content type used when sending data to the server.
		cache: false,             // To unable request pages to be cached
		processData:false,        // To send DOMDocument or non processed data file it is set to false
		success: function(data)   // A function to be called if request succeeds
		{
		
			$("#message").html(data);
		}
	});
}));

// Function to preview image after validation
$(function() {
	
	
		$("#message").html(" "); // To remove the previous error message
			var file = this.files[0];
			var imagefile = file.type;
			var match= ["image/jpeg","image/png","image/jpg"];
			if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))){
				$('#demo2').attr('src','images/noimage.png');
				$("#message").html("<p id='error'>Geçerli bir resim giriniz</p>"+"<h4>Note</h4>"+"<span id='error_message'>Sadece jpeg, jpg ya da png resimleri kabul edilmektedir.</span>");
				return false;
			}else{
				
				var reader = new FileReader();
				reader.onload = imageIsLoaded;
				reader.readAsDataURL(this.files[0]);
				
			}
	});
});
function imageIsLoaded(e) {
	
	$('#demo2').attr('src', e.target.result);
	deneme();


//	$('.asd').attr('width', '750px');
//	$('.asd').attr('height', '230px');
	};
});
*/