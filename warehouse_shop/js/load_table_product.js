//table_prais();
function table_prais() {
   let zacaz_history=document.getElementById('zacaz_history');
   zacaz_history.style.display='none';
   let order_summa_zayvoc=document.getElementById('order_summa_zayvoc');
   order_summa_zayvoc.style.display='none';
   let pere_time=document.getElementById('pere_time');
   pere_time.style.display='none';
    let pere_prais=document.getElementById('pere_prais');
    pere_prais.style.display='block';

    $.ajax({
      url: 'load_table_product.php',
      method: 'post',
      dataType: 'html',
      data: "",
      success: function (data) {
        //alert(data);
        let d = JSON.parse(data);
        let s = "<table class='table' id='task_history'>" +
          "<thead>" +
          "<tr>" +
          "<th scope='col'>№Товара</th>" +
          "<th scope='col'>Товар</th>" +
          "<th scope='col'>стоимость</th>" +
          "<th scope='col'>фото</th>" +
          "<th scope='col'>категория</th>" +
          "<th scope='col'>единица измерения</th>" +
          "</tr>" +
          "</thead>" +
          "<tbody id='tableE'>";
        for (let i = 0; i < d.length; i++) {
          if (d[i][4] == 0) {
            s += "<tr>" +
              "<th scope='row'>" + d[i][0] + "</th>" +
              "<td>" + d[i][1] + "</td>" +
              "<td>" + d[i][2] + "</td>" +
              //"<td><input type='checkbox' id='inlineCheckbox1' value='option1' disabled><br></td>" +
              "<td>" + d[i][3] + "</td>" +
              "<td>" + d[i][4] + "</td>" +
              "<td>" + d[i][5] + "</td>" +
              "<td><button class='btn btn-primary' type='button' id='cnopDl' onclick='delet_task(" + d[i][0] + ");'>Удалить</button>" +
              "<a href='update_task_data.php?id=" + d[i][0] + "' class='btn btn-primary' type='button' id='update' >Редактировать</button>" +
              "</td>" +
              "</tr>";
          }
          else {
            s += "<tr>" +
              "<th scope='row'>" + d[i][0] + "</th>" +
              "<td>" + d[i][1] + "</td>" +
              "<td>" + d[i][2] + "</td>" +
              //"<td><input type='checkbox' id='inlineCheckbox1' value='option1' checked disabled><br></td>" +
              "<td>" + d[i][3] + "</td>" +
              "<td>" + d[i][4] + "</td>" +
              "<td>" + d[i][5] + "</td>" +
              "<td><button class='btn btn-primary' type='button' id='cnopDl' onclick='delet_task(" + d[i][0] + ");'>Удалить</button>" +
              "<a href='update_task_data.php?id=" + d[i][0] + "' class='btn btn-primary' type='button' id='update' >Редактировать</button>" +
              "</td>" +
              "</tr>";
          }
  
        }
        s += "</tbody> </table>"
        let history_table = document.getElementById("table_prais");
        history_table.innerHTML = s;
  
  
      }
    });
  
  }

  function Load_categiry_form_add() {
    let select = "";
    $.ajax({
      url: 'Load_categiry_bd.php',
      method: 'post',
      dataType: 'html',
      data: "",
      success: function (data) {
        alert(data);
        let d = JSON.parse(data);
        select = "<select class='form-select' id='kat'>";
        /*<select>
        <option value="1">mbmnn</option>
        <option value="2">mbmnn</option>
        <option value="3">mbmnn</option>
        </select>*/
  
        for (let i = 0; i < d.length; i++) {
          select += "<option value='" + d[i][0] + "'>" + d[i][1] + "</option>";
        }
  
  
        select += "</select>";
  
        let select_status_id = document.getElementById("select_status_id");
        select_status_id.innerHTML = select;
      }
    });
  
  }
  
  function Category(id_categ, id_user) {
    let select = "";
    $.ajax({
      url: 'Category_bd.php',
      method: 'post',
      dataType: 'html',
      data: "",
      success: function (data) {
        //alert(data);
        let d = JSON.parse(data);
        // let select="<select id='my_select>";
        /*<select>
        <option value="1">mbmnn</option>
        <option value="2">mbmnn</option>
        <option value="3">mbmnn</option>
        </select>*/
  
        // for(let i=0; i<d.length; i++){
        //   if(d[i][0]==id_categ){
        //     select+="<option value='"+d[i][0]+"'>"+d[i][1]+"</option>"}
        //     else{
        //       select+="<option value='"+d[i][0]+"'>"+d[i][1]+"</option>";
        //     }
        //    } 
        //    select+="</select>"+
        //    "<button onclick='save_status("+id_ever+")'>Сохранить</button>";
        //    let select_status_id=document.getElementById("select_status_id");
        //    select_status_id.innerHTML=select;
      }
    });
  
  }

    
    function add_task() {
      var message_add_taskc = document.getElementById("message_add_taskc");
      //var id=document.getElementById('id');
      var name=document.getElementById('name');
      var price=document.getElementById('price');
      var photo=document.getElementById('photo');
      var category_id=document.getElementById('kat');
      var ed_tov=document.getElementById('ed_tov');
      if ( name== 0 || price == 0) {
        message_add_taskc.style.display = "none";
        message_add_notask.style.display = "block";
        message_add_notask.innerHTML = "Добавте товар и цену, категорию!";
      }
      else {
        //message_add_notask.style.display = "none";
    
        $.ajax({
          url: 'add_task.php',
          method: 'post',
          dataType: 'html',
          data: { name: name, price: price, photo: photo,category_id:category_id, ed_tov:ed_tov},
          success: function (data) {
            //alert(data);
            table_prais();
          }
        });
        document.getElementById("name").value = "";
        document.getElementById("price").value = "";
        // document.getElementById("photo").value = "";
        document.getElementById("kat").value = "";
        document.getElementById('ed_tov').value="";
    
        message_add_taskc.style.display = "block";
        message_add_taskc.innerHTML = "Товар успешно добавлен!";
    
      }
    
    }
    
    