<html>
<head> 
<meta charset="utf8">
</head>
<center><h1 style="font-size:35pptx">高大批鬥大會</h1><center>


<form action="result.php" method="post">
姓名:<input type="text" name="sName" placeholder="Please input your name"><br/><br/>
學號:<input type="number" name="sNum" required><br/><br/>
系所:
<input type="checkbox" name="sSubject" value="IM">資管
<input type="checkbox" name="sSubject" value="CS">資工
<input type="checkbox" name="sSubject" value="LAW">法律
<input type="checkbox" name="sSubject" value="EE">電機

<br/><br/>
性別:
<input type="radio" name="sGender" value="male">男
<input type="radio" name="sGender" value="female">女
<br/><br/>
旗幟的顏色:
<input type="color" name="sColor" value=""><br/><br/>
請輸入人數:<input type="number"><br/><br/>
請選擇當天餐點種類:
<select name="sFood[]" multiple>
<option value="cake">cake
<option value="pizza">pizza
<option value="bread">bread
<option value="fried chicken">fried chichen
<option value="french fries">french fries   
</select>
<br/><br/><br/><br/><br/>
請輸入您的意見:
<textarea name="sComment" value="" rows="10" cols="50">
</textarea>
<br/>
<br/>
<input type="submit" value="送出吧">
<input type="reset" value="寫錯了">
</form>

<?php
if(isset($_POST["sName"])){
    $sName=$_POST["sName"];
    echo $sName;
}else{
    echo "xxxxx";
}
?>
</html>