
function my_reviews() {

  $.ajax({
    url: 'my_reviews.php',
    method: 'post',
    dataType: 'html',
    data: "",
    success: function (data) {
      //alert(data);
      var z = JSON.parse(data);
      var s = "";
      for (var i = 0; i < z.length; i++) {        
          s+="<div class='col'>"+
            "<svg class='bd-placeholder-img card-img-top' width='1%' height='1%' xmlns='http://www.w3.org/2000/svg' aria-label='preserveAspectRatio='xMidYMid slice role='img'><img src='img/info_img/" + z[i]['img'] + "'></title><rect width='1%' height='1%' fill='#55595c'></rect><text x='1%' y='1%' fill='#eceeef' dy='.3em'>Ваш коментарий (отзыв)</text></svg>"+

            "<div class='card-body'>"+
              "<h3 class='card-text'>" + z[i]['name_inf'] + "</h3>"+
            "</div>"+
              "<div class='card-body'>"+
              "<p class='card-text'>" + z[i]['informat'] + "</p>"+
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
            "</div>";
        }
      let detalis_nformation = document.getElementById("teviews");
      detalis_nformation.innerHTML = s;
       
    }
  });
}