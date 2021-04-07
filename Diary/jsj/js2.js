task_history_loa();

function task_history_load(){
    $.ajax({
        url: 'task_history_load.php',
        method: 'post',
        dataType: 'html',
        data: "" ,
        success: function(data){
            alert(data);
            
        }
    });
}