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
let status_user_button=0;
$.ajax({
    url: 'autorizationStatus.php',
    method: 'post',
    dataType: 'html',
    data: "" ,
    success: function(data){
    //	alert(data);        
        let mass_data=JSON.parse(data);
        status_user_button=mass_data['status'];        
    }
});

$.ajax({
    url: 'load_product_details.php',
    method: 'post',
    dataType: 'html',
    data: {id:id_tovar} ,
    success: function(data){
        //alert(data);
        let d=JSON.parse(data);
        let s="";
        if (status_user_button==1){
            s="<div class='col-md-12'>"+
        "<div class='row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative'>"+
          "<div class='col p-4 d-flex flex-column position-static'>"+
           
           " <h4 class='mb-0'>"+d['name']+"</h4>"+
            "<div class='mb-1 text-muted'>"+d['price']+" </div>"+
            //"<p class='card-text mb-auto'>"+d['description']+"</p>"+
            "<button class='btn btn-secondary' id='zayvca' onclick='add_tovar_korzina("+d['id']+")'>В заявку</button>"+
            
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
               
               " <h4 class='mb-0'>"+d['name']+"</h4>"+
                "<div class='mb-1 text-muted'>"+d['price']+"</div>"+
                //"<p class='card-text mb-auto'>"+d['description']+"</p>"+
                //"<button class='btn btn-secondary'id='zayvca' onclick='add_tovar_korzina("+d['id']+")'>В заявку</button>"+
              "</div>"+
              "<div class='col-auto d-none d-lg-block'>"+
              "<img class='bd-placeholder-img' width='170' height='100 src='imge/products/"+d['photo']+"' alt='Generic placeholder image' >"+
            //    " <svg class='bd-placeholder-img' width='20' height='25' xmlns='http://www.w3.org/2000/svg' role='img' "+
            //    "aria-label='Placeholder: Thumbnail' preserveAspectRatio='xMidYMid slice' focusable='false'><title>Placeholder</title><rect width='100%' height='100%' fill='#55595c'></rect><text x='50%' y='50%' fill='#eceeef' dy='.3em'>Thumbnail</text>"+
               "</svg>"+
               "</div></div></div>";
              

              
        }
        
           let tovar=document.getElementById("tovar");
           tovar.innerHTML=s;
      
    }        
    
});

function add_tovar_korzina(id){
   let message_tovar=document.getElementById("message_tovar");
   message_tovar.style.display="none";
    $.ajax({
        url: 'add_tovar_korzina.php',
        method: 'post',
        dataType: 'html',
        data: {id:id} ,
        success: function(data){
            //alert(data);
           
           let zayvca=document.getElementById("zayvca");
           zayvca.style.display="none";
           message_tovar.style.display="block";
           message_tovar.innerHTML="Ваша заявка отправленна в корзину!!"
        }        
        
    });
}