<?php
header("Cache-Control: max-age=0; no-cache; no-store; must-revalidate");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
    <title>แบบประเมินดัชนีชี้วัดสุขภาพจิตคนไทยฉบับสั้น</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel='stylesheet' href='css.css' type='text/css'>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="js/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="fonts/thsarabunnew.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

<!--    <link rel="stylesheet" href="css/styles.css" type="text/css" />-->
    <script language=javascript>

        function checkAll(ele) {
            var checkboxes = document.getElementsByTagName('input');
            if (ele.checked) {
                for (var i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i].type == 'checkbox') {
                        checkboxes[i].checked = true;
                    }
                }
            } else {
                for (var i = 0; i < checkboxes.length; i++) {
                    console.log(i)
                    if (checkboxes[i].type == 'checkbox') {
                        checkboxes[i].checked = false;
                    }
                }
            }
        }
    </script>
    <SCRIPT language="JavaScript">
function isIntDigit(textObj){

var newValue = textObj.value;

var newLength = newValue.length;

for(var i = 0;i != newLength; i++){

aChar = newValue.substring(i,i+1);

if(aChar < "0" || aChar > "9") {
alert("กรุณาใส่ข้อมูลเป็นตัวเลขเช่น 1234567890");

textObj.value = '';

return false;
}
}
}
</script>
    <style type="text/css">
        #btn1 {
            width: 32px;
            height: 32px;
            background-image: url('images/calendar32.png');
            border: none;
        }
        #btn1:hover {
            background-image: url('images/calendar32.png');
        }
    </style>

    <script language="JavaScript">
        function fncShow1()
        {
            document.getElementById('showhide1').style.display = '';
            document.getElementById('diag_other').value="";
            document.getElementById('diag_other').disabled=true;
            document.getElementById('diag_idsub1').checked=true;
            document.getElementById('diag1').checked=false;
            document.getElementById('showhide2').style.display = 'none';
            //document.getElementById('diag').value="0";
        }
        function fncHide1()
        {
            document.getElementById('showhide1').style.display = 'none';
            document.getElementById('diag_other').value="";
            document.getElementById('diag_other').disabled=true;
            document.getElementById('diag_idsub1').checked=false;
            document.getElementById('diag1').checked=true;
            document.getElementById('showhide2').style.display = '';
            //document.getElementById('diag').value="0";
        }

        function fncShoweval()
        {
            document.getElementById('showhideeval').style.display = '';
            document.getElementById('show_ok1').style.display = 'none';
            //document.getElementById('diag_other').value="";
            //document.getElementById('diag_other').disabled=true;
            //document.getElementById('diag_idsub1').checked=true;
        }
        function fncHideeval()
        {
            document.getElementById('showhideeval').style.display = 'none';
            document.getElementById('show_ok1').style.display = '';
            //document.getElementById('diag_other').value="";
            //document.getElementById('diag_other').disabled=true;
            //document.getElementById('diag_idsub1').checked=true;
        }

        function fncShowment2()
        {
            document.getElementById('eval12').disabled = false;
            document.getElementById('eval22').disabled = false;
            document.getElementById('eval32').disabled = false;
            document.getElementById('eval42').disabled = false;
            document.getElementById('eval52').disabled = false;
            document.getElementById('eval62').disabled = false;
        }

    </script>

<script>
    document.onkeydown=function(evt){
        var keyCode = evt ? (evt.which ? evt.which : evt.keyCode) : event.keyCode;
        if(keyCode == 13)
        {
            //your function call here
            document.searchform.submit();
        }
    }
</script>
<script>
    document.onkeydown=function(evt){
        var keyCode = evt ? (evt.which ? evt.which : evt.keyCode) : event.keyCode;
        if(keyCode == 13)
        {
            //your function call here
            document.searchform1.submit();
        }
    }
</script>

</head>
<BODY style="text-align:center;height: 100%">
