<?php
/**
 * Template Name: Custom Landing
 *
 * @package ushop
 * @subpackage ushop
 */
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Glass House Pictures</title>

<link rel="dns-prefetch" href="//fonts.googleapis.com">
<link href="https://fonts.gstatic.com" crossorigin="" rel="preconnect">
<link rel="stylesheet" id="ushop-body-fonts-css" href="//fonts.googleapis.com/css?family=Ubuntu%3A400&amp;ver=5.7.2" type="text/css" media="all">
<link rel="stylesheet" id="ushop-heading-fonts-css" href="//fonts.googleapis.com/css?family=Ubuntu%3A500&amp;ver=5.7.2" type="text/css" media="all">
  <link rel="icon" href="https://glasshousepictures.com.au/wp-content/uploads/2021/06/glasshousepictures_feather-150x150.png" sizes="32x32">
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" crossorigin="" rel="preconnect">
  <!--
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
  -->
  <!-- CSS Reset -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
  <!-- Milligram CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

  <style>
    :root {
      --color-primary: #4da2ca;
      --highlight-color: #4da2ca;
    }
    html {
      height: -webkit-fill-available;
    }
    body {
      background-image: url("https://glasshousepictures.com.au/wp-content/uploads/2021/06/glasshousepictures_gulls_on_the_beach-1.jpg");
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      // font-family: 'Roboto Slab', serif;
      font-family: 'Ubuntu';
      height: 100vh;
      min-height: -webkit-fill-available;
      display: flex;
      flex-direction: column;
      letter-spacing: 2px;
    }

    main.wrapper {
      flex: 1;
    }

    a {
      color: var(--color-primary);
    }

    .header > * {
      -moz-box-align: center;
      align-items: center;
      display: -moz-box;
      display: flex;
      justify-content: space-between;
    }

    .navigation .navigation-list {
      list-style: none;
      margin-bottom: 0;
    }

    .navigation .navigation-item {
      float: left;
      margin-bottom: 0;
      margin-left: 2.5rem;
      position: relative;
    }

    .navigation .navigation-link,
    .navigation .navigation-title,
    .navigation .title {
      display: inline;
      font-size: 2rem;
      line-height: 5.2rem;
      padding: 0;
      text-decoration: none;
      text-shadow: 0 0 black;
      font-weight: 600;
      letter-spacing: 2px;
    }

    .navigation .img {
      fill: var(--color-primary);
      height: 2rem;
      position: relative;
      top: .3rem;
    }

    .footer {
      padding-top: 1em;
      font-size: 1.8rem;
      text-shadow: 0 0 black;
      font-weight: 600;
      color: #333333;
      background-color: rgba(173, 133, 107, 0.7);
    }

    .footer .nav {
      position: initial;
      right: 2rem;
      top: 50%;
      transform: translateY(-50%);
    }

    .footer .nav .link {
      display: inline-block;
      // margin-left: 1.2rem;
      padding: 0;
    }

    .footer .nav .icon {
      fill: var(--color-primary);
      height: 2rem;
    }

    .hero-container {
      height: 100%;
      display: flex;
      justify-content: center;
    }

    #glasshousepictures-logo {
      background-image: url("https://glasshousepictures.com.au/wp-content/uploads/2021/06/glasshousepictures_feather.png");
      background-size: 30px 30px;
      width: 30px;
      height: 30px;
      float: left;
      margin: 10px 10px 0 0;
    }

    .ghp-logo-row {
      margin-top: 2em;
    }

    .ghp-logo-wrapper {
      text-align: center;
      filter: drop-shadow(0.4rem 0.4rem 0.4rem rgba(33, 33, 33, 0.2));
    }

    .ghp-logo-wrapper h2 {
      text-indent: -9999px;
      height: 0px;
      padding: 0px;
      margin: 0px;
    }

    .ghp-logo {
      width: 200px;
    }

    .ghp-dark {
      background-color: rgba(0, 0, 0, 0.3);
    }

    .navigation-wrapper {
      min-height: 52px;
    }

    .navigation h1.title {
      display: none;
    }

    /* Larger than mobile screen */
    @media (min-width: 40.0rem) {
      .navigation h1.title {
        display: inline;
      }

      .hero-container {
        margin-top: 10em;
      }

      .footer .nav {
        position: absolute;
      }
    }

    /* Larger than tablet screen */
    @media (min-width: 80.0rem) {}

    /* Larger than desktop screen */
    @media (min-width: 120.0rem) {}
      .footer .nav .link.link-twitter,
      .footer .nav .link.link-call,
      .footer .nav .link.link-facebook,
      .footer .nav .link.link-instagram {
        display: none;
      }
  </style>
</head>

<body>
  <main class="wrapper">
    <div class="ghp-dark navigation-wrapper">
      <section class="container">
        <nav class="navigation">
          <a class="navigation-title" href="https://glasshousepictures.com.au" title="Glass House Pictures">
	    <div id="glasshousepictures-logo"></div>
            <h1 class="title">Glass House Pictures</h1>
          </a>
          <ul class="navigation-list float-right">
            <li class="navigation-item"><a class="navigation-link" href="/shop">Shop</a></li>
            <li class="navigation-item"><a class="navigation-link" href="/about">About</a></li>
            <li class="navigation-item"><a class="navigation-link" href="/contact">Contact</a></li>
          </ul>
        </nav>
      </section>
    </div>
    <section class="container hero-container">
      <div class="hero">
        <div class="row ghp-logo-row">
          <div class="column">
            <div class="ghp-logo-wrapper">
              <h2>Glass House Pictures</h2>
              <img class="ghp-logo glasshousepictures-logo" src="https://glasshousepictures.com.au/wp-content/uploads/2021/06/glasshousepictures_logo-1.png"
                alt="Glass House Pictures">
            </div>
          </div>
          <div class="column">
            <div class="ghp-logo-wrapper">
              <h2>Alexander Calder Visual Arts</h2>
              <img class="ghp-logo" src="https://glasshousepictures.com.au/wp-content/uploads/2021/06/glasshousepictures_acva_logo-1.png" alt="Alexander Calder Visual Arts">
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class="footer">
    <section class="container">
      <p class="copyright">
        <span>Copyright © 2021 Jane Alexander</span>
      </p>
      <nav class="nav">
        <a class="link link-twitter" href="#twitter" rel="noopener" target="_blank" title="Glass House Pictures on Twitter">
          <svg class="icon" viewBox="0 0 512 512">
            <g>
              <path
                d="M512,100c0,1,0,2,0,3c-0.286,0.144-0.678,0.213-0.843,0.444c-12.988,18.134-28.416,33.907-45.899,47.727c-1.117,0.883-2.077,2.606-2.191,4.012c-0.803,9.932-1.033,19.92-2.083,29.822c-1.466,13.833-2.476,27.829-5.44,41.37c-14.968,68.364-47.628,126.547-101.357,172.138c-38.719,32.854-83.248,53.526-133.219,62.461c-8.297,1.483-16.643,2.691-24.966,4.027c-21.667,0-43.333,0-65,0c-6.005-0.986-12-2.043-18.017-2.947c-38.1-5.724-73.019-20.017-106.071-39.338c-1.137-0.664-2.119-1.592-3.174-2.396c0.036-0.494,0.072-0.988,0.108-1.482c55.033,4.465,105.085-8.256,149.475-42.204c-45.885-6.43-78.15-29.625-94.769-73.517c5.615,0,10.368,0.022,15.12-0.006c4.832-0.029,9.677,0.091,14.492-0.223c4.535-0.295,9.04-1.07,13.558-1.634c-59.936-17.467-83.246-74.124-78.912-104.888c13.575,6.847,27.734,11.166,43.121,11.612c-20.952-16.59-35.308-37.341-40.662-63.445c-5.325-25.967-2.189-50.979,11.493-75.753c57.54,65.903,128.3,104.011,215.511,109.404c0-14.21-1.604-27.562,0.309-40.389c5.197-34.848,24.9-60.248,55.821-76.352C318.775,56.04,330.755,53.726,342,50c8.667,0,17.333,0,26,0c0.753,0.291,1.497,0.808,2.261,0.839c10.134,0.412,19.371,4.007,28.571,7.834c10.89,4.53,20.224,11.34,28.906,19.186c3.154,2.85,6.411,4.546,11.24,3.473c17.612-3.914,33.97-11.042,50.23-18.523c3.07-1.413,6.197-2.702,10.545-4.59c-8.316,23.453-22.797,40.565-40.623,55.441C477.73,112.015,494.891,106.107,512,100z">
              </path>
            </g>
          </svg>
        </a>
        <a class="link link-mail" href="mailto:jane.alexander.acva@gmail.com" rel="noopener" target="_blank"
          title="Glass House Pictures contact via email">
          <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
            <path
              d="M 26.429688 2 C 13.598493 2 3.1455205 12.395253 3.0058594 25.216797 L 3.0058594 25.238281 L 3.0058594 25.261719 C 3.1457871 37.819141 13.384083 48 25.951172 48 C 33.669688 48 40.199148 45.686804 45.537109 39.28125 A 2.0010761 2.0010761 0 1 0 42.462891 36.71875 C 37.800852 42.313196 32.944656 44 25.951172 44 C 15.543611 44 7.1355061 35.644614 7.0078125 25.238281 C 7.1368191 14.568988 15.758891 6 26.429688 6 C 30.766203 6 34.961144 7.4738481 38.007812 10.0625 C 41.054482 12.651152 43 16.281511 43 20.988281 L 43 21.375 C 43 24.760417 41.406398 27.975336 39.216797 30.324219 C 37.027196 32.673101 34.222875 34 32.566406 34 C 32.199114 34 32.214469 33.954436 32.185547 33.921875 C 32.156624 33.889314 32 33.671 32 33 L 32 32.949219 L 31.998047 32.898438 C 31.998047 32.898438 31.861861 30.555382 33.205078 27.292969 C 33.206727 27.288965 33.207331 27.285257 33.208984 27.28125 L 37.853516 15.748047 A 2.0002 2.0002 0 0 0 35.945312 12.974609 A 2.0002 2.0002 0 0 0 34.144531 14.251953 L 33.886719 14.894531 C 33.519128 14.454509 33.112261 14.060553 32.662109 13.722656 C 30.964317 12.448246 28.873016 12 26.712891 12 C 23.818109 12 20.651049 13.644879 17.882812 16.492188 C 15.114577 19.339495 12.894531 23.560683 12.894531 28.808594 C 12.894531 33.859144 17.023958 38 22.070312 38 C 24.849559 38 27.019819 36.820923 28.488281 35.419922 C 28.669426 35.834929 28.887597 36.231696 29.195312 36.578125 C 30.054688 37.545562 31.354698 38 32.566406 38 C 35.968938 38 39.379929 36.014399 42.142578 33.050781 C 44.905227 30.087164 47 25.989583 47 21.375 L 47 20.988281 C 47 15.144052 44.443987 10.28177 40.597656 7.0136719 C 36.751325 3.7455738 31.663172 2 26.429688 2 z M 26.712891 16 C 28.324765 16 29.470261 16.327785 30.261719 16.921875 C 30.982526 17.462934 31.547195 18.3153 31.892578 19.841797 L 29.511719 25.755859 L 28.164062 29.099609 A 2.0002 2.0002 0 0 0 28.158203 29.109375 C 27.455601 30.235866 26.765445 31.497556 25.832031 32.433594 C 24.898618 33.369631 23.878846 34 22.070312 34 C 19.190667 34 16.894531 31.702044 16.894531 28.808594 C 16.894531 24.677504 18.60144 21.493191 20.751953 19.28125 C 22.902467 17.069309 25.644672 16 26.712891 16 z">
            </path>
          </svg>
        </a>
        <a class="link link-call" href="#call" rel="noopener" target="_blank" title="Glass Hous Pictures contact by phone">
          <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
            <path
              d="M 22.386719 18.027344 C 20.839844 16.703125 19.265625 15.898438 17.738281 17.222656 L 16.824219 18.019531 C 16.15625 18.601563 14.914063 21.3125 10.113281 15.785156 C 5.3125 10.269531 8.167969 9.410156 8.839844 8.835938 L 9.757813 8.035156 C 11.277344 6.710938 10.703125 5.042969 9.605469 3.324219 L 8.945313 2.285156 C 7.84375 0.574219 6.640625 -0.550781 5.117188 0.769531 L 4.292969 1.492188 C 3.617188 1.980469 1.734375 3.578125 1.277344 6.609375 C 0.726563 10.246094 2.464844 14.414063 6.4375 18.984375 C 10.40625 23.558594 14.296875 25.855469 17.976563 25.816406 C 21.035156 25.78125 22.886719 24.140625 23.464844 23.542969 L 24.289063 22.820313 C 25.8125 21.5 24.867188 20.152344 23.316406 18.828125 Z">
            </path>
          </svg>
        </a>
        <a class="link link-facebook" href="#facebook" rel="noopener" target="_blank" title="Glass House Pictures on Facebook">
          <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
            <path
              d="M25,3C12.85,3,3,12.85,3,25c0,11.03,8.125,20.137,18.712,21.728V30.831h-5.443v-5.783h5.443v-3.848 c0-6.371,3.104-9.168,8.399-9.168c2.536,0,3.877,0.188,4.512,0.274v5.048h-3.612c-2.248,0-3.033,2.131-3.033,4.533v3.161h6.588 l-0.894,5.783h-5.694v15.944C38.716,45.318,47,36.137,47,25C47,12.85,37.15,3,25,3z">
            </path>
          </svg>
        </a>
        <a class="link link-instagram" href="#instagram" rel="noopener" target="_blank" title="Glass House Pictures on Instagram">
          <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
            <path
              d="M 9.9980469 3 C 6.1390469 3 3 6.1419531 3 10.001953 L 3 20.001953 C 3 23.860953 6.1419531 27 10.001953 27 L 20.001953 27 C 23.860953 27 27 23.858047 27 19.998047 L 27 9.9980469 C 27 6.1390469 23.858047 3 19.998047 3 L 9.9980469 3 z M 22 7 C 22.552 7 23 7.448 23 8 C 23 8.552 22.552 9 22 9 C 21.448 9 21 8.552 21 8 C 21 7.448 21.448 7 22 7 z M 15 9 C 18.309 9 21 11.691 21 15 C 21 18.309 18.309 21 15 21 C 11.691 21 9 18.309 9 15 C 9 11.691 11.691 9 15 9 z M 15 11 A 4 4 0 0 0 11 15 A 4 4 0 0 0 15 19 A 4 4 0 0 0 19 15 A 4 4 0 0 0 15 11 z">
            </path>
          </svg>
        </a>
      </nav>
    </section>
  </footer>
</body>
