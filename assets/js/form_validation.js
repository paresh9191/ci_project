$(function () {
    var baseurl = "http://localhost/ci_project/register";
    $.validator.addMethod("lettersWithSingleSpace", function (value, element) {
        return this.optional(element) || /^[a-zA-Z]+$|^[a-zA-Z]+ [a-zA-Z]+$/i.test(value);
    }, "Letters and single space allowed");

    $.validator.addMethod("custom_email",
            function (value, element) {
                return /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i.test(value);
            }, "The specified email address is not valid");
            if ($("#add_create").length > 0) {
                $("#add_create").validate({
                  rules: {
                    name: {
                      required: true,
                      maxlength: 4,
                    },
                    email: {
                      required: true,
                      maxlength: 60,
                      custom_email:true,
                      //email: true,
                    },
                  },
                  messages: {
                    name: {
                      required: "Name is required.",
                    },
                    email: {
                      required: "Email is required.",
                      email: "It does not seem to be a valid email.",
                      maxlength: "The email should be or equal to 60 chars.",
                    },
                  },
                })
              }
            });
