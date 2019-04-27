
<?php
echo '<h1 align="center">Lệnh Echo </h1>';
echo "Lệnh Echo được dùng để xuất nội dung ra màn hình";

//Biến
echo '<h1 align="center">Biến</h1>';
$sothuc = 23.2;
$songuyen = 23;
echo '<br>';
echo $songuyen;
echo '<br>';
echo $sothuc;
echo '<br>';
//Hằng
echo '<h1 align="center">Hằng</h1>';
define('TEXT',"lệnh define được dùng để khai báo một <b>Hằng</b>.");
echo TEXT;
echo '<br>';
//Các kiểu dữ liệu trong PHP
echo '<h1 align="center">Các kiểu dữ liệu trong PHP</h1>';
echo $songuyen.' Số nguyên';//Kiểu dữ liệu INT
echo '<br>';
echo $sothuc.' Số thực';//kiểu dữ liệu Double
echo '<br>';
$str = 'Dữ liệu kiểu chuỗi';
echo $str;//kiểu dữ liệu Chuỗi
$a = NULL;
echo $a;//Kiểu dữ liệu NULL
//Dữ liệu kiểu Boolean
echo '<h1 align="center">Toán tử gán trong PHP</h1>';
echo 'Trong PHP ,dấu = chính là toán tử gán ở trong PHP.Nó lấy giá trị của toán hạng bên phải nó và gán cho toán hạng bên trái nó.';
echo '<h1 align="center">Toán tử nối trong PHP</h1>';
echo 'Trong PHP $str được gọi là '.$str;// Dấu "." là toán tử nối,nó giúp chúng ta in ra một chuỗi với một biến lẫn lộn với nhau.
echo '<h1 align="center">Toán tử số học</h1>';
echo '<ol>
<li>Toán tử +</li>
<li>Toán tử *</li>
<li>Toán tử /</li>
<li>Toán Tử %</li>
</ol>';
$st1 = 5;
$st2 = 10;
$kq = $st1 + $st2;//Tương tự các toán tử khác ta thay "+".
echo $kq;
echo '<h1 align="center">Toán tử so sánh</h1>';
echo '<ol>
<li> <b>></b> Lớn hơn</li>
<li> <b>>=</b> Lớn hơn hoặc bằng </li>
<li> <b>==</b> Bằng </li>
<li> <b><</b> Bé hơn</li>
<li> <b><=</b> Bé hơn hoặc bằng </li>
<li> <b>!=</b> Khác </li>
</ol>';
echo '<h1 align="center">Tán tử Logic</h1>';
echo '<ul>
<li>Và : <b>&&</b></li>
<li>Hoặc : <b>||</b></li>
<li>Phủ định : <b>!</b></li>
</ul>';
echo '<h1 align="center">Toán tử kết hợn</h1>';
echo 'Toán tử ++ được dùng để tăng 1 giá trị<br>';
echo '<b>Ví dụ:</b><br>';
echo '<span>
$a = 12;<br>
$a++;</br>
//Tương đương với $a = $a + 1;</span><br>';
echo 'Toán tử -- được dùng để giảm 1 giá trị<br>';
echo '<b>Ví dụ:</b><br>';
echo '<span>
$a = 11;<br>
$a--;<br>
//Tương đương với $a = $a -1</span><br>';
echo 'Toán tử += tương đương với giá trị trái = giá trị trái + giá trị phải<br>';
echo '<b>Ví dụ:</b><br>';
echo '<span>
$a = 10;<br>
$a += 5;<br>
//Tương đương với $a = $a + 5</span><br>';
echo 'Toán tử -= tương đương với giá trị trái = giá trị trái - giá trị phải<br>';
echo '<b>Ví dụ:</b><br>';
echo '<span>
$a = 10;<br>
$a -= 5;<br>
//Tương đương với $a = $a - 5</span><br>';
echo 'Toán tử *= tương đương với giá trị trái = giá trị trái * giá trị phải<br>';
echo '<b>Ví dụ:</b><br>';
echo '<span>
$a = 10;<br>
$a *= 5;<br>
//Tương đương với $a = $a * 5</span><br>';
echo 'Toán tử /= tương đương với giá trị trái = giá trị trái / giá trị phải<br>';
echo '<b>Ví dụ:</b><br>';
echo '<span>
$a = 10;<br>
$a /= 5;<br>
//Tương đương với $a = $a / 5</span><br>';
//Biểu thức điều kiện If trong PHP
echo '<h1 align="center">Biểu thức điều kiện if trong PHP</h1>';
echo '<b>Ví dụ:</b><br>';
echo '<span>if(biểu_thức){<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//thực thị hành động<br>
}</span><br>';
echo 'Nếu biểu thức đúng thì chương trình sẽ thực thi toàn bộ câu lệnh trong cặp dấu {},nếu sai sẽ không làm gì.<br>';
echo '<b>Ví dụ 1:</b><br>';
echo '$soNguyen = 10;<br>
if($soNguyen > 0){<br>
&nbsp;&nbsp;&nbsp;&nbsp;echo "Đây là số nguyên dương";<br>
}<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//Kết quả in ra màn hình : Đây là số nguyên dương<br>
<hr style="margin:0px 160px;">';
echo '$soNguyen < 10;<br>
if($soNguyen > 0){<br>
&nbsp;&nbsp;&nbsp;&nbsp;echo "Đây là số nguyên dương";<br>
}<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//Kết quả in ra màn hình : Sẽ không hiễn thị kết quả vì chưa thõa mãn điều kiện $soNguyen < 10 của lệnh if <br>';
//Biểu thức điều kiện If Else
echo '<h1 align="center">Biểu thức điều kiện If Else</h1>';
echo '
if(dieu_kien){<br>
 &nbsp;&nbsp;&nbsp;&nbsp;//điều kiện đúng thì thực hiện câu lệnh ở đây<br>
}<br>
else{<br>
&nbsp;&nbsp;&nbsp;&nbsp;//điều kiện sai thì thực hiện câu lệnh ở đây<br>
}';
echo '<b>Ví dụ:</b><br>';
echo '
$soNguyen = 10;<br>
if($soNguyen >= 0){<br>
&nbsp;&nbsp;&nbsp;&nbsp;echo "đây là số nguyên dương";<br>
}<br>
else{<br>
&nbsp;&nbsp;&nbsp;&nbsp;echo "đây là số nguyên âm";<br>
}<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//kết quả in ra: đây là số nguyên dương';
echo '$soNguyen = -10;<br>
if($soNguyen >= 0){<br>
&nbsp;&nbsp;&nbsp;echo "đây là số nguyên dương";<br>
}<br>
else{<br>
&nbsp;&nbsp;&nbsp;echo "đây là số nguyên âm";<br>
}<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//kết quả in ra: đây là số nguyên âm';