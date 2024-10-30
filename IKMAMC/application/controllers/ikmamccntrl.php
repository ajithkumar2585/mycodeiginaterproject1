<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ikmamccntrl extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('ikmamcview/headerlight');
		$this->load->view('ikmamcview/landing');
		$this->load->view('ikmamcview/footer');
	}
	public function login()
	{
		$this->load->view('ikmamcview/headerlight');
		$this->load->view('ikmamcview/login');
		$this->load->view('ikmamcview/footer');
	}
	public function feedback()
	{
			
		
		$sino = $this->input->post("id");
		if($sino>0){
			$this->load->model ('ikmamc_model','hm');
			$data = $this->hm->get_feedview($sino);
			
		$feeddata["id"]=$data->id;	
		$feeddata["feedname"]=$data->feedname;
		$feeddata["feedemail"]=$data->feedemail;
		$feeddata["feedmobile_no"]=$data->feedmobile_no;
		$feeddata["visit_status"]=$data->visit_status;
		$feeddata["fedneed"]=$data->fedneed;
		$feeddata["fq"]=$data->fq;
		$feeddata["remarks"]=$data->remarks;
		$feeddata["remarks1"]=$data->remarks1;
		
	}else
	{
	    $feeddata["id"]='0';
		$feeddata["sino"]='';	
		$feeddata["feedname"]='';
		$feeddata["feedemail"]=null;
		$feeddata["feedmobile_no"]=null;
		$feeddata["visit_status"]=null;
		$feeddata["fedneed"]=null;
		$feeddata["fq"]=null;
		$feeddata["remarks"]=null;
		$feeddata["remarks1"]=null;
		
	    
	}
	    $feeddata['message']='';
		$this->load->view('ikmamcview/headerlight');
		$this->load->view('ikmamcview/feedback',$feeddata);
		$this->load->view('ikmamcview/footer');
	}
	public function feedform()
	{
		$feeder=0;
		$notice='';
		
	$feeddata["id"]=$this->input->post('id');
	$feeddata['feedname'] = $this->input->post('feedname');
	$feeddata['feedemail'] = $this->input->post('feedemail');
	$feeddata['feedmobile_no'] = $this->input->post('feedmobile_no');
	$feeddata['visit_status'] =  $this->input->post('visit_status');
	$feeddata['fedneed'] = $this->input->post('fedneed');
	$feeddata['fq'] = $this->input->post('fq');
	$feeddata['remarks'] = $this->input->post('remarks');
	$feeddata['remarks1'] =  $this->input->post('remarks1');   

	//print_r ($feeddata);exit;
	


	    
        if(empty($feeddata["feedemail"])){$feeder=1;$notice='Enter Valid Mail ID';} 
        if($feeddata["feedmobile_no"]==0) {$feeder=1;$notice='Enter Valid Mob No';}

		

		
		

        If($feeder==0){ 
				$this->load->model('ikmamc_model','feedbm');
				$this->feedbm->feedform($feeddata);
                $notice='Saved successfully';
				
				$feeddata["id"]='0';
                $feeddata["feedname"]=null;
                $feeddata["feedemail"]=null;
                $feeddata["feedmobile_no"]=null;
                $feeddata["visit_status"]=null;
                $feeddata["fedneed"]=null;
                $feeddata["fq"]=null;
				$feeddata["remarks"]=null;
                $feeddata["remarks1"]=null;
				
		}
		//print_r ($feeddata);exit;

    $feeddata['notice']=$notice;
	$this->load->view('ikmamcview/headerlight');
	$this->load->view('ikmamcview/feedback',$feeddata);
	$this->load->view('ikmamcview/footer');
	}
	public function feedbackview()
	{
        $feed_data=array();
        $this->load->model('ikmamc_model','fsm');
        $feed_data['feed_data']=$this->fsm->get_feedback();
	
        
        $this->load->view('ikmamcview/headerlight');
        $this->load->view('ikmamcview/feedbackview',$feed_data);
        $this->load->view('ikmamcview/footer');
    }
	public function contact()
	{
        $error=0;
		$msg='';

		$id = $this->input->post("id");
		$this->load->model('ikmamc_model','psdbm');
		$data1 =$this->psdbm->get_contactview($id);

		if($id>0){
		$xx["id"]=$data1->id;
		$xx['customer_name'] =$data1->customer_name;
		$xx['email'] = $data1->email;
		$xx['mobile_no'] = $data1->mobile_no;
		$xx['remarks'] =  $data1->remarks;
		}
		else
		{
		$xx["id"]='';
		$xx["customer_name"]='';
		$xx["email"]=null;
		$xx["mobile_no"]='';
		$xx["remarks"]=null;
		}

	

		$data['message']='';
		$this->load->view('ikmamcview/headerlight');
		$this->load->view('ikmamcview/contact',$xx);
		$this->load->view('ikmamcview/footer');
	}
	public function contactlistview()
	{
        $data["id"]='';
		$data['customer_name'] = '';
		$data['email'] = '';
		$data['mobile_no'] = '';
		$data['remarks'] = '';

		$data=array();
        $this->load->model('ikmamc_model','dsm');
        $data['data']=$this->dsm->get_view();


		$this->load->view('ikmamcview/headerlight');
		$this->load->view('ikmamcview/contactlistview',$data);
		$this->load->view('ikmamcview/footer');
	}
	public function saveform()
	{

	$error=0;
		 
	$data["id"]=$this->input->post('id');	
	$data['customer_name'] = $this->input->post('Name');
	$data['email'] = $this->input->post('Email');
	$data['mobile_no'] = $this->input->post('PhoneNumber');
	$data['remarks'] =  $this->input->post('remarks');

	if(empty($data["email"])){$error=1;$msg='Enter Valid Mail ID';} 
        if($data["mobile_no"]==0) {$error=1;$msg='Enter Valid Mob No';}

	
    if($error==0)
		{
		 
				$this->load->model('ikmamc_model','lightdbm');
	            $this->lightdbm->saveform($data);
                $msg='Saved successfully';
				$data["id"]=0;
                $data["customer_name"]=null;
                $data["email"]=null;
                $data["mobile_no"]=null;
                $data["remarks"]=null;
               
				
        }

	

	$data['message']=$msg;
    $this->load->view('ikmamcview/headerlight');
	$this->load->view('ikmamcview/contact',$data);
	$this->load->view('ikmamcview/footer');
	}
	public function resume_view()
    {
        $resdata=array();
        $this->load->model('ikmamc_model','dsm');
        $resdata['res_data']=$this->dsm->get_resume();
		$resdata['ms']=$this->dsm->get_maritalstatus();
		$resdata['gs']=$this->dsm->get_genderstatus();
        
        $this->load->view('ikmamcview/headerlight');
        $this->load->view('ikmamcview/resume_view',$resdata);
        $this->load->view('ikmamcview/footer');
    }
	public function amcdetails()
	{
		$error=0;
		$msg='';

		$datav = $this->input->post("id");
		$this->load->model('ikmamc_model','psdbm');
		$data =$this->psdbm->get_amcview($datav);
	
		
		$amcdata['cmpoMtype'] =$this->psdbm->get_machinetype();
		$amcdata['cmpoModel'] =$this->psdbm->get_model();

		if($datav>0){
		$amcdata["id"]=$data->id;
		$amcdata['machine_name'] =$data->machine_name;
		$amcdata['machinetype'] = $data->machinetype;
		$amcdata['model'] = $data->model;
		$amcdata['warranty_date'] =  $data->warranty_date;
		$amcdata['amc_date'] = $data->amc_date;
		$amcdata['machine_slno'] = $data->machine_slno;
		$amcdata['officesection'] = $data->officesection;
		$amcdata['remarks'] =  $data->remarks;
		}
		else
		{
		$amcdata["id"]='';
		$amcdata["machine_name"]='';
		$amcdata["machinetype"]='0';
		$amcdata["model"]='';
		$amcdata["warranty_date"]=null;
		$amcdata["amc_date"]=null;
		$amcdata["machine_slno"]=null;
		$amcdata["officesection"]=null;
		$amcdata["remarks"]=null;
		}
		
		
	
	

	    $amcdata['message']='';
		$this->load->view('ikmamcview/headerlight');
		$this->load->view('ikmamcview/amcdetails',$amcdata);
		$this->load->view('ikmamcview/footer');
	}
	public function amcform()
	{
		$error=0;

	
			$amcdata["id"] = $this->input->post("id");
			$amcdata['machine_name'] = $this->input->post("name");
			$amcdata['machinetype'] = $this->input->post("mtype");
			$amcdata['model'] = $this->input->post("model");
			$amcdata['warranty_date'] =  $this->input->post("date1");
			$amcdata['amc_date'] = $this->input->post("date2");
			$amcdata['machine_slno'] = $this->input->post("serialnumber");
			$amcdata['officesection'] = $this->input->post("officesection");
			$amcdata['remarks'] =  $this->input->post("remarks");
	


	    if(empty($amcdata["machine_name"])){$error=1;$msg='Enter machine_name';} 
        if($amcdata["machinetype"]==0) {$error=1;$msg='Enter machinetype';}
		


        if($error==0)
		{
		 
				$this->load->model('ikmamc_model','amcdbm');
				$this->amcdbm->amcform($amcdata);
                $msg='Saved successfully';
				$amcdata["id"]=0;
                $amcdata["machine_name"]=null;
                $amcdata["machinetype"]=0;
                $amcdata["model"]=0;
                $amcdata["warranty_date"]=null;
                $amcdata["amc_date"]=null;
                $amcdata["machine_slno"]=null;
                $amcdata["officesection"]=null;
				$amcdata["remarks"]=null;
				
        }

	

	
    $amcdata['message']=$msg;
	$this->load->view('ikmamcview/headerlight');
	$this->load->view('ikmamcview/amcdetails',$amcdata);
	$this->load->view('ikmamcview/footer');
	}
	public function resume()
	{
			
		
		$sino = $this->input->post("id");
		if($sino>0){
			$this->load->model ('ikmamc_model','wm');
			$data = $this->wm->get_resumeview($sino);
			
		$biodata["id"]=$data->id;	
		$biodata["pname"]=$data->pname;
		$biodata["pemail"]=$data->pemail;
		$biodata["address1"]=$data->address1;
		$biodata["city_name"]=$data->city_name;
		$biodata["state"]=$data->state;
		$biodata["pincode"]=$data->pincode;
		$biodata["mobile_no"]=$data->mobile_no;
		$biodata["dob"]=$data->dob;
		$biodata["gender"]=$data->gender;
		$biodata["marital_status"]=$data->marital_status;
		$biodata["eq"]=$data->eq;
	}else
	{
	    $biodata["id"]='0';
		$biodata["sino"]='';	
		$biodata["pname"]='';
		$biodata["pemail"]=null;
		$biodata["address1"]='';
		$biodata["city_name"]=null;
		$biodata["state"]=null;
		$biodata["pincode"]=null;
		$biodata["mobile_no"]=null;
		$biodata["dob"]=null;
		$biodata["gender"]=null;
		$biodata["marital_status"]=null;
		$biodata["eq"]=null;
	    
	}
	    $biodata['message']='';
		$this->load->view('ikmamcview/headerlight');
		$this->load->view('ikmamcview/resume',$biodata);
		$this->load->view('ikmamcview/footer');
	}
	public function personalform()
	{
		$error=0;
		$warn='';
		
	$biodata["id"]=$this->input->post('id');
	$biodata['pname'] = $this->input->post('name');
	$biodata['pemail'] = $this->input->post('email');
	$biodata['address1'] = $this->input->post('address');
	$biodata['city_name'] =  $this->input->post('city');
	$biodata['state'] = $this->input->post('state');
	$biodata['pincode'] = $this->input->post('pin');
	$biodata['mobile_no'] = $this->input->post('mobile');
	$biodata['dob'] =  $this->input->post('bdate');   
	$biodata['gender'] =  $this->input->post('gender'); 
	$biodata['marital_status'] =  $this->input->post('status');
	$biodata['eq'] =  $this->input->post('eq');
	


	    if(empty($biodata["pname"])){$error=1;$warn='Enter name';} 
        if($biodata["pincode"]==0) {$error=1;$warn='Enter-Pincode';}
		if($biodata["marital_status"]==0) {$error=1;$warn='Enter Marital Status';}
        if($biodata["eq"]==0){$error=1;$warn='Enter Qualification';}
        if(empty($biodata["dob"])){$error=1;$warn='Enter DOB';}
        if($biodata["mobile_no"]==0) {$error=1;   $warn='Enter Mobile No:';}
        if(empty($biodata['gender'])){$error==1;$warn='enter gender';}


        If($error==0){ 
				$this->load->model('ikmamc_model','psdbm');
				$this->psdbm->personalform($biodata);
                $warn='Saved successfully';
				
				$biodata["id"]='0';
                $biodata["pname"]='';
                $biodata["pemail"]=null;
                $biodata["address1"]='';
                $biodata["city_name"]=null;
                $biodata["state"]=null;
                $biodata["pincode"]=null;
				$biodata["mobile_no"]=null;
                $biodata["dob"]=null;
				$biodata["gender"]=null;
				$biodata["marital_status"]=null;
				$biodata["eq"]=null;
		}

	$biodata['message']=$warn;
	$this->load->view('ikmamcview/headerlight');
	$this->load->view('ikmamcview/resume',$biodata);
	$this->load->view('ikmamcview/footer');
	}
	public function amc_list()
	{
		$dddamc=array();
        $this->load->model('ikmamc_model','dsm');
        $dddamc['amc_data']=$this->dsm->get_amc();
		$dddamc['ms']=$this->dsm->get_machinetype();
		$dddamc['gs']=$this->dsm->get_model();

		
		$this->load->view('ikmamcview/headerlight');
		$this->load->view('ikmamcview/amclistview',$dddamc);
		$this->load->view('ikmamcview/footer');
	}
	
}
