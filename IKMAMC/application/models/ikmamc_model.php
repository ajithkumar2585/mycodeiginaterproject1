<?php


Class ikmamc_model Extends CI_Model
{
	function  saveform($data)
	{		
	if($data['id']>0){$this->db->where('id',$data['id'])->update('sampleform',$data);
	}
	else{
		unset($data['id']);
		$this->db->insert('sampleform',$data);
	}	
	}
	function get_contactview($sino)
    {
       $dataview= $this->db->select('*')->where('id',$sino)->get('sampleform')->row();
       return $dataview;
	}
	function  amcform($amcdata)
	{
	if($amcdata['id']>0){$this->db->where('id',$amcdata['id'])->update('tr_amc_details',$amcdata);
	}
	else
	{
		unset($amcdata['id']);
		$this->db->insert('tr_amc_details',$amcdata);
	}	
	}
	function  personalform($biodata)
	{
		if($biodata['id']>0){$this->db->where('id',$biodata['id'])->update('tr_personal_details',$biodata);}
		else{
			unset($biodata['id']);
			$this->db->insert('tr_personal_details',$biodata);
		}
	
	}
	function get_view() 
    {
           

           $conview= $this->db->select('*')->get('sampleform');
           return $conview;
        
    }
	function get_resume() 
    {
            

           $resumeview= $this->db->select('*')->get('tr_personal_details');
           return $resumeview;
    }
	function get_amc() 
    {
            

           $viewamc= $this->db->select('*')->get('tr_amc_details');
           return $viewamc;
        
    }
	function get_resumeview($sino)
    {
            

           $dataview= $this->db->select('*')->where('id',$sino)->get('tr_personal_details')->row();
           return $dataview;
		
        
    }
	function get_maritalstatus() 
    {
			 $mrgsts['0']='';
			 $mrgsts['1']='Married';
             $mrgsts['2']='UnMarried';           
             return $mrgsts;
        
    }
	function get_genderstatus() 
    {
		     $gensts['0']='';
             $gensts['1']='Male';
             $gensts['2']='Female';           
             return $gensts;
        
    }
	function get_machinetype() 
    {
			 $mtype['0']='****';
			 $mtype['1']='Desktop';
             $mtype['2']='Laptops'; 
			 $mtype['3']='Prinetrs';
			 $mtype['4']='Others';

             return $mtype;
        
    }
	function get_model() 
    {
		     $mmodel['0']='****';
             $mmodel['1']='DELL';
             $mmodel['2']='HP';  
			 $mmodel['3']='ACER'; 
			 $mmodel['4']='Lenovo';          
             return $mmodel;
        
    }
	function get_amcview($sino)
    {
            

           $amcview= $this->db->select('*')->where('id',$sino)->get('tr_amc_details')->row();
           return $amcview;

        
    }
	function  feedform($feeddata)
	{
	if($feeddata['id']>0){$this->db->where('id',$feeddata['id'])->update('tr_feedback',$feeddata);
	}
	else
	{
		unset($feeddata['id']);
		$this->db->insert('tr_feedback',$feeddata);
	}	
}
	function get_feedback() 
    {
            

           $feed_data= $this->db->select('*')->get('tr_feedback');
           return $feed_data;
    }
	function get_feedview($sino)
    {
            

           $feedview= $this->db->select('*')->where('id',$sino)->get('tr_feedback')->row();
           return $feedview;
		
        
    }
	

}
 ?>






