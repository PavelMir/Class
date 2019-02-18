<?php
class Students{
	public $firstname;
	public $lastname;
	public $gender;
	public $status;
	public $gpa;
	
	public function showMyself(){
	var_dump(get_object_vars($this));
	}
	
	public function studyTime($study_time){
		if($this->gpa>4){$this->gpa = 4;}
		$this->gpa += log($study_time);
		return round($this->gpa, 5);
	}
}

$arr=[];//array of students
$arr[0]=['firstname'=>'Mike', 'lastname'=>'Barnes', 'status'=>'freshman', 'gender'=>'male', 'gpa'=>4, 'study_time'=>60];
$arr[1]=['firstname'=>'Jim', 'lastname'=>'Nickerson', 'status'=>'sophomore', 'gender'=>'male', 'gpa'=>3, 'study_time'=>100];
$arr[2]=['firstname'=>'Jack', 'lastname'=>'Indabox', 'status'=>'junior', 'gender'=>'male', 'gpa'=>2.5, 'study_time'=>40];
$arr[3]=['firstname'=>'Jane', 'lastname'=>'Miller', 'status'=>'senior', 'gender'=>'female', 'gpa'=>3.6, 'study_time'=>300];
$arr[4]=['firstname'=>'Mary', 'lastname'=>'Scott', 'status'=>'senior', 'gender'=>'female', 'gpa'=>2.7, 'study_time'=>1000];

for($i=0; $i<count($arr); $i++){//making objects
	$studentList[]= new Students($i);
}

for($i=0; $i<count($arr); $i++){//adding students from array to objects
$studentList[$i]->firstname=$arr[$i]['firstname'];
$studentList[$i]->lastname=$arr[$i]['lastname'];
$studentList[$i]->status=$arr[$i]['status'];
$studentList[$i]->gender=$arr[$i]['gender'];
$studentList[$i]->gpa=$arr[$i]['gpa'];
$studentList[$i]->study_time=$arr[$i]['study_time'];
}

foreach($studentList as $value){
  echo $value->showMyself();
}

foreach($studentList as $value){//echo all values
  echo $value->firstname.' ';
  echo $value->lastname.' ';
  echo $value->status.' ';
  echo $value->gender.' ';
  echo $value->gpa.' ';
  echo $value->study_time.' '; 
}

foreach($studentList as $value){
  echo $value->studyTime($value->study_time);
}

foreach($studentList as $value){
  echo $value->showMyself();
}


//Что ж, теперь используйте магические методы по ссылке http://php.net/manual/en/language.oop5.magic.php 
//и попытайтесь реорганизовать ваш код, используя эти методы. Придумайте дополнительные методы 
//для вашего кода, если это необходимо.