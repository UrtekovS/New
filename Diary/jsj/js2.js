reviews_bd();
//add_reviews();
function reviews_bd() {

  $.ajax({
    url: 'reviews_bd.php',
    method: 'post',
    dataType: 'html',
    data: "",
    success: function (data) {
      //alert(data);
      var z = JSON.parse(data);
      var s = "";
      for (var i = 0; i < z.length; i++) {        
          s+="<div class='col'>"+
            "<svg class='bd-placeholder-img card-img-top' width='1%' height='1%' xmlns='http://www.w3.org/2000/svg' aria-label=' preserveAspectRatio='xMidYMid slice role='img'><img src='img/info_img/" + z[i]['img'] + "'></title><rect width='1%' height='1%' fill='#55595c'></rect></svg>"+

              "<div class='card-body'>"+
              "<h3 class='card-text'>" + z[i]['name_inf'] + "</h3>"+
              "</div>"+
              "<div class='card-body'>"+
              "<h5 class='card-text'>" + z[i]['informat'] + "</h5>"+
              "</div>"+
              "<div class='card-body'>"+
              "<p class='card-text'>" + z[i]['email'] + "</p>"+
              "</div>"+

              "<div class='d-flex justify-content-between align-items-center'>"+
                "<div class='btn-group'>"+
                  "<button class='btn btn-primary' type='button' id='del_revi' onclick='reviews_delet(" + z[i][0] + ");'>Удалить отзыв</button>"+
                  "<p><a class='btn btn-secondary' id='ret' href='index.php' role='button'>Вернуться на главную страницу &raquo;</a></p>"+
                "</div>"+                 
              "</div>"+             
           "</div>"
          "</div>";
        }
      let detalis_nformation = document.getElementById("teviews");
      detalis_nformation.innerHTML = s;

    }
  });
}

function add_reviews() {
  var message_reviews = document.getElementById("message_reviews");
  var message_no_reviews = document.getElementById("message_no_reviews");
  var foto = document.getElementById("foto").value;
  var name_inf = document.getElementById("name_inf").value;
  var informat = document.getElementById("informat").value;
  var email2 = document.getElementById("email2").value;


  // name_inf=name_inf.trim();
  informat = informat.trim();
  //urtec_img = urtec_img.trim();

  if (foto.length == 0 || informat.length == 0) {
    message_reviews.style.display = "none";
    message_no_reviews.style.display = "block";
    message_no_reviews.innerHTML = "Нобходимо добавить фото и текст отзыва!!"
  }
  else {
    message_no_reviews.style.display = "none";

    $.ajax({
      url: 'form_rexiews_bd.php',
      method: 'post',
      dataType: 'html',
      // contentType: false,
      // processData: false,
      data: { foto: foto, name_inf: name_inf, informat: informat, email2: email2 },
       success: function (data) {
        alert(data);
      }
    });
    document.getElementById("foto").value = "";
    document.getElementById("name_inf").value = "";
    document.getElementById("informat").value = "";
    document.getElementById("email2").value = "";
    message_reviews.style.display = "block";
    message_reviews.innerHTML = "Отзыв успешно добавлен!!"
  }

}

function reviews_delet(id) {
  let message_del_reviews = document.getElementById("message_del_reviews");
   message_del_reviews.style.display = "none";
  message_del_reviews.innerHTML = "Возможно удалять только свой отзыв!";

  $.ajax({
    url: 'reviews_delet_bd.php',
    method: 'post',
    dataType: 'html',
    data: { id: id },
    success: function (data) {
      //alert(data);
     
      message_del_reviews.style.display = "block";
      reviews_bd();
    }

  });

}



