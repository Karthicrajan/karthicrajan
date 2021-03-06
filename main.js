$(document).ready(function () {
    var DOMAIN = "http://localhost/Inventory/public_html";
$("#register_form").on("submit", function(){
    var status = false;
    var name = $("#username");
    var email =$("#email");
    var pass1 = $("#password1");
    var pass2 = $("#password2");
    var type = $("#usertype");
    var n_patt = new RegExp(/^[A-Za-z ]+$/);
    var e_patt = new RegExp(/^[a-z0-9_-]$/);
    if(name.val()== "" || name.val().length < 6){
        name.addClass("border-danger");
        $("#u_error").html("<span class='text-danger'>Please Enter Name and Name should be more the 6 char</span>");
        status = false;
    }else{
        name.removeClass("border-danger");
        $("#u_error").html("");
        status = true;
    }
    if(e_patt.test(email.val())){
        email.addClass("border-danger");
        $("#e_error").html("<span class='text-danger'>Please Enter Valid Email Address</span>");
        status = false;
    }else{
        email.removeClass("border-danger");
        $("#e_error").html("");
        status = true;
    }
    if(pass1.val ==""|| pass1.val().length < 9){
        pass1.addClass("border-danger");
        $("#p1_error").html("<span class='text-danger'>Please Enter The Email and Should Not more than 9 char</span>");
        status = false;
    }else{
        pass1.removeClass("border-danger");
        $("#p1_error").html("");
        status = true;
    }
    if(pass2.val ==""|| pass2.val().length < 9){
        pass2.addClass("border-danger");
        $("#p2_error").html("<span class='text-danger'>Please Enter The Email and Should Not more than 9 char</span>");
        status = false;
    }else{
        pass2.removeClass("border-danger");
        $("#p2_error").html("");
        status = true;
    }
    if(type.val ==""){
        type.addClass("border-danger");
        $("#t_error").html("<span class='text-danger'>Please Select any type of the user</span>");
        status = false;
    }else{
        type.removeClass("border-danger");
        $("#t_error").html("");
        status = true;
    }
    if (pass1.val() && status == true){
         $.ajax({
             url : DOMAIN+"/includes/process.php",
             method : "POST",
             data : $("#register_form").serialize(),
             success : function(data){
                 alert(data);
             }
         })

    }else{
        pass2.addClass("border-danger");
        $("#p2_error").html("<span class='text-danger'>Password not matched </span>");
        status = true;
    }
})

//For Login Part
$("#form_login").on("submit",function(){
		var email = $("#log_email");
		var pass = $("#log_password");
		var status = false;
		if (email.val() == "") {
			email.addClass("border-danger");
			$("#e_error").html("<span class='text-danger'>Please Enter Email Address</span>");
			status = false;
		}else{
			email.removeClass("border-danger");
			$("#e_error").html("");
			status = true;
		}
		if (pass.val() == "") {
			pass.addClass("border-danger");
			$("#p_error").html("<span class='text-danger'>Please Enter Password</span>");
			status = false;
		}else{
			pass.removeClass("border-danger");
			$("#p_error").html("");
			status = true;
		}
		if (status) {
			$(".overlay").show();
			$.ajax({
				url : DOMAIN+"/includes/process.php",
				method : "POST",
				data : $("#form_login").serialize(),
				success : function(data){
					if (data == "NOT_REGISTERD") {
						$(".overlay").hide();
						email.addClass("border-danger");
						$("#e_error").html("<span class='text-danger'>It seems like you are not registered</span>");
					}else if(data == "PASSWORD_NOT_MATCHED"){
						$(".overlay").hide();
						pass.addClass("border-danger");
						$("#p_error").html("<span class='text-danger'>Please Enter Correct Password</span>");
						status = false;
					}else{
						$(".overlay").hide();
						console.log(data);
						window.location.href = DOMAIN+"/dashboard.php";
					}
				}
			})
		}
	})
    //fetch category
    fetch_category();
    function fetch_category(){
        $.ajax({
            url : DOMAIN+"/includes/process.php",
            method : "POST",
            data : {getCategory:1},
            success : function(data){
                var root ="<option value='0'>Root</option>";
                var choose ="<option value='0'>Choose Category</option>";
                $("#parent_cat").html(root+data);
                $("#select_cat").html(choose+data);
            }
        })
    }
    //fetch brand
    fetch_brand();
    function fetch_brand(){
        $.ajax({
            url : DOMAIN+"/includes/process.php",
            method : "POST",
            data : {getBrand:1},
            success : function(data){
                var root ="<option value='0'>Root</option>";
                var choose ="<option value='0'>Choose Brand</option>";
                
                $("#select_brand").html(choose+data);
            }
        })
    }

    $("#category_form").on("submit",function(){
        if($("#category_name").val() == ""){
            $("#category_name").addClass("border-danger");
            $("#cat_error").html("<span class='text-danger'>Please Enter Category Name</span>");
        }else{
                $.ajax({
                    url : DOMAIN+"/includes/process.php",
                    method : "POST",
                    data : $("#category_form").serialize(),
                    success:function(data){
                       if(data == "CATEGORY_ADDED"){
                        $("#category_name").removeClass("border-danger");
                        $("#cat_error").html("<span class='text-succcess'>New Category Added Successfully...</span>");
                        fetch_category();
                       }else{
                         alert(data);
                       }
                    }
                })
        }
    })

    //Add Brand
    $("#brand_form").on("submit",function(){
        if($("#brand_name").val() ==""){
           $("#brand_name").addClass("border-danger");
           $("#brand_error").html("<span class='text-danger'>Pleasse Enter Brand</span>");
        }else{
            $.ajax({
                url : DOMAIN+"/includes/process.php",
                method : "POST",
                data : $("#brand_form").serialize(),
                success : function(data){
                    if($.trim(data) == "BRAND_ADDED"){
                        $("#brand_name").removeClass("border-danger");
                        $("#brand_error").html("<span class='text-success'>Brand Add Successfully..</span>");
                        $("#brand_name").val("");
                        fetch_category();
                    }else{
                         alert(data);
                    }
                   
                }

            })
        }
    })


    //add product
    $("#product_form").on("submit",function(){
        $.ajax({
            url : DOMAIN+"/includes/process.php",
            method : "POST",
            data : $("#product_form").serialize(),
            success : function(data){
                if($.trim(data) == "NEW_PRODUCT_ADDED"){
                   alert(data);
                }else{
                    console.log(data);  
                     alert(data);
                }
               
            }

        })
    })

    //Manage Category

})
    