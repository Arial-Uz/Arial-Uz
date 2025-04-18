<?php
include 'comments.php';
include 'teamSlidesData.php';
include 'clientsData.php';
include 'printData.php';
?>

<!DOCTYPE html>
<html lang="uz">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arial Uz Portfolio</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="data/footer.css" />
  <link rel="stylesheet" href="portfolio.css?v=1.1" />
</head>

<body>
  <!-- HEADER + NAVIGATION -->
  <header>
    <div class="nav-container">
      <a href="#" class="logo-pill">Arial Uz</a>
      <div class="center-pill">
        <ul class="nav-links">
          <li><a href="#">Bosh sahifa</a></li>
          <li><a href="#who">Biz kimmiz?</a></li>
          <li><a href="#team">Jamoa</a></li>
          <li><a href="index.php">Arial Market</a></li>
          <li><a href="#contact">Aloqa</a></li>
        </ul>
        <form class="search">
          <i class="fas fa-search"></i>
          <input type="text" placeholder="Search" />
        </form>
      </div>
      <a href="#contact" class="contact-pill">Contact Us</a>
    </div>
  </header>

  <!-- HERO SECTION -->
  <section class="hero container">
    <div class="hero-text">
      <h1>Arial Uz</h1>
      <h2>Shunchaki odatiy</h2>
      <p>
        Bu yerda o‘zingiz haqingizda yoki loyihalaringiz haqida qisqacha, jozibali matn joylashtirishingiz
        mumkin. Bu matn kelajakdagi mijozlar yoki ish beruvchilarga kim ekaningizni bildiradi.
      </p>
      <div class="btn-group">
        <a href="#" class="btn">Portfolio</a>
        <a href="#who" class="btn" style="background-color: #FFF; color: #210202;">Batafsil</a>
      </div>
    </div>
    <div class="hero-image">
      <img src="images/1234.png" alt="Dizayn jarayoni">
    </div>
  </section>

  <!-- POLIGRAFIYA SECTION -->
  <section id="print" class="print container">
    <h2 class="print-title">POLIGRAFIYA</h2>
    <div class="print-nav" id="printNav">
      <button class="print-tab active">FLAYER</button>
      <button class="print-tab">BUKLET</button>
      <button class="print-tab">VIZITKA</button>
      <button class="print-tab">PAKET</button>
      <button class="print-tab">KALENDAR</button>
      <button class="print-tab">FAYL</button>
      <button class="print-tab">LIFLET</button>
      <button class="print-tab">KUNDALIK</button>
    </div>
    <div class="print-slider">
      <button class="ps-arrow" id="psPrev">‹</button>
      <div class="ps-slide" id="psSlide">
        <div class="ps-text">
          <h3 class="ps-heading" id="psHeading"></h3>
          <p class="ps-desc" id="psDesc"></p>
        </div>
        <div class="ps-image">
          <img id="psImg" src="" alt="Mahsulot rasmi">
        </div>
      </div>
      <button class="ps-arrow" id="psNext">›</button>
    </div>
  </section>

  <!-- BIZ KIMMIZ SECTION -->
  <section id="who" class="who-we-are container">
    <div class="who-text">
      <h2>Biz kimmiz?</h2>
      <p>
        “Arial Uz” — zamonaviy dizayn va innovatsion yechimlar yaratuvchi jamoa. O‘z sohasi bo‘yicha
        yetakchi mutaxassislar bilan birgalikda mijozlarimizga sifatli xizmat ko‘rsatamiz.
      </p>
      <a href="#" class="more-link">Batafsil →</a>
    </div>
    <div class="stats-grid">
      <div class="stat-box">
        <h3>40+</h3>
        <p>Xodimlar</p>
      </div>
      <div class="stat-box">
        <h3>20</h3>
        <p>Mutaxassislar</p>
      </div>
      <div class="stat-box">
        <h3>5000+</h3>
        <p>Mijozlar</p>
      </div>
      <div class="stat-box">
        <h3>10</h3>
        <p>Proyektlar</p>
      </div>
      <div class="filiallar-container">
        <div class="stat-box">
          <h3>7</h3>
          <p>Filiallar</p>
        </div>
        <div class="stat-box">
          <h3>7+</h3>
          <p>Filiallar</p>
        </div>
      </div>
    </div>
    <div style="width: 100%; margin-top: 20px;">
      <iframe src="chart.php" style="width:100%; height:400px; border:none;"></iframe>
    </div>
  </section>

  <!-- BIZNING JAMOA SECTION -->
  <section id="team" class="team container">
    <h2>Bizning jamoa</h2>
    <div class="team-slider">
      <button class="team-arrow" id="teamPrev">←</button>
      <div class="team-slides" id="teamSlides">
        <!-- Slides will be dynamically inserted via JavaScript -->
      </div>
      <button class="team-arrow" id="teamNext">→</button>
    </div>
  </section>

  <!-- CLIENTS SECTION -->
  <section class="clients-section">
    <h2 class="clients-title">Bizning mijozlarimiz</h2>
    <div class="logos-scroller">
      <div class="logos-track">
        <?php foreach ($clientsData as $client): ?>
          <div class="client-logo">
            <img src="<?= htmlspecialchars($client['img']) ?>" alt="<?= htmlspecialchars($client['alt']) ?>">
          </div>
        <?php endforeach; ?>
        <!-- Repeated set for continuous scroll -->
        <?php foreach ($clientsData as $client): ?>
          <div class="client-logo">
            <img src="<?= htmlspecialchars($client['img']) ?>" alt="<?= htmlspecialchars($client['alt']) ?>">
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS SECTION -->
  <section class="testimonials-section">
    <h2>Ular Arialga ishonishadi</h2>
    <p class="section-subtitle">Mijozlarimiz biz haqimizda nima deyishmoqda?</p>
    <button class="testimonial-arrow-btn" id="testimonialPrev">←</button>
    <div class="testimonials-wrapper" id="testimonialsWrapper">
      <?php foreach ($comments as $c): ?>
        <div class="testimonial-card">
          <h3><?= htmlspecialchars($c['title']) ?></h3>
          <p><?= htmlspecialchars($c['comment']) ?></p>
          <div class="testimonial-author">
            <img src="<?= htmlspecialchars($c['avatar']) ?>" alt="<?= htmlspecialchars($c['author']) ?>">
            <div>
              <h4><?= htmlspecialchars($c['author']) ?></h4>
              <span><?= htmlspecialchars($c['location']) ?></span>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <button class="testimonial-arrow-btn" id="testimonialNext">→</button>
  </section>

  <!-- CONTACT SECTION -->
  <section id="contact" class="contact-section container">
    <h2 class="contact-title">Bog‘lanish</h2>
    <div class="contact-container">
      <div class="contact-info">
        <div class="contact-card">
          <h3>Biz bilan bog‘laning</h3>
          <p>Bizga xabar yuboring yoki telefon orqali murojaat qiling. Sizning loyihangizni muhokama qilishga tayyormiz!
          </p>
          <div class="contact-item">
            <i class="fas fa-phone-alt"></i>
            <span>+(998 94) 281-82-46</span>
          </div>
          <div class="contact-item">
            <i class="fas fa-phone-alt"></i>
            <span>+(998 33) 281-82-46</span>
          </div>
          <div class="contact-item">
            <i class="fas fa-envelope"></i>
            <span>skdflsdkl;fmsdklf@fsdkjfdsl.com</span>
          </div>
          <div class="contact-item">
            <i class="fas fa-clock"></i>
            <span>Ish vaqti: 09:00 — 18:00 (Dush — Juma)</span>
          </div>
          <div class="hours-status closed" id="hoursStatus">Yopiq</div>
          <a href="#" id="contactSubmit" class="contact-btn">Menejer bilan bog‘lanish</a>
        </div>
      </div>
      <div class="contact-map">
        <div class="map-overlay">
          <h3>Bizning manzil</h3>
          <p>Toshkent shahri, Chilanzor tumani</p>
        </div>
        <iframe title="Arial Uz manzili"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47928.26301431902!2d69.21607243804708!3d41.29949580370261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38aef4cb5a8ebfbb%3A0x351b2edc675985d!2sToshkent%2C%20Toshkent%20Shahri!5e0!3m2!1suz!2s!4v1713344900000"></iframe>
      </div>
    </div>
  </section>

  <!-- SCRIPTS -->
  <script>
    // Team Slider
    const teamSlidesData = <?php echo json_encode($teamSlidesData); ?>;

    let currentTeamIndex = 0;
    let autoSlideInterval;
    const teamSlidesContainer = document.getElementById("teamSlides");
    const teamPrev = document.getElementById("teamPrev");
    const teamNext = document.getElementById("teamNext");

    function renderTeamSlides() {
      teamSlidesContainer.innerHTML = '';
      const totalSlides = teamSlidesData.length;
      // Create a seamless loop by adding slides before and after the current set
      const slidesToShow = [];
      for (let i = -1; i <= 3; i++) {
        let index = (currentTeamIndex + i + totalSlides) % totalSlides;
        slidesToShow.push(teamSlidesData[index]);
      }

      slidesToShow.forEach((slide, i) => {
        const slideElement = document.createElement('div');
        slideElement.className = `team-slide ${i >= 1 && i <= 3 ? 'active' : ''}`;
        slideElement.innerHTML = `
          <div class="team-image">
            <img src="${slide.image}" alt="${slide.name}">
            <div class="team-overlay">
              <h3>${slide.name}</h3>
              <span>${slide.position}</span>
              <p>${slide.bio}</p>
            </div>
          </div>
        `;
        teamSlidesContainer.appendChild(slideElement);
      });
    }

    function showTeamSlide(direction) {
      const totalSlides = teamSlidesData.length;
      if (direction === 'next') {
        currentTeamIndex = (currentTeamIndex + 1) % totalSlides;
      } else {
        currentTeamIndex = (currentTeamIndex - 1 + totalSlides) % totalSlides;
      }
      teamSlidesContainer.style.transition = 'transform 0.5s ease-in-out';
      teamSlidesContainer.style.transform = direction === 'next' ? 'translateX(-25%)' : 'translateX(25%)';
      setTimeout(() => {
        teamSlidesContainer.style.transition = 'none';
        teamSlidesContainer.style.transform = 'translateX(0)';
        renderTeamSlides();
      }, 500);
    }

    function startAutoSlide() {
      autoSlideInterval = setInterval(() => {
        showTeamSlide('next');
      }, 3000); // Adjust interval as needed
    }

    function stopAutoSlide() {
      clearInterval(autoSlideInterval);
    }

    teamPrev.addEventListener("click", () => {
      stopAutoSlide();
      showTeamSlide('prev');
      startAutoSlide();
    });

    teamNext.addEventListener("click", () => {
      stopAutoSlide();
      showTeamSlide('next');
      startAutoSlide();
    });

    teamSlidesContainer.addEventListener("mouseenter", stopAutoSlide);
    teamSlidesContainer.addEventListener("mouseleave", startAutoSlide);

    renderTeamSlides();
    startAutoSlide();

    // Testimonials Slider
    const testimonialsWrapper = document.getElementById("testimonialsWrapper");
    const testimonialPrev = document.getElementById("testimonialPrev");
    const testimonialNext = document.getElementById("testimonialNext");

    let isDown = false;
    let startX;
    let scrollLeft;

    testimonialsWrapper.addEventListener("mousedown", (e) => {
      isDown = true;
      startX = e.pageX - testimonialsWrapper.offsetLeft;
      scrollLeft = testimonialsWrapper.scrollLeft;
    });

    testimonialsWrapper.addEventListener("mouseleave", () => {
      isDown = false;
    });

    testimonialsWrapper.addEventListener("mouseup", () => {
      isDown = false;
    });

    testimonialsWrapper.addEventListener("mousemove", (e) => {
      if (!isDown) return;
      e.preventDefault();
      const x = e.pageX - testimonialsWrapper.offsetLeft;
      const walk = x - startX;
      testimonialsWrapper.scrollLeft = scrollLeft - walk;
    });

    testimonialPrev.addEventListener("click", () => {
      testimonialsWrapper.scrollBy({ left: -320, behavior: "smooth" });
    });

    testimonialNext.addEventListener("click", () => {
      testimonialsWrapper.scrollBy({ left: 320, behavior: "smooth" });
    });

    // Poligraphy Slider
    const printData = <?php echo json_encode($printData); ?>;

    let psIndex = 0;
    const psHeading = document.getElementById("psHeading");
    const psDesc = document.getElementById("psDesc");
    const psImg = document.getElementById("psImg");
    const psTabs = document.querySelectorAll(".print-tab");

    function renderSlide(i) {
      const d = printData[i];
      psHeading.textContent = d.title;
      psDesc.textContent = d.desc;
      psImg.src = d.img;
      psTabs.forEach(t => t.classList.remove("active"));
      psTabs[i].classList.add("active");
    }
    renderSlide(psIndex);

    psTabs.forEach((tab, idx) => {
      tab.addEventListener("click", () => {
        psIndex = idx;
        renderSlide(psIndex);
      });
    });

    document.getElementById("psPrev").addEventListener("click", () => {
      psIndex = (psIndex - 1 + printData.length) % printData.length;
      renderSlide(psIndex);
    });

    document.getElementById("psNext").addEventListener("click", () => {
      psIndex = (psIndex + 1) % printData.length;
      renderSlide(psIndex);
    });

    // Real-time Open/Closed Status
    function updateHoursStatus() {
      const hoursStatus = document.getElementById('hoursStatus');
      const now = new Date();
      const utcOffset = 5 * 60; // Tashkent is UTC+5
      const tashkentTime = new Date(now.getTime() + (utcOffset * 60 * 1000));
      const day = tashkentTime.getUTCDay();
      const hours = tashkentTime.getUTCHours();
      const minutes = tashkentTime.getUTCMinutes();
      const isOpen = (day >= 1 && day <= 5) && (hours >= 9 && (hours < 18 || (hours === 18 && minutes === 0)));

      if (isOpen) {
        hoursStatus.textContent = 'Ochik';
        hoursStatus.classList.remove('closed');
        hoursStatus.classList.add('open');
      } else {
        hoursStatus.textContent = 'Yopiq';
        hoursStatus.classList.remove('open');
        hoursStatus.classList.add('closed');
      }
    }

    updateHoursStatus();
    setInterval(updateHoursStatus, 60000);
  </script>
</body>

</html>

<?php
include 'data/footer.php';
?>