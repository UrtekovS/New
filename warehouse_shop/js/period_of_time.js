//add_time();
//load_table_zacaz();
function  add_time(){
  

    let start_data= document.getElementById("start_data").value;
    let finish_data=document.getElementById("finish_data").value;

    $.ajax({
        url: 'add_period_of_time.php',
        method: 'post',
        dataType: 'html',
        data: { start_data: start_data ,finish_data:finish_data },
        success: function (data) {
        
                //alert(data);
                let d1 = JSON.parse(data);
      let s="<table class='table' id='task_history'>"+
      "<thead>"+
        "<tr>"+
          "<th scope='col'>Дата заказа</th>"+
          "<th scope='col'>Сумма</th>"+
          "<th scope='col'>Фамилия заявителя</th>"+
          "<th scope='col'>Телефон</th>"+
          "<th scope='col'>E-mail</th>"+
        "</tr>"+
      "</thead>"+
      "<tbody id='tableE'>";

      for (let i = 0; i < d1.length; i++){
        if(d1[i][3]==0){
          s+="<tr>"+
          "<th scope='row'>"+d1[i][1]+"</th>"+
          "<td>"+d1[i][2]+"</td>"+          
          "<td>"+d1[i][5]+"</td>"+
          "<td>"+d1[i][9]+"</td>"+
          "<td>"+d1[i][8]+"</td>"+
          //"<td><button class='btn btn-primary' type='button' id='cnopDl' onclick='delet_task(" + d[i][0] + ");'>Удалить событие</button>" +
        "</tr>";
        }
        else{
          s+="<tr>"+
          "<th scope='row'>"+d1[i][1]+"</th>"+
          "<td>"+d1[i][2]+"</td>"+
          "<td>"+d1[i][5]+"</td>"+
          "<td>"+d1[i][9]+"</td>"+
          "<td>"+d1[i][8]+"</td>"+
          
          //"<td><button class='btn btn-primary' type='button' id='cnopDl' onclick='delet_task(" + d[i][0] + ");'>Удалить событие</button>" +
        "</tr>"; 
       }          


      }
      s+=" </tbody></table>"
      let zacaz_history=document.getElementById('zacaz_history');
      zacaz_history.innerHTML=s;
      
        
      $.ajax({
        url: 'add_period_of_cumm.php',
        method: 'post',
        dataType: 'html',
        data: {start_data: start_data ,finish_data:finish_data},
        success: function (data) {
           let summ= JSON.parse(data);
           //alert(data);
          let all_summa_zayvoc=document.getElementById("all_summa_zayvoc");
          all_summa_zayvoc.value=summ;
          let order_summa_zayvoc=document.getElementById('order_summa_zayvoc');
          order_summa_zayvoc.style.display='none';
          let pere_time=document.getElementById('pere_time');
          pere_time.style.display='none';
          let pere_prais=document.getElementById('pere_prais');
          pere_prais.style.display='none';
          let table_prais=document.getElementById('table_prais');
          table_prais.style.display='none';
        }
        
      });
        }



     });
    

}

function tab_time(){
  if(start_data!="" && finish_data!==""){
    
    start_data.value="";
    finish_data.value="";
    all_summa_zayvoc.value='0';
    let order_summa_zayvoc=document.getElementById('order_summa_zayvoc');
          order_summa_zayvoc.style.display='block';
          //let pere_time=document.getElementById('pere_time');
          pere_time.style.display='block';
          //let pere_prais=document.getElementById('pere_prais');
          pere_prais.style.display='block';
          //let table_prais=document.getElementById('table_prais');
          table_prais.style.display='block';
          let pere_prais=document.getElementById('pere_prais');
          pere_prais.style.display='none';
    load_table_zacaz();
  }
};

//  let Output=document.getElementById("Output");
//  Output.onclose=function(){
//    let start_data= document.getElementById("start_data").value;
//      let finish_data=document.getElementById("finish_data").value;
//    if(start_data!=0 && finish_data!=0){
//      Output.value="Вывод, за промежуток времени";
//      add_time();
//    }
//    else{
//      Output.value="Возврат"
//      load_table();
//    }
//  }