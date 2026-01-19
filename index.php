<?php include 'inc/head.php'; ?>
<?php include 'inc/header.php'; ?>

<section class="relative h-80 md:h-[100vh] pt-16 md:pt-20">
		<video src="assets/img/banner-vid.mp4" autoplay muted loop class="object-cover w-full h-full"></video>
    <div class="absolute w-full h-full top-0 inset-0 bg-white/10"></div>
     
  
</section>
 <form
  id="formclose" action="email.php" method="POST"
  class="hidden fixed inset-0 z-50 items-center bg-primary/20 px-8">

  <div
    class="relative md:left-1/3 bg-white/80 backdrop-blur-md px-4 py-6 rounded-lg shadow-md md:w-full max-w-md top-1/4 md:top-20"
  >
    <!-- Close Button -->
    <button
      type="button"
      aria-label="close"
     onclick="togglePops()"
     class="absolute top-3 right-3 cursor-pointer">
<i class="fa-solid fa-x text-primary"></i>
</button>

    <h2 class="text-center text-xl sm:text-2xl py-4">
      Speak with Our Property Expert
    </h2>

    <div class="rounded-md">
      <div class="mb-4">
        <label class="block text-black mb-1">Name*</label>
        <input
          type="text"
          class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-1 focus:ring-gray-600"
          placeholder="Enter your name"
          required
        />
      </div>

      <div class="mb-4">
        <label class="block text-black mb-1">Email</label>
        <input
          type="email"
          class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-1 focus:ring-gray-600"
          placeholder="Enter your email"
        />
      </div>

      <div class="mb-4">
        <label for="phoneinput" class="block text-black mb-1">WhatsApp Number*</label>
        <input
          type="tel" id="phoneinput"
          class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-1 focus:ring-gray-600"
          placeholder="Enter your WhatsApp number"
        />
      </div>

      <div class="mb-4">
        <label for="addinput" class="block text-black mb-1">Address</label>
        <input
          type="text" id="addinput"
          class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-1 focus:ring-gray-600"
          placeholder="Enter your address"
        />
      </div>

      <button
        type="submit"
        class="w-full bg-black text-white py-2 rounded hover:bg-blue-700 transition"
      >
        Submit
      </button>
    </div>
  </div>
</form>

<section id="projects" class="py-20 bg-lightGrey">
 <!-- FILTER BAR -->
 
 
 <div class="container mx-auto px-4">
   <div class="flex flex-col md:flex-row justify-between items-end mb-12">
     <div>
       <h2 class="text-primary font-bold uppercase tracking-widest">Our Portfolio</h2>
        <h3 class=" text-4xl md:text-5xl uppercase leading-none">Featured Projects on Dwarka Expressway</h3>
			</div>
			<!-- <p class="text-gray-500 max-w-xs mt-4 md:mt-0">Handpicked luxury residences offering the best ROI and lifestyle.</p> -->
		</div>

      <div class="w-150 mx-auto bg-white">
         <div class="rounded-2xl shadow p-6 mb-5">
           <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
         
             <!-- Project Name -->
             <div class="relative">
               <input id="projectFilter" type="text" placeholder="Search Project Name"
                 class="w-full border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary">
               <ul id="projectSuggestions"
                 class="absolute z-10 bg-white border w-full mt-1 rounded-lg hidden max-h-40 overflow-auto"></ul>
             </div>
         
             <!-- Location -->
             <input id="locationFilter" type="text" placeholder="Search Sector / Location"
               class="w-full border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary">
         
             <!-- Budget -->
             <select id="budgetFilter"
               class="w-full border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary">
               <option value="">Select Budget</option>
               <option value="1">Under ₹1 Cr</option>
               <option value="1-1.5">₹1 – ₹1.5 Cr</option>
               <option value="1.5-2">₹1.5 – ₹2 Cr</option>
               <option value="2+">Above ₹2 Cr</option>
             </select>
         
           </div>
         </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

      <!-- CARD 1 -->
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden project-card" data-name="DLF The Sky Court"
      data-location="Sector 86"
      data-price="2.35">
        <div class="relative">
          <img src="assets/img/proj/p-1.png"
               class="h-56 w-full object-cover" />
          <span class="absolute top-3 left-3 bg-primary text-white text-sm font-extralight px-3 py-1 rounded-full">
            Luxury
          </span>
        </div>

        <div class="p-5 space-y-2">
          <h3 class="text-lg font-semibold">
            DLF The Sky Court
          </h3>
          <p class="text-sm">
			  <i class="fa-solid fa-location-pin-lock text-lg"></i> Sector 86, Dwarka Expressway
			</p>
			<p class="text-lg text-red-700 font-bold mt-2">
			  ₹ 2.35 Cr*
			</p>
			
          <hr class="my-3">
		  <button onclick="showForm()" class="text-primary font-bold text-sm uppercase hover:underline">
             View Project
		  </button>
        </div>
      </div>


      <div class="bg-white rounded-2xl shadow-lg overflow-hidden project-card" data-name="DLF The Ultima"
      data-location="Sector 104"
      data-price="1.7">
        <div class="relative">
          <img src="assets/img/proj/p-2.png"
               class="h-56 w-full object-cover" />
          <span class="absolute top-3 left-3 bg-primary  text-white text-sm font-extralight px-3 py-1 rounded-full">
            Luxury
          </span>
        </div>

        <div class="p-5 space-y-2">
          <h3 class="text-lg font-semibold">
            DLF The Ultima
          </h3>
          <p class="text-sm">
			  <i class="fa-solid fa-location-pin-lock text-lg"></i> Sector 104, Dwarka Expressway
			</p>
			<p class="text-lg font-bold text-red-700 mt-2">
			  ₹ 1.7 Cr*
			</p>
			
          <hr class="my-3">
		  <button onclick="showForm()" class="text-primary font-bold text-sm uppercase hover:underline">
             View Project
		  </button>

        </div>
      </div>
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden project-card" data-name="Godrej Meridien"
      data-location="Sector 106"
      data-price="1.3">
        <div class="relative">
          <img src="assets/img/proj/p-3.png"
               class="h-56 w-full object-cover" />
          <span class="absolute top-3 left-3 bg-primary  text-white text-sm font-extralight px-3 py-1 rounded-full">
            Luxury
          </span>
        </div>

        <div class="p-5 space-y-2">
          <h3 class="text-lg font-semibold">
            Godrej Meridien
          </h3>
          <p class="text-sm">
			  <i class="fa-solid fa-location-pin-lock text-lg"></i> Sector 106, Dwarka Expressway
			</p>
			<p class="text-lg font-bold text-red-700 mt-2">
			  ₹ 1.3 Cr*
			</p>
			
          <hr class="my-3">
		  <button onclick="showForm()" class="text-primary font-bold text-sm uppercase hover:underline">
             View Project
		  </button>

        </div>
      </div>
      <div class="bg-white rounded-2xl shadow-lg overflow-hidden project-card" data-name="Godrej Summit"
      data-location="Sector 104"
      data-price="1">
        <div class="relative">
          <img src="assets/img/proj/p-4.png"
               class="h-56 w-full object-cover" />
           <span class="absolute top-3 left-3 bg-primary  text-white text-sm font-extralight px-3 py-1 rounded-full">
            Luxury
          </span> 
        </div>

        <div class="p-5 space-y-2">
          <h3 class="text-lg font-semibold">
            Godrej Summit
          </h3>
          <p class="text-sm">
			  <i class="fa-solid fa-location-pin-lock text-lg"></i> Sector 104, Dwarka Expressway
			</p>
			<p class="text-lg font-bold text-red-700 mt-2">
			  ₹ 1 Cr*
			</p>
			
          <hr class="my-3">
		  <button onclick="showForm()" class="text-primary font-bold text-sm uppercase hover:underline">
             View Project
		  </button>

        </div>
      </div>
      
	  <div class="bg-white rounded-2xl shadow-lg overflow-hidden project-card" data-name="Sobha City"
      data-location="Sector 108"
      data-price="1.5">
  <!-- Sobha City -->
  <div class="relative">
    <img src="assets/img/proj/p-5.png"
         class="h-56 w-full object-cover" />
    <span class="absolute top-3 left-3 bg-primary  text-white text-sm font-extralight px-3 py-1 rounded-full">
      Luxury
    </span> 
  </div>

  <div class="p-5 space-y-2">
    <h3 class="text-lg font-semibold">
      Sobha City
    </h3>
    <p class="text-sm">
      <i class="fa-solid fa-location-pin-lock text-lg"></i> Sector 108, Dwarka Expressway
    </p>
    <p class="text-lg font-bold text-red-700 mt-2">
      ₹ 1.5 Cr*
    </p>
    <hr class="my-3">
    <button onclick="showForm()" class="text-primary font-bold text-sm uppercase hover:underline">
      View Project
    </button>
  </div>
</div>

<div class="bg-white rounded-2xl shadow-lg overflow-hidden project-card" data-name="Omaxe Dwarka Heights"
      data-location="Sector 108"
      data-price="0.75">
  <!-- Omaxe Dwarka Heights -->
  <div class="relative">
    <img src="assets/img/proj/p-6.png"
         class="h-56 w-full object-cover" />
    <span class="absolute top-3 left-3 bg-dark  text-white text-sm font-extralight px-3 py-1 rounded-full">
      Affordable
    </span> 
  </div>

  <div class="p-5 space-y-2">
    <h3 class="text-lg font-semibold">
      Omaxe Dwarka Heights
    </h3>
    <p class="text-sm">
      <i class="fa-solid fa-location-pin-lock text-lg"></i> Sector 108, Dwarka Expressway
    </p>
    <p class="text-lg font-bold text-red-700 mt-2">
      ₹ 75 Lakhs*
    </p>
    <hr class="my-3">
    <button onclick="showForm()" class="text-primary font-bold text-sm uppercase hover:underline">
      View Project
    </button>
  </div>
</div>

<div class="bg-white rounded-2xl shadow-lg overflow-hidden project-card" data-name="Omaxe New Heights"
      data-location="Sector 108"
      data-price="0.5">
  <!-- Omaxe New Heights -->
  <div class="relative">
    <img src="assets/img/proj/p-7.png"
         class="h-56 w-full object-cover" />
    <span class="absolute top-3 left-3 bg-dark  text-white text-sm font-extralight px-3 py-1 rounded-full">
      Affordable
    </span> 
  </div>

  <div class="p-5 space-y-2">
    <h3 class="text-lg font-semibold">
      Omaxe New Heights
    </h3>
    <p class="text-sm">
      <i class="fa-solid fa-location-pin-lock text-lg"></i> Sector 108, Dwarka Expressway
    </p>
    <p class="text-lg font-bold text-red-700 mt-2">
      ₹ 50 Lakhs*
    </p>
    <hr class="my-3">
    <button onclick="showForm()" class="text-primary font-bold text-sm uppercase hover:underline">
      View Project
    </button>
  </div>
</div>

<div class="bg-white rounded-2xl shadow-lg overflow-hidden project-card" data-name="Emaar Palm Hills"
      data-location="Sector 77"
      data-price="1.8">
  <!-- Emaar Palm Hills -->
  <div class="relative">
    <img src="assets/img/proj/p-8.png"
         class="h-56 w-full object-cover" />
    <span class="absolute top-3 left-3 bg-primary  text-white text-sm font-extralight px-3 py-1 rounded-full">
      Luxury
    </span> 
  </div>

  <div class="p-5 space-y-2">
    <h3 class="text-lg font-semibold">
      Emaar Palm Hills
    </h3>
    <p class="text-sm">
      <i class="fa-solid fa-location-pin-lock text-lg"></i> Sector 77, Dwarka Expressway
    </p>
    <p class="text-lg font-bold text-red-700 mt-2">
      ₹ 1.8 Cr*
    </p>
    <hr class="my-3">
    <button onclick="showForm()" class="text-primary font-bold text-sm uppercase hover:underline">
      View Project
    </button>
  </div>
</div>

<div class="bg-white rounded-2xl shadow-lg overflow-hidden project-card" data-name="Shapoorji Pallonji Joyville"
      data-location="Sector 102"
      data-price="0.95">
  <!-- Shapoorji Pallonji Joyville -->
  <div class="relative">
    <img src="assets/img/proj/p-9.png"
         class="h-56 w-full object-cover" />
    <span class="absolute top-3 left-3 bg-primary  text-white text-sm font-extralight px-3 py-1 rounded-full">
      Luxury
    </span> 
  </div>

  <div class="p-5 space-y-2">
    <h3 class="text-lg font-semibold">
      Shapoorji Pallonji Joyville
    </h3>
    <p class="text-sm">
      <i class="fa-solid fa-location-pin-lock text-lg"></i> Sector 102, Dwarka Expressway
    </p>
    <p class="text-lg font-bold text-red-700 mt-2">
      ₹ 95 Lakhs*
    </p>
    <hr class="my-3">
    <button onclick="showForm()" class="text-primary font-bold text-sm uppercase hover:underline">
      View Project
    </button>
  </div>
</div>

<div class="bg-white rounded-2xl shadow-lg overflow-hidden project-card" data-name="Tata Raisina Residency"
      data-location="Sector 59"
      data-price="1.2">
  <!-- Tata Raisina Residency -->
  <div class="relative">
    <img src="assets/img/proj/p-10.png"
         class="h-56 w-full object-cover" />
    <span class="absolute top-3 left-3 bg-primary  text-white text-sm font-extralight px-3 py-1 rounded-full">
      Luxury
    </span> 
  </div>

  <div class="p-5 space-y-2">
    <h3 class="text-lg font-semibold">
      Tata Raisina Residency
    </h3>
    <p class="text-sm">
      <i class="fa-solid fa-location-pin-lock text-lg"></i> Sector 59, Dwarka Expressway
    </p>
    <p class="text-lg font-bold text-red-700 mt-2">
      ₹ 1.2 Cr*
    </p>
    <hr class="my-3">
    <button onclick="showForm()" class="text-primary font-bold text-sm uppercase hover:underline">
      View Project
    </button>
  </div>
</div>

<div class="bg-white rounded-2xl shadow-lg overflow-hidden project-card" data-name="Mahindra Luminare"
      data-location="Sector 59"
      data-price="2.5">
  <!-- Mahindra Luminare -->
  <div class="relative">
    <img src="assets/img/proj/p-11.png"
         class="h-56 w-full object-cover" />
    <span class="absolute top-3 left-3 bg-primary  text-white text-sm font-extralight px-3 py-1 rounded-full">
      Luxury
    </span> 
  </div>

  <div class="p-5 space-y-2">
    <h3 class="text-lg font-semibold">
      Mahindra Luminare
    </h3>
    <p class="text-sm">
      <i class="fa-solid fa-location-pin-lock text-lg"></i> Sector 59, Dwarka Expressway
    </p>
    <p class="text-lg font-bold text-red-700 mt-2">
      ₹ 2.5 Cr*
    </p>
    <hr class="my-3">
    <button onclick="showForm()" class="text-primary font-bold text-sm uppercase hover:underline">
      View Project
    </button>
  </div>
</div>

</div>
</section>
 <section
      id="location"
      class="pb-32 pt-10 bg-white border-b border-borderGrey animate-on-scroll"
    >
      <div
        class="max-w-7xl mx-auto px-6 mb-16 flex flex-col md:flex-row justify-between items-end gap-6"
      >
        <div>
          <h2
            class="text-4xl md:text-5xl font-heading font-semibold text-dark mb-4 tracking-tight"
          >
            Prime Connectivity
          </h2>
          <p class="text-slate-700 font-light max-w-md">
            Strategically located on Dwarka Expressway, connecting you to
            Delhi-NCR's key destinations in minutes.
          </p>
        </div>
        <a
          href="#contact"
          class="text-sm text-dark border-b border-dark pb-1 hover:text-primary hover:border-primary transition-colors"
        >
          View detailed location map
        </a>
      </div>

      <div
        class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center"
      >
        <!-- Location Map Visual -->
        <div
          class="relative overflow-hidden rounded-2xl border border-borderGrey location-image"
        >
          <img
            src="assets/img/Prime-Connectivity.png"
            alt="Aerial view of Dwarka Expressway showing modern infrastructure and connectivity to Delhi-NCR"
            class="w-full h-full object-cover"
          />
          <div
            class="absolute inset-0 bg-gradient-to-t from-white via-transparent to-transparent"
          ></div>
          <div class="absolute bottom-6 left-6 right-6">

          </div>
        </div>

        <!-- Connectivity Benefits -->
        <div class="space-y-6">
          <div
            class="flex items-start gap-4 p-4 rounded-xl border border-borderGrey hover:border-primary/20 hover:shadow-md transition-all location-card"
          >
            <div
              class="flex-shrink-0 w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center"
            >
              <svg
                class="w-6 h-6 text-primary"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"
                />
              </svg>
            </div>
            <div>
              <h3 class="text-lg font-semibold text-dark mb-1">
                15 minutes to IGI Airport
              </h3>
              <p class="text-sm text-slate-600">
                Direct expressway access for seamless international travel
              </p>
            </div>
          </div>

          <div
            class="flex items-start gap-4 p-4 rounded-xl border border-borderGrey hover:border-primary/20 hover:shadow-md transition-all location-card"
          >
            <div
              class="flex-shrink-0 w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center"
            >
              <svg
                class="w-6 h-6 text-primary"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"
                />
              </svg>
            </div>
            <div>
              <h3 class="text-lg font-semibold text-dark mb-1">
                Direct Gurugram Access
              </h3>
              <p class="text-sm text-slate-600">
                20-minute drive to Cyber City and DLF Phase offices
              </p>
            </div>
          </div>

          <div
            class="flex items-start gap-4 p-4 rounded-xl border border-borderGrey hover:border-primary/20 hover:shadow-md transition-all location-card"
          >
            <div
              class="flex-shrink-0 w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center"
            >
              <svg
                class="w-6 h-6 text-primary"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"
                />
              </svg>
            </div>
            <div>
              <h3 class="text-lg font-semibold text-dark mb-1">
                5 km from Diplomatic Enclave
              </h3>
              <p class="text-sm text-slate-600">
                Proximity to embassies and international schools
              </p>
            </div>
          </div>

          <div
            class="flex items-start gap-4 p-4 rounded-xl border border-borderGrey hover:border-primary/20 hover:shadow-md transition-all location-card"
          >
            <div
              class="flex-shrink-0 w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center"
            >
              <svg
                class="w-6 h-6 text-primary"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M13 10V3L4 14h7v7l9-11h-7z"
                />
              </svg>
            </div>
            <div>
              <h3 class="text-lg font-semibold text-dark mb-1">
                Adjacent Metro Station (2026)
              </h3>
              <p class="text-sm text-slate-600">
                Upcoming metro connectivity for daily commute convenience
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Project Highlights Bento Grid -->
    <section class="py-32 px-6 bg-lightGrey animate-on-scroll">
      <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16 max-w-3xl mx-auto">
          <h2
            class="text-4xl md:text-5xl font-heading font-semibold tracking-tight text-dark mb-6"
          >
            Your Dream Home Awaits
          </h2>
          <p class="text-slate-700 font-light">
            Meticulously designed residences with modern architecture,
            vastu-compliant layouts, and premium specifications.
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 auto-rows-fr">
          <!-- Large Featured Card -->
          <div
            class="md:col-span-2 relative rounded-2xl overflow-hidden border border-borderGrey group project-card bg-white"
          >
            <img
              src="https://images.unsplash.com/photo-1722604839931-77856e949ca6"
              alt="Spacious 3 BHK living room with floor-to-ceiling windows overlooking Dwarka Expressway"
              class="absolute inset-0 w-full h-full object-cover opacity-40 group-hover:opacity-50 transition-opacity duration-700 group-hover:scale-105"
            />
            <div
              class="absolute inset-0 bg-gradient-to-t from-white via-white/60 to-transparent"
            ></div>
            <div
              class="absolute inset-0 bg-gradient-to-r from-primary/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700"
            ></div>
            <div class="relative p-8 h-full flex flex-col justify-end">
              <div
                class="w-12 h-12 rounded-full bg-primary/10 backdrop-blur-md flex items-center justify-center text-primary mb-4"
              >
                <svg
                  class="w-6 h-6"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                  />
                </svg>
              </div>
              <h3 class="text-3xl text-dark font-heading font-semibold mb-3">
                Premium Residences
              </h3>
              <div class="space-y-2 mb-4">
                <p class="text-dark font-medium">✓ 3 & 4 BHK from 1850 sq.ft</p>
                <p class="text-slate-700 text-sm">
                  ✓ Vastu-compliant layouts with natural ventilation
                </p>
                <p class="text-slate-700 text-sm">
                  ✓ Private balconies with expressway views
                </p>
                <p class="text-slate-700 text-sm">
                  ✓ Modular kitchen with premium fixtures
                </p>
              </div>
            </div>
          </div>

          <!-- RERA Card -->
          <div
            class="bg-white border border-borderGrey rounded-2xl p-8 hover:shadow-lg transition-all flex flex-col justify-center relative overflow-hidden project-card"
          >
            <div
              class="absolute top-0 right-0 w-32 h-32 bg-primary/10 blur-xl rounded-full"
            ></div>
            <div class="relative">
              <svg
                class="w-8 h-8 text-primary mb-4"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"
                />
              </svg>
              <h3 class="text-2xl text-dark font-heading font-semibold mb-2">
                RERA Approved
              </h3>
              <p class="text-slate-600 text-sm leading-relaxed mb-3">
                Registered project with transparent documentation and legal
                compliance
              </p>
              <div class="text-primary font-semibold">Q4 2026 Possession</div>
            </div>
          </div>

          <!-- Floor Plan Card -->
          <div
            class="bg-white border border-borderGrey rounded-2xl p-8 hover:shadow-lg transition-all flex flex-col justify-center relative overflow-hidden project-card"
          >
            <div
              class="absolute top-0 right-0 w-32 h-32 bg-primary/10 blur-xl rounded-full"
            ></div>
            <div class="relative">
              <svg
                class="w-8 h-8 text-primary mb-4"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
                />
              </svg>
              <h3 class="text-2xl text-dark font-heading font-semibold mb-2">
                Floor Plans
              </h3>
              <p class="text-slate-600 text-sm leading-relaxed mb-4">
                Download detailed floor plans and specifications
              </p>
              <a
                href="#contact"
                class="inline-flex items-center gap-2 text-primary hover:gap-3 transition-all text-sm font-medium"
              >
                Download Brochure
                <svg
                  class="w-4 h-4"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"
                  />
                </svg>
              </a>
            </div>
          </div>

          <!-- Specifications Card -->
          <div
            class="md:col-span-2 bg-white border border-borderGrey rounded-2xl p-8 hover:shadow-lg transition-all relative overflow-hidden project-card"
          >
            <div
              class="absolute top-0 right-0 w-40 h-40 bg-primary/5 blur-2xl rounded-full"
            ></div>
            <div class="relative">
              <h3 class="text-2xl text-dark font-heading font-semibold mb-6">
                Premium Specifications
              </h3>
              <div class="grid md:grid-cols-2 gap-6">
                <div class="space-y-3">
                  <div class="flex items-start gap-3">
                    <svg
                      class="w-5 h-5 text-primary flex-shrink-0 mt-0.5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    <div>
                      <p class="text-dark font-medium text-sm">
                        Vitrified tile flooring
                      </p>
                      <p class="text-slate-600 text-xs">
                        Premium finish throughout
                      </p>
                    </div>
                  </div>
                  <div class="flex items-start gap-3">
                    <svg
                      class="w-5 h-5 text-primary flex-shrink-0 mt-0.5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    <div>
                      <p class="text-dark font-medium text-sm">
                        Branded electrical fittings
                      </p>
                      <p class="text-slate-600 text-xs">
                        Modular switches & fixtures
                      </p>
                    </div>
                  </div>
                  <div class="flex items-start gap-3">
                    <svg
                      class="w-5 h-5 text-primary flex-shrink-0 mt-0.5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    <div>
                      <p class="text-dark font-medium text-sm">UPVC windows</p>
                      <p class="text-slate-600 text-xs">
                        Double-glazed for insulation
                      </p>
                    </div>
                  </div>
                </div>
                <div class="space-y-3">
                  <div class="flex items-start gap-3">
                    <svg
                      class="w-5 h-5 text-primary flex-shrink-0 mt-0.5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    <div>
                      <p class="text-dark font-medium text-sm">
                        Oil-bound distemper walls
                      </p>
                      <p class="text-slate-600 text-xs">Premium paint finish</p>
                    </div>
                  </div>
                  <div class="flex items-start gap-3">
                    <svg
                      class="w-5 h-5 text-primary flex-shrink-0 mt-0.5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    <div>
                      <p class="text-dark font-medium text-sm">
                        Designer bathroom fittings
                      </p>
                      <p class="text-slate-600 text-xs">
                        Premium sanitary ware
                      </p>
                    </div>
                  </div>
                  <div class="flex items-start gap-3">
                    <svg
                      class="w-5 h-5 text-primary flex-shrink-0 mt-0.5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    <div>
                      <p class="text-dark font-medium text-sm">
                        Video door phone
                      </p>
                      <p class="text-slate-600 text-xs">Enhanced security</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Amenities & Lifestyle -->
    <section id="amenities" class="py-32 px-6 bg-white animate-on-scroll">
      <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16 max-w-3xl mx-auto">
          <h2
            class="text-4xl md:text-5xl font-heading font-semibold tracking-tight text-dark mb-6"
          >
            Lifestyle Beyond Compare
          </h2>
          <p class="text-slate-700 font-light">
            World-class amenities designed for modern living. Every detail
            crafted for your comfort and convenience.
          </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-12">
          <!-- Amenity Cards -->
          <div class="amenity-card-light group">
            <div class="amenity-icon">
              <svg
                class="w-8 h-8"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5"
                />
              </svg>
            </div>
            <h3 class="text-dark font-semibold mb-1">Clubhouse</h3>
            <p class="text-slate-600 text-sm">
              50,000 sq.ft multipurpose space
            </p>
          </div>

          <div class="amenity-card-light group">
            <div class="amenity-icon">
              <svg
                class="w-8 h-8"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5"
                />
              </svg>
            </div>
            <h3 class="text-dark font-semibold mb-1">Swimming Pool</h3>
            <p class="text-slate-600 text-sm">Olympic-size with kids' pool</p>
          </div>

          <div class="amenity-card-light group">
            <div class="amenity-icon">
              <svg
                class="w-8 h-8"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M13 10V3L4 14h7v7l9-11h-7z"
                />
              </svg>
            </div>
            <h3 class="text-dark font-semibold mb-1">Fitness Center</h3>
            <p class="text-slate-600 text-sm">State-of-the-art equipment</p>
          </div>

          <div class="amenity-card-light group">
            <div class="amenity-icon">
              <svg
                class="w-8 h-8"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"
                />
              </svg>
            </div>
            <h3 class="text-dark font-semibold mb-1">Kids' Play Area</h3>
            <p class="text-slate-600 text-sm">Safe & supervised zone</p>
          </div>

          <div class="amenity-card-light group">
            <div class="amenity-icon">
              <svg
                class="w-8 h-8"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M19 11a4 4 0 01-4 4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"
                />
              </svg>
            </div>
            <h3 class="text-dark font-semibold mb-1">Jogging Track</h3>
            <p class="text-slate-600 text-sm">Landscaped walking paths</p>
          </div>

          <div class="amenity-card-light group">
            <div class="amenity-icon">
              <svg
                class="w-8 h-8"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M19 11H5m14 0a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"
                />
              </svg>
            </div>
            <h3 class="text-dark font-semibold mb-1">Pet Park</h3>
            <p class="text-slate-600 text-sm">Dedicated space for pets</p>
          </div>

          <div class="amenity-card-light group">
            <div class="amenity-icon">
              <svg
                class="w-8 h-8"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M13 10V3L4 14h7v7l9-11h-7z"
                />
              </svg>
            </div>
            <h3 class="text-dark font-semibold mb-1">Power Backup</h3>
            <p class="text-slate-600 text-sm">100% DG backup</p>
          </div>

          <div class="amenity-card-light group">
            <div class="amenity-icon">
              <svg
                class="w-8 h-8"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M19 11H5m14 0a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"
                />
              </svg>
            </div>
            <h3 class="text-dark font-semibold mb-1">Senior Citizen Zone</h3>
            <p class="text-slate-600 text-sm">Peaceful relaxation area</p>
          </div>

          <div class="amenity-card-light group">
            <div class="amenity-icon">
              <svg
                class="w-8 h-8"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 3v2m6-2v2M9 19v2m12-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 7h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"
                />
              </svg>
            </div>
            <h3 class="text-dark font-semibold mb-1">Rainwater Harvesting</h3>
            <p class="text-slate-600 text-sm">Eco-friendly initiative</p>
          </div>

          <div class="amenity-card-light group">
            <div class="amenity-icon">
              <svg
                class="w-8 h-8"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M13 10V3L4 14h7v7l9-11h-7z"
                />
              </svg>
            </div>
            <h3 class="text-dark font-semibold mb-1">EV Charging</h3>
            <p class="text-slate-600 text-sm">Electric vehicle stations</p>
          </div>

          <div class="amenity-card-light group">
            <div class="amenity-icon">
              <svg
                class="w-8 h-8"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"
                />
              </svg>
            </div>
            <h3 class="text-dark font-semibold mb-1">Landscaped Gardens</h3>
            <p class="text-slate-600 text-sm">Green open spaces</p>
          </div>
        </div>

        <div class="text-center">
          <a href="tel:+919354902932" class="cta-button-large inline-flex group">
            Schedule Site Visit
            <svg
              class="w-5 h-5 group-hover:translate-x-1 transition-transform"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M17 8l4 4m0 0l-4 4m4-4H3"
              />
            </svg>
          </a>
        </div>
      </div>
    </section>
    <section
      class="py-32 bg-lightGrey border-t border-borderGrey animate-on-scroll"
    >
      <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-12 gap-12 items-center">
          <!-- Stats Column -->
          <div class="lg:col-span-5 space-y-8">
            <div>
              <h2
                class="text-4xl md:text-5xl font-heading font-semibold text-dark mb-4 tracking-tight"
              >
                Built on Trust
              </h2>
              <p class="text-slate-700 font-light">
                A legacy of excellence in NCR real estate development
              </p>
            </div>

            <div class="space-y-6">
              <div class="developer-stat-light">
                <div class="text-5xl font-heading font-light text-dark mb-2">
                  25+
                </div>
                <div class="text-slate-700 font-medium">
                  Years of Experience
                </div>
                <div class="text-slate-500 text-sm">
                  In NCR real estate market
                </div>
              </div>

              <div class="developer-stat-light">
                <div class="text-5xl font-heading font-light text-dark mb-2">
                  15,000+
                </div>
                <div class="text-slate-700 font-medium">Happy Families</div>
                <div class="text-slate-500 text-sm">
                  Across 40 completed projects
                </div>
              </div>

              <div class="developer-stat-light">
                <div class="text-5xl font-heading font-light text-dark mb-2">
                  98%
                </div>
                <div class="text-slate-700 font-medium">On-Time Delivery</div>
                <div class="text-slate-500 text-sm">
                  Industry-leading track record
                </div>
              </div>
            </div>
          </div>

          <!-- Content Column -->
          <div class="lg:col-span-7 space-y-6">
            <p class="text-slate-700 leading-relaxed">
              With over two decades of experience in shaping NCR's skyline,
              we've earned the trust of thousands of families. Our commitment to
              quality, transparency, and timely delivery has made us one of the
              most respected names in real estate.
            </p>

            <div class="grid md:grid-cols-2 gap-6">
              <div
                class="p-6 rounded-xl border border-borderGrey bg-white hover:shadow-md transition-all"
              >
                <svg
                  class="w-8 h-8 text-primary mb-3"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"
                  />
                </svg>
                <h3 class="text-dark font-semibold mb-2">ISO Certified</h3>
                <p class="text-slate-600 text-sm">
                  International quality standards maintained
                </p>
              </div>

              <div
                class="p-6 rounded-xl border border-borderGrey bg-white hover:shadow-md transition-all"
              >
                <svg
                  class="w-8 h-8 text-primary mb-3"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                  />
                </svg>
                <h3 class="text-dark font-semibold mb-2">RERA Compliant</h3>
                <p class="text-slate-600 text-sm">
                  All projects registered and transparent
                </p>
              </div>
            </div>

            <div class="p-6 rounded-xl border border-primary/20 bg-primary/5">
              <h4 class="text-dark font-semibold mb-3">
                Notable Past Projects
              </h4>
              <ul class="space-y-2 text-slate-700 text-sm">
                <li class="flex items-center gap-2">
                  <svg
                    class="w-4 h-4 text-primary flex-shrink-0"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <span
                    >Green Valley Residency, Gurugram (2022) - 500 units</span
                  >
                </li>
                <li class="flex items-center gap-2">
                  <svg
                    class="w-4 h-4 text-primary flex-shrink-0"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <span>Sky Heights Apartments, Noida (2021) - 350 units</span>
                </li>
                <li class="flex items-center gap-2">
                  <svg
                    class="w-4 h-4 text-primary flex-shrink-0"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <span>Harmony Villas, Greater Noida (2020) - 200 units</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Form -->
    <section
      id="contact"
      class="relative py-32 px-6 overflow-hidden animate-on-scroll"
    >
      <!-- Background with Real Estate Imagery -->
      <div class="absolute inset-0 z-0">
        <img
          src="assets/img/Premium-Residences.png"
          alt="Luxury modern residential building exterior with premium architecture"
          class="w-full h-full object-cover opacity-20"
        />
        <div
          class="absolute inset-0 bg-gradient-to-br from-primary/90 via-primary/80 to-dark/90"
        ></div>
        <div
          class="absolute inset-0 bg-gradient-to-t from-dark/50 via-transparent to-transparent"
        ></div>
      </div>

      <div class="relative z-10 max-w-5xl mx-auto">
        <div
          class="bg-white/95 backdrop-blur-md rounded-3xl shadow-2xl p-8 md:p-12 border border-white/20"
        >
          <div class="text-center mb-10">
            <h2
              class="text-3xl md:text-4xl font-heading font-bold text-dark mb-3 tracking-tight"
            >
              REQUEST A SITE VISIT TODAY
            </h2>
            <p class="text-slate-600">
              Fill out the form below and our team will get in touch with you
              shortly
            </p>
          </div>

          <form action="email.php" method="POST" class="max-w-2xl mx-auto space-y-6">
            <!-- Full Name -->
            <div>
              <label class="block text-sm font-semibold text-dark mb-2"
                >Full Name *</label
              >
              <input
                type="text"
                class="w-full px-4 py-3 border border-borderGrey rounded-lg focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all bg-white"
                placeholder="Enter your full name"
                required
              />
            </div>

            <!-- Email -->
            <div>
              <label class="block text-sm font-semibold text-dark mb-2"
                >Email Address</label
              >
              <input
                type="email"
                class="w-full px-4 py-3 border border-borderGrey rounded-lg focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all bg-white"
                placeholder="Enter your email address"
              />
            </div>

            <!-- Phone -->
            <div>
              <label class="block text-sm font-semibold text-dark mb-2"
                >Phone Number *</label
              >
              <input
                type="tel"
                class="w-full px-4 py-3 border border-borderGrey rounded-lg focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all bg-white"
                placeholder="+91 98765 43210"
                required
              />
            </div>

            <!-- Submit Button -->
            <div class="pt-4">
              <button
                type="submit"
                class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-4 px-8 rounded-lg transition-all duration-300 transform hover:scale-[1.02] active:scale-[0.98] shadow-lg hover:shadow-xl flex items-center justify-center gap-3 group"
              >
                <svg
                  class="w-5 h-5"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"
                  />
                </svg>
                <span>DOWNLOAD PRICE LIST</span>
                
              </button>
            </div>

            <p class="text-center text-slate-500 text-xs pt-2">
              * Required fields. We respect your privacy and will never share
              your information.
            </p>
          </form>
        </div>
      </div>
    </section>

<?php include 'inc/footer.php'; ?>