<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Creat Your Cv</title>
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
	<style>
		[x-cloak] {
			display: none;
            
		}

		@media print {
			.no-printme  {
				display: none;
			}
			.printme  {
				display: block;
			}
			body {
				line-height: 1.2;
                
			}
		}

		@page {
            
			size: A4 portrait;
			counter-increment: page;
		}

		/* Datepicker */
		.date-input {
			background-color: #fff;
			border-radius: 10px;
			padding: 0.5rem 1rem;
			z-index: 2000;
			margin: 3px 0 0 0;
			border-top: 1px solid #eee;
			box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
				0 4px 6px -2px rgba(0, 0, 0, 0.05);
		}
		.date-input.is-hidden {
			display: none;
		}
		.date-input .pika-title {
			padding: 0.5rem;
			width: 100%;
			text-align: center;
		}
		.date-input .pika-prev,
		.date-input .pika-next {
			margin-top: 0;
			/* margin-top: 0.5rem; */
			padding: 0.2rem 0;
			cursor: pointer;
			color: #4299e1;
			text-transform: uppercase;
			font-size: 0.85rem;
		}
		.date-input .pika-prev:hover,
		.date-input .pika-next:hover {
			text-decoration: underline;
		}
		.date-input .pika-prev {
			float: left;
		}
		.date-input .pika-next {
			float: right;
		}
		.date-input .pika-label {
			display: inline-block;
			font-size: 0;
		}
		.date-input .pika-select-month,
		.date-input .pika-select-year {
			display: inline-block;
			border: 1px solid #ddd;
			color: #444;
			background-color: #fff;
			border-radius: 10px;
			font-size: 0.9rem;
			padding-left: 0.5em;
			padding-right: 0.5em;
			padding-top: 0.25em;
			padding-bottom: 0.25em;
			appearance: none;
		}
		.date-input .pika-select-month:focus,
		.date-input .pika-select-year:focus {
			border-color: #cbd5e0;
			outline: none;
		}
		.date-input .pika-select-month {
			margin-right: 0.25em;
		}
		.date-input table {
			width: 100%;
			border-collapse: collapse;
			margin-bottom: 0.2rem;
		}
		.date-input table th {
			width: 2em;
			height: 2em;
			font-weight: normal;
			color: #718096;
			text-align: center;
		}
		.date-input table th abbr {
			text-decoration: none;
		}
		.date-input table td {
			padding: 2px;
		}
		.date-input table td button {
			/* border: 1px solid #e2e8f0; */
			width: 1.8em;
			height: 1.8em;
			text-align: center;
			color: #555;
			border-radius: 10px;
		}
		.date-input table td button:hover {
			background-color: #bee3f8;
		}
		.date-input table td.is-today button {
			background-color: #ebf8ff;
		}
		.date-input table td.is-selected button {
			background-color: #3182ce;
		}
		.date-input table td.is-selected button {
			color: white;
		}
		.date-input table td.is-selected button:hover {
			color: white;
		}
        
        

        
	</style>
    
    
</head>
<body>
<!-- partial:index.partial.html -->
<body class="antialiased sans-serif">
	<div class="border-t-8 border-gray-700 h-2"></div>
	<div 
		class="container mx-auto py-6 px-4"
		x-data="invoices()"
		x-init="generateInvoiceNumber(111111, 999999);"
		x-cloak
	>
		<div class="flex justify-between">
			<h2 class="text-2xl font-bold mb-6 pb-2 tracking-wider uppercase">Creat Your CV</h2>
			<div>
				<div class="relative mr-4 inline-block">
					<div class="text-gray-500 cursor-pointer w-10 h-10 rounded-full bg-gray-100 hover:bg-gray-300 inline-flex items-center justify-center" @mouseenter="showTooltip = true" @mouseleave="showTooltip = false" @click="printInvoice()">
						<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-printer" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
							<path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
							<path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
							<rect x="7" y="13" width="10" height="8" rx="2" />
						</svg>				  
					</div>
					<div x-show.transition="showTooltip" class="z-40 shadow-lg text-center w-32 block absolute right-0 top-0 p-2 mt-12 rounded-lg bg-gray-800 text-white text-xs">
						Print Your Cv!
					</div>
				</div>
                
                

                
				
                
                
              	<div class="relative inline-block">
					<div class="text-gray-500 cursor-pointer w-10 h-10 rounded-full bg-gray-100 hover:bg-gray-300 inline-flex items-center justify-center" @mouseenter="showTooltip2 = true" @mouseleave="showTooltip2 = false" @click="window.location.reload()">
						<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-refresh" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
							<path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -5v5h5" />
							<path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 5v-5h-5" />
						</svg>	  
					</div>
					<div x-show.transition="showTooltip2" class="z-40 shadow-lg text-center w-32 block absolute right-0 top-0 p-2 mt-12 rounded-lg bg-gray-800 text-white text-xs">
						Reload Page
					</div>
				</div>
			</div>
		</div>

		<div class="flex mb-8 justify-between">
			<div class="w-2/4">
				<div class="mb-2 md:mb-1 md:flex items-center">
					<label class="w-32 text-gray-800 block font-bold text-sm uppercase tracking-wide">Full Name</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1">
					<input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-48 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="Add Your Name...." x-model="from.name">
					</div>
				</div>


                	<div class="mb-2 md:mb-1 md:flex items-center">
					<label class="w-32 text-gray-800 block font-bold text-sm uppercase tracking-wide">Email :</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1">
					<input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-48 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="email" placeholder="Add Your Email...." x-model="from.email">
					</div>
				</div>
                
                
                	<div class="mb-2 md:mb-1 md:flex items-center">
					<label class="w-32 text-gray-800 block font-bold text-sm uppercase tracking-wide">Phone :</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1">
					<input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-48 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="email" placeholder="Add Your Phone...." x-model="from.phone">
					</div>
				</div>
                
                  	<div class="mb-2 md:mb-1 md:flex items-center">
					<label class="w-32 text-gray-800 block font-bold text-sm uppercase tracking-wide">Address :</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1">
					<input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-48 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="email" placeholder="Add City,Country.." x-model="from.address">
					</div>
				</div>
            

				<div class="mb-2 md:mb-1 md:flex items-center">
					<label class="w-32 text-gray-800 block font-bold text-sm uppercase tracking-wide">Date Of Birth</label>
					<span class="mr-4 inline-block hidden md:block">:</span>
					<div class="flex-1">
					<input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-48 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500 js-datepicker-2" id="datepicker2" type="text" placeholder="eg. 17 Mar, 2020" x-model="invoiceDueDate" x-on:change="invoiceDueDate = document.getElementById('datepicker2').value" autocomplete="off" readonly>
					</div>
				</div>
			</div>
			<div>
				<div class="w-32 h-32 mb-1 border rounded-lg overflow-hidden relative bg-gray-100">
					<img id="image" class="object-cover w-full h-32" src="https://placehold.co/300x300/e2e8f0/e2e8f0" />
					
					<div class="absolute top-0 left-0 right-0 bottom-0 w-full block cursor-pointer flex items-center justify-center" onClick="document.getElementById('fileInput').click()">
						<button type="button"
							style="background-color: rgba(255, 255, 255, 0.65)"
							class="hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 text-sm border border-gray-300 rounded-lg shadow-sm"
						>
							<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-camera" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
								<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
								<path d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
								<circle cx="12" cy="13" r="3" />
							</svg>							  
						</button>
					</div>
				</div>
				<input name="photo" id="fileInput" accept="image/*" class="hidden" type="file" onChange="let file = this.files[0]; 
					var reader = new FileReader();

					reader.onload = function (e) {
						document.getElementById('image').src = e.target.result;
						document.getElementById('image2').src = e.target.result;
					};
				
					reader.readAsDataURL(file);
				">
			</div>
		</div>

        <div>
            
        
                
                
                
        <div class="flex flex-wrap justify-between mb-8">
			<div class="w-full md:w-1/3 mb-2 md:mb-0">
				<label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">Language :</label>
                <p>Kurdish:</p>
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="eg.. native/good/bad" x-model="from.text1">
                <p>English:</p>
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="eg.. native/good/bad" x-model="from.text2">
                <p>Arabic</p>
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="eg.. native/good/bad" x-model="from.text3">
			</div>
        </div>
      
                        

          <form>
             <div class="flex flex-wrap justify-between mb-8">
			
				<label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">certifications :</label>
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text54">
                 
                 <input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text55">
                 
                 <input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text56">
            </div>
              
           
            <div class="flex flex-wrap justify-between mb-8">
			<div class="w-full md:w-1/15 mb-2 md:mb-0">
				<label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">Skills :</label>
                
                
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text4">
                
                
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text5">
                
                
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text6">
                 
              
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text7">
                
                 
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text20">
                
                 
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text21">
                
                 
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text22">
                
                 
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text23">
                
                
                <input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text41">
                
                <input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text42">
			</div>
        
                  <br>
        <div>
            <br>
                
            <div class="flex flex-wrap justify-between mb-8">
			
				<label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">Skills Highlights :</label>
            
                
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text8">
                
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text9">
               
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text10">
               
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text24">
                
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text25">
               
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text26">
               
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text27">
               
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text28">
                
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text29">
                
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text30">
			</div>
                </div>
        
             
                 
			<div class="w-full md:w-1/3 mb-2 md:mb-0">
                <br>
				<label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">Experience:</label>
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text43">
                
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text44">
               
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text45">
                
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text46">
                
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text47">
               
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text48">
               
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text49">
              
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text50">
              
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text51">
                
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text52">
                
                <input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text53">
                
                </div>
               
	             <div class="flex flex-wrap justify-between mb-8">
			
				<label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">Computer Skills :</label>
            
                
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text31">
                
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text32">
               
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text33">
                
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text34">
                
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text35">
               
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text36">
               
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text37">
              
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text38">
              
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text39">
                
				<input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="." x-model="from.text40">
			</div>
                </div>
                  
                      </form>
                      
                      
                      
	    <template x-for="invoice in items" :key="invoice.id">
			<div class="flex -mx-1 py-2 border-b">
				<div class="flex-1 px-1">
					<p class="text-gray-800" x-text="invoice.name"></p>
				</div>

				<div class="px-1 w-20 text-right">
					<p class="text-gray-800" x-text="invoice.qty"></p>
				</div>

				<div class="px-1 w-32 text-right">
					<p class="text-gray-800" x-text="numberFormat(invoice.rate)"></p>
				</div>

				<div class="px-1 w-32 text-right">
					<p class="text-gray-800" x-text="numberFormat(invoice.total)"></p>
				</div>

				<div class="px-1 w-20 text-right">
					<a href="#" class="text-red-500 hover:text-red-600 text-sm font-semibold" @click.prevent="deleteItem(invoice.id)">Delete</a>
				</div>
			</div>
		</template>

		
        

                  

		<!-- Print Template -->
		<div id="js-print-template" x-ref="printTemplate" class="hidden">
			<div class="mb-8 flex justify-between">
				<div>
					<h2 class="text-3xl font-bold mb-6 pb-2 tracking-wider uppercase"></h2>

					<div class="mb-1 flex items-center">
						<label class="w-32 text-gray-800 block font-bold text-xs uppercase tracking-wide">Name..</label>
						<span class="mr-4 inline-block">:</span>
						<div x-text="from.name"></div>
					</div>
		
					
                    	<div class="mb-1 flex items-center">
						<label class="w-32 text-gray-800 block font-bold text-xs uppercase tracking-wide">Email..</label>
						<span class="mr-4 inline-block">:</span>
						<div x-text="from.email"></div>
					</div>
                    
                    	<div class="mb-1 flex items-center">
						<label class="w-32 text-gray-800 block font-bold text-xs uppercase tracking-wide">Phone..</label>
						<span class="mr-4 inline-block">:</span>
						<div x-text="from.phone"></div>
					</div>
                    
                    	<div class="mb-1 flex items-center">
						<label class="w-32 text-gray-800 block font-bold text-xs uppercase tracking-wide">Address..</label>
						<span class="mr-4 inline-block">:</span>
						<div x-text="from.address"></div>
					</div>
                    
					<div class="mb-1 flex items-center">
						<label class="w-32 text-gray-800 block font-bold text-xs uppercase tracking-wide">Date Of Birth</label>
						<span class="mr-4 inline-block">:</span>
						<div x-text="invoiceDueDate"></div>
					</div>
				</div>
				<div class="pr-5">
					<div class="w-32 h-32 mb-1 overflow-hidden">
						<img id="image2" class="object-cover w-20 h-20" />
					</div>
				</div>
			</div>

			<div class="flex justify-between mb-10">
				<div class="w-1/2">
					<label class="text-gray-800 block mb-2 font-bold text-xs uppercase tracking-wide">Language:</label>
					<div>
                    <div>
						<a> Kurdish :<div x-text="from.text1"></div></a><br>
						<a>English :<div x-text="from.text2"></div></a><br>
						<a>Arabic<div x-text="from.text3"></div></a>
					</div>
				</div>
                    </div>
                <div>
                     <div>
                	<div class="flex justify-between mb-10">
				<div class="w-1/2">
					<label class="text-gray-800 block mb-2 font-bold text-xs uppercase tracking-wide">Certifications:</label>
					<div>
						<div x-text="from.text54"></div>
                        <div x-text="from.text55"></div>
                        <div x-text="from.text56"></div>
						
					</div>
				</div>
                </div>   </div>      
                             <br>    
                    <div>
				<div class="flex justify-between mb-10">
				<div class="w-1/2">
					<label class="text-gray-800 block mb-2 font-bold text-xs uppercase tracking-wide">Skills:</label>
					<div>
						<div x-text="from.text4"></div>
						<div x-text="from.text5"></div>
						<div x-text="from.text6"></div>
                        <div x-text="from.text7"></div>
                        <div x-text="from.text20"></div>
                        <div x-text="from.text21"></div>
                        <div x-text="from.text22"></div>
                        <div x-text="from.text23"></div>
                        <div x-text="from.text41"></div>
                        <div x-text="from.text42"></div>
                  
					</div>
				</div>
</div>
	
                             <div>
				<div class="flex justify-between mb-10">
				<div class="w-1/2">
					<label class="text-gray-800 block mb-2 font-bold text-xs uppercase tracking-wide">Skills Highlight:</label>
					<div>
						<div x-text="from.text8"></div>
						<div x-text="from.text9"></div>
						<div x-text="from.text10"></div>
                        <div x-text="from.text24"></div>
                        <div x-text="from.text25"></div>
                        <div x-text="from.text26"></div>
                        <div x-text="from.text27"></div>
                        <div x-text="from.text28"></div>
                        <div x-text="from.text29"></div>
                        <div x-text="from.text30"></div>
                       
					</div>
				</div>
</div>
                                 
                                 	<div class="flex justify-between mb-10">
				<div class="w-1/2">
					<label class="text-gray-800 block mb-2 font-bold text-xs uppercase tracking-wide">Computer Skills:</label>
					<div>
						<div x-text="from.text31"></div>
						<div x-text="from.text32"></div>
						<div x-text="from.text33"></div>
                        <div x-text="from.text34"></div>
                        <div x-text="from.text35"></div>
                        <div x-text="from.text36"></div>
                        <div x-text="from.text37"></div>
                        <div x-text="from.text38"></div>
                        <div x-text="from.text39"></div>
                        <div x-text="from.text40"></div>
                       
					</div>
				</div>
</div>
                                 
                                 
	                      <div>
                	<div class="flex justify-between mb-10">
				<div class="w-1/2">
					<label class="text-gray-800 block mb-2 font-bold text-xs uppercase tracking-wide">Experience:</label>
					<div>
							<div x-text="from.text31"></div>
						<div x-text="from.text43"></div>
						<div x-text="from.text44"></div>
                        <div x-text="from.text45"></div>
                        <div x-text="from.text48"></div>
                        <div x-text="from.text49"></div>
                        <div x-text="from.text50"></div>
                        <div x-text="from.text51"></div>
                        <div x-text="from.text52"></div>
                        <div x-text="from.text53"></div>
						
					</div>
				</div>
                </div>   </div>      
                                 
                                 
                              
                                 
                        

		<!-- Modal -->
		<div style=" background-color: rgba(0, 0, 0, 0.8)" class="fixed z-40 top-0 right-0 left-0 bottom-0 h-full w-full" x-show.transition.opacity="openModal">
			<div class="p-4 max-w-xl mx-auto relative absolute left-0 right-0 overflow-hidden mt-24">
				<div class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer"
					x-on:click="openModal = !openModal">
					<svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path
							d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
					</svg>
				</div>



	</div>
	
	<script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
	<script>
        window.addEventListener('DOMContentLoaded', function() {
			const today = new Date();
		
            var picker = new Pikaday({
				keyboardInput: false,
				field: document.querySelector('.js-datepicker'),
				format: 'MMM D YYYY',
				theme: 'date-input',
				i18n: {
					previousMonth: "Prev",
					nextMonth: "Next",
					months: [
						"Jan",
						"Feb",
						"Mar",
						"Apr",
						"May",
						"Jun",
						"Jul",
						"Aug",
						"Sep",
						"Oct",
						"Nov",
						"Dec"
					],
					weekdays: [
						"Sunday",
						"Monday",
						"Tuesday",
						"Wednesday",
						"Thursday",
						"Friday",
						"Saturday"
					],
					weekdaysShort: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"]
				}
			});
			picker.setDate(new Date());

			var picker2 = new Pikaday({
				keyboardInput: false,
				field: document.querySelector('.js-datepicker-2'),
				format: 'MMM D YYYY',
				theme: 'date-input',
				i18n: {
					previousMonth: "Prev",
					nextMonth: "Next",
					months: [
						"Jan",
						"Feb",
						"Mar",
						"Apr",
						"May",
						"Jun",
						"Jul",
						"Aug",
						"Sep",
						"Oct",
						"Nov",
						"Dec"
					],
					weekdays: [
						"Sunday",
						"Monday",
						"Tuesday",
						"Wednesday",
						"Thursday",
						"Friday",
						"Saturday"
					],
					weekdaysShort: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"]
				}
             
			});
			picker2.setDate(new Date());
		});

		function invoices() {
			return {
				items: [],
				name: '',
				email:'',
                phone:'',
                address:'',
				invoiceDueDate: '',

				totalGST: 0,
				netTotal: 0,



				language: {
					name: '',
					name: '',
					name: ''
				},
				from: {
					name: '',
					address: '',
					extra: ''
				},

				showTooltip: false,
				showTooltip2: false,
				openModal: false,


			

				generateUUID() {
					return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
						var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
						return v.toString(16);
					});
				},

				generateInvoiceNumber(minimum, maximum) {
					const randomNumber = Math.floor(Math.random() * (maximum - minimum)) + minimum;
					this.invoiceNumber = '#INV-'+ randomNumber;
				},

				numberFormat(amount) {
					return amount.toLocaleString("en-US", {
						style: "currency",
						currency: "INR"
					});
				},

				printInvoice() {
					var printContents = this.$refs.printTemplate.innerHTML;
					var originalContents = document.body.innerHTML;

					document.body.innerHTML = printContents;
					window.print();
					document.body.innerHTML = originalContents;
				}
			}
		}
	</script>
                                 </div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></body></body></html>

			    <div class="py-10 text-center">
			<p class="text-gray-600">Created by Arez.  <a class="text-blue-600 hover:text-blue-500 border-b-2 border-blue-200 hover:border-blue-300" href="https://twitter.com/arez_nawzad?s=21">@Twitter</a>. <a class="text-blue-600 hover:text-blue-500 border-b-2 border-blue-200 hover:border-blue-300" href="https://www.facebook.com/profile.php?id=100074095345256">@Facebook</a> <a href=" https://instagram.com/pinki.rema?utm_medium=copy_link" class="text-blue-600 hover:text-blue-500 border-b-2 border-blue-200 hover:border-blue-300">@Instagram</a>.
		</div>
                  