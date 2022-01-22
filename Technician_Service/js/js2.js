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

let id_tovar= params['id_tovar'];
// let status_user_button=0;
// $.ajax({
//     url: 'autorizationStatus.php',
//     method: 'post',
//     dataType: 'html',
//     data: "" ,
//     success: function(data){
//     	// alert(data);        
//         let mass_data=JSON.parse(data);
//         status_user_button=mass_data['status']; 
       
              
//     }
// });

$.ajax({
    url: 'load_product_details.php',
    method: 'post',
    dataType: 'html',
    data: {id:id_tovar} ,
    success: function(data){
        //alert(data);
        let d=JSON.parse(data);
        let s="";
        if (status_user_button=1){
            s="<div class='col-md-12'>"+
        "<div class='row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative'>"+
          "<div class='col p-4 d-flex flex-column position-static'>"+
          " <a class='mb-0' id='products_id'>"+d['id']+"</a>"+
           " <h4 class='mb-0'>"+d['name']+"</h4>"+
            "<div class='mb-1 text-muted'><p class='fs-5'>Стоимость -> "+d['price']+"</p></div>"+
            //"<p class='card-text mb-auto'>"+d['description']+"</p>"+
            "<button class='btn btn-secondary' class='fs-4' id='zayvca' onclick='add_tovar_korzina("+d['id']+")'>Отправить заявку</button>"+
            
          "</div>"+
          "<div class='col-auto d-none d-lg-block'>"+
          "<img class='bd-placeholder-img' width='170' height='100' src='imge/products/"+d['photo']+"' alt='Generic placeholder image' >"+
        //    " <svg class='bd-placeholder-img' width='20' height='25' xmlns='http://www.w3.org/2000/svg' role='img' "+
        //    "aria-label='Placeholder: Thumbnail' preserveAspectRatio='xMidYMid slice' focusable='false'><title>Placeholder</title><rect width='100%' height='100%' fill='#55595c'></rect><text x='50%' y='50%' fill='#eceeef' dy='.3em'>Thumbnail</text>"+
           "</svg>"+
           "</div></div></div>";
        }
        else{
            s="<div class='col-md-12'>"+
            "<div class='row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative'>"+
              "<div class='col p-4 d-flex flex-column position-static'>"+
              " <a class='mb-0' id='products_id'>"+d['id']+"</a>"+
               " <h4 class='mb-0'>"+d['name']+"</h4>"+
                "<div class='mb-1 text-muted'><p class='fs-5'>Стоимость ->"+d['price']+"</p></div>"+
                //"<p class='card-text mb-auto'>"+d['description']+"</p>"+
                "<button class='btn btn-secondary'class='fs-4' id='zayvca' onclick='add_tovar_korzina("+d['id']+")'>Отправить заявку</button>"+
              "</div>"+
              "<div class='col-auto d-none d-lg-block'>"+
              "<img class='bd-placeholder-img' width='170' height='100 src='imge/products/"+d['photo']+"' alt='Generic placeholder image' >"+
            //    " <svg class='bd-placeholder-img' width='20' height='25' xmlns='http://www.w3.org/2000/svg' role='img' "+
            //    "aria-label='Placeholder: Thumbnail' preserveAspectRatio='xMidYMid slice' focusable='false'><title>Placeholder</title><rect width='100%' height='100%' fill='#55595c'></rect><text x='50%' y='50%' fill='#eceeef' dy='.3em'>Thumbnail</text>"+
               "</svg>"+
               "</div></div></div>";            

              
        }
        tovar=document.getElementById("tovar");
        tovar.innerHTML=s;
      
    }        
    
});
// первая таблица
function add_tovar_korzina(){
    let price=document.getElementById('price');
    // let labe=document.getElementById('labe');
   let message_tovar=document.getElementById("message_tovar");
   message_tovar.style.display="none";
   let show_modal_registration=document.getElementById("show_modal_registration");
   show_modal_registration.style.display="nome";
    $.ajax({
        url: 'add_tovar_korzina.php',
        method: 'post',
        dataType: 'html',
        data: {price:price} ,
        success: function(data){
            //alert(data);
           if(data!="Доавление задачи успешно завершено!"){
           let zayvca=document.getElementById("zayvca");
           zayvca.style.display="none";
           show_modal_registration.style.display="block";
           message_tovar.style.display="block";
           message_tovar.innerHTML="Заполните форму, с точным адресом!!"
        //   labe.style.display="block";
        //   labe.innerHTML="Форма для адреса";
        
    

    
       


// Вторая таблица
$.ajax({
    url: 'load_product_details.php',
    method: 'post',
    dataType: 'html',
    data: {id:id_tovar} ,
    success: function(data){
        //alert(data);
        let d=JSON.parse(data);
        let s="";
        if (status_user_button=1){
            s="<div class='col-md-12'>"+
        "<div class='row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative'>"+
          "<div class='col p-4 d-flex flex-column position-static'>"+
          " <a class='mb-0' id='products_id'>"+d['id']+"</a>"+
           " <h4 class='mb-0'>"+d['name']+"</h4>"+
            "<div class='mb-1 text-muted'><p class='fs-5'> Стоимость ->"+d['price']+"</p> </div>"+
            //"<p class='card-text mb-auto'>"+d['description']+"</p>"+
            "<button class='btn btn-secondary' class='fs-4' id='zayvca' onclick='add_tovar_korzina("+d['id']+")'>Отправить заявку</button>"+
            
          "</div>"+
          "<div class='col-auto d-none d-lg-block'>"+
          "<img class='bd-placeholder-img' width='170' height='100' src='imge/products/"+d['photo']+"' alt='Generic placeholder image' >"+
        //    " <svg class='bd-placeholder-img' width='20' height='25' xmlns='http://www.w3.org/2000/svg' role='img' "+
        //    "aria-label='Placeholder: Thumbnail' preserveAspectRatio='xMidYMid slice' focusable='false'><title>Placeholder</title><rect width='100%' height='100%' fill='#55595c'></rect><text x='50%' y='50%' fill='#eceeef' dy='.3em'>Thumbnail</text>"+
           "</svg>"+
           "</div></div></div>";
        }
        else{
            s="<div class='col-md-12'>"+
            "<div class='row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative'>"+
              "<div class='col p-4 d-flex flex-column position-static'>"+
              " <a class='mb-0' id='products_id'>"+d['id']+"</a>"+
               " <h4 class='mb-0'>"+d['name']+"</h4>"+
                "<div class='mb-1 text-muted'><p class='s-5'> Стоимость->"+d['price']+"</p></div>"+
                //"<p class='card-text mb-auto'>"+d['description']+"</p>"+
                "<button class='btn btn-secondary' class='fs-4' id='zayvca' onclick='add_tovar_korzina("+d['id']+")'>Отправить заявку</button>"+
              "</div>"+
              "<div class='col-auto d-none d-lg-block'>"+
              "<img class='bd-placeholder-img' width='170' height='100 src='imge/products/"+d['photo']+"' alt='Generic placeholder image' >"+
            //    " <svg class='bd-placeholder-img' width='20' height='25' xmlns='http://www.w3.org/2000/svg' role='img' "+
            //    "aria-label='Placeholder: Thumbnail' preserveAspectRatio='xMidYMid slice' focusable='false'><title>Placeholder</title><rect width='100%' height='100%' fill='#55595c'></rect><text x='50%' y='50%' fill='#eceeef' dy='.3em'>Thumbnail</text>"+
               "</svg>"+
               "</div></div></div>";            

              
        }
        
        let form_registration=document.getElementById("form_registration");
        form_registration.style.display="block";
        let message_registration2=document.getElementById("message_registration2");
        message_registration2.style.display="none";
        let last_name=document.getElementById("last_name");
        last_name.value="";

           $.ajax({
            url: 'id_product_order_bd.php',
            method: 'post',
            dataType: 'html',
            data: {id:id_tovar} ,
            success: function(data){
                //alert(data);
                let id_product_order=JSON.parse(data);
                    let z="";
                    if(data!==0){

                
                        z+= "<label class='form-check-label'>Имя</label>"+
                     "<input type='text' id='last_name' class='form-control' required>"+
                     "<label class='form-check-label'>Телефон</label>"+
                     "<input type='text' id='phone' class='form-control' required value='+7  '>"+
                     "<label class='form-check-label'>Адрес</label>"+
                     "<input type='text' id='first_name' class='form-control' value='Город     ,ул     ,дм    ,кв    '>"+                
                     "<label class='form-check-label'>Укажите дату и врея удобное вам</label>"+
                     "<input id='date_of_brith' class='form-control' type='datetime-local' value='2021-00-00T00:00:00' required>"+
                     "<label class='form-check-label'>№ Тех.- сервис</label>"+
                   "<input type='text' id='id_product_order' class='form-control' value="+id_product_order['0']+" disabled>"+
                    "</select>"+
                    "<br>"+
                    "<input type='submit' class='btn btn-primary' value='Отправить ииформацию' id='submit_registration'></input>"+
                    "</div></form></div>";
                    }
                form_registration=document.getElementById('form_registration');
                form_registration.innerHTML=z;
                // $.ajax({
                //     url: 'id_general_order_bd.php',
                //     method: 'post',
                //     dataType: 'html',
                //     data:"" ,
                //     success: function(data){
                //         //alert(data);
                //         let id_general_order=JSON.parse(data);
                //         let v="";
                //         if(data!==""){
            
                //             v+="<label class='form-check-label'>Имя</label>"+
                //             "<input type='text' id='last_name' class='form-control' required>"+
                //             "<label class='form-check-label'>Телефон</label>"+
                //             "<input type='text' id='phone' class='form-control' required>"+
                //             "<label class='form-check-label'>Адрес</label>"+
                //             "<input type='text' id='first_name' class='form-control' value='Город ...,ул...,дм...,кв...'>"+                
                //             "<label class='form-check-label'>Укажите дату и врея удобное вам</label>"+
                //             "<input id='date_of_brith' class='form-control' type='datetime-local' value='2021-00-00T00:00:00' required>"+
                //             "<label class='form-check-label'>№ код заявки</label>"+
                //             "<input type='text' id='id_general_order' class='form-control' value="+id_general_order['0']+" disabled>"+
                //             "<label class='form-check-label'>№ Тех.- сервис</label>"+
                //              "<input type='text' id='id_product_order' class='form-control' value="+id_product_order['0']+" disabled>"+
                //             "</select>"+
                //             "<br>"+
                //             "<input type='submit' class='btn btn-primary' value='Отправить ииформацию' id='submit_registration'></input>"+
                //             "</div></form></div>";
                               
                            
                //         }
                //         form_registration=document.getElementById('form_registration');
                //         form_registration.innerHTML=v; 
                        
                //     }
                //     });
                    
            }        
            
        });
      
    }        
    
});
           }
}        
        
});
}

function registration(){     
    
    last_name=document.getElementById("last_name").value;
     phone=document.getElementById("phone").value;
    first_name=document.getElementById("first_name").value;
    date_of_brith=document.getElementById("date_of_brith").value; 
     id_product_order=document.getElementById('id_product_order').value;
     
    message_registration2=document.getElementById("message_registration2");   
   

    $.ajax({
        url: 'registration_bd.php',
        method: 'post',
        dataType: 'html',
        data: {last_name: last_name, phone:phone, first_name:first_name,
        date_of_brith:date_of_brith, id_product_order:id_product_order} ,
        success: function(data){
            //alert(data);
        
            
            
            if (data=="Пользователь успешно зарегистрирован"){
                message_tovar.style.display="block";
                message_tovar.innerHTML="Ваша заявка принята!!"
            }
            return false;
            
        }
    });
    
}