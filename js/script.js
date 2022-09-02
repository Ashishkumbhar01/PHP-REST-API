var editBtn = document.getElementById('edit');

$(document).ready(function() {
  $("#edit").click(function() {
    $(".model-box").show();
    $("table").hide();
  });
});