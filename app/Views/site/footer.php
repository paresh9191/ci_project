<footer class="page-footer font-small bg-dark text-center">
    <div class="container">
    <div class="row">
        <div class="col-md-12 py-5">
        <div class="mb-5 flex-center">
            <a class="fb-ic">
            <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
            <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
            <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
            <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Pinterest-->
            <a class="pin-ic">
            <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
            </a>
        </div>
        </div>
    </div>
    </div>
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="/"> MDBootstrap.com</a>
    </div>
</footer>

<!-- <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

<script src="https://cdn.datatables.net/1.11.5/js/dataTables.jqueryui.min.js"></script> -->

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js'></script>
<script src='https://cdn.datatables.net/responsive/1.0.4/js/dataTables.responsive.js'></script>

</body>
<script>

    $(document).ready(function(){
        $(':input[type="submit"]').prop('disabled', true);
        $('input[type="text"]').keyup(function() {
            if($(this).val() != '') {
            $(':input[type="submit"]').prop('disabled', false);
            }
        });
    });

            // disablling keyboard
            $("#InputForName").keypress(function(e){
                var keyCode = e.which;
                if ( (keyCode >= 48 && keyCode <= 57) ) {
                    e.preventDefault();
                }
            });
            $("#InputForContact").keypress(function(e){
                var keyCode = e.which;
                if ((keyCode >=65 && keyCode <=90) || (keyCode >=97 && keyCode <=122)) {
                    e.preventDefault();
                }
            });

            $("#registerUser").validate({
                rules: {
                    name:{
                        required: true,
                        minlength: 3,
                        maxlength: 25,
                        lettersonly: true,
                            
                    },
                    email:{
                        required: true,
                        minlength: 3,                
                        maxlength: 35,
                        mindot: true,
                        maxdot: true,
                        validmail: true,
                    },
                    phone:{
                        required: true, 
                        minlength: 7,
                        maxlength: 15,
                        validcontact: true,
                    },
                    DOB:{
                        required: true,
                    },
                    password:{
                        required: true,
                        minlength : 8 ,
                        maxlength:12 ,
                    },
                    confpassword:{
                        required: true,
                        minlength: 8,
                        maxlength: 15,
                        equalTo: "#password", 
                    },

                
                },
                messages: {
                    name:{
                        required: 'please enter your name',
                    }, 
                    email:{
                        required: 'please enter email',
                    },
                    phone:{
                        required: 'please enter contact no',
                    },
                    DOB:{
                        required: 'please enter date of birth',
                    },
                    password:{
                        required: 'please enter your password',
                    },
                    confpassword:{
                        required: 'please enter confpassword',
                        equalTo : "#password",
                    },
                    gender:{
                        required: 'select your gender',
                    },
                },
            

                submitHandler: function (form) {
                    $(".submit").attr("disabled", true);
                    form.submit(); // <- use 'form' argument here.

                    $.ajax({
                        url: "<?php echo base_url('insert'); ?>",
                        type: "post",
                        data: $('#registerUser').serialize(),

                        success: function (response) {
                            if (response == 1) {
                                $.notify("data inserted", "success");

                                
                            } 
                        }
                    });
                }
            });
            
            $("#login").validate({   
                rules: {
                            email:{
                            required: true,
                            minlength: 3,                
                            maxlength: 35,
                            mindot: true,
                            maxdot: true,
                            validmail: true,
                            },   
                            password:{
                                required: 'please enter your password',
                            },
                messages: {
                            email:{
                            required: 'please enter email',
                        },
                            password:{
                            required: 'please enter your password',
                        },

                        }
                }
                });        
                         
            

        function errorElement(item, index) {
            $('input[name="'+item.name+'"]').after('<label id="input'+item.name+'-error" class="error" for="input'+item.name+'">'+item.error+'</label>');
        }



        // custom validations methods
                jQuery.validator.addMethod("lettersonly", function(value, element) {
                return this.optional(element) || /^[A-Za-z]{1}[a-zA-Z\s]+$/i.test(value);
                }, "Only Alphabets and space allowed");
                jQuery.validator.addMethod("firstletter", function(value, element) {
                return this.optional(element) || /^[A-Za-z]{1}/i.test(value);
                }, "First letter should be Alphabet");
                jQuery.validator.addMethod("validmail", function(value, element) {
                return this.optional(element) || /^[a-zA-Z]{1}[^\s@]+@[^\s@\.]+\.[^\s@\.]+(\.)?[^\s@\.]+$/i.test(value);
                }, "Invalid Email address");
                jQuery.validator.addMethod("mindot", function(value, element) {
                return this.optional(element) || /^\S+@[^\s@\.]+\.[^\s@]*$/i.test(value);
                }, "Email should have minimum one dot(.) after @");
                jQuery.validator.addMethod("maxdot", function(value, element) {
                return this.optional(element) || /^\S+@[^\s@\.]+\.[^\s@\.]+(\.)?[^\s@\.]+$/i.test(value);
                }, "Email should have maximum two dot(.) after @");
                jQuery.validator.addMethod("validcontact", function(value, element) {
                return this.optional(element) || /^(\+\d{1,3}[\s]?)?\d+$/i.test(value);
                }, "Please Enter Valid number");
                jQuery.validator.addMethod("validans", function(value, element) {
                return this.optional(element) || /^\d+$/i.test(value);
                }, "Please Enter Only Number");
                // jQuery.validator.addMethod("validaddress", function(value, element) {
                //   return this.optional(element) || /^[A-Za-z0-9'\#\,\_\-\$\.\:\s\,]+$/i.test(value);
                // }, "Please Enter Valid Address");

                    // $(document).ready(function() {
                    $("#Confirmpassword").on('keyup', function() {
                        // console.log('test');
                        var password = $("#InputForPassword").val();
                        var confirmPassword = $("#Confirmpassword").val();
                        if (password != confirmPassword)
                        $("#CheckPasswordMatch").html("Password does not match !").css("color", "red");
                        else
                        $("#CheckPasswordMatch").html("Password match !").css("color", "green");
                    });
                        
                    const togglePassword =    document.querySelector("#togglePassword");
                    const password =      document.querySelector("#InputForPassword");

                    togglePassword.addEventListener("click", function () {
                    // toggle the type attribute
                            const type = password.getAttribute("type") === "password" ? "text" : "password";
                            password.setAttribute("type", type);
                            
                    // toggle the icon
                        this.classList.toggle("bi-eye");
                });

                // prevent form submit
                const form = document.querySelector("form");
                form.addEventListener('submit', function (e) {
                    e.preventDefault();
                });
                         
                </script>
    
        
    
        
   




        

