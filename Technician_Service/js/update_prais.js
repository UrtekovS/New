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

let id = params["id"];

//update_prais_bd();


//  let status_user_button = 0;
// $.ajax({
//     url: 'autorizationStatus.php',
//     method: 'post',
//     dataType: 'html',
//     data: "",
//     success: function (data) {
//         //alert(data);
//         let mass_data = JSON.parse(data);
//         status_user_button = mass_data["status"];
//         let task = document.getElementById("task");
//         task.value = mass_data["task"];
//     }
// }); 


$.ajax({
    url: 'load_udate_prais_bd.php',
    method: 'post',
    dataType: 'html',
    data: { id: id },
    success: function (data) {
        //alert(data);
        let asc = JSON.parse(data);
        console.log(data);
        let names = document.getElementById("names");
        names.value = asc["name"];
        let prices = document.getElementById("prices");
        prices.value = asc["price"];
        let photos = document.getElementById("photos");
        photos.value = asc["photo"];
        let name_cat = document.getElementById("name_cat");
        name_cat = asc["category_id"];





    }



});

// let submit_update_prais = document.getElementById("submit_update_prais");
// submit_update_prais.onclick = function () {

//     update_prais_bd();
//     document.location.href="admbn_list.php";
//     load_table_prais();


// }
// update_tas_bd();
function update_prais_bd() {
    var names = document.getElementById("names").value;
    var prices = document.getElementById("prices").value;
    var photos = document.getElementById("photos").value;
    var name_cat = document.getElementById("kat").value;

    $.ajax({
        url: 'update_prais_bd.php',
        method: 'post',
        dataType: 'json',
        data: { id: id, names: names, prices: prices, photos: photos, name_cat: name_cat },
        success: function (data) {
            alert(data);
            //load_table_prais();
        }
    });

}
let submit_update_prais = document.getElementById("submit_update_prais");
submit_update_prais.onclick = function () {
    update_prais_bd();
    //load_table_prais();
    document.location.href = "admbn_list.php";
    //load_table_prais();


}
//  var returnn = document.getElementById("return");



