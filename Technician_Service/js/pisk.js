function poisck(){
   var category_id=document.getElementById("category_id")
    var poisk=document.getElementById("poisk").value;
    $.ajax({
        url: 'poisk_bd.php',
        method: 'post',
        dataType: 'html',
        data: {poisk:poisk},
        success: function (data) {
            //alert(data);
            let d = JSON.parse(data);
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
                    "<a class='theme-btn brd-rd5'   btn-success' href='product_details.php?id_tovar="+d[i]['id']+"' title='' itemprop='url'>Подробние</a>"+
                  "</div>"+
                "</div>"+
                "</div><!-- /.col-lg-4 -->";
            }
            let load_products=document.getElementById("load_products");
            load_products.innerHTML=s;

      
      
        }
    }); 
    
}