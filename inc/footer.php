<footer class="bg-white border-t border-borderGrey py-12">
<div class="fixed bottom-20 right-6 z-50">
  <a href="https://wa.me/+919873702365"
    class="whatsapp-btn w-12 h-12 rounded-full flex items-center justify-center relative">
    <img src="assets/img/whatapp-image.webp" alt="WhatsApp" class="z-10">
    <span class="outer-ring"></span>
  </a>
  <a href="https://"
    class="whatsapp-btn w-12 h-12 rounded-full flex items-center justify-center relative mt-2">
    <img src="assets/img/Call-Now.webp" alt="Call Now" class="z-10">
    <span class="outer-ring"></span>
  </a>
</div>
	  <div class="container flex justify-center mx-auto px-6 mb-5">
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
</script>
</body>

</html>