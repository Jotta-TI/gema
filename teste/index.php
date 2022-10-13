<?php?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='assets/css/lib/main.min.css' rel='stylesheet' />
<script src='https://github.com/mozilla-comm/ical.js/releases/download/v1.4.0/ical.js'></script>
<script src='assets/js/lib/main.min.js'></script>
<script src='assets/js/lib/locales/pt-br.js'></script>
<!--<script src='../packages/icalendar/main.global.js'></script>-->
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        locale: 'pt-br',
      displayEventTime: true,
      //initialDate: '2019-04-01',
      editable: true,
      dayMaxEventRows: true,
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,listYear',
        //eventDisplay: 'block',
      },
      events: {
        url: 'list_eventos.php',
        display: 'auto',
        //format: 'php',
        failure: function() {
          document.getElementById('script-warning').style.display = 'block';
        },
        extraParams: function() {
          return{
            cachebuster: new Date().valueOf()
          };
        }
      },
    
      loading: function(bool) {
        document.getElementById('loading').style.display =
          bool ? 'block' : 'none';
      },
      events: [
        {
          title: 'All Day Event',
          start: '2022-10-15'
        },
        {
          title: 'Long Event',
          start: '2022-10-23',
          end: '2022-10-27'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2022-10-31T16:00:00'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2022-10-16T16:00:00'
        }      
      ]
    });

    calendar.render();
  });

</script>
<style>

  body {
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
  }

  #script-warning {
    display: none;
    background: #eee;
    border-bottom: 1px solid #ddd;
    padding: 0 10px;
    line-height: 40px;
    text-align: center;
    font-weight: bold;
    font-size: 12px;
    color: red;
  }

  #loading {
    display: none;
    position: absolute;
    top: 10px;
    right: 10px;
  }

  #calendar {
    max-width: 1100px;
    margin: 40px auto;
    padding: 0 10px;
  }

</style>
</head>
<body>

  <div id='script-warning'>
    <code>list_eventos.php</code> must be servable
  </div>

  <div id='loading'>loading...</div>

  <div id='calendar'></div>

</body>
</html>
