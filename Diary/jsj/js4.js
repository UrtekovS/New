  load_user_date();



function load_user_date(){
//let message_update_user_date2=document.getElementById("message_update_user_date2");

    $.ajax({
    url: 'load_user_date.php',
    method: 'post',
    dataType: 'html',
    data: "" ,
    success: function(data){
        //alert(data);
        let user_data=JSON.parse(data);
        let last_name_update=document.getElementById("last_name_update");
        last_name_update.value=user_data["last_name"];

        let first_name_update=document.getElementById("first_name_update");
        first_name_update.value=user_data["first_name"];
        
        let patronymic_update=document.getElementById("patronymic_update");
        patronymic_update.value=user_data["patronymic"];

        let phone_update=document.getElementById("phone_update");
        phone_update.value=user_data["phone"];

        let email_update=document.getElementById("email_update");
        email_update.value=user_data["email"];

        let date_of_brith_update=document.getElementById("date_of_brith_update");
        var d=user_data["date_of_birth"];
        var dateVal = new Date(user_data["date_of_birth"]);
        // my_data.value=d["my_data"];
        var day = dateVal.getDate().toString().padStart(2, "0");
        var month = (1 + dateVal.getMonth()).toString().padStart(2, "0");
       
        var inputDate = dateVal.getFullYear() + "-" + (month) + "-" + (day) ;
        date_of_brith_update.value = inputDate;

        //date_of_brith_update.value = user_data["date_of_brith_update"];
        let sex_update=document.getElementById("sex_update");
        sex_update.value=user_data["sex"];

        
      
    }  

    
        });
}



let update_status=document.getElementById("update_status");
update_status.onclick=function(){

    last_name_update.disabled=!(last_name_update.disabled);
    first_name_update.disabled=!(first_name_update.disabled);
    patronymic_update.disabled=!(patronymic_update.disabled);
    phone_update.disabled=!(phone_update.disabled);
    email_update.disabled=!(email_update.disabled);
    date_of_brith_update.disabled=!(date_of_brith_update.disabled);
    sex_update.disabled=!(sex_update.disabled);
    let submit_update_user_date=document.getElementById('submit_update_user_date');
    submit_update_user_date.disabled=!(submit_update_user_date.disabled);
    if(sex_update.disabled==true){
        update_status.value="?????????????????????????? ???????????? ????????????";
        load_user_date();
    }
    else{
        update_status.value="???????????????? ????????????????????????????";

    }
}


 function update_user_date(){
    let message_update_user_date=document.getElementById("message_update_user_date");
    let mess="";
    let em=email_update.value.trim();
    let ph=phone_update.value.trim();

    if (em.length==0 && ph.length==0){
        mess+="<p>???????????????????? ?????????????????? Email ?????? ??????????????!</p>";
    }

    if (mess.length!=0){
        
        message_update_user_date.style.display="block";
        message_update_user_date.innerHTML= mess;
     
    }
    else{
        last_name_update.disabled=!(last_name_update.disabled);
    first_name_update.disabled=!(first_name_update.disabled);
    patronymic_update.disabled=!(patronymic_update.disabled);
    phone_update.disabled=!(phone_update.disabled);
    email_update.disabled=!(email_update.disabled);
    date_of_brith_update.disabled=!(date_of_brith_update.disabled);
    sex_update.disabled=!(sex_update.disabled);
    let submit_update_user_date=document.getElementById('submit_update_user_date');
    submit_update_user_date.disabled=!(submit_update_user_date.disabled);

        $.ajax({
            url: 'update_user_data.php',
            method: 'post',
            dataType: 'html',
            data: {last_name: last_name_update.value, 
                first_name:first_name_update.value,
                patronymic:patronymic_update.value,
                date_of_brith:date_of_brith_update.value,
                sex:sex_update.value,
                email:email_update.value,
                phone:phone_update.value} ,
            success: function(data){
                //alert(data);
                let mas=JSON.parse(data);
                if (mas['status']==1){
                    update_status.onclick();
                    message_update_user_date.style.display="block";
                    message_update_user_date.innerHTML=mas['mess'];
                    let login_user=document.getElementById("login_user");
                    login_user.innerHTML=mas['login'];

                    
                }
                else{
                    message_update_user_date.style.display="block";
                    message_update_user_date.innerHTML=mas['mess'];
                }
               
                return false;
                
            }
        });

}
   return false;
}


function new_password(){
    let message_new_pass=document.getElementById("message_new_pass");
    message_new_pass.style.display="none";
    message_new_pass.innerHTML="";
    let oldpass=document.getElementById("old_pass").value;
    let newpass=document.getElementById("newpass").value;
    let newpass2=document.getElementById("newpass2").value;
    if (newpass!=newpass2){
        message_new_pass.style.display="block";
        message_new_pass.innerHTML="?????????? ???????????? ???? ??????????????????";
    }
    else{
        $.ajax({
            url: 'update_user_pass.php',
            method: 'post',
            dataType: 'html',
            data: {oldpass:oldpass,newpass:newpass} ,
            success: function(data){
                //alert(data);
                if(data=="0"){
                    message_new_pass.style.display="block";
                    message_new_pass.innerHTML="???? ?????????????? ?????????????? ????????????";
                }
                else{
                    message_new_pass.style.display="block";
                    message_new_pass.innerHTML="???????????? ?????????????? ??????????????";
                }
  
                return false;
                
            }
        });
    }



    return false;
}




