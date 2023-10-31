// for FAQ'S Page
// $(document).ready(function () {
//     $('#questionForm').validate({ 
//         rules: {
//             name: {
//                 required: true
//             },
//             email: {
//                 required: true,
//                 email: true
//             },
//             mobile: {
//                 required: true,
//                 minlength: 10,
//                 maxlength: 10,
//                 number : true 
//             },
//             message: {
//                 required: true
//             }
//         }
//     });

// });

// for contact Page
$(document).ready(function () {
    $('#contactForm').validate({ 
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            mobile: {
                required: true,
                minlength: 10,
                maxlength: 10,
                number : true 
            },
            location: {
                required: true
            },
            message: {
                required: true
            }
        }
    });
});



// for query form bottom of all Pages
$(document).ready(function () {
    $('#queryForm').validate({ 
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            mobile: {
                required: true,
                minlength: 10,
                maxlength: 10,
                number : true 
            },
            address: {
                required: true
            }
        }
    });
});


// Become dealer form validation
$(document).ready(function () {
    $('#becomeDealerForm').validate({ 
        rules: {
            company: {
                required: true
            },
            state: {
                required: true,
                number : false 
            },
            city: {
                required: true,
                number : false 
            },
            street: {
                required: true,
                number : false 
            },
            telephone: {
                minlength: 10,
                maxlength: 10,
                number : true 
            },
            mobile: {
                required: true,
                minlength: 10,
                maxlength: 10,
                number : true 
            },
            fname: {
                required: true,
                number : false 
            },
            email: {
                required: true,
                email: true
            },
        }
    });
});

// for contact Page
// $(document).ready(function () {
//     $('#applyForm').validate({ 
//         rules: {
//             name: {
//                 required: true
//             },
//             email: {
//                 required: true,
//                 email: true
//             },
//             mobile: {
//                 required: true,
//                 minlength: 10,
//                 maxlength: 10,
//                 number : true 
//             },
//             resume: {
//                 required: true
//             },
            
//         }
//     });
// });





  $(document).ready(function(){
      $(".downloadCenterForm").validate({
        rules :{
         name: {
                required: true
            },
         email: {
                required: true,
                email:true
            },
         company: {
                required: true
            }
        },
      });
  });
