   <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<head>
<form method="post" name="form1" action="database.php">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
<title>PSP 설문조사</title>
<script type="text/javascript">
  var idx;
  var obj_table;
  var data = [[{"0":"Unknown","SNum":"Unknown","1":"2","QNum":"2","2":"1","Chkbox":"1","3":"0","Radio":"0","4":"\uc5ec\uac00, \uc704\ub77d, \uac1c\ubcc4\ud734\uac00","Quest":"\uc5ec\uac00, \uc704\ub77d, \uac1c\ubcc4\ud734\uac00"},{"0":"Unknown","SNum":"Unknown","1":"2","QNum":"2","2":"1","Chkbox":"1","3":"0","Radio":"0","4":"\ubdf0\ud2f0, \uac74\uac15 \ubc0f \uce58\ub8cc","Quest":"\ubdf0\ud2f0, \uac74\uac15 \ubc0f \uce58\ub8cc"},{"0":"Unknown","SNum":"Unknown","1":"2","QNum":"2","2":"1","Chkbox":"1","3":"0","Radio":"0","4":"\uc885\uad50 \ubc0f \uc21c\ub840","Quest":"\uc885\uad50 \ubc0f \uc21c\ub840"},{"0":"Unknown","SNum":"Unknown","1":"2","QNum":"2","2":"1","Chkbox":"1","3":"0","Radio":"0","4":"\uc1fc\ud551","Quest":"\uc1fc\ud551"},{"0":"Unknown","SNum":"Unknown","1":"2","QNum":"2","2":"1","Chkbox":"1","3":"0","Radio":"0","4":"\uce5c\uad6c, \uce5c\uc9c0 \ubc29\ubb38","Quest":"\uce5c\uad6c, \uce5c\uc9c0 \ubc29\ubb38"},{"0":"Unknown","SNum":"Unknown","1":"2","QNum":"2","2":"1","Chkbox":"1","3":"0","Radio":"0","4":"\uc0ac\uc5c5 \ub610\ub294 \uc804\ubb38 \ud65c\ub3d9","Quest":"\uc0ac\uc5c5 \ub610\ub294 \uc804\ubb38 \ud65c\ub3d9"},{"0":"Unknown","SNum":"Unknown","1":"2","QNum":"2","2":"1","Chkbox":"1","3":"0","Radio":"0","4":"\uad50\uc721","Quest":"\uad50\uc721"},{"0":"Unknown","SNum":"Unknown","1":"2","QNum":"2","2":"1","Chkbox":"1","3":"0","Radio":"0","4":"\uae30\ud0c0","Quest":"\uae30\ud0c0"},{"0":"Unknown","SNum":"Unknown","1":"3","QNum":"3","2":"1","Chkbox":"1","3":"0","Radio":"0","4":"\uc790\uc5f0\ud48d\uacbd","Quest":"\uc790\uc5f0\ud48d\uacbd"},{"0":"Unknown","SNum":"Unknown","1":"3","QNum":"3","2":"1","Chkbox":"1","3":"0","Radio":"0","4":"\uc1fc\ud551","Quest":"\uc1fc\ud551"},{"0":"Unknown","SNum":"Unknown","1":"3","QNum":"3","2":"1","Chkbox":"1","3":"0","Radio":"0","4":"\uc5ed\uc0ac\/\ubb38\ud654\uc720\uc801","Quest":"\uc5ed\uc0ac\/\ubb38\ud654\uc720\uc801"},{"0":"Unknown","SNum":"Unknown","1":"3","QNum":"3","2":"1","Chkbox":"1","3":"0","Radio":"0","4":"\uc74c\uc2dd","Quest":"\uc74c\uc2dd"},{"0":"Unknown","SNum":"Unknown","1":"3","QNum":"3","2":"1","Chkbox":"1","3":"0","Radio":"0","4":"\ud734\uc591\uc2dc\uc124","Quest":"\ud734\uc591\uc2dc\uc124"},{"0":"Unknown","SNum":"Unknown","1":"3","QNum":"3","2":"1","Chkbox":"1","3":"0","Radio":"0","4":"\uc720\ud765\uc2dc\uc124","Quest":"\uc720\ud765\uc2dc\uc124"},{"0":"Unknown","SNum":"Unknown","1":"3","QNum":"3","2":"1","Chkbox":"1","3":"0","Radio":"0","4":"\ud328\uc158, \uc720\ud589 \ub4f1 \ubb38\ud654","Quest":"\ud328\uc158, \uc720\ud589 \ub4f1 \ubb38\ud654"},{"0":"Unknown","SNum":"Unknown","1":"3","QNum":"3","2":"1","Chkbox":"1","3":"0","Radio":"0","4":"\uae30\ud6c4 \ud658\uacbd","Quest":"\uae30\ud6c4 \ud658\uacbd"},{"0":"Unknown","SNum":"Unknown","1":"3","QNum":"3","2":"1","Chkbox":"1","3":"0","Radio":"0","4":"\uacbd\uc81c\uc801\uc778 \uc5ec\ud589 \ube44\uc6a9","Quest":"\uacbd\uc81c\uc801\uc778 \uc5ec\ud589 \ube44\uc6a9"},{"0":"Unknown","SNum":"Unknown","1":"3","QNum":"3","2":"1","Chkbox":"1","3":"0","Radio":"0","4":"\uc548\uc804, \uce58\uc548","Quest":"\uc548\uc804, \uce58\uc548"},{"0":"Unknown","SNum":"Unknown","1":"3","QNum":"3","2":"1","Chkbox":"1","3":"0","Radio":"0","4":"\ud3b8\ub9ac\ud55c \uad50\ud1b5","Quest":"\ud3b8\ub9ac\ud55c \uad50\ud1b5"},{"0":"Unknown","SNum":"Unknown","1":"3","QNum":"3","2":"1","Chkbox":"1","3":"0","Radio":"0","4":"K-POP\/\ud55c\ub958\uc2a4\ud0c0 \ud32c\ubbf8\ud305 \ub4f1\uc744 \uacbd\ud5d8\ud558\uace0 \uc2f6\uc5b4\uc11c","Quest":"K-POP\/\ud55c\ub958\uc2a4\ud0c0 \ud32c\ubbf8\ud305 \ub4f1\uc744 \uacbd\ud5d8\ud558\uace0 \uc2f6\uc5b4\uc11c"},{"0":"Unknown","SNum":"Unknown","1":"3","QNum":"3","2":"1","Chkbox":"1","3":"0","Radio":"0","4":"\uae30\ud0c0","Quest":"\uae30\ud0c0"},{"0":"Unknown","SNum":"Unknown","1":"1","QNum":"1","2":"0","Chkbox":"0","3":"1","Radio":"1","4":"\ucc98\uc74c\uc774\ub2e4","Quest":"\ucc98\uc74c\uc774\ub2e4"},{"0":"Unknown","SNum":"Unknown","1":"1","QNum":"1","2":"0","Chkbox":"0","3":"1","Radio":"1","4":"\uc774\uc804\uc5d0 \uc628 \uc801\uc774 \uc788\ub2e4","Quest":"\uc774\uc804\uc5d0 \uc628 \uc801\uc774 \uc788\ub2e4"},{"0":"Unknown","SNum":"Unknown","1":"4","QNum":"4","2":"0","Chkbox":"0","3":"1","Radio":"1","4":"\uc804\ud600 \uadf8\ub807\uc9c0 \uc54a\ub2e4","Quest":"\uc804\ud600 \uadf8\ub807\uc9c0 \uc54a\ub2e4"},{"0":"Unknown","SNum":"Unknown","1":"4","QNum":"4","2":"0","Chkbox":"0","3":"1","Radio":"1","4":"\uadf8\ub807\uc9c0 \uc54a\ub2e4","Quest":"\uadf8\ub807\uc9c0 \uc54a\ub2e4"},{"0":"Unknown","SNum":"Unknown","1":"4","QNum":"4","2":"0","Chkbox":"0","3":"1","Radio":"1","4":"\ubcf4\ud1b5\uc774\ub2e4","Quest":"\ubcf4\ud1b5\uc774\ub2e4"},{"0":"Unknown","SNum":"Unknown","1":"4","QNum":"4","2":"0","Chkbox":"0","3":"1","Radio":"1","4":"\uadf8\ub807\ub2e4","Quest":"\uadf8\ub807\ub2e4"},{"0":"Unknown","SNum":"Unknown","1":"4","QNum":"4","2":"0","Chkbox":"0","3":"1","Radio":"1","4":"\uc544\uc8fc \uadf8\ub807\ub2e4","Quest":"\uc544\uc8fc \uadf8\ub807\ub2e4"},{"0":"Unknown","SNum":"Unknown","1":"5","QNum":"5","2":"0","Chkbox":"0","3":"1","Radio":"1","4":"\ub9e4\uc6b0 \ub098\uc058\ub2e4","Quest":"\ub9e4\uc6b0 \ub098\uc058\ub2e4"},{"0":"Unknown","SNum":"Unknown","1":"5","QNum":"5","2":"0","Chkbox":"0","3":"1","Radio":"1","4":"\ub098\uc058\ub2e4","Quest":"\ub098\uc058\ub2e4"},{"0":"Unknown","SNum":"Unknown","1":"5","QNum":"5","2":"0","Chkbox":"0","3":"1","Radio":"1","4":"\uadf8\ub0e5 \uadf8\ub807\ub2e4","Quest":"\uadf8\ub0e5 \uadf8\ub807\ub2e4"},{"0":"Unknown","SNum":"Unknown","1":"5","QNum":"5","2":"0","Chkbox":"0","3":"1","Radio":"1","4":"\uc88b\uc544\uc84c\ub2e4","Quest":"\uc88b\uc544\uc84c\ub2e4"},{"0":"Unknown","SNum":"Unknown","1":"5","QNum":"5","2":"0","Chkbox":"0","3":"1","Radio":"1","4":"\uc544\uc8fc \uc88b\uc544\uc84c\ub2e4","Quest":"\uc544\uc8fc \uc88b\uc544\uc84c\ub2e4"},{"0":"Unknown","SNum":"Unknown","1":"6","QNum":"6","2":"0","Chkbox":"0","3":"1","Radio":"1","4":"\uac1c\ubcc4\uc5ec\ud589","Quest":"\uac1c\ubcc4\uc5ec\ud589"},{"0":"Unknown","SNum":"Unknown","1":"6","QNum":"6","2":"0","Chkbox":"0","3":"1","Radio":"1","4":"\ub2e8\uccb4\uc5ec\ud589","Quest":"\ub2e8\uccb4\uc5ec\ud589"},{"0":"Unknown","SNum":"Unknown","1":"6","QNum":"6","2":"0","Chkbox":"0","3":"1","Radio":"1","4":"Air-tel Tour","Quest":"Air-tel Tour"},{"0":"Unknown","SNum":"Unknown","1":"6","QNum":"6","2":"0","Chkbox":"0","3":"1","Radio":"1","4":"\uae30\ud0c0","Quest":"\uae30\ud0c0"}],[{"0":"Unknown","SNum":"Unknown","1":"1","QNum":"1","2":"\ud55c\uad6d\uc5d0 \ucc98\uc74c \ubc29\ubb38 \ud558\uc2ed\ub2c8\uae4c?","QText":"\ud55c\uad6d\uc5d0 \ucc98\uc74c \ubc29\ubb38 \ud558\uc2ed\ub2c8\uae4c?","3":"\uc7ac\ubc29\ubb38 \uc5ec\ubd80","Keyword":"\uc7ac\ubc29\ubb38 \uc5ec\ubd80"},{"0":"Unknown","SNum":"Unknown","1":"2","QNum":"2","2":"\ud55c\uad6d\uc744 \ubc29\ubb38\ud55c \ubaa9\uc801\uc774 \ubb34\uc5c7\uc785\ub2c8\uae4c?","QText":"\ud55c\uad6d\uc744 \ubc29\ubb38\ud55c \ubaa9\uc801\uc774 \ubb34\uc5c7\uc785\ub2c8\uae4c?","3":"\ubc29\ud55c \ubaa9\uc801","Keyword":"\ubc29\ud55c \ubaa9\uc801"},{"0":"Unknown","SNum":"Unknown","1":"3","QNum":"3","2":"\uc5ec\ud589, \uad00\uad11\uc744 \ubaa9\uc801\uc73c\ub85c \ud55c\uad6d\uc5d0 \uc624\uc168\ub2e4\uba74 \uadf8 \ub3d9\uae30\ub294 \ubb34\uc5c7\uc785\ub2c8\uae4c?\n(3\uac00\uc9c0 \uc120\ud0dd)","QText":"\uc5ec\ud589, \uad00\uad11\uc744 \ubaa9\uc801\uc73c\ub85c \ud55c\uad6d\uc5d0 \uc624\uc168\ub2e4\uba74 \uadf8 \ub3d9\uae30\ub294 \ubb34\uc5c7\uc785\ub2c8\uae4c?\n(3\uac00\uc9c0 \uc120\ud0dd)","3":"\uc5ec\ud589 \ub3d9\uae30","Keyword":"\uc5ec\ud589 \ub3d9\uae30"},{"0":"Unknown","SNum":"Unknown","1":"4","QNum":"4","2":"\uc9c0\uc778\uc5d0\uac8c \ud55c\uad6d \uc5ec\ud589\uc744 \ucd94\ucc9c\ud560 \uc758\uc0ac\uac00 \uc788\uc2b5\ub2c8\uae4c?","QText":"\uc9c0\uc778\uc5d0\uac8c \ud55c\uad6d \uc5ec\ud589\uc744 \ucd94\ucc9c\ud560 \uc758\uc0ac\uac00 \uc788\uc2b5\ub2c8\uae4c?","3":"\ud55c\uad6d\uc5ec\ud589 \ucd94\ucc9c\uc758\uc0ac","Keyword":"\ud55c\uad6d\uc5ec\ud589 \ucd94\ucc9c\uc758\uc0ac"},{"0":"Unknown","SNum":"Unknown","1":"5","QNum":"5","2":"\ud55c\uad6d\uc5ec\ud589 \ud6c4 \ud55c\uad6d\uc5d0 \ub300\ud55c \uc774\ubbf8\uc9c0\uac00 \uc5b4\ub5bb\uac8c \ubcc0\ud654\ud558\uc600\uc2b5\ub2c8\uae4c?","QText":"\ud55c\uad6d\uc5ec\ud589 \ud6c4 \ud55c\uad6d\uc5d0 \ub300\ud55c \uc774\ubbf8\uc9c0\uac00 \uc5b4\ub5bb\uac8c \ubcc0\ud654\ud558\uc600\uc2b5\ub2c8\uae4c?","3":"\ud55c\uad6d\uc5ec\ud589 \ud6c4 \ud55c\uad6d \uc774\ubbf8\uc9c0","Keyword":"\ud55c\uad6d\uc5ec\ud589 \ud6c4 \ud55c\uad6d \uc774\ubbf8\uc9c0"},{"0":"Unknown","SNum":"Unknown","1":"6","QNum":"6","2":"\uc5b4\ub5a4 \ubc29\ubc95\uc73c\ub85c \ud55c\uad6d\uc744 \ubc29\ubb38\ud558\uc168\uc2b5\ub2c8\uae4c?","QText":"\uc5b4\ub5a4 \ubc29\ubc95\uc73c\ub85c \ud55c\uad6d\uc744 \ubc29\ubb38\ud558\uc168\uc2b5\ub2c8\uae4c?","3":"\uc5ec\ud589\ud615\ud0dc","Keyword":"\uc5ec\ud589\ud615\ud0dc"}],[{"0":"0","SNum":"0","1":"\uc678\uad6d\uc778\uc758 \uad6d\ub0b4 \uad00\uad11 \uc218\uc694 \uc870\uc0ac","Main":"\uc678\uad6d\uc778\uc758 \uad6d\ub0b4 \uad00\uad11 \uc218\uc694 \uc870\uc0ac"}]];
  function my_init() {
        idx=0;
    obj_table=document.all.mytable.cloneNode(true);
    document.getElementById('main').innerHTML = "<center><h2>"+data[2][0][1]+"</h2></center>"    
    for(var i = 0;i<data[1].length;i++){
      add_table(i);
    }
  }
    function add_table(i) {
    idx++;
        eval("document.all.mytable"+(idx>1?idx-1:"")).insertAdjacentHTML("afterEnd",obj_table.outerHTML.replace("mytable","mytable"+idx));
        document.getElementById("mytable"+idx).innerHTML = "<br>";

        document.getElementById('mytable'+ idx).innerHTML = "<tr><th colspan=\"2\">"+data[1][i][2]+"</th></tr>";
          for(var i=0; i<data[0].length;i++){
            if(data[0][i][1] == idx){
            add_row(i);}
        }
      }
    function add_row(i) {
    var my_tbody = document.getElementById('mytable'+ idx);
    // var row = my_tbody.insertRow(0); // 상단에 추가
    var row = my_tbody.insertRow( my_tbody.rows.length ); 
    var cell1 = row.insertCell(0);cell1.width = "3%"
    var cell2 = row.insertCell(1);
    if(data[0][i][2] == 1){
      cell1.innerHTML = "<center><input type = checkbox id=chk name=chk"+idx+" ></center>";
      cell2.innerHTML = data[0][i][4];
    }
    else{
      cell1.innerHTML = "<center><input type = radio id=rad name=rad"+idx+" ></center>";
      cell2.innerHTML = data[0][i][4];    
    }
  }
  function fake(){
    alert("설문을 모두 완료하였습니다. 감사합니다");
  }
  
</script>
<style>
th, td { border:1px solid gray; font-size: 20px}
 .btn {
	margin: 0 auto; display: button; 
}
    body {
      background-color : white;
      }
    h1 a {
    color: white;
    font-size: 70px;
    font-family : 'Malgun Gothic';
    text-decoration: none;
    } 
   .page-header {
    background-color: #203864;
    text-align: center;
    font-family : 맑은고딕;
    padding: 0.1px 1px 0.1px 1px; 
  }
  table { border-collapse:collapse; border: "1", style="margin:0 auto" width = "100"}  
  thead { border:1px solid gray; font-size: 60px; column-span: 2 }
</style>
</head>
<body onload =my_init()>
<div class="page-header">
    <h1><strong></strong><a href="test.html">PSP</a></h1>
</div>
<br />
<form method="post" name="form1" >


<div id = 'main'></div>
<br><br>
<table border="1" style="margin:0 auto" width="100%" height="100%" cellspacing="0" id=mytable>
</table>
</br>
</br>
<p><input type="submit"  value="제출" ></p>
</form>
</body>
</html>

