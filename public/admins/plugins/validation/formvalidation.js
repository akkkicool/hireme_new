$(document).ready(function() {
//-------------------------------------------------------------------------------------------------------------------------------

    $('#loginForm').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            
            fields: {
                email: {
                    validators: {
                        notEmpty: {
                            message: 'Please supply your E-mail'
                        },
                        emailAddress: {
                            message: 'Please supply a valid E-mail'
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
                        message: 'Please supply your password'
                    }
                }
            }
            
        }


     });   


    $('#forgetForm').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            
            fields: {
                email: {
                    validators: {
                        notEmpty: {
                            message: 'Please supply your E-mail'
                        },
                        emailAddress: {
                            message: 'Please supply a valid E-mail'
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
                            message: 'Please supply your password'
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
                            message: 'Please supply password confirmation'
                        },
                        identical: {
                            field: 'password',
                            message: 'The password and its confirm are not the same'
                        }
                    }
                }
            }
    });

    $('#updateProfile').bootstrapValidator({
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
                email: {
                    validators: {
                         notEmpty: {
                            message: 'Please enter your valid email'
                        }
                    }
                },
                username: {
                    validators: {
                         notEmpty: {
                            message: 'Please enter your username'
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
                            message: 'Please supply your current password'
                        }
                    }
                },
                passwords: {
                    validators: {
                        notEmpty: {
                            message: 'Please supply your password'
                        },
                        stringLength: {
                            min: 6,
                            max: 16,
                            message: 'The password should contain 6 to 16 characters'
                        },
                        identical: {
                            field: 'passwords_confirmation',
                            message: 'The password and its confirm are not the same'
                        }
                    }
                },
                passwords_confirmation: {
                    validators: {
                        notEmpty: {
                            message: 'Please supply password confirmation'
                        },
                        identical: {
                            field: 'passwords',
                            message: 'The password and its confirm are not the same'
                        }
                    }
                }
            }
    });


     $('#dropdownForm').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            
            fields: {
                parent_id: {
                    validators: {
                        notEmpty: {
                            message: 'Please select at least one option'
                        }
                    }
                },
                title: {
                    validators: {
                         notEmpty: {
                            message: 'The title is required and cannot be empty'
                        }
                    }
                }
            }
    });

    $('#subAdminForm').bootstrapValidator({ 

       fields: {
                first_name: {
                    validators: {
                        notEmpty: {
                            message: 'The First name is required and cannot be empty'
                        },
                        stringLength: {
                            min: 2,
                            max: 50,
                            message: 'The First name must be greater than 2 and less than 50 characters'
                        }
                    }
                },
                last_name: {
                    validators: {
                         notEmpty: {
                            message: 'The Last name is required and cannot be empty'
                        },
                        stringLength: {
                            min: 2,
                            max: 50,
                            message: 'The Last name must be greater than 2 and less than 50 characters'
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'The E-mail is required and cannot be empty'
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
                            message: 'The password should contain 6 to 16 characters'
                        },
                        notEmpty: {
                            message: 'Please enter password'
                        }
                    }
                },
                username: {
                    validators: {
                       stringLength: {
                            min: 6,
                            message: 'The username should contain 6 to 16 characters'
                        },
                        notEmpty: {
                            message: 'Please enter unique username'
                        }
                    }
                },
                'permission[]': {
                    validators: {
                        choice: {
                            min: 1,
                            message: 'Please choose at least one permission for Sub Admin'
                        }
                    }
                }
                
         }
    })
    .find('input[name="permission[]"]')
            // Init iCheck elements
            .iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass: 'iradio_square-red'
            })
            // Called when the radios/checkboxes are changed
            .on('ifChanged', function(e) {
                // Get the field name
                var field = $(this).attr('name');
                $('#subAdminForm').bootstrapValidator('revalidateField', field);
            });        

              
});
