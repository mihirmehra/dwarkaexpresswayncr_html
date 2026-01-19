<footer class="bg-white border-t border-borderGrey py-12">
<div class="fixed bottom-20 right-0 z-50">
  <a href="https://wa.me/+919873702365"
    class="whatsapp-btn w-12 md:w-15 md:h-15 h-12 rounded-full flex items-center justify-center relative">
    <img src="assets/img/whatapp-image.webp" alt="WhatsApp" class="z-10">
    <span class="outer-ring"></span>
  </a>
  <a href="tel:+919873702365"
    class="whatsapp-btn w-12 h-12 md:w-15 md:h-15 rounded-full flex items-center justify-center relative mt-5">
    <img src="assets/img/Call-Now.webp" alt="Call Now" class="z-10">
    <span class="outer-ring"></span>
  </a>
</div>
 <div class="fixed bottom-1/2 right-[-50px] z-50 -rotate-90 bg-primary p-4 rounded-t-lg">
  <button onclick="openEmiPopup()" class="text-white font-bold text-sm uppercase">
    Emi Calculate
  </button>
</div>
 </div>

	  <div class="container flex justify-center mx-auto px-20 mb-5">
           <img  src="assets/img/logo.png" alt="Dwarka expressway logo - trusted real estate company" class="w-30">
            </div>
 
            <div class="flex flex-wrap justify-center gap-4 mb-3 font-semibold">
                <a href="/" class="footer_link bg-primary rounded p-1.5 text-white uppercase text-sm">HOME</a>
                <a href="#projects" class="footer_link  bg-primary rounded p-1.5 text-white uppercase text-sm">Projects</a>
                <a href="#location" class="footer_link  bg-primary rounded p-1.5 text-white uppercase text-sm">LOCATION</a>
                <a href="#amenities" class="footer_link  bg-primary rounded p-1.5 text-white uppercase text-sm">AMENITIES</a>
                <a href="#contact" class="footer_link  bg-primary rounded p-1.5 text-white uppercase text-sm">CONTACT</a>
                <a href="/blogs" class="footer_link  bg-primary rounded p-1.5 text-white uppercase text-sm">BLOGS</a>
		            </div>
            
            </div>
            <!-- Contact Information -->
                <div class="text-center mb-4">
                       <h4 class="text-black mb-1">Email</h4>
                        <p class="text-gray-800 text-sm">info@dwarkaexpresswayncr.com</p>
                </div>
                <div class="text-center mb-4">
                       <h4 class="text-black mb-1">Phone</h4>
                        <p class="text-gray-800 text-sm">+91 9873702365</p>
                </div>
        
            <div class="col-md-12 text-center mb-5">
                <div>
                    <button type="button" onclick="toggleShow()" class="font-semibold cursor-pointer mb-2 text-primary">DISCLAIMER <i class="fa-solid fa-angle-down"></i></button>
                    <p id="discription" class="font-sm text-gray-500 px-10 text-opacity-60 text-sm hidden">The content provided on this website is for information purpose only and is not an offer to avail of any services. This is not the official website of the builder or owner and it belongs to channel partner. All rights for logo and images reserved for the builder. The prices mentioned on the website are subject to change without any prior notice and availability of properties can not be guaranteed. The images displayed on the website are for representation purposes only and may not reflect the actual properties accurately. The specifications, dimensions, services, facilities, & infrastructure are illustrative & indicative and are subject to the change as per the approval from the respective authorities. The company has not verified the information and the compliances of the projects. The company does not make any representation in regards to the compliances done against these projects. Please note that the company has not checked the RERA* registration status, so you should make yourself aware about the RERA* registration status of the project. We may also send updates to the mobile number/email ID registered with us. Purpose of this domain only for information, not claiming official website and projects. All rights of the projects reserved to the developer/builder.</p>
                </div>
            </div>
         
        </div>
<div
  id="emiPopup"
  class="fixed inset-0 z-50 hidden"
>
  <!-- Overlay -->
  <div
    onclick="closeEmiPopup()"
    class="absolute inset-0 bg-black/70"
  ></div>

  <!-- Popup Box -->
  <div
    class="relative bg-white w-[380px] max-w-[90%] mx-auto top-1/2 -translate-y-1/2 p-6 rounded-xl border-t-4 border-primary shadow-xl"
  >
    <!-- Close -->
    <button
      onclick="closeEmiPopup()"
      class="absolute top-3 right-3 text-2xl text-white hover:text-primary"
    >
      <i class="fa-solid fa-xmark"></i>
    </button>

    <h2 class="text-xl font-semibold text-dark mb-5">
      EMI Calculator
    </h2>

    <!-- Loan Amount -->
    <div class="mb-4">
      <label class="block text-sm text-darkSecondary mb-1">
        Loan Amount (₹)
      </label>
      <input
      ::-webkit-inner-spin-button,::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
        id="loanAmount"
        type="number"
        placeholder="e.g. 5000000"
        class="w-full px-3 py-2 border border-borderGrey rounded-md focus:outline-none focus:ring-2 focus:ring-primary"
      />
    </div>

    <!-- Interest Rate -->
    <div class="mb-4">
      <label class="block text-sm text-darkSecondary mb-1">
        Interest Rate (%)
      </label>
      <input
        id="interestRate"
        type="number"
        placeholder="e.g. 8.5"
        class="w-full px-3 py-2 border border-borderGrey rounded-md focus:outline-none focus:ring-2 focus:ring-primary"
      />
    </div>

    <!-- Tenure -->
    <div class="mb-5">
      <label class="block text-sm text-darkSecondary mb-1">
        Tenure (Years)
      </label>
      <input
        id="loanTenure"
        type="number"
        placeholder="e.g. 20"
        class="w-full px-3 py-2 border border-borderGrey rounded-md focus:outline-none focus:ring-2 focus:ring-primary"
      />
    </div>

    <!-- Calculate -->
    <button
      onclick="calculateEMI()"
      class="w-full bg-primary text-white py-3 rounded-md font-medium hover:opacity-90 transition"
    >
      Calculate EMI
    </button>

    <!-- Result -->
    <div
      id="emiResult"
      class="mt-4 bg-lightGrey text-center py-3 rounded-md font-semibold text-dark"
    ></div>
  </div>
</div>
</footer>
<script>

 const menuBtn = document.getElementById("menuBtn");
  const mobileMenu = document.getElementById("mobileMenu");

  // Toggle menu
  menuBtn.addEventListener("click", (e) => {
    e.stopPropagation();
    mobileMenu.classList.toggle("hidden");
  });

  // Close menu when clicking outside
  document.addEventListener("click", (e) => {
    if (!mobileMenu.contains(e.target) && !menuBtn.contains(e.target)) {
      mobileMenu.classList.add("hidden");
    }
  });

  // Close menu when clicking a link
  mobileMenu.querySelectorAll("a").forEach(link => {
    link.addEventListener("click", () => {
      mobileMenu.classList.add("hidden");
    });
  });

	 function toggleShow(){
          const discription = document.getElementById("discription");
          if(discription.style.display == "none"){
           discription.style.display = "block"
        }
          else{
            discription.style.display = "none"
          }
        };

		 const formclose = document.getElementById("formclose");
            const showform = document.getElementById("showform");


            function togglePops() {
                formclose.classList.toggle("hidden");
                showform.classList.toggle("hidden");
            }

            function showForm() {
                if (formclose.classList.contains("hidden")) {
                    formclose.classList.remove("hidden");
                    showform.classList.add("hidden");
                } else {
                    formclose.classList.add("hidden");
                    showform.classList.remove("hidden");
                }
            }

 const projectInput = document.getElementById("projectFilter");
const locationInput = document.getElementById("locationFilter");
const budgetInput = document.getElementById("budgetFilter");
const cards = document.querySelectorAll(".project-card");
const suggestionBox = document.getElementById("projectSuggestions");

document.addEventListener("DOMContentLoaded", () => {

  const projectInput = document.getElementById("projectFilter");
  const suggestionBox = document.getElementById("projectSuggestions");
  const cards = document.querySelectorAll(".project-card");

  // DEBUG (optional)
  console.log("Cards found:", cards.length);

  const projectNames = Array.from(cards)
    .map(card => card.getAttribute("data-name"))
    .filter(Boolean);

  console.log("Project names:", projectNames);

  projectInput.addEventListener("input", () => {
    const value = projectInput.value.toLowerCase();
    suggestionBox.innerHTML = "";

    if (!value) {
      suggestionBox.classList.add("hidden");
      return;
    }

    const matches = projectNames.filter(name =>
      name.toLowerCase().includes(value)
    );

    if (matches.length === 0) {
      suggestionBox.classList.add("hidden");
      return;
    }

    matches.forEach(name => {
      const li = document.createElement("li");
      li.textContent = name;
      li.className =
        "px-4 py-2 cursor-pointer hover:bg-gray-100 text-sm";

      li.onclick = () => {
        projectInput.value = name;
        suggestionBox.classList.add("hidden");
      };

      suggestionBox.appendChild(li);
    });

    suggestionBox.classList.remove("hidden");
  });

  // Hide on outside click
  document.addEventListener("click", e => {
    if (!projectInput.contains(e.target)) {
      suggestionBox.classList.add("hidden");
    }
  });

});

function filterProjects() {
  const projectVal = projectInput.value.toLowerCase();
  const locationVal = locationInput.value.toLowerCase();
  const budgetVal = budgetInput.value;

  cards.forEach(card => {
    const name = card.dataset.name.toLowerCase();
    const location = card.dataset.location.toLowerCase();
    const price = parseFloat(card.dataset.price);

    let budgetMatch = true;
    if (budgetVal === "1") budgetMatch = price < 1;
    if (budgetVal === "1-1.5") budgetMatch = price >= 1 && price <= 1.5;
    if (budgetVal === "1.5-2") budgetMatch = price > 1.5 && price <= 2;
    if (budgetVal === "2+") budgetMatch = price > 2;

    const show =
      name.includes(projectVal) &&
      location.includes(locationVal) &&
      budgetMatch;

    card.style.display = show ? "block" : "none";
  });
}

locationInput.addEventListener("input", filterProjects);
budgetInput.addEventListener("change", filterProjects);    

function openEmiPopup() {
  document.getElementById("emiPopup").style.display = "block";
}

function closeEmiPopup() {
  document.getElementById("emiPopup").style.display = "none";
}

function calculateEMI() {
  const P = parseFloat(document.getElementById("loanAmount").value);
  const R = parseFloat(document.getElementById("interestRate").value) / 12 / 100;
  const N = parseFloat(document.getElementById("loanTenure").value) * 12;

  if (!P || !R || !N) {
    document.getElementById("emiResult").innerHTML = "Please enter all values";
    return;
  }

  const EMI = (P * R * Math.pow(1 + R, N)) / (Math.pow(1 + R, N) - 1);
  document.getElementById("emiResult").innerHTML =
    `Monthly EMI: ₹ ${EMI.toFixed(2)}`;
}
</script>
</body>

</html>