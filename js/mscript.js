$(document).ready(function(){


		

});

function submiData(){

	let fname=$("#fname").val();
	let dob=$("#dob").val();
	let idno=$("#idno").val();
	let adrress=$("#inputAddress").val();
	let county=$("#county").val();
	let subcounty=$("#subcounty").val();
	let telephone=$("#telephone").val();
	let email=$("#email").val();
	let gender=$("#gender").val();
	let marital=$("#marital").val();
	let kinname=$("#kinname").val();
	let dobkin=$("#dobkin").val();
	let kinid=$("#kinid").val();
	let fgendr=$("#fgender").val();
	let relp=$("#relationship").val();
	


	if(fname=="" || dob=="" || idno=="" || adrress=="" ||
	county=="" || subcounty=="" || telephone=="" || email=="" || gender=="" || marital=="" ||
	kinname=="" || dobkin=="" || kinid==""|| fgendr=="" || relp=="" ){

		alert("Please Fill all fields on the form");

	return;
	}

	var datas=$("#mform").serialize();

	$.ajax({

		
		url:"ajax/dbsave.php",
		type:"POST",
		data:datas,
		cache:false,
		processData:false,
		success:function(res){


			alert(res);
		}


	});



}