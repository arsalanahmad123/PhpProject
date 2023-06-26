$(document).ready(function () {
  // Validate Form

  $("#multi-step-form").validate({
    errorClass: "has-text-danger", // CSS class for error messages
    errorElement: "p", // Wrap error messages in <p> tags
    rules: {
      first_name: "required",
      last_name: "required",
      DOB: "required",
      email: {
        required: true,
        email: true,
      },
      address: "required",
      phone: {
        required: true,
        minlength: 11,
        maxlength: 11,
      },
      cnic: {
        required: true,
        minlength: 13,
        maxlength: 13,
      },
      password: "required",
      cpassword: {
        required: true,
        equalTo: "#password",
      },
      "security-question": "required",
      "security-answer": "required",
      "source-of-income": "required",
      "employement-status": "required",
      "annual-income-range": "required",
    },
    messages: {
      first_name: "Please enter your first name",
      last_name: "Please enter your last name",
      dob: "Please enter your date of birth",
      email: {
        required: "Please enter your email",
        email: "Please enter a valid email address",
      },
      address: "Please enter your address",
      phone: {
        required: "Please enter your phone number",
        minlength: "Please enter a valid 11-digit phone number",
        maxlength: "Please enter a valid 11-digit phone number",
      },
      cnic: {
        required: "Please enter your CNIC",
        minlength: "Please enter a valid 13-digit CNIC",
        maxlength: "Please enter a valid 13-digit CNIC",
      },
      password: "Please enter a password",
      cpassword: {
        required: "Please confirm your password",
        equalTo: "Passwords do not match",
      },
      "security-question": "Please select a security question",
      "security-answer": "Please enter your security answer",
      "source-of-income": "Please select your source of income",
      "employement-status": "Please select your employment status",
      "annual-income-range": "Please select your annual income range",
    },
    errorPlacement: function (error, element) {
      // Place error message below the corresponding input field
      error.insertAfter(element);
    },
    submitHandler: function (form) {
      form.submit();
    },
  });

  // Previous button click handler
  $(".previous-button").click(function () {
    var currentStep = $(this).closest(".step");
    var prevStep = currentStep.prev(".step");
    currentStep.removeClass("active");
    prevStep.addClass("active");
  });

  // Next button click handler
  $(".next-button").click(function () {
    var currentStep = $(this).closest(".step");
    var nextStep = currentStep.next(".step");
    if ($("#multi-step-form").valid()) {
      currentStep.removeClass("active");
      nextStep.addClass("active");
    }
  });

  // // Steps Code .....
  // var currentStep = 1;
  // var $steps = $(".step");
  // var totalSteps = $steps.length;

  // $(".next-button").click(function () {
  //   if (currentStep < totalSteps) {
  //     $($steps.get(currentStep - 1)).fadeOut(400, function () {
  //       $($steps.get(currentStep)).fadeIn(400);
  //       currentStep++;
  //     });
  //   }
  // });

  // $(".previous-button").click(function () {
  //   if (currentStep > 1) {
  //     $($steps.get(currentStep - 1)).fadeOut(400, function () {
  //       $($steps.get(currentStep - 2)).fadeIn(400);
  //       currentStep--;
  //     });
  //   }
  // });

  $(".security-answer").hide();

  // When the security question selection changes
  $("#security-question").change(function () {
    // Get the selected value
    var selectedOption = $(this).val();

    // If a security question is selected
    if (selectedOption !== "") {
      // Show the Security Answer field
      $(".security-answer").slideDown();
    } else {
      // Hide the Security Answer field
      $(".security-answer").slideUp();
    }
  });

  $(".annual-income-range").hide();

  $("#employment-status").change(function () {
    var selectedOption = $(this).val();

    if (selectedOption == "Employed" || selectedOption == "Retired") {
      $(".annual-income-range").slideDown();
    } else {
      $(".annual-income-range").slideUp();
    }
  });
});
