var params = window
    .location
    .search
    .replace('?', '')
    .split('&')
    .reduce(
        function (p, e) {
            var a = e.split('=');
            p[decodeURIComponent(a[0])] = decodeURIComponent(a[1]);
            return p;
        },
        {}
    );


// заполнение формы данными из строки таблицы diary
let id = params["id"];

 let status_user_button = 0;
$.ajax({
    url: 'autorizationStatus.php',
    method: 'post',
    dataType: 'html',
    data: "",
    success: function (data) {
        //alert(data);
        let mass_data = JSON.parse(data);
        status_user_button = mass_data["status"];
        let task = document.getElementById("task");
        task.value = mass_data["task"];
    }
}); 


    $.ajax({
        url: 'load_update_task_bd.php',
        method: 'post',
        dataType: 'html',
        data: {id: id},
        success: function (data) {
            //alert(data);
             let d=JSON.parse(data);
 
             let task=document.getElementById("task");
             task.value=d["task"];
              let my_data=document.getElementById("my_data");
              var dateVal = new Date(d["my_data"]);
             // my_data.value=d["my_data"];
             var day = dateVal.getDate().toString().padStart(2, "0");
             var month = (1 + dateVal.getMonth()).toString().padStart(2, "0");
             var hour = dateVal.getHours().toString().padStart(2, "0");
             var minute = dateVal.getMinutes().toString().padStart(2, "0");
             var sec = dateVal.getSeconds().toString().padStart(2, "0");
             var ms = dateVal.getMilliseconds().toString().padStart(3, "0");
             var inputDate = dateVal.getFullYear() + "-" + (month) + "-" + (day) + "T" + (hour) + ":" + (minute) + ":" + (sec) + "." + (ms);
             my_data.value=inputDate;
             let name_categ=document.getElementById("kat");
             name_categ.value=d["id_categ"]; 

        }



    });
        function update_tas(){
            $.ajax({
                url: 'update_tas.php',
                method: 'post',
                dataType: 'html',
                data: {id:id, task:task, my_data:id_categ},
                success: function (data) {
                    //alert(data);
                    let mass_data = JSON.parse(data);
                    status_user_button = mass_data["status"];
                    let task = document.getElementById("task");
                    task.value = mass_data["task"];
                }
            });     

        };
  let submit_update_task=document.getElementById("submit_update_task");
  submit_update_task.onclick=function(){
     task.disable=!(task.disable); 
     my_data.disable=!(my_data.disable);
     id_categ.disable=!(id_categ.disable);
     load_update_task()
  }

