<head>
  <?php include 'header.php'; ?>

  <title>Document</title>
  <link rel="stylesheet" href="assects/css/nav-bfo-login.css" />
</head>

<body>
  <nav class="navbar">
    <div class="nav-content">
      <div class="logo">
        <a href="#">CRMS</a>
      </div>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li><a href="index.php">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
        <li>
          <div class="button">
            <a href="login.php">Login</a>
            <a href="signup.php">SignUp</a>
          </div>
        </li>
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>
</body>
<script>
  const body = document.querySelector("body");
  const navbar = document.querySelector(".navbar");
  const menuBtn = document.querySelector(".menu-btn");
  const cancelBtn = document.querySelector(".cancel-btn");
  menuBtn.onclick = () => {
    navbar.classList.add("show");
    menuBtn.classList.add("hide");
    body.classList.add("disabled");
  };
  cancelBtn.onclick = () => {
    body.classList.remove("disabled");
    navbar.classList.remove("show");
    menuBtn.classList.remove("hide");
  };
  window.onscroll = () => {
    this.scrollY > 20 ?
      navbar.classList.add("sticky") :
      navbar.classList.remove("sticky");
  };
</script>