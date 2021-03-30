<?php

require_once(__DIR__.'/../../core/db_model.php');

class mentorModel extends db_model{

    public function get_pending(){
		$sql = "SELECT mentor.mentor_id ,mentor.date, districts.name_en FROM mentor INNER JOIN user 
		ON mentor.user_id = user.user_id INNER JOIN address ON address.user_id= user.user_id INNER JOIN districts 
		ON address.district=districts.id where mentor.verified_state=0 AND mentor.reject_reason IS NULL";
		return $this->queryfromsql($sql);        
    }

	public function getallbyid($id){
		$sql = "SELECT mentor.* ,user.*, districts.name_en AS district, cities.name_en AS city, address.zip_code, 
		address.address_line1, address.address_line2, provinces.name_en AS province, c3.name_en AS HT, c1.name_en AS NS1, 
		c2.name_en AS NS2 FROM mentor INNER JOIN user ON mentor.user_id = user.user_id INNER JOIN address ON 
		address.user_id= user.user_id INNER JOIN districts ON address.district=districts.id INNER JOIN cities on 
		address.city = cities.id INNER JOIN provinces ON address.province=provinces.id INNER JOIN cities c1 ON c1.id=user.nearestcity1 
		INNER JOIN cities c2 ON c2.id=user.nearestcity2 INNER JOIN cities c3 ON c3.id=user.hometown where mentor.mentor_id=".$id;
		return $this->queryfromsql($sql);
	}

	public function accept($id){
		return $this->update('mentor',array('verified_state'=>'1'),array('mentor_id'=>$id));
	}
    
	public function reject($id,$reason){
		return $this->update('mentor',array('verified_state'=>'0','reject_reason'=>$reason),array('mentor_id'=>$id,));
	}
	
	public function getallmentorsindistrict($id){
		$sql="SELECT mentor.*,user.*,address.*,cities.name_en as city FROM mentor INNER JOIN user ON mentor.user_id=user.user_id 
		INNER JOIN address ON address.user_id=user.user_id INNER JOIN cities ON address.city=cities.id WHERE address.district=".$id;
		return $this->queryfromsql($sql);
	}
    
	public function rejectassignmentor($mid,$fid){
		return $this->update('farmer',array('mentor_id'=>'-1'),array('farmer_id'=>$fid));
	}

	public function assignmentor($mid,$fid){
		$this->queryfromsql("UPDATE mentor SET farmer_count= farmer_count+1");
		return $this->update('farmer',array('mentor_id'=>$mid),array('farmer_id'=>$fid));
	}

	public function getmentorallbyid($id){
		$sql = "SELECT mentor.* ,user.*, districts.name_en AS district, cities.name_en AS city, address.zip_code, 
		address.address_line1, address.address_line2, provinces.name_en AS province, c3.name_en AS HT, c1.name_en AS NS1, 
		c2.name_en AS NS2 FROM mentor INNER JOIN user ON mentor.user_id = user.user_id INNER JOIN address ON 
		address.user_id= user.user_id INNER JOIN districts ON address.district=districts.id INNER JOIN cities on 
		address.city = cities.id INNER JOIN provinces ON address.province=provinces.id INNER JOIN cities c1 ON c1.id=user.nearestcity1 
		INNER JOIN cities c2 ON c2.id=user.nearestcity2 INNER JOIN cities c3 ON c3.id=user.hometown where user.user_id=".$id;
		return $this->queryfromsql($sql);
	}

	function updatedetails($data){
		session_start();
		$firstname=$data['fname'];
			$lastname=$data['lname'];
			$mobile1=$data['mobileno1'];
			$mobile2=$data['mobileno2'];
		  $user_id=$_SESSION['user'][0]['user_id'];;
	
	
		$sql="UPDATE user SET firstname='".$firstname."', lastname='".$lastname."',contactno1='".$mobile1."',contactno2='".$mobile2."' WHERE user_id='".$user_id."'";
		$result=$this->connection->query($sql);
		if($result){ return true;}else{return false;}
	  }

}

?>