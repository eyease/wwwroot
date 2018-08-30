
//清分数据上传
$(document).ready(function () {
  $("#qf").click(function () {
      window.open('./sorts/qf_upload.html','newwindow','height=500, width=800, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no')
  })
});


//身份证维护
$(document).ready(function () {
  $("#userdb").click(function () {
      $('#myDiv').load('./userdb.php')
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


