<body>

  <div class="fond text-center container">
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">MineQuest</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
       
        <ul class="nav navbar-nav navbar-right">
          <?php if (Request::getCurrentRequest()->getAction() == 'signIn') {?> <li><a href="index.php?action=inscription">SIGN UP</a></li> <?php } 
          else {?>  <li><a href="index.php?action=signIn">SIGN IN</a></li> <?php }?>
          
        </ul>
      </div>
    </div>
  </nav>

