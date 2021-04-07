<?php
include("header.php");
?>

<body>

    <style>
        body {
            background-color: aquamarine;
        }


        #clok {
            margin-top: 2%;
            background: #FC354C;
            background: -webkit-linear-gradient(to right, #0ABFBC, #FC354C);
            background: linear-gradient(to right, #0ABFBC, #FC354C);
        }

        /* clock style */
        #myclock canvas {
            width: 40%;
            max-width: 40%;
            margin-left: 70%;

        }
    </style>
    <div class="container" id="clok">
        <div class="row">

            <div class="col-md-6 col-md-offset-3">

                <div id="myclock"></div>

            </div>

        </div><!-- ./row -->
    </div><!-- ./container -->

    <script>
        $(document).ready(function() {
            $('#myclock').thooClock({
                size: $(document).width() / 1.4,
                dialColor: '#fff',
                dialBackgroundColor: 'transparent',
                secondHandColor: '#F3A829',
                minuteHandColor: '#e74c3c',
                hourHandColor: '#8bad4e',
                showNumerals: true,
                brandText: 'BootstrapTema',
                brandText2: 'Russia',
            });

        });
    </script>
    <div id="DayDiary" class="tabMenu">

        <div tt="Отображение задач и событий, запланированных на текущий день" id="t_DayDiary1" onclick="sw_tab('DayDiary',1);" class="active" style="font-size:12px" original-title=""><b>Расписание</b></div>

        <div unselectable="on" style="width:170px\0/" class="last right">
            <img tt="На предыдущий день" unselectable="on" onclick="dayLeftRight(-1)" alt="" class="arrow" src="img/cart_img/left.gif" style="margin-right: 1px; display: inline;" original-title="">
            <input disabled="disabled" type="text" id="todayDate" class="hasDatepicker"><img class="ui-datepicker-trigger" src="img/cart_img/calendar.gif" alt="Выбор даты в календаре" title="Выбор даты в календаре">
            <img tt="На следующий день" unselectable="on" onclick="dayLeftRight(1)" alt="" class="arrow" src="img/cart_img/right.gif" original-title="" style="display: inline;">

        </div>
    </div>
    <link href="Css/style(t).css" rel="stylesheet">
<div id="task_history">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">задача</th>
      <th scope="col">дата и время</th>
      <th scope="col">выполнено/нет</th>
      <th scope="col">категория</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
<div class="d-grid gap-2 d-md-block">
  <button class="btn btn-primary" type="button"id="cnopD">Добавить событие</button>
  <button class="btn btn-primary" type="button"id="cnopR">Редактировать</button>
  <button class="btn btn-primary" type="button"id="cnopU">Удалить событие</button>
</div>
</div>
</body>

</html>
<?php
include("footer.php");
?>