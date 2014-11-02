<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/js/pnJoin.js"></script>
    <link rel="stylesheet" href="/css/pnJoin.css">
  </head>
 <body>
  <div id="bg">
  <div class="module">
    <ul>
      <li class="tab activeTab" ><img src="/imgs/mail-lock.png" alt="" class="icon"/></li>
      <li class="tab"><img src="http://i.imgur.com/Fk1Urva.png" alt="" class="icon"/></li>
      <li class="tab" ><img src="http://i.imgur.com/LCCJ06E.png" alt="" class="icon"/></li>
      <li class="tab" ><img src="/imgs/portrait.png" alt="" class="icon"/></li>
    </ul>

    <form class="form" id="emailLoginPasswdForm">
      <input type="text" placeholder="Email Address" class="textbox" name="email"/>
      <input type="text" placeholder="Login / URL" class="textbox" name="pn_name"/>
      <input type="password" placeholder="New Password" class="textbox" name="password"/>
      <input type="password" placeholder="Reenter Password" class="textbox" name="password2"/>
      <input type="hidden" value="emailLoginPasswd" name="op"/>
      <input type="button" value="Next" class="button" id="emailLoginPasswd-next" />
    </form>

    <form class="form" id="namesCellForm">
      <input type="text" placeholder="First Name" class="textbox" name="first_name"/>
      <input type="text" placeholder="Last Name" class="textbox" name="last_name"/>
      <input type="text" placeholder="Mobile Phone" class="textbox" name="cell"/>
      <input type="text" placeholder="Personal Website URL" class="textbox" name="url"/>
      <input type="hidden" value="namesCell" name="op"/>
      <input type="button" value="Next" class="button" id="namesCell-next" />
    </form>

    <form class="form" id="socialMediaURLsForm">
      <input type="text" placeholder="Facebook URL" class="textbox" name="facebook"/>
      <input type="text" placeholder="LinkedIn URL" class="textbox" name="linkedin"/>
      <input type="text" placeholder="Google+" class="textbox" name="googlep"/>
      <input type="text" placeholder="Twitter URL" class="textbox" name="twitter"/>
      <input type="hidden" value="socialMediaURLs" name="op"/>
      <input type="button" value="Next" class="button" id="socialMediaURLs-next"/>
    </form>

  </div><!-- end #module -->
  </div><!-- end #bg -->
 </body>
</html>