<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Documento sem título</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.1/css/bulma.css"/>
	<link rel="stylesheet" type="text/css" href="https://dansup.github.io/bulma-templates/css/admin.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div class="columns">
    <aside class="column is-2 aside hero is-fullheight is-hidden-mobile">
      <div>
        <div class="main">
          <div class="title">Main</div>
          <a href="#" class="item active"><span class="icon"><i class="fa fa-home"></i></span><span class="name">Dashboard</span></a>
          <a href="#" class="item"><span class="icon"><i class="fa fa-map-marker"></i></span><span class="name">Users</span></a>
          <a href="#" class="item"><span class="icon"><i class="fa fa-th-list"></i></span><span class="name">Category</span></a>
          <a href="#" class="item"><span class="icon"><i class="fa fa-folder-o"></i></span><span class="name">Jobs</span></a>
          <a href="#" class="item"><span class="icon"><i class="fa fa-folder-o"></i></span><span class="name">Nonprofits</span></a>
        </div>
      </div>
    </aside>
    <div class="column is-10 admin-panel">
      <nav class="nav has-shadow" id="top">
        <div class="container">
          <div class="nav-left">
            <a class="nav-item" href="../index.html">
              <img src="../images/bulma.png" alt="Description">
            </a>
          </div>
          <span class="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
          </span>
          <div class="nav-right nav-menu is-hidden-tablet">
            <a href="#" class="nav-item is-active">
              Dashboard
            </a>
            <a href="#" class="nav-item">
              Activity
            </a>
            <a href="#" class="nav-item">
              Timeline
            </a>
            <a href="#" class="nav-item">
              Folders
            </a>
          </div>
        </div>
      </nav>
      <section class="hero is-small">
        <!-- Hero content: will be in the middle -->
        <div class="hero-body">
          <div class="container">
            <h1 class="title">
              @yield('form_title')
            </h1>
          </div>
        </div>
        <!-- Hero footer: will stick at the bottom -->
      </section>
      
          @yield('content')  
          
  	 </div>
</div>
<footer class="footer">
  <div class="container">
    <div class="has-text-centered">
      <p>
        <strong>Bulma</strong> by <a href="http://jgthms.com">Jeremy Thomas</a>. The source code is licensed
        <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
        is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC ANS 4.0</a>.
      </p>
      <p>
        <a class="icon" href="https://github.com/jgthms/bulma">
          <i class="fa fa-github"></i>
        </a>
      </p>
    </div>
  </div>
</footer>
</body>
</html>
