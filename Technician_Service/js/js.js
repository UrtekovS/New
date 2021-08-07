
var params = window
    .location
    .search
    .replace('?','')
    .split('&')
    .reduce(
        function(p,e){
            var a = e.split('=');
            p[ decodeURIComponent(a[0])] = decodeURIComponent(a[1]);
            return p;
        },
        {}
    );

let id_product_order= params['id'];
autorizationStatus();
load_products_top();

// let id_tovar= params['id_tovar'];
// let status_user_button=0;
// $.ajax({
//     url: 'autorizationStatus.php',
//     method: 'post',
//     dataType: 'html',
//     data: "" ,
//     success: function(data){
//     //	alert(data);        
//         let mass_data=JSON.parse(data);
//         status_user_button=mass_data['status'];        
//     }
// });



    

// /*

// */


//    return false;
   
// }


// let sub_autorization=document.getElementById("sub_autorization");
// sub_autorization.onclick=function(){
//     let login=document.getElementById("login").value;
//     let pass=document.getElementById("pass").value;
//     var admin=document.getElementById("admin");
//     admin.style.display="block";
//     //class="btn-close"
//     $.ajax({
// 		url: 'autorization_bd.php',
// 		method: 'post',
// 		dataType: 'html',
// 		data: {login: login, pass:pass} ,
// 		success: function(data){
// 			//alert(data);
//             let mass_data=JSON.parse(data);
//             let message_autorization=document.getElementById("message_autorization");
//             message_autorization.style.display="block";
//             message_autorization.innerHTML=mass_data['mess'];

//             if (mass_data['status']==0 || mass_data['status']==1){
//                 let authorized=document.getElementById("authorized");
//                 let unauthorized=document.getElementById("unauthorized");
//                 authorized.style.display="block";
//                 unauthorized.style.display="blok";
//                 let login_user=document.getElementById("login_user");
//                 login_user.innerHTML=mass_data['login'];
//                 $(".modal").modal("hide");
//             }
//             if(mass_data['login']==0 || mass_data['login']==0){
//                 admin.style.display="block";
//             }else{
//                 form_registration.style.display="none";
//             }
// 		}
// 	});
// };


function autorizationStatus(){
    $.ajax({
		url: 'autorizationStatus.php',
		method: 'post',
		dataType: 'html',
		data: "" ,
		success: function(data){
		//	alert(data);
            
            let mass_data=JSON.parse(data);
            if (mass_data['status']==0 || mass_data['status']==1){
                let authorized=document.getElementById("authorized");
                let unauthorized=document.getElementById("unauthorized");
                authorized.style.display="block";
                unauthorized.style.display="blok";
                let login_user=document.getElementById("login_user");
                login_user.innerHTML=mass_data['login'];
            }
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
        authorized.style.display="blok";
        unauthorized.style.display="block";
		}
	});

};


function load_products_top(){
    $.ajax({
        url: 'load_products_top.php',
        method: 'post',
        dataType: 'html',
        data: "" ,
        success: function(data){
            //alert(data);
            let d=JSON.parse(data);

            let s="";
            for (let i=0; i<d.length;i++){
                s+="<div class='col-lg-4'>"+
                "<img class='rounded-circle' src='imge/products/"+d[i]['photo']+"' alt='Generic placeholder image' width='140' height='140'>"+
                "<h3>"+d[i]['name']+"</h3>"+
               // "<p>Стоимость:"+d[i]['price']+"</p>"+
                "<p><a class='btn btn-secondary' href='product_details.php?id_tovar="+d[i]['id']+"' role='button' >Подробнее &raquo;</a></p>"+
            "</div><!-- /.col-lg-4 -->";
            }
            let load_products=document.getElementById("load_products");
            load_products.innerHTML=s;


           
        }        
        
    });

}



let poisk_form=document.getElementById("poisk_form");
poisk_form.onclick=function(){
    let poisk_data =document.getElementById("poisk_data").value;
    document.location.href = "poisk.php?dat="+poisk_data;
    //document.location.replace("poisk.php?dat="+poisk_data);
};