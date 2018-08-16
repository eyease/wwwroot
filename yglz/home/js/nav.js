

$(document).ready(function () {
  $("#qf").click(function () {
      $('#myDiv').load('./sorts/qf_upload.html')
  })
});

$(document).ready(function () {
  $("#message").click(function () {
      $('#myDiv').load('./sorts_in.php')
  })
});

$(document).ready(function () {
  $("#logout").click(function () {
      $('body').load('../logout.php')
  })
});

$(document).ready(function () {
  $("#one").click(function () {
      $('#mydivtext').fadeOut(2000)      
  })
});

$(document).ready(function () {
  $("#two").click(function () {
      $('#mydivtext').fadeIn(1000);     
      $('#mydivtext').text('并不是不能用');
  })
});


