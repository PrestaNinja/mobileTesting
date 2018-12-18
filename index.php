<!DOCTYPE html> 
<html> 
  <head> 
  <title>Basic mobile app</title> 
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  
 
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0rc2/jquery.mobile-1.0rc2.min.css">
  
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/mobile/1.0rc2/jquery.mobile-1.0rc2.min.js"></script>
</head> 
<body>
<div data-role="page" id="index">
  <header data-role="header">
    <h1>Top title bar</h1>
  </header>
   
  <div data-role="content">
    <h3>Show another page??</h3>
    <p>hint: click the button below!</p>
    <p><a href="#about" data-role="button" data-theme="c">About us</a></p>
  </div>

	<div data-demo-html="true">
                <label for="textinput-2">Text Input:</label>
                <input type="number" name="textinput-2" id="textinput-2" placeholder="Text input" value="">
            </div><!--/demo-html -->
   <div>
  <footer data-role="footer">
    <h2>&copy; footer here.</h2>
  </footer>
  </div>
</div>
 
<div data-role="page" id="about">
  <header data-role="header">
    <h1>Page 2 Here</h1>
  </header>
   
  <div data-role="content">
    <p>just some extra content as well.</p>
    <p>I mean, you can <a data-rel="back" href="#index">go back</a> at any time.</p>
  </div>
  
</div>

</body>
</html>