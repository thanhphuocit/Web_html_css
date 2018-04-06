<!DOCTYPE html>
<html>
<head>
<title>Đăng Kí</title>
<style type="text/css">
    <?php include("CSS/dk.css");  ?>
</style>
</head>

<body>
<fieldset>
<form action="ktdangki.php" method="post">
	<h1 class="dau">Đăng ký</h1>
    <p class="dau1">Miễn phí và sẽ mãi luôn là như vậy</p>
	<input type="text" name="fname"  id="ho" placeholder="Tên"/>
    
    <input type="text" name="lname"  id="ten" placeholder="Họ" />
    <p id="kt1"></p>
    <p id="kt"></p>
    
    <input type="text" name="user"  id="tk" placeholder="Nhập tên tài khoản" />
    <p id="em1"></p>
    <input type="password" name="pass" id="pass" placeholder="Nhập mật khẩu" />
     <p id="em2"></p>
     <input type="password" name="rpass" id="repass" placeholder="Mật lại khẩu" />
      <p id="mk1"></p>
     <h4>Ngày sinh</h4>
     <select name="ngaysinh" id="ns">
     <option id="ng" value="ngay">ngày</option>
     <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>   
     </select>
     
     <select name="thangsinh">
     	<option id="thang" value="thang">tháng</option>
         <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
     </select>
     <select name="namsinh">
     	<option value="nam">năm</option>
        <option value="1991">1991</option>
        <option value="1992">1992</option>
        <option value="1993">1993</option>
        <option value="1994">1994</option>
        <option value="1995">1995</option>
        <option value="1996">1996</option>
        <option value="1997">1997</option>
        <option value="1998">1998</option>
        <option value="1999">1999</option>
        <option value="2000">2000</option>
        <option value="2001">2002</option>
        <option value="2002">2012</option>
     </select>
     <p id="kt4"></p>
        
     <p>
     <input type="radio" name="gt" value="Nam" checked="checked" />Nam
      <input type="radio" name="gt" value="Nữ" checked="checked" />Nữ
      </p>
      <p class="nho">Bằng cách nhấp vào Đăng ký, bạn đồng ý với Các điều khoản <br/>
      của chúng tôi và rằng bạn đã đọc Chính sách dữ liệu của chúng <br/>
      tôi, bao gồm Sử dụng cookie.<br/>
      </p>
      <input type="submit" value="Đăng ký" />
</form>  
</fieldset>
</body>
</html>
