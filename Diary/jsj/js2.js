//task_history_loa();
function write_feedback(){
var name_inf=document.getElementById("name_inf").value;
var informat=document.getElementById("informat").value;
var photo=document.getElementById("photo").value;
var message_write_feedback=document.getElementById("message_write_feedback");
//var message_write_feedback2=document.getElementById("message_write_feedback2");//
var mess="";

name_inf=name_inf.trim();
informat=informat.trim();
if(name_inf.length==0 || informat.length==0){
    mess+="<p>Необходимо написать Имя и отзыв!</p>"
}
if(mess.length!==0){
    message_write_feedback.style.display="bloc";
    message_write_feedback.innerHTML=mess;
}
else{
    
    $.ajax({
        url: 'write_feedback_bd.php',
        method: 'post',
        dataType: 'html',
        data: {name_inf: name_inf, informat:informat,
            photo:photo} ,
        success: function(data){
            alert(data);
            message_write_feedback.style.display="bloc";
            message_write_feedback.innerHTML=data;
            if (data=="Ваш отзыв добавлен!"){
                var write_feedback1=document.getElementById("write_feedback1");
                write_feedback1.style.display="none";
            }
            return false;
            
        }
    });

}
   return false;
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