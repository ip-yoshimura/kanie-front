$(document).ready(function(){

	$("body").on("click", ".side_menu_title", function(){
		$(this).siblings(".sub_menu").slideToggle();
	});

    $("body").on("click", "section.side_menu > div.user_info_area", function(){
        var u_icon = $(this).find("img").attr("src");
        var area = $(".porofile_popup_section");
        $("#edit_user_name").val($(this).find("h4.user-name").html());
        $("#edit_user_mail").val($(this).find("h5.user-mail").html());
        var sample = $(this).clone();
        $(".profile_sample_area").html(sample);
		area.fadeIn();
	});

    $("body").on("click", "section.porofile_popup_section > div.popup_layer", function(){
        $("#edit_user_name").val("");
        $("#edit_user_mail").val("");
        $("#edit_user_icon").val("");
		$(".porofile_popup_section").fadeOut();
	});

    $("#edit_user_name").keyup(function(){
        console.log($(this).val());
        $(".profile_sample_area > .user_info_area > h4.user-name").html($(this).val());
    });
    $("#edit_user_mail").keyup(function(){
        $(".profile_sample_area > .user_info_area > h5.user-mail").html($(this).val());
    });

    $("#edit_user_icon").change(function(e){
        var file = e.target.files[0];
        var reader = new FileReader();

        // ç”»åƒãƒ•ã‚¡ã‚¤ãƒ«ä»¥å¤–ã®å ´åˆã¯ä½•ã‚‚ã—ãªã„
        if(file.type.indexOf("image") < 0){
            console.log("error");
            return false;
        }

        // ãƒ•ã‚¡ã‚¤ãƒ«èª­ã¿è¾¼ã¿ãŒå®Œäº†ã—ãŸéš›ã®ã‚¤ãƒ™ãƒ³ãƒˆç™»éŒ²
        reader.onload = (function(file) {
            return function(e) {
                $(".profile_sample_area > .user_info_area > img").attr("src", e.target.result);
            };
        })(file);

        reader.readAsDataURL(file);
    });

});