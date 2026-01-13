<?php include 'inc/head.php'; ?>
<?php include 'inc/header.php'; ?>

	<section class="relative h-[85vh] pt-20">
		<div class="swiper heroSwiper h-full">
			<div class="swiper-wrapper">
				<div class="swiper-slide relative">
					<img src="assets/img/zoom-image-head-bg.jpg" class="w-full h-full object-cover" alt="Luxury Property">
					<div class="absolute inset-0 bg-black/40 flex items-center">
						<div class="container mx-auto px-4">
							<span class="text-primary font-bold uppercase tracking-widest bg-white px-4 py-1">New Launch</span>
							<h1 class="text-white text-5xl md:text-7xl font-teko uppercase mt-4">Ganga Realty <br><span class="text-primary">Sector 89, Gurugram</span></h1>
							<p class="text-white/90 text-xl mt-4 max-w-xl">Luxury Independent Floors starting from ₹2.10 Cr* in a 5.5 Acre Gated Community.</p>
							<button class="mt-8 bg-primary text-white px-10 py-4 font-bold uppercase hover:bg-white hover:text-primary transition">Get Best Offer</button>
						</div>
					</div>
				</div>
				<div class="swiper-slide relative">
					<img src="assets/img/banner.png" class="w-full h-full object-cover" alt="Modern Architecture">
					<div class="absolute inset-0 bg-black/50 flex items-center">
						<div class="container mx-auto px-4 text-center">
							<h2 class="text-white text-6xl font-teko uppercase">Modern Living Spaces</h2>
							<p class="text-white/80 text-lg mt-2 italic">Premium Flats Near Dwarka Expressway</p>
							<div class="mt-8 flex justify-center gap-4">
								<button class="bg-primary text-white px-8 py-3 font-bold uppercase">View Floor Plans</button>
								<button class="bg-white text-dark px-8 py-3 font-bold uppercase">Location Map</button>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide relative">
					<img src="img/zoom-slide-image-v-0.png" class="w-full h-full object-cover" alt="Interior Design">
					<div class="absolute inset-0 bg-gradient-to-r from-black/80 to-transparent flex items-center">
						<div class="container mx-auto px-4">
							<h2 class="text-white text-6xl font-teko uppercase">Experience <br>Unmatched Luxury</h2>
							<p class="text-white/70 text-lg mt-4 max-w-md">World-class amenities including clubhouse, gym, and landscaped gardens.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
			<div class="swiper-pagination"></div>
		</div>
	</section>

	<section id="projects" class="py-20 bg-lightGrey">
		<div class="container mx-auto px-4">
			<div class="flex flex-col md:flex-row justify-between items-end mb-12">
				<div>
					<h2 class="text-primary font-bold uppercase tracking-widest">Our Portfolio</h2>
					<h3 class="text-4xl md:text-5xl font-teko uppercase leading-none">Featured Projects on Dwarka Expressway</h3>
				</div>
				<p class="text-gray-500 max-w-xs mt-4 md:mt-0">Handpicked luxury residences offering the best ROI and lifestyle.</p>
			</div>

			<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
				<div class="bg-white group border border-borderGrey hover:shadow-2xl transition duration-500">
					<div class="overflow-hidden relative">
						<img src="img/zoom-slide-image-a-6.png" class="w-full h-64 object-cover group-hover:scale-110 transition duration-500" alt="M3M Capital">
						<div class="absolute top-4 left-4 bg-primary text-white text-xs font-bold px-3 py-1 uppercase">Ready to Move</div>
					</div>
					<div class="p-6">
						<h4 class="text-2xl font-teko uppercase font-semibold">M3M Capital 113</h4>
						<p class="text-gray-400 text-sm mb-4">Sector 113, Dwarka Expressway</p>
						<div class="flex justify-between items-center border-t border-borderGrey pt-4">
							<span class="text-xl font-bold text-dark">₹1.85 Cr*</span>
							<a href="#" class="text-primary font-bold text-sm uppercase hover:underline">View Project</a>
						</div>
					</div>
				</div>

				<div class="bg-white group border border-borderGrey hover:shadow-2xl transition duration-500">
					<div class="overflow-hidden relative">
						<img src="img/zoom-slide-image-i-4.png" class="w-full h-64 object-cover group-hover:scale-110 transition duration-500" alt="Godrej Meridien">
						<div class="absolute top-4 left-4 bg-black text-white text-xs font-bold px-3 py-1 uppercase">Luxury Only</div>
					</div>
					<div class="p-6">
						<h4 class="text-2xl font-teko uppercase font-semibold">Godrej Meridien</h4>
						<p class="text-gray-400 text-sm mb-4">Sector 106, Dwarka Expressway</p>
						<div class="flex justify-between items-center border-t border-borderGrey pt-4">
							<span class="text-xl font-bold text-dark">₹2.40 Cr*</span>
							<a href="#" class="text-primary font-bold text-sm uppercase hover:underline">View Project</a>
						</div>
					</div>
				</div>

				<div class="bg-white group border border-borderGrey hover:shadow-2xl transition duration-500">
					<div class="overflow-hidden relative">
						<img src="img/zoom-slide-image-v-1.png" class="w-full h-64 object-cover group-hover:scale-110 transition duration-500" alt="Sobha City">
						<div class="absolute top-4 left-4 bg-primary text-white text-xs font-bold px-3 py-1 uppercase">New Launch</div>
					</div>
					<div class="p-6">
						<h4 class="text-2xl font-teko uppercase font-semibold">Sobha City Vista</h4>
						<p class="text-gray-400 text-sm mb-4">Sector 108, Gurugram</p>
						<div class="flex justify-between items-center border-t border-borderGrey pt-4">
							<span class="text-xl font-bold text-dark">₹3.10 Cr*</span>
							<a href="#" class="text-primary font-bold text-sm uppercase hover:underline">View Project</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="contact" class="py-20 bg-dark text-white">
		<div class="container mx-auto px-4">
			<div class="max-w-4xl mx-auto bg-white p-8 md:p-12 text-dark relative">
				<div class="grid md:grid-cols-2 gap-12">
					<div>
						<h2 class="text-4xl font-teko uppercase font-bold leading-none mb-4">Request a <br><span class="text-primary">Site Visit</span> Today</h2>
						<p class="text-gray-500 mb-8">Fill out the form below and our property expert will get back to you with the best inventory and exclusive pricing.</p>
						<div class="space-y-4">
							<div class="flex items-center gap-4">
								<div class="w-10 h-10 bg-lightGrey flex items-center justify-center text-primary"><i class="ri-phone-fill"></i></div>
								<span class="font-bold">+91 9354902932</span>
							</div>
							<div class="flex items-center gap-4">
								<div class="w-10 h-10 bg-lightGrey flex items-center justify-center text-primary"><i class="ri-mail-fill"></i></div>
								<span class="font-bold">info@dwarkaexpresswayncr.com</span>
							</div>
						</div>
					</div>
					<form action="email.php" method="POST" class="space-y-4">
						<input type="text" placeholder="Full Name" class="w-full border-b border-borderGrey p-3 focus:outline-none focus:border-primary transition bg-lightGrey">
						<input type="email" placeholder="Email Address" class="w-full border-b border-borderGrey p-3 focus:outline-none focus:border-primary transition bg-lightGrey">
						<input type="text" placeholder="Phone Number" class="w-full border-b border-borderGrey p-3 focus:outline-none focus:border-primary transition bg-lightGrey">
						<button type="submit" class="w-full bg-primary text-white py-4 font-bold uppercase hover:bg-black transition mt-4">Download Price List</button>
					</form>
				</div>
			</div>
		</div>
	</section>

<?php include 'inc/footer.php'; ?>