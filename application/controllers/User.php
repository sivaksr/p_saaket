<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
		public function __construct() 
		{
		parent::__construct();	
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('email');
		$this->load->library('user_agent');
		$this->load->helper('directory');
		$this->load->helper('cookie');
		$this->load->helper('security');
		$this->load->model('Users_model');
	
		}
	
	
	public function index(){
		
	
			$this->load->view('html/index');
			
	       
}
	
	public function addpost(){
		
	   $post=$this->input->post();
	 //echo'<pre>';print_r($post);exit;
		 $save_data=array(
		'title'=>isset($post['title'])?$post['title']:'',
		'course_nature'=>isset($post['course_nature'])?$post['course_nature']:'',
		'c_strat_date'=>isset($post['c_strat_date'])?$post['c_strat_date']:'',
		'c_end_date'=>isset($post['c_end_date'])?$post['c_end_date']:'',
		't_num_hours'=>isset($post['t_num_hours'])?$post['t_num_hours']:'',
		't_num_sessions'=>isset($post['t_num_sessions'])?$post['t_num_sessions']:'',
		't_num_pra_session'=>isset($post['t_num_pra_session'])?$post['t_num_pra_session']:'',
		'num_subject'=>isset($post['num_subject'])?$post['num_subject']:'',
		'subject_name'=>isset($post['subject_name'])?$post['subject_name']:'',
		'num_ins_required'=>isset($post['num_ins_required'])?$post['num_ins_required']:'',
		'resource_course'=>isset($post['resource_course'])?$post['resource_course']:'',
		'resource_theory_session'=>isset($post['resource_theory_session'])?$post['resource_theory_session']:'',
		'resource_practical_session'=>isset($post['resource_practical_session'])?$post['resource_practical_session']:'',
		'num_instruction_allotted'=>isset($post['num_instruction_allotted'])?$post['num_instruction_allotted']:'',
		'name_instructions'=>isset($post['name_instructions'])?$post['name_instructions']:'',
		'comm_name_instructions'=>isset($post['comm_name_instructions'])?$post['comm_name_instructions']:'',
		'status'=>1,
		'created_at'=>date('Y-m-d H:i:s'),
		'updated_at'=>date('Y-m-d H:i:s'),
		'created_by'=>isset($login_details['u_id'])?$login_details['u_id']:''
		 );
		//echo'<pre>';print_r($save_data);exit;	
		 $save=$this->Users_model->save_course_details($save_data);	
			//echo'<pre>';print_r($save);exit;
			if(count($save)>0){
			$this->session->set_flashdata('success',"Course details successfully added");	
			redirect('user/lists');		
			}else{
				$this->session->set_flashdata('error',"technical problem occurred. please try again once");
				redirect('');	
			}  
		
			
	       
  }
	
	public function lists(){
		$data['course_list']=$this->Users_model->get_course_list();
	//echo'<pre>';print_r($data);exit;	
			$this->load->view('html/list',$data);
			
	       
}
	public  function prints(){
		
		 
		$emp_id=base64_decode($this->uri->segment(3));
		$filename=$emp_id;
		$data['usersData']=$this->Users_model->get_course_list_data($emp_id);
		//echo'<pre>';print_r($data);exit;
		
		$path = rtrim(FCPATH,"/");
					$file_name = $emp_id.'.pdf';                
					$data['page_title'] = $data['details']['name'].'invoice'; // pass data to the view
					$pdfFilePath = $path."/assets/coursepass/".$file_name;
					ini_set('memory_limit','320M'); // boost the memory limit if it's low <img src="https://s.w.org/images/core/emoji/72x72/1f609.png" alt="??" draggable="false" class="emoji">
					$html = $this->load->view('html/coursepdf', $data, true); // render the view into HTML
					//echo '<pre>';print_r($html);exit;
					$this->load->library('pdf');
					$pdf = $this->pdf->load();
					$pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date('M-d-Y')); // Add a footer for good measure <img src="https://s.w.org/images/core/emoji/72x72/1f609.png" alt="??" draggable="false" class="emoji">
					$pdf->SetDisplayMode('fullpage');
					$pdf->list_indent_first_level = 0;	// 1 or 0 - whether to indent the first level of a list
					$pdf->WriteHTML($html); // write the HTML into the PDF
					$pdf->Output($pdfFilePath, 'F');
					redirect("assets/coursepass/".$file_name);
			
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
}
