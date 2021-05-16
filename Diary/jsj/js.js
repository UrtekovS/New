autorizationStatus();
load_nformation_top();
//registration();
let show_modal_registration=document.getElementById("show_modal_registration");
show_modal_registration.onclick=function(){
    let form_registration=document.getElementById("form_registration");
    form_registration.style.display="block";
    let message_registration=document.getElementById("message_registration");
    let message_registration2=document.getElementById("message_registration2");
    message_registration.style.display="none";
    message_registration2.style.display="none";
    let last_name=document.getElementById("last_name");
    last_name.value="";
let first_name=document.getElementById("first_name").value;
let patronymic=document.getElementById("patronymic").value;
let date_of_brith=document.getElementById("date_of_brith").value;

};
// для запуска видео
// let video=document.getElementById("video");
// let videoplay1=document.getElementById("videoplay1");
// videoplay.onclick=function(){
//     if(){}

//     //  video[0].src +=autoplay=1;
// };






function registration(){   

    var pass1=document.getElementById("pass1").value;
    var pass2=document.getElementById("pass2").value;
    var email=document.getElementById("email").value;
    var phone=document.getElementById("phone").value;
    var last_name=document.getElementById("last_name").value;
    var first_name=document.getElementById("first_name").value;
    var patronymic=document.getElementById("patronymic").value;
    var date_of_brith=document.getElementById("date_of_birth").value;
    var sex=document.getElementById("sex").value;
    // var message_registration=document.getElementById("message_registration");
    var message_registration2=document.getElementById("message_registration2");
    var mess="";
    if (pass1!=pass2){
        mess+="<p>Пароли не совпадают!</p>";
    }

   
    email=email.trim();
    phone=phone.trim();

    if (email.length==0 && phone.length==0){
        mess+="<p>Необходимо заполнить Email или телефон!</p>";
    }

    if (mess.length!=0){
        
        
        message_registration2.style.display="block";
        message_registration2.innerHTML=mess;
        
    }
    else{




    $.ajax({
        url: 'registration_bd.php',
        method: 'post',
        dataType: 'html',
        data: {last_name: last_name, first_name:first_name,patronymic:patronymic,
            date_of_brith:date_of_brith,sex:sex,email:email,phone:phone, pass1:pass1} ,
        success: function(data){
            //alert(data);
            message_registration2.style.display="block";
            message_registration2.innerHTML=data;
            if (data=="Пользователь успешно зарегистрирован"){
                var form_registration=document.getElementById("form_registration");
                form_registration.style.display="none";
            }
            return false;
            
        }
    });

}
   return false;
   
}


let sub_autorization=document.getElementById("sub_autorization");
sub_autorization.onclick=function(){
    let login=document.getElementById("login").value;
    let pass=document.getElementById("pass").value;
    //class="btn-close"
    $.ajax({
		url: 'autorization_bd.php',
		method: 'post',
		dataType: 'html',
		data: {login: login, pass:pass} ,
		success: function(data){
			//alert(data);
            let mass_data=JSON.parse(data);
            let message_autorization=document.getElementById("message_autorization");
            message_autorization.style.display="block";
            message_autorization.innerHTML=mass_data['mess'];

            if (mass_data['status']==1){
                let authorized=document.getElementById("authorized");
                let unauthorized=document.getElementById("unauthorized");
                let btn=document.getElementById("btn");
                btn.style.display="block";
                authorized.style.display="block";
                unauthorized.style.display="none";
                let login_user=document.getElementById("login_user");
                login_user.innerHTML=mass_data['login'];
                $(".modal").modal("hide");
            }
		}
	});
};


function autorizationStatus(){
    $.ajax({
		url: 'autorizationStatus.php',
		method: 'post',
		dataType: 'html',
		data: "" ,
		success: function(data){
			//alert(data);
            
            let mass_data=JSON.parse(data);
            if (mass_data['status']==1){
                let authorized=document.getElementById("authorized");
                let unauthorized=document.getElementById("unauthorized");
                authorized.style.display="block";
                unauthorized.style.display="none";
                let btn=document.getElementById("btn");
                btn.style.display="block";
                let login_user=document.getElementById("login_user");
                login_user.innerHTML=mass_data['login'];
            }
		}
	});
}
function load_nformation_top(){
    $.ajax({
		url: 'load_nformation_top.php',
		method: 'post',
		dataType: 'html',
		data: "" ,
		success: function(data){
			//alert(data);
            let d=JSON.parse(data);
            let s="";
            for(let i=0; i<d.length; i++){
            s+="<div class='col-lg-4'>"+
            "<img class='rounded-circle' src='img/info_img/"+d[i]["foto"]+"' alt='Generic placeholder image' width='140' height='140'>"+
            "<h2>"+d[i]['name_inf']+"</h2>"+
            "<p>"+d[i]['informat']+"</p>"+
            // "<p><a class='btn btn-secondary' href='write_feedback.php?id="+d[i]['id']+"' role='button' >Оставить отзыв, или рекомендации для улучшения сайта &raquo;</a></p>"+
          "</div><!-- /.col-lg-4 -->";
        }
        let load_nformation=document.getElementById("load_nformation");
        load_nformation.innerHTML=s;
		}
	});
}



let exit_button=document.getElementById("exit_button");
exit_button.onclick=function(){
    $.ajax({
		url: 'exit.php',
		method: 'post',
		dataType: 'html',
		data: "" ,
		success: function(data){
		//	alert(data);           
        let authorized=document.getElementById("authorized");
        let unauthorized=document.getElementById("unauthorized");
        authorized.style.display="none";
        unauthorized.style.display="block";
		}
	});

};
