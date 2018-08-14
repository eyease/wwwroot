
// window.load=init();

// function loadXMLDoc(){
// var xmlhttp;
// if (window.XMLHttpRequest)
//   {// code for IE7+, Firefox, Chrome, Opera, Safari
//   xmlhttp=new XMLHttpRequest();
//   }
// else
//   {// code for IE6, IE5
//   xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//   }
// xmlhttp.onreadystatechange=function()
//   {
//   if (xmlhttp.readyState==4 && xmlhttp.status==200)
//     {
//     document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
//     }
//   }
//   xmlhttp.open("GET","./sorts_in.php",true);
//   xmlhttp.send();
// }

// $(document).ready(function () {
//   $("#index").click(function () {
//       $('#myDiv').load('')
//   })
// });

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