<style>
      .cookie-consent {
          position: fixed;
          bottom: 0;
          left: 0;
          right: 0;
          background: #000;
          color: #fff;
          text-align: center;
          padding: 15px;
          display: none;
          z-index: 996;
          border-radius: 10px;
          margin: 5px 15px;
      }

      .cookie-consent p {
          font-size: 15px;
      }

      .accept-cookies {
          background: #f8b125;
          color: #2b1e05;
          border: none;
          font-weight: bold;
          border-radius: 3px;
          padding: 10px 20px;
          cursor: pointer;
          border: #f8b125 2px solid;
      }

      .accept-cookies:hover {
          background: #2b1e05;
          color: #f8b125;
      }

      .cookie-consent .links-container {
          width: 100%;
      }

      .cookie-consent ul {
          margin: 0 auto;
          display: inline-block;
          margin-top: 20px;
          list-style: none;
      }

      .cookie-consent ul li {
          float: left;
          margin-right: 15px;
      }

      .cookie-consent ul li a {
          text-decoration: underline;
          color: #fff;
          text-transform: uppercase;
          font-size: 12px;
      }

      .cookie-consent ul li a:hover {
          text-decoration: none;
          color: #f8b125;
      }
  </style>

  <!-- Cookie Consent Pop-up -->
  <div id="cookie-consent" class="cookie-consent">
      <p><?php echo $translations["Cookie"]; ?></p>
      <button id="accept-cookies" class="accept-cookies"><?php echo $translations["Cookie Btn"]; ?></button>

      <br>
      <div class="links-container">
          <ul>
              <li><a href=" <?php echo "datenschutz" . $param ?>"><?php echo $translations["Data Protection"]; ?></a></li>
              <li><a href="<?php echo "impressum" . $param ?>"><?php echo $translations["Imprint"]; ?></a></li>
              <li><a href=" <?php echo "AGB" . $param ?>"><?php echo $translations["GTC"]; ?></a></li>
          </ul>
      </div>

  </div>

  <script src="assets/js/cookie.js"></script>