autorizationStatus();
load_table();

function load_table(){


    $.ajax({
        url: 'load_table.php',
        method: 'post',
        dataType: 'html',
        data:"" ,
        success: function(data){
            alert(data);
            let d=JSON.parse(data);

            let s="<table class='table'>"+
              "<thead>"+
                "<tr>"+
                  "<th scope='col'>№</th>"+
                  "<th scope='col'>задача</th>"+
                  "<th scope='col'>дата и время</th>"+
                  "<th scope='col'>выполнено/нет</th>"+
                  "<th scope='col'>категория</th>"+
                  "<th scope='col'>кнопки действия</th>"+
                "</tr>"+
              "</thead>"+
              "<tbody>";
            for(let i=0; i<d.length; i++){
              s+="<tr>"+
                "<th scope='row'>"+d[i][0]+"</th>"+
              "<td>"+d[i][4]+"</td>"+
              "<td>"+d[i][5]+"</td>"+
              "<td><input type='checkbox' id='inlineCheckbox1' value='option1'></td>"+
                "<td>"+d[i][8]+"</td>"+
                "<td><button class='btn btn-primary' type='button' id='cnopD'>Добавить событие</button>"+
                    "<button class='btn btn-primary' type='button' id='cnopDl'>Удалить событие</button>"+
                "</td>"+
             "</tr>";
                    
                 
            }
            s+="</tbody> </table>"
            let task_history=document.getElementById("task_history");
            task_history.innerHTML=s;
            
            
        }
    });


}