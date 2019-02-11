<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PSAAKET</title>
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.png" type="image/png">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
	<link href="<?php echo base_url(); ?>assets/vendor/css/custom.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/semantic.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/dataTables.bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
</head>

<body style="background-color: #300032;">

    <div class="container">
        <div class="row">
            <div class="col-md-12" style="background-color: #F1F0FF;border-radius: 5px;margin: 50px 0px;padding: 20px;">
                <a href="<?php echo base_url(''); ?>" class="btn  btn-primary">Back</a>
			   <h1 class="font" style="color:#300032;text-align: center;">Course Details</h1>
				
                <table id="example" class="table table-striped table-bordered" style="width:100%;">
                    <thead>
                        <tr>
                            <th>Course Title</th>
                            <th>Course Nature</th>
                            <th>Course Starting Date</th>
                            <th>Course Ending Date</th>
							 <th>Total Number of hours to complete the course</th>
                            <th>Number of Theory Sessions</th>
                            <th>Number of Practical Sessions</th>
                            <th>Names of the Instructors</th>
							<th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php foreach($course_list as $list){?> 
                       
                        <tr>
                            <td><?php echo isset($list['title'])?$list['title']:''?></td>
                            <td><?php echo isset($list['course_nature'])?$list['course_nature']:''?></td>
                            <td><?php echo isset($list['c_strat_date'])?$list['c_strat_date']:''?></td>
                            <td><?php echo isset($list['c_end_date'])?$list['c_end_date']:''?></td>
                            <td><?php echo isset($list['t_num_hours'])?$list['t_num_hours']:''?></td>
                            <td><?php echo isset($list['t_num_sessions'])?$list['t_num_sessions']:''?></td>
                            <td><?php echo isset($list['t_num_pra_session'])?$list['t_num_pra_session']:''?></td>
                            <th>
							<?php echo isset($list['name_instructions'])?$list['name_instructions']:''?>
							<li>Total Number of hours=<?php echo isset($list['t_num_hours'])?$list['t_num_hours']:''?></li>
							<li>Number of Theory Sessions=<?php echo isset($list['resource_theory_session'])?$list['resource_theory_session']:''?></li>
							<li>Number of Practical Sessions=<?php echo isset($list['resource_practical_session'])?$list['resource_practical_session']:''?></li>
							</th>
                            
							
							<td>
							 <a target="_blank" href="<?php echo base_url('User/prints/'.base64_encode($list['c_d_id'])); ?>"  data-toggle="tooltip" title="Print"  class="btn btn-info">Print</a>
	
							</td>
                            
                        </tr>
                        
                       
					   <?php } ?>
                        
                    </tbody>
                </table>
            </div>
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
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/index.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>