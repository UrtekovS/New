var params = window
    .location
    .search
    .replace('?', '')
    .split('&')
    .reduce(
        function (p, e) {
            var a = e.split('=');
            p[decodeURIComponent(a[0])] = decodeURIComponent(a[1]);
            return p;
        },
        {}
    );
    
let id_tovar = params['id_tovar'];


$.ajax({
    url: 'load_product_details.php',
    method: 'post',
    dataType: 'html',
    data: { id: id_tovar },
    success: function (data) {
        //alert(data);
        let d = JSON.parse(data);
        let s = "";
        if (status_user_button = 1) {
            s = "<div class='col-md-12'>" +
                "<div class='row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative'>" +
                "<div class='col p-4 d-flex flex-column position-static'>" +
                " <a class='mb-0' id='products_id'>" + d['id'] + "</a>" +
                " <h4 class='mb-0'>" + d['name'] + "</h4>" +
                "<div class='mb-1 text-muted'><p class='fs-5'>Стоимость -> " + d['price'] + "</p></div>" +
                
                "<button class='theme-btn brd-rd5' class='fs-4' data-bs-toggle='modal' data-bs-target='#exampleModal2' id='zayvca' onclick='add_tovar_korzina(" + d['id'] + ")'>Отправить заявку</button>"+
                "</div>" +
                "<div class='col-auto d-none d-lg-block'>" +
                "<img class='bd-placeholder-img' width='170' height='100' src='imge/products/" + d['photo'] + "' alt='Generic placeholder image' >" +
                
                "</svg>" +
                "</div></div></div>";
        }
        else {
            s = "<div class='col-md-12'>" +
                "<div class='row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative'>" +
                "<div class='col p-4 d-flex flex-column position-static'>" +
                " <a class='mb-0' id='products_id'>" + d['id'] + "</a>" +
                " <h4 class='mb-0'>" + d['name'] + "</h4>" +
                "<div class='mb-1 text-muted'><p class='fs-5'>Стоимость ->" + d['price'] + "</p></div>" +
                
                "<button class='theme-btn brd-rd5' class='fs-4' data-bs-toggle='modal' data-bs-target='#exampleModal2' id='zayvca' onclick='add_tovar_korzina(" + d['id'] + ")'>Отправить заявку</button>"+
                "</div>" +
                "<div class='col-auto d-none d-lg-block'>" +
                "<img class='bd-placeholder-img' width='170' height='100 src='imge/products/" + d['photo'] + "' alt='Generic placeholder image' >" +
               
                "</svg>" +
                "</div></div></div>";


        }
        tovar = document.getElementById("tovar");
        tovar.innerHTML = s;

    }

});
// первая таблица
function add_tovar_korzina() {
    let price = document.getElementById('price');
  
    
    $.ajax({
        url: 'add_tovar_korzina.php',
        method: 'post',
        dataType: 'html',
        data: { price: price },
        success: function (data) {
            //alert(data);
            if (data != "Добавление задачи успешно завершено!") {
                let zayvca = document.getElementById("zayvca");
                zayvca.style.display = "none";
               let form_registration= document.getElementById("form_registration");
               form_registration.style.display="block";







                // Вторая таблица
                $.ajax({
                    url: 'load_product_details.php',
                    method: 'post',
                    dataType: 'html',
                    data: { id: id_tovar },
                    success: function (data) {
                        //alert(data);
                        let d = JSON.parse(data);
                        let s = "";
                        if (status_user_button = 1) {
                            s = "<div class='col-md-12'>" +
                                "<div class='row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative'>" +
                                "<div class='col p-4 d-flex flex-column position-static'>" +
                                " <a class='mb-0' id='products_id'>" + d['id'] + "</a>" +
                                " <h4 class='mb-0'>" + d['name'] + "</h4>" +
                                "<div class='mb-1 text-muted'><p class='fs-5'> Стоимость ->" + d['price'] + "</p> </div>" +
                                //"<p class='card-text mb-auto'>"+d['description']+"</p>"+
                                "<button class='theme-btn brd-rd5' class='fs-4' data-bs-toggle='modal' data-bs-target='#exampleModal2' id='zayvca' onclick='add_tovar_korzina(" + d['id'] + ")'>Отправить заявку</button>"+

                                "</div>" +
                                "<div class='col-auto d-none d-lg-block'>" +
                                "<img class='bd-placeholder-img' width='170' height='100' src='imge/products/" + d['photo'] + "' alt='Generic placeholder image' >" +
                               
                                "</svg>" +
                                "</div></div></div>";
                        }
                        else {
                            s = "<div class='col-md-12'>" +
                                "<div class='row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative'>" +
                                "<div class='col p-4 d-flex flex-column position-static'>" +
                                " <a class='mb-0' id='products_id'>" + d['id'] + "</a>" +
                                " <h4 class='mb-0'>" + d['name'] + "</h4>" +
                                "<div class='mb-1 text-muted'><p class='s-5'> Стоимость->" + d['price'] + "</p></div>" +
                               
                                "<button class='theme-btn brd-rd5' class='fs-4' data-bs-toggle='modal' data-bs-target='#exampleModal2' id='zayvca' onclick='add_tovar_korzina(" + d['id'] + ")'>Отправить заявку</button>"+
                                "</div>" +
                                "<div class='col-auto d-none d-lg-block'>" +
                                "<img class='bd-placeholder-img' width='170' height='100 src='imge/products/" + d['photo'] + "' alt='Generic placeholder image' >" +
                                
                                "</svg>" +
                                "</div></div></div>";


                        }

                        
                        
                     
                        let last_name = document.getElementById("last_name");
                        last_name.value = "";

                        $.ajax({
                            url: 'id_product_order_bd.php',
                            method: 'post',
                            dataType: 'html',
                            data: { id: id_tovar },
                            success: function (data) {
                                //alert(data);
                                let id_product_order = JSON.parse(data);
                                let z = "";
                                if (data !== 0) {

                                    z +="<div class='sec-tl text-center'>"+
                                        "<h4 itemprop='headline'>Заполните форму <span class='theme-clr'>с точным адресом, для выезда специалиста!</span></h4>"+
                                         "</div>"+
                                        "<p class='text-lift'>Имя</p>" +
                                        "<input type='text' id='last_name' class='form-control' required>" +
                                        "<p class='text-lift'>Телефон</p>" +
                                        "<input type='text' id='phone' class='form-control' value='+7  '>" +
                                        "<p class='text-lift'>Адрес, для выезда специалиста </p>" +
                                        "<input type='text' id='first_name' class='form-control' value='Город     ,ул     ,дм    ,кв    'required>" +
                                        "<p class='text-lift'>Укажите дату и время удобную вам!</p>" +
                                        "<input id='date_of_brith' class='form-control' type='datetime-local' value='2021-00-00T00:00:00' required>" +
                                        "<p class='text-lift'>№Тех.сервис</p>" +
                                        "<input type='text' id='id_product_order' class='form-control' value=" + id_product_order['0'] + " disabled>" +
                                        "</select>" +
                                        "<br>" +
                                        "<input type='submit' class='theme-btn brd-rd5' value='Отправить ииформацию' id='submit_registration'></input>" +
                                        "</div></form></div>";
                                }
                                form_registration = document.getElementById('form_registration');
                                form_registration.innerHTML = z;
                      

                            }

                        });

                    }

                });
            }
        }

    });
}

function registration() {
    var form_not=document.getElementById("form_not");
    var prob=document.getElementById("prob");
    last_name = document.getElementById("last_name").value;
    phone = document.getElementById("phone").value;
    first_name = document.getElementById("first_name").value;
    date_of_brith = document.getElementById("date_of_brith").value;
    id_product_order = document.getElementById('id_product_order').value;
    
    $.ajax({
        url: 'registration_bd.php',
        method: 'post',
        dataType: 'html',
        data: {
            last_name: last_name, phone: phone, first_name: first_name,
            date_of_brith: date_of_brith, id_product_order: id_product_order},
        success: function (data) { 
            //alert(data); 
            if(data == "0Заявка успешно добавлена!"){
                form_registration.style.display="none";
               prob.style.display="block";
               form_not.style.display="none";
             }else{
                form_not.style.display="block";
             }            
             
              
        }         
        
        
    });
    document.getElementById("form_not").value="";
     return false;
}

