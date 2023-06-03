// script for live date and time
$(document).ready(function () {
    setInterval(runningTime, 1000);
  });
  
  function runningTime() {
    $.ajax({
      url: "timeScript.php",
      success: function (data) {
        $("#runningTime").html(data);
      },
    });
  }