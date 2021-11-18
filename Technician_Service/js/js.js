
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
// autorizationStatus();
load_products_top();




    

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