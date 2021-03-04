<?php
echo '
<footer id="bigFooter" class="container-fluid">
  <h2 class="hidden">Footer</h2>
  <div id="topFooter" class="row justify-content-center">
    <div id="toTop" class="col-md-2 col-sm-3 col-6"><img alt="BackToTop" src="icons/backToTop2.svg"><a  href="javascript:void(0)">Back to Top</a></div>
  </div>
  <div id="footerLinks" class="row no-gutters justify-content-center">
    <div class="offLink linkBlock col-sm-3 col-5">
      <ul>
        <li><a href="about.php">ABOUT US</a></li>
        <li><a href="fundraiser.php">FUNDRAISERS</a></li>
        <li><a href="catering.php">CATERING</a></li>
        <li><a href="faq.php">FAQ</a></li>
      </ul>
    </div>
    <div id="firstVl" class="gx-0 col-1"><div class="vl"></div></div>
    <div id="middleLink" class="linkBlock col-md-4 col-11">
      <form method="post" action="contact.php">
        <input id="homeEmail" type="email" placeholder="Email Address" name="mail">
        <div id="homeSubmit"><input type="submit" value="CONTACT US"></div>
      </form>
      <div id="footCall" class="row justify-content-center gx-0">
        <div class="col-12">
          <div>
            <img src="icons/phone.svg" alt="Phone Icon">
            <p>Call Us &nbsp;<a id="callLink" href="tel:5192048189">(519) 204-8189</a></p>
          </div>
          </div>
      </div>
      <div id="footSoc" class="row justify-content-center gx-0">
        <div class="col-8">
          <div>
            <a href="https://www.facebook.com/cangelinameatcatering/" target="_blank" rel="noopener noreferrer"><svg version="1.1" class="socIcons" id="facebookSVG" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 455.73 455.73" style="enable-background:new 0 0 455.73 455.73;" xml:space="preserve">
             <path fill="#ffffff" d="M0,0v455.73h242.704V279.691h-59.33v-71.864h59.33v-60.353c0-43.893,35.582-79.475,79.475-79.475h62.025v64.622h-44.382
              c-13.947,0-25.254,11.307-25.254,25.254v49.953h68.521l-9.47,71.864h-59.051V455.73H455.73V0H0z"/>
            </svg>
            </a>
            <a href="https://www.instagram.com/angelinameatcatering/" target="_blank" rel="noopener noreferrer"><svg version="1.1" class="socIcons" id="instagramSVG"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 364 364" style="enable-background:new 0 0 364 364;" xml:space="preserve">
              <path fill="#ffffff" style="fill-rule:evenodd;clip-rule:evenodd;" d="M244.424,83.438H119.577c-19.925,0-36.139,16.213-36.139,36.139v124.846
               c0,19.929,16.214,36.143,36.139,36.143h124.847c19.928,0,36.142-16.214,36.142-36.143V119.577
               C280.566,99.652,264.352,83.438,244.424,83.438z M181.998,246.894c-35.779,0-64.892-29.113-64.892-64.896
               c0-35.779,29.113-64.892,64.892-64.892c35.783,0,64.896,29.113,64.896,64.892C246.894,217.781,217.781,246.894,181.998,246.894z
               M248.982,130.525c-8.471,0-15.359-6.888-15.359-15.354c0-8.467,6.888-15.355,15.359-15.355c8.466,0,15.354,6.888,15.354,15.355
               C264.336,123.638,257.448,130.525,248.982,130.525z"/>
              <path fill="#ffffff" style="fill-rule:evenodd;clip-rule:evenodd;" d="M181.998,144.531c-20.655,0-37.475,16.812-37.475,37.467
               c0,20.663,16.82,37.479,37.475,37.479c20.663,0,37.471-16.816,37.471-37.479C219.469,161.343,202.661,144.531,181.998,144.531z"/>
              <path fill="#ffffff" style="fill-rule:evenodd;clip-rule:evenodd;" d="M0,0v364h364V0H0z M307.984,244.423c0,35.053-28.508,63.561-63.56,63.561
               H119.577c-35.049,0-63.561-28.508-63.561-63.561V119.577c0-35.049,28.512-63.561,63.561-63.561h124.847
               c35.052,0,63.56,28.512,63.56,63.561V244.423z"/>
               <defs>
              <linearGradient id="brand-gradient" gradientTransform="rotate(20)">
                <stop offset="0%" stop-color="#F8ED34" />
                <stop offset="50%" stop-color="#EA118D" />
                <stop offset="100%" stop-color="#2E368F" />
              </linearGradient>
               </defs>
             </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div id="secondVl" class="gx-0 col-1"><div class="vl"></div></div>
    <div class="offLink linkBlock col-sm-3 col-5">
      <ul>
        <li><h5>Business Hours</h5></li>
        <li><p>Mon-Sun - Variable Hours</p></li>
        <li><p>Please Call or Email to Book an Appointment</p></li>
    </ul>
  </div>
  </div>
  <div id="finalFooter" class="row justify-content-center">
    <div class="col-md-10 col-11"><p>© 2021 Copyright C&apos;Angelina&apos;s. All rights reserved.</p></div>
    <div class="col-md-10 col-11"><p>web design &nbsp;&nbsp;|&nbsp;&nbsp;  jeremyleigh.ca</p></div>
</div>
</footer>
';
 ?>
