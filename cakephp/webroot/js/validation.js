
$(document).ready(function(){
    $("#form").validate({   
      rules: {
        first_name: {
          required: true,
          minlength: 3
        },
        last_name: {
          required: true,
          minlength: 3
        },
        email: {
          required: true
        },
        phone_number: {
          required: true,
          digits: true,
          maxlength: 10,
          minlength: 10
        },
        password: {
          required: true
        },
        // confirm_password: {
        //   required: true,
        //   equalTo: "#password"
        // },
        gender: {
          required: true
        }
      },
      messages: {
        first_name: {
          required: "first name is required",
          minlength: "minimum length should be 3 character"
        },
        last_name: {
          required: "last name is required",
          minlength: "minimum length should be 3 character"
        },
        email: {
          required: "email is required"
        },
        phone_number: {
          required: "phone number is required",
          digits: "phone number should be digits",
          maxlength: "not max then 10 digit",
          minlength: "not min then 10 digit"
        },
        password: {
          required: "password is required"
        },
        // confirm_password: {
        //   required: "password is required",
        //   equalTo: "both password and confirm password should be same"
        // },
        gender: {
          required: "gender is required"
        }
      }
    });
  });
