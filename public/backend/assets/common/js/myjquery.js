

$(document).ready(function(){

	if($('.message').length > 0){
		setTimeout(function(){
			$('.message').slideUp('3000');
		},3000);
	}

// Thực hiện checkall trong table
$("#example2 #checkall").click(function () {
	if ($("#example2 #checkall").is(':checked')) {
		$("#example2 input[type=checkbox]").each(function () {
			$(this).prop("checked", true);
		});

	} else {
		$("#example2 input[type=checkbox]").each(function () {
			$(this).prop("checked", false);
		});
	}
});

$(".upload_img").on('change', function () {

    if (typeof (FileReader) != "undefined") {

        var image_holder = $(".show-img");
        image_holder.empty();

        var reader = new FileReader();
        reader.onload = function (e) {
            $("<img />", {
                "src": e.target.result,
                "class": "one-image"
            }).appendTo(image_holder);

        }
        image_holder.show();
        reader.readAsDataURL($(this)[0].files[0]);
    } else {
        alert("This browser does not support FileReader.");
    }
});


})