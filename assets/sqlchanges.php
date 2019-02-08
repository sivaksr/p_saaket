
Create Table

CREATE TABLE `course_details` (
  `c_d_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `course_nature` varchar(250) DEFAULT NULL,
  `c_strat_date` varchar(250) DEFAULT NULL,
  `c_end_date` varchar(250) DEFAULT NULL,
  `t_num_hours` varchar(250) DEFAULT NULL,
  `t_num_sessions` varchar(250) DEFAULT NULL,
  `t_num_pra_session` varchar(250) DEFAULT NULL,
  `num_subject` varchar(250) DEFAULT NULL,
  `subject_name` varchar(250) DEFAULT NULL,
  `num_ins_required` varchar(250) DEFAULT NULL,
  `resource_course` varchar(250) DEFAULT NULL,
  `resource_theory_session` varchar(250) DEFAULT NULL,
  `resource_practical_session` varchar(250) DEFAULT NULL,
  `num_instruction_allotted` varchar(250) DEFAULT NULL,
  `name_instructions` varchar(250) DEFAULT NULL,
  `comm_name_instructions` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`c_d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1
