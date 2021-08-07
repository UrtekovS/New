load_table_zacaz();

function load_table_zacaz() {

  $.ajax({
    url: 'load_table_zacaz.php',
    method: 'post',
    dataType: 'html',
    data: "",
    success: function (data) {
      //alert(data);
      let d = JSON.parse(data);
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

      for (let i = 0; i < d.length; i++){
        if(d[i][3]==0){
          s+="<tr>"+
          "<th scope='row'>"+d[i][1]+"</th>"+
          "<td>"+d[i][2]+"</td>"+          
          "<td>"+d[i][5]+"</td>"+
          "<td>"+d[i][9]+"</td>"+
          "<td>"+d[i][8]+"</td>"+
          "<td><button class='btn btn-primary' type='button' id='true' onclick='delet_task(" + d[i][0] + ");'>Удалить продажу</button>" +
        "</tr>";
        }
        else{
          s+="<tr>"+
          "<th scope='row'>"+d[i][1]+"</th>"+
          "<td>"+d[i][2]+"</td>"+
          "<td>"+d[i][5]+"</td>"+
          "<td>"+d[i][9]+"</td>"+
          "<td>"+d[i][8]+"</td>"+
          
          "<td><button class='btn btn-primary' type='button' id='cnopDl' onclick='delet_task(" + d[i][0] + ");'>Удалить продажу</button>" +
        "</tr>";
        }
      }
      s+=" </tbody></table>"
      let zacaz_history=document.getElementById('zacaz_history');
      zacaz_history.innerHTML=s;

      $.ajax({
        url: 'add_period_cumm.php',
        method: 'post',
        dataType: 'html',
        data:"",
        success: function (data) {
           let summ= JSON.parse(data);
           //alert(data);
          let order_summa_zayvoc=document.getElementById("order_summa_zayvoc");
          order_summa_zayvoc.value=summ;
        }
        
      });
      
    }
  });

}


function delet_task(id) {
  $.ajax({
    url: 'delete_tasck.php',
    method: 'post',
    dataType: 'html',
    data: { id: id },
    success: function (data) {
      //alert(data);
      load_table_zacaz();


    }
  });
}





      








