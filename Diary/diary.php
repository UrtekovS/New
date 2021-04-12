<?php
include("header.php");
?>

<body>
 <!--Часы-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
  <div >
  <main class="container-fluid nightmode text-center"id="clok2">
    <time id="date" class="clocktext"> </time>
    <time id="time" class="clocktext"> <span> </span> </time>
  </main>
  </div>

  <!--Календарь-->

    <div tt="Отображение задач и событий, запланированных на текущий день" id="t_DayDiary1" onclick="sw_tab('DayDiary',1);" class="active" style="font-size:12px" original-title=""><b>Расписание</b></div>

    <div unselectable="on" class="last right" id="the_calendar">
      <img tt="На предыдущий день" unselectable="on" onclick="dayLeftRight(-1)" alt="" class="arrow" src="" style="margin-right: 1px; display: inline;" original-title="">
      <input disabled="disabled" type="text" id="todayDate" class="hasDatepicker"><img class="ui-datepicker-trigger" src="img/cart_img/calendar.gif" alt="Выбор даты в календаре" title="Выбор даты в календаре">
      <img tt="На следующий день" unselectable="on" onclick="dayLeftRight(1)" alt="" class="arrow" src="" original-title="" style="display: inline;">
    </div>

  <!--Таблица задачь-->
  <link href="Css/style(t).css" rel="stylesheet">
  <div id="task_history">
  <table class="table">
      <thead>
        <tr>
          <th scope="col">№</th>
          <th scope="col">задача</th>
          <th scope="col">дата и время</th>
          <th scope="col">выполнено/нет</th>
          <th scope="col">категория</th>
          <th scope="col">кнопки действия</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td><input type="checkbox" id="inlineCheckbox1" value="option1"></td>
          <td>Выпадающий список</td>
          <td><button class="btn btn-primary" type="button" id="cnopD">Добавить событие</button>
              <button class="btn btn-primary" type="button" id="cnopDl">Удалить событие</button>
          </td>
        </tr>
      </tbody>
    </table>

    <div >      
      <button class="btn btn-primary" type="button" id="update">Редактировать</button>
    </div>
  </div>
</body>
</html>
<?php
include("footer.php");
?>