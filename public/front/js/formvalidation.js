$(document).ready(function() {
//-------------------------------------------------------------------------------------------------------------------------------

    $('#loginForm').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            
            fields: {
                email: {
                    validators: {
                        notEmpty: {
                            message: 'Please enter your E-mail'
                        },
                        emailAddress: {
                            message: 'Please enter a valid E-mail'
                        }
                    }
                },
                
                password: {
                    validators: {
                       stringLength: {
                        min: 6,
                        max: 16,
                        message: 'The password should contain 6 to 16 characters'
                    },
                    notEmpty: {
                        message: 'Please enter your password'
                    }
                }
            }
            
        }


     });   


    $('#registerForm').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            
            fields: {
                email: {
                    validators: {
                        notEmpty: {
                            message: 'Please enter your E-mail'
                        },
                        emailAddress: {
                            message: 'Please enter a valid E-mail'
                        }
                    }
                },
                
                password: {
                    validators: {
                        notEmpty: {
                            message: 'Please enter your password'
                        },
                        stringLength: {
                            min: 6,
                            max: 16,
                            message: 'The password should contain 6 to 16 characters'
                        },
                        identical: {
                            field: 'password_confirmation',
                            message: 'The password and its confirm are not the same'
                        }
                    }
                },
                password_confirmation: {
                    validators: {
                        notEmpty: {
                            message: 'Please enter password confirmation'
                        },
                        identical: {
                            field: 'password',
                            message: 'The password and its confirm are not the same'
                        }
                    }
                },
            
        }


     });   


    $('#forgetForm').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            
            fields: {
                email: {
                    validators: {
                        notEmpty: {
                            message: 'Please enter your E-mail'
                        },
                        emailAddress: {
                            message: 'Please enter a valid E-mail'
                        }
                    }
                }
            }
    });

    $('#resetForm').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            
            fields: {
                password: {
                    validators: {
                        notEmpty: {
                            message: 'Please enter your password'
                        },
                        identical: {
                            field: 'password_confirmation',
                            message: 'The password and its confirm are not the same'
                        }
                    }
                },
                password_confirmation: {
                    validators: {
                        notEmpty: {
                            message: 'Please enter password confirmation'
                        },
                        identical: {
                            field: 'password',
                            message: 'The password and its confirm are not the same'
                        }
                    }
                }
            }
    });

    $('#updateProfileForm').bootstrapValidator({
        fields: {
                first_name: {
                    validators: {
                         notEmpty: {
                            message: 'Please enter your First name'
                        }
                    }
                },
               last_name: {
                    validators: {
                         notEmpty: {
                            message: 'Please enter your Last name'
                        }
                    }
                },
                gender: {
                    validators: {
                         notEmpty: {
                            message: 'Please enter your gender'
                        }
                    }
                },
                dob: {
                    validators: {
                         notEmpty: {
                            message: 'Please enter your dob'
                        }
                    }
                },
                address: {
                    validators: {
                         notEmpty: {
                            message: 'Please enter your address'
                        }
                    }
                },
                image: {
                    validators: {
                         notEmpty: {
                            message: 'Please upload your image'
                        }
                    }
                },
            }
           
    });

    $('#changePassword').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            
            fields: {
                old_password: {
                    validators: {
                         notEmpty: {
                            message: 'Please enter your current password'
                        }
                    }
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: 'Please enter your password'
                        },
                        stringLength: {
                            min: 6,
                            max: 16,
                            message: 'The password should contain 6 to 16 characters'
                        },
                        identical: {
                            field: 'password_confirmation',
                            message: 'The password and its confirm are not the same'
                        }
                    }
                },
                password_confirmation: {
                    validators: {
                        notEmpty: {
                            message: 'Please enter password confirmation'
                        },
                        identical: {
                            field: 'password',
                            message: 'The password and its confirm are not the same'
                        }
                    }
                }
            }
    });

    

    $('#preferenceForm').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            excluded: [':disabled'],


            fields: {
                location_preference: {
                    validators: {
                         notEmpty: {
                            message: 'Please select meeting preference'
                        }
                    }
                },
                phone: {
                    validators: {
                        notEmpty: {
                            message: 'Please enter your phone number'
                        },
                        
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'Please enter an email'
                        },
                        emailAddress: {
                            message: 'Please enter a valid E-mail'
                        }
                    }
                },
                category: {
                    validators: {
                        notEmpty: {
                            message: 'Please select a category'
                        }
                    }
                },
                sub_category: {
                    validators: {
                        notEmpty: {
                            message: 'Please select sub-category'
                        }
                    }
                },
                exp: {
                    validators: {
                        notEmpty: {
                            message: 'Please select exp.'
                        }
                    }
                },
                tagline:{
                     validators: {
                        notEmpty: {
                            message: 'Please enter your tagline'
                        }
                    }
                },
                description:{
                     validators: {
                        notEmpty: {
                            message: 'Please enter your work experience'
                        }
                    }
                }
            }
    });


     $('#updateService').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            excluded: [':disabled'],


            fields: {
                category: {
                    validators: {
                        notEmpty: {
                            message: 'Please select a category'
                        }
                    }
                },
                'sub_cat_id[]': {
                    validators: {
                        notEmpty: {
                            message: 'Please select sub-category'
                        }
                    }
                },
                'sub_cat_price[]': {
                    validators: {
                        notEmpty: {
                            message: 'Please select sub-category'
                        }
                    }
                },
                'sub_cat_time[]': {
                    validators: {
                        notEmpty: {
                            message: 'Please select sub-category'
                        }
                    }
                },
                exp: {
                    validators: {
                        notEmpty: {
                            message: 'Please select exp.'
                        }
                    }
                },
                tagline:{
                     validators: {
                        notEmpty: {
                            message: 'Please enter your tagline'
                        }
                    }
                },
                description:{
                     validators: {
                        notEmpty: {
                            message: 'Please enter your work details'
                        }
                    }
                }
            }
    })
    .on('click', '.atul', function() {
            var isEmpty = $(this).prop('checked');

            var index = $(this).val();

             var startbox = $('input[name="sub_cat_price['+index+']"]');
             console.log(startbox);
             var endbox = $('input[name="sub_cat_time['+index+']"]'); 
             var checkbox = $('input[name="sub_cat_id['+index+']"]');

            // $('#updateService')
            //         .bootstrapValidator('enableFieldValidators', startbox, isEmpty)
            //         .bootstrapValidator('enableFieldValidators', endbox, isEmpty);

            // Revalidate the field when user start typing in the password field
            if ($(this).prop('checked')) {
                 $('#updateService').bootstrapValidator('addField', startbox, {
                                        validators: {
                                            notEmpty: {
                                                message: 'Price is required'
                                            },
                                        }
                                    });
                                    $('#updateService').bootstrapValidator('addField', endbox, {
                                        validators: {
                                            notEmpty: {
                                                message: 'Time is required'
                                            },
                                        }
                                    });                  
            }else{
                $('#updateService').bootstrapValidator('removeField', startbox);
                $('#updateService').bootstrapValidator('removeField', endbox);
            }
        });


              
});
