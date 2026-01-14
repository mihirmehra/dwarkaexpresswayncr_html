<body class="bg-white text-dark font-sans">
  <header class="fixed w-full z-50 bg-white/90 backdrop-blur-md border-b border-borderGrey">
    <div class="container mx-auto px-4 h-20 flex items-center justify-between">
      <!-- Logo -->
      <a href="/" class="test-sm md:text-2xl/8 font-bold font-teko uppercase -tracking-5 text-dark">
        Dwarka<span class="text-primary text-base md:text-3xl">Expressway</span>
      </a>
      <!-- Desktop Nav -->
      <nav class="hidden md:flex space-x-8 font-semibold text-sm uppercase tracking-wide">
        <a href="#" class="hover:text-primary transition">Home</a>
        <a href="#projects" class="hover:text-primary transition">Projects</a>
        <!-- <a href="#amenities" class="hover:text-primary transition">Amenities</a> -->
        <a href="#contact" class="hover:text-primary transition">Contact</a>
      </nav>
      <!-- Desktop CTA -->
      <a
        href="tel:+919354902932"
        class="inline-block bg-dark rounded text-white md:px-6 px-2 py-2.5 font-bold text-sm uppercase hover:bg-black transition">
        Inquire Now
      </a>
      <!-- Mobile Menu Button -->
      <button id="menuBtn" class="md:hidden text-2xl">
        <i class="fa-solid fa-bars text-primary"></i>
      </button>
    </div>
    <!-- Mobile Menu -->
    <div id="mobileMenu" class="md:hidden hidden bg-white/30 border-t border-borderGrey">
      <nav class="flex flex-col px-4 py-6 space-y-4 font-semibold text-sm uppercase">
        <a href="#">Home</a>
        <a href="#projects">Projects</a>
        <a href="#amenities">Amenities</a>
        <a href="#contact">Contact</a>
      </nav>
    </div>
  </header>