<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sign Up | UniDev</title>
<link href="php1.css" rel="stylesheet" type="text/css"><!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>

<div class="container">
  <header><h2><center>UniDev</center></h2><h3><center>Developers' meeting place</center></h3></P>
    
  </header>
  <div class="sidebar1">
  <nav>
    <ul>
      <li><a href="forums.html">Forums</a></li>
      <li><a href="contacts">Our Contacts</a></li>
      <li><a href="mission&Vision">Mission & vision</a></li>
      <li><a href="sourceCodes.html">Source code</a></li>
    </ul>
</nav>
</div>
  <article class="content">
    
    <section>
     
     <form method="post" action="signupx.php">
     <center>
     <p><h3>Sign up
     </h3>
     <p>First Name <input type="text" id="firstName" maxlength="20"></p>
     <p>Last Name <input type="text" id="lastName" maxlength="20"></p>
     <p>Username <input type="text" id="username" maxlength="20"></p>
     <p>Email <input type="email" id="email" max="30"></p>
     <p>Date of Birth <select><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
     <option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option></select>
     
     <select><option>January</option><option>February</option><option>March</option><option>April</option><option>May</option><option>June</option><option>July</option><option>August</option><option>September</option><option>October</option><option>November</option><option>December</option></select>
     
     <select><option>1985</option><option>1986</option><option>1987</option><option>1988</option><option>1989</option><option>1990</option><option>1991</option><option>1992</option><option>1993</option><option>1994</option><option>1995</option><option>1996</option><option>1997</option><option>1998</option><option>1999</option><option>2000</option><option>2001</option><option>2002</option><option>2003</option><option>2004</option></select>
     </p>
     
     
     <p>Password <input type="password" id="password"></p>
     <p>Confirm Password <input type="password" id="confirmPassword"></p>
     <p>Security question <select>
     						<option id="favColor">What is your favourite color?</option>
                            <option id="mom">What is your mother's maiden name?</option>
                            <option id="favSubject">What is your favourite subject?</option>
                            <option id="favTeacher">What is your favourite teacher's name?</option>
                            <option id="nickname">What is your nickname?</option>
     					   </select></p>
     <p>Answer <input type="text" id="answer" maxlength="20"></p>
     <p><input type="checkbox">I accept terms and conditions</p>
     <p><input type="submit" id="signup" value="Sign Up"></p>
     </center>
     </form>
     
    </section>
  <!-- end .content --></article>
  <aside>
    <p><a href="login1.php">Log in</a></p>
    <p><a href="signup.php">Sign up</a></p>
    <p><a href="developers.php">Our developers</a></p>
    <p><a href="upload.php">Upload code</a></p>
  </aside>
  <footer>
    <center>
    <p><a href="aboutUs.html">About us</a>  					 <a href="contacts.php">Contact Us</a> <a href="www.blog.unidev.html">Our blog</a> </p>
    <p><a href="sitemap.html">Sitemap</a> 		<a href="cookiePolicy.html">Cookie Policy</a></p>
    <p><a href="termsofService.php">Terms of Service</a>				<a href="pricavyPolicy.html">Privacy Policy</a></p>
    <p></p>
    <p>&copy;Unidev 2016 All Rights Reserved</p> 
    </center>
  </footer>
  <!-- end .container --></div>
</body>
</html>