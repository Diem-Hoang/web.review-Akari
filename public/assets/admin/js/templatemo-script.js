/*
 *	www.templatemo.com
 *******************************************************/

/* HTML document is loaded. DOM is ready. 
-----------------------------------------*/
$(document).ready(function(){

	/* Mobile menu */
	$('.mobile-menu-icon').click(function(){
		$('.templatemo-left-nav').slideToggle();				
	});

	/* Close the widget when clicked on close button */
	$('.templatemo-content-widget .fa-times').click(function(){
		$(this).parent().slideUp(function(){
			$(this).hide();
		});
	});
	
	$('#data-table').DataTable();
});

// Image Preview
const image = document.getElementById("image");
const previewContainer = document.getElementById("imagePreview");
const previewImage = previewContainer.querySelector(".image-preview__image");
const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");

image.addEventListener("change",function(){
    const file = this.files[0];
    const reader = new FileReader();
	previewDefaultText.style.display = "none";
	previewImage.style.display = "block";
	reader.addEventListener("load",function(){
		previewImage.setAttribute("src",this.result);
	});
	reader.readAsDataURL(file);
});