 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
<title>PSP 뽄¤문조뽂¬</title>
<script type="text/javascript">
  var idx;
  var obj_table;
  var cnt = 0;
  var res = [{"0":"23.17","Res":"23.17","1":" 59","Con":" 59","2":"12","Pos":"12","3":"71","Pap":"71"},{"0":"76.83","Res":"76.83","1":" 86","Con":" 86","2":"47","Pos":"47","3":"3","Pap":"3"},{"0":"14.57","Res":"14.57","1":" 22","Con":" 22","2":"31","Pos":"31","3":"5","Pap":"5"},{"0":"8.57 ","Res":"8.57 ","1":" 46","Con":" 46","2":"42","Pos":"42","3":"52","Pap":"52"},{"0":"1.43 ","Res":"1.43 ","1":" 34","Con":" 34","2":"86","Pos":"86","3":"22","Pap":"22"},{"0":"26.86","Res":"26.86","1":" 14","Con":" 14","2":"64","Pos":"64","3":"21","Pap":"21"},{"0":"5.43 ","Res":"5.43 ","1":" 9","Con":" 9","2":"4","Pos":"4","3":"77","Pap":"77"},{"0":"20 ","Res":"20 ","1":" 36","Con":" 36","2":"83","Pos":"83","3":"78","Pap":"78"},{"0":"3.14 ","Res":"3.14 ","1":" 66","Con":" 66","2":"19","Pos":"19","3":"95","Pap":"95"},{"0":"20 ","Res":"20 ","1":" 85","Con":" 85","2":"94","Pos":"94","3":"62","Pap":"62"},{"0":"15.6 ","Res":"15.6 ","1":" 44","Con":" 44","2":"45","Pos":"45","3":"65","Pap":"65"},{"0":"2.52 ","Res":"2.52 ","1":" 76","Con":" 76","2":"19","Pos":"19","3":"52","Pap":"52"},{"0":"15.77","Res":"15.77","1":" 14","Con":" 14","2":"21","Pos":"21","3":"48","Pap":"48"},{"0":"7.05 ","Res":"7.05 ","1":" 81","Con":" 81","2":"42","Pos":"42","3":"50","Pap":"50"},{"0":"10.4 ","Res":"10.4 ","1":" 20","Con":" 20","2":"32","Pos":"32","3":"83","Pap":"83"},{"0":"0.5 ","Res":"0.5 ","1":" 92","Con":" 92","2":"53","Pos":"53","3":"73","Pap":"73"},{"0":"14.77","Res":"14.77","1":" 5","Con":" 5","2":"59","Pos":"59","3":"71","Pap":"71"},{"0":"10.07","Res":"10.07","1":" 63","Con":" 63","2":"26","Pos":"26","3":"68","Pap":"68"},{"0":"6.88 ","Res":"6.88 ","1":" 77","Con":" 77","2":"5","Pos":"5","3":"32","Pap":"32"},{"0":"3.19 ","Res":"3.19 ","1":" 26","Con":" 26","2":"4","Pos":"4","3":"49","Pap":"49"},{"0":"4.03 ","Res":"4.03 ","1":" 78","Con":" 78","2":"46","Pos":"46","3":"60","Pap":"60"},{"0":"1.85 ","Res":"1.85 ","1":" 45","Con":" 45","2":"8","Pos":"8","3":"9","Pap":"9"},{"0":"7.38 ","Res":"7.38 ","1":" 88","Con":" 88","2":"8","Pos":"8","3":"71","Pap":"71"},{"0":"17.12","Res":"17.12","1":" 90","Con":" 90","2":"15","Pos":"15","3":"13","Pap":"13"},{"0":"19.37","Res":"19.37","1":" 13","Con":" 13","2":"2","Pos":"2","3":"33","Pap":"33"},{"0":"3.15 ","Res":"3.15 ","1":" 20","Con":" 20","2":"52","Pos":"52","3":"94","Pap":"94"},{"0":"32.88","Res":"32.88","1":" 67","Con":" 67","2":"18","Pos":"18","3":"73","Pap":"73"},{"0":"27.48","Res":"27.48","1":" 26","Con":" 26","2":"4","Pos":"4","3":"31","Pap":"31"},{"0":"11.81","Res":"11.81","1":" 22","Con":" 22","2":"16","Pos":"16","3":"46","Pap":"46"},{"0":"23.23","Res":"23.23","1":" 68","Con":" 68","2":"99","Pos":"99","3":"65","Pap":"65"},{"0":"36.22","Res":"36.22","1":" 37","Con":" 37","2":"80","Pos":"80","3":"76","Pap":"76"},{"0":"7.09 ","Res":"7.09 ","1":" 47","Con":" 47","2":"47","Pos":"47","3":"65","Pap":"65"},{"0":"21.65","Res":"21.65","1":" 41","Con":" 41","2":"3","Pos":"3","3":"52","Pap":"52"},{"0":"35.35","Res":"35.35","1":" 8","Con":" 8","2":"3","Pos":"3","3":"44","Pap":"44"},{"0":"25.12","Res":"25.12","1":" 14","Con":" 14","2":"92","Pos":"92","3":"33","Pap":"33"},{"0":"24.19","Res":"24.19","1":" 8","Con":" 8","2":"26","Pos":"26","3":"31","Pap":"31"},{"0":"15.35","Res":"15.35","1":" 49","Con":" 49","2":"31","Pos":"31","3":"3","Pap":"3"}];
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

        document.getElementById('mytable'+ idx).innerHTML = "<tr><th>"+data[1][i][2]+"</th><th width=10%>결과(%)</th><th width=10%>긍정도(%)</th><th width=10%>집중도(%)</th><th width=10%>관심도(%)</th></tr>";
          for(var i=0; i<data[0].length;i++){
            if(data[0][i][1] == idx){
            add_row(i);}
        }
      }
    function add_row(i) {
    var my_tbody = document.getElementById('mytable'+ idx);
    // var row = my_tbody.insertRow(0); // 뽃~A꽋¨뽗~P 쵾T꯾@
    var row = my_tbody.insertRow( my_tbody.rows.length );
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
// if(data[0][i][2] == 1){
      cell1.innerHTML = data[0][i][4];
      cell2.innerHTML = res[cnt][0];
      cell3.innerHTML = res[cnt][1];
      cell4.innerHTML = res[cnt][2];
      cell5.innerHTML = res[cnt][3];
      cnt++;

//    }
  //   else{
  //     cell1.innerHTML = data[cnt][i][4];
  //     cell2.innerHTML = res[cnt][0];
  //     cell3.innerHTML = res[cnt][1];
  //     cell4.innerHTML = res[cnt][2];
  //     cell5.innerHTML = res[cnt][3];


  // }
}
  function fake(){
    alert("뽄¤문뽝~D 모꽑~P 뽙~D뢾L콕~X뽘~@뽊µ꽋~H꽋¤. ꯾P뽂¬콕©꽋~H꽋¤");
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
    font-family : 릾Q뽝~@겼 꽔~U;
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
</form>
</body>
</html>


