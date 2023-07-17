<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'header.php'; ?>

  <title>Document</title>
  <style>
    footer {

      background: #111;
      height: auto;
      width: 100%;
      font-family: "Open Sans";
      padding-top: 40px;
      color: #fff;
    }

    .footer-content {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      text-align: center;
    }

    .footer-content h3 {
      font-size: 1.8rem;
      font-weight: 400;
      text-transform: capitalize;
      line-height: 3rem;
    }

    .footer-content p {
      max-width: 500px;
      margin: 10px auto;
      line-height: 28px;
      font-size: 14px;
    }

    .socials {
      list-style: none;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 1rem 0 3rem 0;
    }

    .socials li {
      margin: 0 10px;
    }

    .socials a {
      text-decoration: none;
      color: #fff;
    }

    .socials a i {
      font-size: 1.1rem;
      transition: color 0.4s ease;
    }

    .socials a:hover i {
      color: #441e59;
    }

    .footer-bottom {
      bottom: 0;
      background: #000;
      width: 100%;
      padding: 20px 0;
      text-align: center;
    }

    .footer-bottom p {
      font-size: 14px;
      word-spacing: 2px;
      text-transform: capitalize;
    }

    .footer-bottom span {
      text-transform: uppercase;
      opacity: 0.4;
      font-weight: 200;
    }
  </style>
</head>

<body>
  <!-- Footer -->
  <footer>
    <div class="footer-content">
      <h3>CRS</h3>
      <p>
        This is a crime reportomg system which mainly focused in filing a complaints of a victim. In this system user/victim just need to report a complaint and they can view their report and see the status. Our Admins will analize if the report is autherize or geniune Admin will grant the report to Police. Police simply investigate the crime ang give the status to the victim with related remarks Since,Our system is simple and our user interface is easy to use

      </p>
      <ul class="socials">
        <li>
          <a href="#"><i class="fab fa-facebook-f"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-twitter"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </li>
      </ul>
    </div>
    <div class="footer-bottom">
      <p>
        copyright &copy;2022 CRMS designed by
        <span>Jenish Maharjan & Abhinash Upreti</span>
      </p>
    </div>
  </footer>





  <!-- Header.js -->
  <script src="assects/js/header.js"></script>
  <script>
    function menuToggle() {
      const toggleMenu = document.querySelector(".acc-menu");
      toggleMenu.classList.toggle("active");
    }
  </script>
</body>

</html>