  <style>
      .cookie-consent {
          position: fixed;
          bottom: 0;
          left: 0;
          right: 0;
          background: #0c161f;
          color: #fff;
          text-align: center;
          padding: 15px;
          display: none;
          z-index: 996;
          border-radius: 10px;
          margin: 5px 15px;
      }

      .accept-cookies {
          background: #242c63;
          color: #fff;
          border: none;
          font-weight: bold;
          border-radius: 3px;
          padding: 10px 20px;
          cursor: pointer;
      }

      .accept-cookies:hover {
          background: #5a70fb;
      }
  </style>

  <!-- Cookie Consent Pop-up -->
  <div id="cookie-consent" class="cookie-consent">
      <p><?php echo $translations["Cookie"]; ?></p>
      <button id="accept-cookies" class="accept-cookies"><?php echo $translations["Cookie Btn"]; ?></button>
  </div>

  <script src="assets/js/cookie.js"></script>