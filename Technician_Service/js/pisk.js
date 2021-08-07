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
                s+="<div class='col-lg-4'>"+
                "<img class='rounded-circle' src='imge/products/"+d[i]['photo']+"' alt='Generic placeholder image' width='140' height='140'>"+
                "<h2>"+d[i]['name']+"</h2>"+
                "<h4>Стоимость:"+d[i]['price']+"</h4>"+
                "<p><a class='btn btn-secondary' href='product_details.php?id_tovar="+d[i]['id']+"' role='button' >Подробнее &raquo;</a></p>"+
            "</div><!-- /.col-lg-4 -->";
            }
            let load_products=document.getElementById("load_products");
            load_products.innerHTML=s;

      
      
        }
    }); 
    
}