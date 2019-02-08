<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PSAAKET</title>
	
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.png" type="image/png">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
	<link href="<?php echo base_url(); ?>assets/vendor/css/custom.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/bootstrapValidator.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/semantic.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
</head>

<body style="background-color: #300032;">


    <div class="ui centered grid container">

        <div class="row"></div>
        <div class="row"></div>
        <div class="row"></div>


        <div class="ui text container">
            <div class="three ui buttons center aligned grid container" style="margin:20px;">
               
                <button class="ui big disabled blue basic button" id="socialP">
                    <div class="content" style="font-size:12px;color:white;">RESOURSE ALLOTMENT</div>
                </button>
                <button class="disabled ui big orange basic button" id="details">
                    <div class="content" style="font-size:12px;color:white;">INSTRUCTOR DETAILS</div>
                </button>
            </div>

            <div class="row"></div>
            <div class="row"></div>
            
            
            <div id="social">
			
                <div class="ui center aligned  segment container " id="signUpBox" style="background-color: #F1F0FF;border-radius:5px;">
                    <div class="ui centered header">
                        <h1 class="font" style="color:rgb(50,153,153);">Resource Allotment</h1>
                    </div>
                     <form class="ui form"  name="defaultForm" id="defaultForm" method="post" action="<?php echo base_url('User/addposttwo'); ?>" >
                        <div class="form-group">
                            <label>Total Number of hours allotted for the entire course</label>
                            <input type="text" class="form-control" placeholder="No.of hours allotted for the entire course" name="resource_course" id="resource_course"/>
                        </div>
                        <div class="form-group">
                            <label>Number of Theory Sessions</label>
                            <input type="text" class="form-control" placeholder="Required no.of Practical Sessions" name="resource_theory_session" id="resource_theory_session"/>
                        </div>
                        <div class="form-group">
                            <label>Number of Practical Sessions</label>
                            <input type="text" class="form-control" placeholder="Required no.of Subjects" name="resource_practical_session" id="resource_practical_session"/>
                        </div>
                        <div class="form-group">
                            <label>Number of Instructors allotted</label>
                            <input type="text" class="form-control" value="2" name="num_instruction_allotted" id="num_instruction_allotted" readonly/>
                        </div>

                        <div class="two ui buttons">
                            <button class="ui inverted violet  medium button prev1">Previous</button>
                            <button type="submit"  name="signup" value="Sign up" class="ui inverted violet medium button ">Next</button>
                        </div>
                   </form>
                </div>
            </div>


            <div id="personal">
                <div class="ui center aligned  segment container " id="signUpBox" style="background-color: #F1F0FF;border-radius:5px;">
                    <div class="ui centered header">
                        <h1 class="font" style="color:orange;">Personal Details</h1>
                    </div>


                        <div class="form-group">
                            <label>Names of the Instructors</label>
                            <input type="text" class="form-control" placeholder="Required no.of Practical Sessions" name="name_instructions" id="name_instructions"/>
                        </div>
                        <div class="form-group">
                            <label>Communication Details of the Instructors</label>
                            <textarea type="text" class="form-control" placeholder="Enter here.." name="comm_name_instructions" id="comm_name_instructions"></textarea>
                        </div>
                        
                        <div class="two ui buttons">
                            <button class="ui inverted violet  medium button prev2">Previous</button>
                            <button type="submit" name="signup" value="Sign up" class="ui inverted violet  medium button submit">Submit</button>
                        </div>
                    
                </div>
            </div>
</form>
        </div>
    </div>
<?php if($this->session->flashdata('success')): ?>
				<div class="alert_msg1 animated slideInUp bg-succ">
				<?php echo $this->session->flashdata('success');?> &nbsp; <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i>
				</div>
			<?php endif; ?>
			<?php if($this->session->flashdata('error')): ?>
				<div class="alert_msg1 animated slideInUp bg-warn">
				<?php echo $this->session->flashdata('error');?> &nbsp; <i class="fa fa-exclamation-triangle text-warning ico_bac" aria-hidden="true"></i>
				</div>
			<?php endif; ?>
    
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/semantic.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/js/bootstrapValidator.min.js"></script>
    <!-- MDB core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/index.js"></script>
    
	 
	<script>
$(document).ready(function() {
 
   $('#defaultForm').bootstrapValidator({
//       
        fields: {
			
			title: {
                validators: {
					notEmpty: {
						message: 'Course Title is required'
					}
				}
            },
			
			course_nature: {
                validators: {
					notEmpty: {
						message: 'Course Nature is required'
					}
				}
            },
			
			c_strat_date: {
                validators: {
					notEmpty: {
						message: 'Course Starting Date is required'
					}
				}
            },
			
			c_end_date: {
                validators: {
					notEmpty: {
						message: 'Course Ending Date is required'
					}
				}
            },
			t_num_hours: {
                validators: {
					notEmpty: {
						message: 'Total Number of hours to complete the course is required'
					}
				}
            },
			t_num_sessions: {
                validators: {
					notEmpty: {
						message: 'Total Number of Theory Sessions is required'
					}
				}
            },
			t_num_pra_session: {
                validators: {
					notEmpty: {
						message: 'Total Number of Practical Sessions is required'
					}
				}
            },
			num_subject: {
                validators: {
					notEmpty: {
						message: 'Number of Subjects is required'
					}
				}
            },
			
			subject_name: {
                validators: {
					notEmpty: {
						message: 'Subject/topic Names is required'
					}
				}
            },
			num_ins_required: {
                validators: {
					notEmpty: {
						message: 'Number of Instructors required is required'
					}
				}
            },
			
			resource_course: {
                validators: {
					notEmpty: {
						message: 'Total Number of hours allotted for the entire course is required'
					}
				}
            },
			resource_theory_session: {
                validators: {
					notEmpty: {
						message: 'Number of Theory Sessions is required'
					}
				}
            },
			
			resource_practical_session: {
                validators: {
					notEmpty: {
						message: 'Number of Practical Sessions is required'
					}
				}
            },
			
			num_instruction_allotted: {
                validators: {
					notEmpty: {
						message: 'Number of Instructors allotted is required'
					}
				}
            },
			
			name_instructions: {
                validators: {
					notEmpty: {
						message: 'Names of the Instructors is required'
					}
				}
            },
			comm_name_instructions:{
			         validators: {
					notEmpty: {
						message: 'Communication Details of the Instructors is required'
					}
				}
            }
			
        }
    });
    // Validate the form manually
    $('#validateBtn').click(function() {
        $('#defaultForm').bootstrapValidator('validate');
    });

    $('#resetBtn').click(function() {
        $('#defaultForm').data('bootstrapValidator').resetForm(true);
    });
	
});


</script>
	
	
	
	
	
</body>

</html>