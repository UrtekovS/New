//loadtovarkorzina();
// let add_all_orders=document.getElementById("add_all_orders");
// add_all_orders.onclick=function(){
//     let message_zacaz=document.getElementById('message_zacaz');
//     let sum2=document.getElementById("all_summ_korzina").value;
//     let maxid=0;
//     $.ajax({
//         url: 'add_all_orders.php',
//         method: 'post',
//         dataType: 'html',
//         data: {sum:sum2,id:id},
//         success: function(data){
//             alert(data);
//             message_zacaz.style.display="block";
//             message_zacaz.innerHTML="Ваша заявка принята!";
         
//              maxid=data;
//             $.ajax({
//                 url: 'add_orders.php',
//                 method: 'post',
//                  dataType: 'html',
//                  data: { maxid:maxid},
//                  success: function(data){
//                      alert(data);
//                      //loadtovarkorzina();
                     
                   
//                  }
//              });  
         
//         }
//     });  


    
// };