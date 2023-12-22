@include('layouts.websiteheader')
<body>
    <div class="wrapper">
      <h1>Frequently Asked Questions</h1>
      <div class="faq">
        <button class="accordion">
          what is html
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati,
            reiciendis!
          </p>
        </div>
      </div>
      <div class="faq">
        <button class="accordion">
          what is css
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati,
            reiciendis!
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
          what is javascript
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati,
            reiciendis!
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
          what is react js
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati,
            reiciendis!
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
          what is node js
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati,
            reiciendis!
          </p>
        </div>
      </div>
    </div>
    <script>
      var acc = document.getElementsByClassName("accordion");
      var i;
      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
          this.classList.toggle("active");
          this.parentElement.classList.toggle("active");
          var pannel = this.nextElementSibling;
          if (pannel.style.display === "block") {
            pannel.style.display = "none";
          } else {
            pannel.style.display = "block";
          }
        });
      }
    </script>
@include('layouts.websitefooter')
  </body>