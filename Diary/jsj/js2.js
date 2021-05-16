
reviews_bd();
add_reviews();
function add_reviews(){
var message_reviews=document.getElementById("message_reviews");
var message_no_reviews=document.getElementById("message_no_reviews");
 var foto=document.getElementById("foto").value;
var name_inf=document.getElementById("name_inf").value;
var informat=document.getElementById("informat").value;
var email2=document.getElementById("email2").value;


// name_inf=name_inf.trim();
informat=informat.trim();
foto=foto.trim();

if(foto.length==0 || informat.length==0){
    message_reviews.style.display="none";
    message_no_reviews.style.display="dlock";
    message_no_reviews.innerHTML="Необходимо добавить имя и текст отзыва!";
}
else{
    message_no_reviews.style.display="none";
    
    $.ajax({
        url: 'form_rexiews_bd.php',
        method: 'post',
        dataType: 'html',
        data: {name_inf: name_inf, informat:informat, foto:foto, email2:email2 } ,
            
        success: function(data){
            alert(data);
            
            reviews_bd();
         }
    });
    document.getElementById("foto").value="";
    document.getElementById("name_inf").value ="";
    document.getElementById("informat").value="";
    document.getElementById("email2").value="";
    message_reviews.style.display="block";
    message_reviews.innerHTML="Отзыв успешно добавлен!!"
}

}  

function reviews_bd(){
    $.ajax({
		url: 'reviews_bd.php',
		method: 'post',
		dataType: 'html',
		data: "" ,
		success: function(data){
			//alert(data);
            let x=JSON.parse(data);
            let s="";
            for(let i=0; i<x.length; i++){
                s+="<div class='col-lg-4'>"+
                "<img class='rounded-circle' src='img/info_img/"+x[i]["foto"]+"' alt='Generic placeholder image' width='140' height='140'>"+
                "<h6>"+x[i]['name_inf']+"</h6>"+
                "<h6>"+x[i]['informat']+"</h6>"+
                 "<p>"+x[i]['email']+"</p>"+
                "<p><a class='btn btn-secondary' id='ret' href='index.php?id="+x[i]['id']+"' role='button'>Вернуться на главную страницу &raquo;</a></p>"+
              "</div><!-- /.col-lg-4 -->";
           }
        let detalis_nformation=document.getElementById("nformation");
        detalis_nformation.innerHTML=s;
		}
	});
}








// function task_history_load(){
//     $.ajax({
//         url: 'task_history_load.php',
//         method: 'post',
//         dataType: 'html',
//         data: "" ,
//         success: function(data){
//             alert(data);
            
//         }
//     });
// }