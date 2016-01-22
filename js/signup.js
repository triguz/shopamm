$(document).ready(function()
    {
        submitRegistration();
    
        function submitRegistration(){
            $("#submit_registration").click(function()
            {
            
                var email=$('#email').val();
                var username=$('#r_username').val();
                var password=$('#r_password').val();
                var confirm=$('#confirm').val();
                var name=$('#name').val();
                var surname=$('#surname').val();
                var street=$('#street').val();
                var number=$('#number').val();
                var city=$('#city').val();
                var postalCode=$('#postalCode').val();
                var state=$('#state').val();

                if(email.length > 0 && username.length > 0 && password.length > 0
                    && confirm.length > 0 && name.length > 0 && surname.length > 0
                    && street.length > 0 && number.length > 0 && city.length > 0
                    && postalCode.length > 0 && state.length > 0)
                    {
                    $.ajax(
                    {
                        type: "POST",
                        url: "./index.php?action=signup",
                        data: "email="+email+"&username="+username+"&password="+password
                        +"&confirm="+confirm+"&name="+name+"&surname="+surname
                        +"&street="+street+"&number="+number+"&city="+city
                        +"&postalCode="+postalCode+"&state="+state,
                    
                        success: function(html)
                        {
                            if(html)
                            {
                                location.href = "./index.php?page=registrated";
                            }
                            else
                            {
                                $("#add_err_registration").html("You have to compile all fields correctly!");
                                $("#email, #r_username, #r_password, #confirm, #name, #surname, #street, #number, #city, #postalCode, #state")
                                .css({
                                    'border': '1px solid red'
                                });
                            }
                        }
                    });
                }
                else
                {
                    $("#add_err_registration").html("You have to compile all fields correctly!");
                    $("#email, #r_username, #r_password, #confirm, #name, #surname, #street, #number, #city, #postalCode, #state")
                    .css({
                        'border': '1px solid red'
                    });
                }
            
                return false;
            });
        }
    
    });