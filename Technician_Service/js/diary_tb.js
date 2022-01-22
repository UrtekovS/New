
load_table_zacaz();

function load_table_zacaz() {
  let pere_time=document.getElementById('pere_time');
  pere_time.style.display="block";
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
          "<th scope='col'>Имя заказчика</th>"+
          "<th scope='col'>Сумма</th>"+
          "<th scope='col'>Наименование заявки</th>"+
          "<th scope='col'>Адрес для выезда</th>"+
          "<th scope='col'>Телефон</th>"+
          "<th scope='col'>Дата и время удобное заказчику</th>"+
          "<th scope='col'>Дата заявки</th>"+
        "</tr>"+
      "</thead>"+
      "<tbody id='tableE'>";

      for (let i = 0; i < d.length; i++){
        if(d[i][3]==0){
          s+="<tr>"+
          "<th scope='row'>"+d[i][1]+"</th>"+
          "<td>"+d[i][9]+"</td>"+          
          "<td>"+d[i][8]+"</td>"+
          "<td>"+d[i][2]+"</td>"+
          "<td>"+d[i][3]+"</td>"+
          "<td>"+d[i][4]+"</td>"+
           "<td>"+d[i][5]+"</td>"+
          "<td><button class='imary' type='button' id='true' onclick='delet_task(" + d[i][0] + ");'>Удалить заявку</button>" +
        "</tr>";
        }
        else{
          s+="<tr>"+
          "<th scope='row'>"+d[i][1]+"</th>"+
          "<td>"+d[i][9]+"</td>"+          
          "<td>"+d[i][8]+"</td>"+
          "<td>"+d[i][2]+"</td>"+
          "<td>"+d[i][3]+"</td>"+
          "<td>"+d[i][4]+"</td>"+
          "<td>"+d[i][5]+"</td>"+
          "<td><button class='imary' type='button' id='cnopDl' onclick='delet_task(" + d[i][0] + ");'>Удалить заявку</button>" +
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
          
          let order_summa_zayvoc=document.getElementById("all_summa_zayvoc");
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

function to_excel() {
    $(document).ready(function () {
      $("#task_history").table2excel({
        filename: "new.xls",
      });
    });
  }




      








