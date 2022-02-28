

$.ajax({
    url: 'get_category.php',
    method: 'post',
    dataType: 'html',
    data: "" ,
    success: function(data){
       // alert(data);
       let s="";
       let mas=JSON.parse(data);
       for (let i=0; i<mas.length; i++){
        s+="<li class='nav-item'>"+
        "<a class='theme-btn brd-rd5' aria-current='page' href='#' "+
        "onclick='load_catgory_id("+mas[i]['id']+")'>"+
        "<span data-feather='home'></span>"+mas[i]['name_categ']+"</a></li>";
       }

       let p=document.getElementById("ul_menu");
       p.innerHTML=s;
      
    }        
    
});

function load_catgory_id(id){
    $.ajax({
        url: 'get_tovar_category.php',
        method: 'post',
        dataType: 'html',
        data: {id:id} ,
        success: function(data){
            //alert(data);
           
            let d=JSON.parse(data);
            let s="";
            for (let i=0; i<d.length;i++){
                s+="<div class='col-md-4 col-sm-6 col-lg-4'>"+
                "<div class='camp-bx'>"+
                  "<div class='camp-thmb'>"+
                    "<a href='#' title='' itemprop='url'><img src='imge/products/"+d[i]['photo']+"' alt='camp-img1.jpg' itemprop='image'></a>"+
                    "<div class='camp-inf'>"+ 
                    "<h5 itemprop='headline'><a class='text-start'>"+d[i]['name']+"</a></h5>"+   
                    "</div>"+            
                  "</div>"+
                  "<div class='prg-wrp'>"+            
                      
                      "<span><i class='fas fa-map-marker-alt theme-clr'></i><p>Стоимость:"+d[i]['price']+"</p></span>"+
                    "<a class='theme-btn brd-rd5' href='product_details.php?id_tovar="+d[i]['id']+"' title='' itemprop='url'>Подробние</a>"+
                  "</div>"+
                "</div>"+
                "</div><!-- /.col-lg-4 -->";

            }
            let load_products=document.getElementById("load_products");
            load_products.innerHTML=s;
        }        
        
    });
}