


function exit() { 

    $.ajax({
		url: 'serviceexit_bd.php',
		method: 'post',
		dataType: 'html',
		data: {} ,
		success: function(data){
			location.reload();            
      }
		
	});
};



function avtoriz_us() {
    var login=document.getElementById("login").value;
    var password=document.getElementById("password").value;  

    $.ajax({
		url: 'autoriz_bd.php',
		method: 'post',
		dataType: 'html',
		data: {login: login, password:password} ,
		success: function(data){
			//alert(data);
            var trz=JSON.parse(data);
            if (trz['status']==1){            
            location.reload();               
            }           
		}
	});
};


