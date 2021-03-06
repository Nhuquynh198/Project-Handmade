<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
::selection {
  background-color: #FFFF;
}

::-moz-selection {
  background-color: #8ac7d8;
}

body {
  background: white;
}

.container {
  display: -webkit-flex;
  display: flex;
  height: 100%;
}

#logbox {
  padding: 10px;
  margin: 50px auto;
  width: 340px;
  background-color: #fff;
  -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
  -moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
}

h1 {
  text-align: center;
  font-size: 175%;
  color: #757575;
  font-weight: 300;
}

h1, input {
  font-family: "Open Sans", Helvetica, sans-serif;
}

.input {
  width: 75%;
  height: 50px;
  display: block;
  margin: 0 auto 15px;
  padding: 0 15px;
  border: none;
  border-bottom: 2px solid #ebebeb;
}
.input:focus {
  outline: none;
  border-bottom-color: #3CC !important;
}
.input:hover {
  border-bottom-color: #dcdcdc;
}
.input:invalid {
  box-shadow: none;
}

.pass:-webkit-autofill {
  -webkit-box-shadow: 0 0 0 1000px white inset;
}

.inputButton {
  position: relative;
  width: 85%;
  height: 50px;
  display: block;
  margin: 30px auto 30px;
  color: white;
  background-color: #3dbf50;
  border: none;
  -webkit-box-shadow: 0 5px 0 #2CADAD;
  -moz-box-shadow: 0 5px 0 #2CADAD;
  box-shadow: 0 5px 0 #f70533;
}
.inputButton:hover {
  top: 2px;
  -webkit-box-shadow: 0 3px 0 #2CADAD;
  -moz-box-shadow: 0 3px 0 #2CADAD;
  box-shadow: 0 3px 0 #2CADAD;
}
.inputButton:active {
  top: 5px;
  box-shadow: none;
}
.inputButton:focus {
  outline: none;
}

</style>
</head>

<body>
<div class="container">
   
    <div id="logbox" style="align:center">
      <form id="signup" method="post" action="">
        <h1>Đăng nhập</h1>
        <input name="txtmail" type="email" placeholder="Email or Username" class="input pass" id="txtmail"/>
        <input name="txtpassword" type="password" placeholder="Nhập password" class="input pass" id="txtpassword"/>
        <input name="btnDangnhap" type="submit" class="inputButton" id="btnDangnhap" value="Sign me in!"/>
       
      </form>
    </div>
    </div>
 

</body>
</html>