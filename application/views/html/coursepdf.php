<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Course Details</title>
  </head>
  <style>
	@font-face {
  font-family: SourceSansPro;
  src: url(SourceSansPro-Regular.ttf);
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #0087C3;
  text-decoration: none;
}

body {
  position: relative;
  width: 21cm;  
  height: 29.7cm; 
  margin: 0 auto; 
  color: #555555;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 14px; 
  font-family: SourceSansPro;
}

header {
  padding: 10px 0;
  margin-bottom: 20px;
  border-bottom: 1px solid #AAAAAA;
}



#details {
  margin-bottom: 50px;
}

#client {
  padding-left: 6px;
  border-left: 6px solid #0087C3;
  float: left;
}

#client .to {
  color: #777777;
}

h2.name {
  font-size: 1.4em;
  font-weight: normal;
  margin: 0;
}
#notices{
  padding-left: 6px;
  border-left: 6px solid #0087C3;  
}

#notices .notice {
  font-size: 1.2em;
}

footer {
  color: #777777;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #AAAAAA;
  padding: 8px 0;
  text-align: center;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
	padding:10px;
}


	</style>
  <body>
   
	<div class="table-responsive">
	
	<table style="width:100%">
	  <tr style="background:#ddd;line-height:25px">
		<th colspan="8">Course Details</th>
		
	  </tr>
	   <tr>
		 <th>Course Title</th>
                            <th>Course Nature</th>
                            <th>Course Starting Date</th>
                            <th>Course Ending Date</th>
							 <th>Total Number of hours to complete the course</th>
                            <th>Number of Theory Sessions</th>
                            <th>Number of Practical Sessions</th>
                            <th>Names of the Instructors</th>
	  </tr>
	 
	  
	 <?php if(isset($usersData) && count($usersData)>0){ ?>
					<?php $count=1;foreach($usersData as $list){ ?>
	  <tr>
		 <td><?php echo isset($list['title'])?$list['title']:''?></td>
                            <td><?php echo isset($list['course_nature'])?$list['course_nature']:''?></td>
                            <td><?php echo isset($list['c_strat_date'])?$list['c_strat_date']:''?></td>
                            <td><?php echo isset($list['c_end_date'])?$list['c_end_date']:''?></td>
                            <td><?php echo isset($list['t_num_hours'])?$list['t_num_hours']:''?></td>
                            <td><?php echo isset($list['t_num_sessions'])?$list['t_num_sessions']:''?></td>
                            <td><?php echo isset($list['t_num_pra_session'])?$list['t_num_pra_session']:''?></td>
                             <td>
							<?php echo isset($list['name_instructions'])?$list['name_instructions']:''?>
							<li>Total Number of hours=<?php echo isset($list['t_num_hours'])?$list['t_num_hours']:''?></li>
							<li>Number of Theory Sessions=<?php echo isset($list['resource_theory_session'])?$list['resource_theory_session']:''?></li>
							<li>Number of Practical Sessions=<?php echo isset($list['resource_practical_session'])?$list['resource_practical_session']:''?></li>
							</td>
	  </tr>
	 <?php $count++;} ?>
	  <?php } ?>
	  	
	  
	</table>
	</div>
   
  </body>
</html>