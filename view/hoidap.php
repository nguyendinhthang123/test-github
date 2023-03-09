<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dự án mẫu 2023</title>
    <link rel="stylesheet" href="index.css" />
  </head>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    html {
      font-family: sans-serif;
      font-size: 10px;
    }
    body {
      width: 100%;
      min-height: 100vh;
      font-size: 1.6rem;
      line-height: 140%;
      background-color: #f3f6f6;
      opacity: 0.3;
      /* background-image: repeating-radial-gradient(circle at 0 0, transparent 0, #f3f6f6 50px ), repeating-linear-gradient( #56d1b355, #56d1b3 ); */
      opacity: 1;
      display: grid;
      place-items: center;
    }
    .card {
      background: #fff;
      color: #333;
      margin: 15rem auto;
      width: 90%;
      max-width: 50rem;
      min-height: 30rem;
      border-radius: 2rem;
    }

    .hero {
      display: flex;
      justify-content: center;
      transform: translateY(-55%);
    }
    .hero .img {
      filter: drop-shadow(0rem 1.5rem rgba(0, 0, 0, 0.1));
      transition: 0.3s ease-out;
    }
    .card:hover .img {
      filter: drop-shadow(0rem 2.5rem rgba(0, 0, 0, 0.1));
    }

    .title {
      text-align: center;
      font-size: 5rem;
      padding: 1rem;
    }

    .faq {
      padding-top: 20px;
    }
    .acc-container {
      padding: 4rem 2rem;
    }
    .acc-btn {
      width: 100%;
      padding: 1.6rem 2rem;
      font-size: 1.6rem;
      cursor: pointer;
      background: inherit;
      border: none;
      outline: none;
      text-align: left;
      transition: all 0.5s linear;
    }
    .acc-btn:after {
      content: "\27A4";
      color: #fa8d0c;
      float: right;
      transition: all 0.3s linear;
    }
    .acc-btn.is-open:after {
      transform: rotate(90deg);
    }
    .acc-btn:hover,
    .acc-btn.is-open {
      color: #000;
      font-weight: bold;
    }

    .acc-content {
      max-height: 0;
      color: rgba(0, 0, 0, 0.75);
      font-size: 1.5rem;
      margin: 0 2rem;
      padding-left: 1rem;
      overflow: hidden;
      transition: max-height 0.3s ease-in-out;
      border-bottom: 1px solid #ccc;
    }

    .credit {
      text-align: center;
      padding: 1rem;
    }
    .credit a {
      text-decoration: wavy underline;
      color: dodgerblue;
    }
  </style>

  <body>
    <div class="boxcenter">
      <div class="row mb header">
        <h1>HỎI ĐÁP</h1>
      </div>
      <main class="card">
        <h2 class="title faq">FAQ</h2>

        <div class="acc-container">
          <button class="acc-btn">What is the definition of a will?</button>
          <div class="acc-content">
            <p>It is a dead giveaway.</p>
          </div>

          <button class="acc-btn">
            What happens to chemists when they die?
          </button>
          <div class="acc-content">
            <p>We barium [bury them].</p>
          </div>

          <button class="acc-btn">
            Why does the leopard find it difficult to hide and stalk?
          </button>
          <div class="acc-content">
            <p>Because he is spotted always.</p>
          </div>

          <button class="acc-btn">What kind of key opens a banana?</button>
          <div class="acc-content">
            <p>A monkey. 🙈</p>
          </div>

          <button class="acc-btn">Where does a tree store it's stuff?</button>
          <div class="acc-content">
            <p>In it's Trunk.</p>
          </div>

          <button class="acc-btn">
            What dog is known for its punctuality?
          </button>
          <div class="acc-content">
            <p>The watch-dog 🐕</p>
          </div>

          <button class="acc-btn">
            Name a thing that has four wheels and flies?
          </button>
          <div class="acc-content">
            <p>The garbage truck, of course.</p>
          </div>

          <button class="acc-btn">
            Why was everyone so tired on the First of April?
          </button>
          <div class="acc-content">
            <p>Because they had just completed a March of 31 days.</p>
          </div>
        </div>
      </main>
    </div>
    <script>
      const btns = document.querySelectorAll(".acc-btn");

      // fn
      function accordion() {
        // this = the btn | icon & bg changed
        this.classList.toggle("is-open");

        // the acc-content
        const content = this.nextElementSibling;

        // IF open, close | else open
        if (content.style.maxHeight) content.style.maxHeight = null;
        else content.style.maxHeight = content.scrollHeight + "px";
      }

      // event
      btns.forEach((el) => el.addEventListener("click", accordion));
    </script>
  </body>
</html>
