$(function(){
    var form = $('#distributorKYC');

    $.validator.addMethod("phoneno", function(phone_number, element) {
        	    phone_number = phone_number.replace(/\s+/g, "");
        	    return this.optional(element) || phone_number.length > 9 &&
        	    phone_number.match(/^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/);
      }, "<br />Enter valid phone number");
    $.validator.addMethod("adharno", function(adharno, element) {
        	    adharno = adharno.replace(/\s+/g, "");
        	    return this.optional(element) || adharno.length > 11 &&
        	    adharno.match(/^\d{4}\d{4}\d{4}$/);
      }, "<br />Enter valid Adhar number");
    $.validator.addMethod("pancard", function(pancard, element) {
        	    pancard = pancard.replace(/\s+/g, "");
        	    return this.optional(element) || pancard.length > 9 &&
        	    pancard.match(/[A-Z]{5}[0-9]{4}[A-Z]{1}$/);
      }, "<br />Enter valid PAN Card number");

    form.validate({
      errorPlacement: function errorPlacement(error, element) { element.before(error); },
      rules: {
        // simple rule, converted to {required:true}
        first_name: {
          required: true,
        },
        last_name: {
          required: true,
        },
        // compound rule
        address: {
          required: true,
        },
        email: {
          required: true,
          email: true
        },
        phone: {
          required:true,
          phoneno: true
        },
        pincode: {
          required: true,
          minlength:6,
          maxlength:6,
        },
        city: {
          required: true,

        },
        states: {
          required: true,

        },
        adharcard: {
          required:true,
          adharno: true
        },
        pancard: {
          required:true,
          pancard: true
        },
        account_name: {
          required: true,
        },
        account_number: {
          required: true,
        },
        bank:{
            required: true,
        },
        branch:{
            required: true,
        }
      },
      messages: {
        first_name: "Please specify your First Name",
        last_name: "Please specify your Last Name",
        account_name: "Please specify Account Holder Name",
        account_number: "Please specify Account Number",
        email: {
          required: "We need your email address to contact you",
          email: "Your email address must be in the format of name@domain.com"
        },
        phone : {
          required: 'Phone must be entered',
          minlength: 'Enter valide phone number',
          maxlength: 'Enter valide phone number',
        },
        pincode : {
          required: 'Pincode must be entered',
          minlength: 'Enter valide Pincode number',
          maxlength: 'Enter valide Pincode number',
        }
      }
    });


    form.children("div").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        autoFocus: true,
        transitionEffectSpeed: 500,
        titleTemplate : '<div class="title">#title#</div>',
        labels: {
            previous : 'Back',
            next : '<i class="zmdi zmdi-chevron-right"></i>',
            finish : '<i class="zmdi zmdi-chevron-right"></i>',
            current : ''
        },
        onStepChanging: function (event, currentIndex, newIndex) {
          form.validate().settings.ignore = ":disabled,:hidden";
          return form.valid();

        },
        onFinished: function (event, currentIndex)
        {
          form.submit();
        }
    });





});
