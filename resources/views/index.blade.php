<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website /></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
      <script>
    tailwind.config = {
  theme: {
    extend: {
      colors: {
        'primary': '#121212',
        'color-hover': '#1F1E1E',
        'red-text': '#FF0000',
        'round-red': '#8B0C0C',
        'facebook': '#3b5998',
        'twitter': '#00acee',
        'youtube': '#c4302b',
        'instagram': '#3f729b',
      }
    },
  },
    }
  </script>
</head>

<body class="font-inter bg-primary">
    @if($message = Session::get('succes'))
    <script>
        Swal.fire({
            title: "Thank You",
            text: "{{ Session::get('succes') }}",
            // background: "#00C853"
            // color: "#FAFAFA",
            icon: "success"
        });
    </script>
@endif
    <header class="text-white w-full text-base fixed">
        <nav class="hover:bg-color-hover text-center flex py-4 items-center justify-between transition ease-in-out duration-500">
            <!-- navbar kiri -->
            <div class="ml-28">
                <a href="#home" class="text-red-text text-xl italic">Z</a>
                <a href="#home" class="italic -ml-2">D</a>
                <a href="#home" class="italic"><span class="text-red-text italic">Z</span>idane</a>
                <a href="#home" class="italic -ml-1"><span class="text-red-text italic">D</span>ev.</a>
            </div>

            <!-- navbar kanan -->
            <div class="hidden md:flex space-x-4 mr-36">
                <a href="#home" class="hover:text-red-text transition ease-in-out duration-500">Home</a>
                <a href="#services" class="hover:text-red-text transition ease-in-out duration-500">Services</a>
                <a href="#portfolio" class="hover:text-red-text transition ease-in-out duration-500">Portfolio</a>
                <a href="#about" class="bg-red-text hover:bg-yellow-500 hover:text-black rounded-md w-24 py-1 -mt-1 transition ease-in-out duration-500">About Me</a>
                <a href="{{ route('login') }}" class="hover:text-red-text transition ease-in-out duration-500">Login</a>
            </div>

            <div class="mr-16 md:hidden">
                <button class="text-white" id="mobile-menu-button">
                    <i data-feather="menu"></i>
                </button>
            </div>
        </nav>
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="mr-24 bg-color-hover mx-auto w-full text-center">
                <a href="#" class="hover:text-red-text block py-1 hover:bg-primary mb-2 rounded-md">Home</a>
                <a href="#" class="hover:text-red-text block py-1 hover:bg-primary mb-2 rounded-md">Services</a>
                <a href="#" class="hover:text-red-text block py-1 hover:bg-primary mb-2 rounded-md">Portfolio</a>
                <a href="#" class="hover:bg-red-text rounded-md py-1 block text">About Me</a>
            </div>
        </div>
    </header>
    <!-- section home -->
    <section name="home" id="home" class="max-w-full mx-auto flex py-48 px-0 justify-between">
        <!-- intro nama -->
        <div class="ml-28">
            <h3 class="text-2xl text-red-text pb-2">Zidane Developer /></h3>
            <h1 class="text-5xl text-white pb-3">Software Engineer.</h1>

            <div class="text-sm">
            <p class="text-white"><span class="text-red-text">Zidane</span>, a software engineer, develops various projects including e-commerce applications</p>
            <p class="text-white">and inventory management systems with innovative and efficient solutions.</p>
            </div>

            <div class="py-7 flex space-x-4">
                <div class="rounded-full mr-4">
                    <a href="./src/hallo.txt" target="_blank" class="text-white hover:bg-red-text p-2 px-10 rounded-full border-2 border-red-text transition ease-in-out duration-300">Download CV</a>
                </div>
                <div class="flex space-x-7 text-zinc-600">
                    <a href="#" target="_blank">
                        <i data-feather="facebook" class="hover:text-facebook"></i>
                    </a>
                    <a href="https://twitter.com/Se69xHa" target="_blank">
                        <i data-feather="twitter" class="hover:text-twitter"></i>
                    </a>
                    <a href="#" target="_blank">
                        <i data-feather="youtube" class="hover:text-youtube"></i>
                    </a>
                    <a href="https://www.instagram.com/zdn.rzky/" target="_blank">
                        <i data-feather="instagram" class="hover:text-instagram"></i>
                    </a>
                    <a href="https://github.com/zdnrzkyr" target="_blank">
                        <i data-feather="github" class="hover:text-white"></i>
                    </a>
                </div>
            </div>
        </div>
            <!-- intro gambar -->
            <div class="mr-36 flex -mt-12 bg-color-hover rounded-full p-3 hover:bg-round-red transition ease-in-out duration-300">
                <img src="{{asset('img/user.jpg')}}" class="rounded-full w-72 ">
            </div>
    </section>

    <section name="services" id="services" class="max-w-full mx-auto block py-36 px-0">
        <div class="ml-28">
           <h1 class="text-5xl text-white pb-2">My Best <span class="text-5xl text-red-text">Services</span></h1> 
        </div>
        <div class="ml-28 text-white  text-sm block">
            <p>My web portfolio offers top-notch website design and development services tailored</p>
            <p class="pb-3">to enhance your online presence effectively.</p>        

        <div class="w-[1020px] h-[476px] bg-color-hover rounded-xl mt-7">
            <div class="grid grid-cols-4 grid-rows-1 mx-11 pt-11 gap-4">
                <div class="bg-primary text-center w-[300px] h-[190px] rounded-md border-2 border-red-text ">
                    <h1 class="text-2xl pt-5">Graphic Design</h1>
                    <h3 class="text-sm text-center py-4 px-5">
                        My web portfolio offers top-notch
                        website design and development
                        services tailored to enhance your
                        online presence effectively.
                    </h3>
                </div>
                <div class="bg-red-text text-center w-[300px] h-[190px] rounded-md ml-20">
                    <h1 class="text-2xl pt-5">Web Design</h1>
                    <h3 class="text-base text-center py-4 px-5">
                        Blending creativity and functionality to shape memorable online experiences.
                    </h3>
                </div>
                <div class="bg-primary text-center w-[300px] h-[190px] rounded-md ml-40 border-2 border-red-text">
                    <h1 class="text-2xl pt-5">Digital Marketing</h1>
                    <h3 class="text-sm text-center py-4 px-5">
                        Strategically crafting campaigns to reach and resonate with target audiences effectively.
                    </h3>
                </div>   
                <div class="row-start-2 bg-red-text text-center w-[300px] h-[190px] rounded-md">
                    <h1 class="text-2xl pt-5">Web Development</h1>
                    <h3 class="text-base text-center py-4 px-5">
                        Transforming ideas into interactive and seamless digital experiences.
                    </h3>
                </div>
                <div class="row-start-2 bg-primary text-center w-[300px] h-[190px] rounded-md ml-20 border-2 border-red-text">
                    <h1 class="text-2xl pt-5">Marketing Strategy</h1>
                    <h3 class="text-sm text-center py-4 px-5">
                        Strategically aligning messaging, channels, and tactics to maximize reach and impact.
                    </h3>
                </div>
                <div class="row-start-2 bg-red-text text-center w-[300px] h-[190px] rounded-md ml-40">
                    <h1 class="text-2xl pt-5">Brand Design</h1>
                    <h3 class="text-base text-center py-4 px-5">
                        Aligning vision, values, and messaging to create lasting connections with audiences.
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <section name="portfolio" id="portfolio" class="max-w-full mx-auto block py-36 px-0">
        <div class="ml-28">
           <h1 class="text-5xl text-red-text pb-2">My Best <span class="text-5xl text-white">Portfolio</span></h1> 
           <p class="text-white  text-sm">My web portfolio offers top-notch website design and development services tailored</p>
           <p class=" text-white  text-sm pb-3">to enhance your online presence effectively.</p>

            <div class="w-[1000px] h-[476px] bg-color-hover rounded-xl mt-7">
                <!-- <div class="mt-5 ml-10"> -->
                    <!-- <div class="grid grid-cols-5 grid-rows-5"> -->
                    <div class="flex flex-wrap space-x-5">
                        <div class="bg-primary text-white w-[292px] h-[390px] rounded-md mt-10 ml-10">
                            <h1 class="text-2xl text-yellow-500 text-center py-5">Web Design</h1>
                            <img src="https://i.ibb.co/0nX2TQP/web-design-1.png" alt="" class="w-[246] h-[167] px-5">
                            <h3 class="text-sm text-white px-5 text-center py-5">
                                Elevate your online presence with captivating web designs that leave a lasting impression. Let's transform your digital vision into reality today!
                            </h3>
                        </div>

                        <div class="bg-primary text-white w-[292px] h-[390px] rounded-md mt-10 ml-10">
                            <h1 class="text-2xl text-yellow-500 text-center py-5">Web Development</h1>
                            <img src="https://i.ibb.co/t4VWVdD/web-development-1.png" alt="" class="w-[246] h-[167] px-5">
                            <h3 class="text-sm text-white px-5 text-center py-5">
                                Crafting seamless digital experiences with cutting-edge web development techniques. Let's build your vision into reality.
                            </h3>
                        </div>

                        <div class="bg-primary text-white w-[292px] h-[390px rounded-md mt-10 ml-10">
                            <h1 class="text-2xl text-yellow-500 text-center py-5">Digital Marketing</h1>
                            <img src="https://i.ibb.co/1zkx6kg/digital-marketing-1.png" alt="" class="w-[246] h-[167] px-5">
                            <h3 class="text-sm text-white px-5 text-center py-5">
                                Engage and convert with our tailored digital marketing strategies. Elevate your online presence today.
                            </h3>
                        </div>
                    </div>    
                    <!-- </div> -->
                <!-- </div> -->
            </div>
        </div>
    </section>

    <section name="about" id="about" class="max-w-full mx-auto block py-36 px-0">
        <div class="ml-28">
            <h1 class="text-2xl text-white pb-2">Hello, I’m Zidane. <span class="text-2xl text-red-text">Contact me!</span></h1> 
            <h3 class="text-white text-xl">Email : zidanerr18@gmail.com</h3>
 
            <form method="POST" class="w-[545px] h-[485px] bg-color-hover mt-5 rounded-xl justify-left">
                @csrf
                 <div class="ml-5 py-5 flex flex-col">
                     <label for="name" class="mb-2 text-white text-base font-bold">Name</label>
                     <input type="text" name="Name" id="name" class="w-[500px] rounded-sm px-2 py-1">
                 </div>
 
                 <div class="ml-5 py-5 flex flex-col">
                     <label for="email" class="mb-2 text-white text-base font-bold">Email</label>
                     <input type="email" name="Email" id="email" class="w-[500px] rounded-sm px-2 py-1">
                 </div>
 
                 <div class="ml-5 py-5 flex flex-col">
                     <label for="message" class="mb-2 text-white text-base font-bold">Message</label>
                     <textarea name="Message" id="message" cols="30" rows="5" class="w-[500px] rounded-sm px-2 py-1"></textarea>
                 </div>
 
                 <div class="ml-5 py-3 text-center">
                     <button type="submit" class="bg-primary w-[210px] py-1 text-white rounded-lg border-2 border-red-text hover:bg-red-text transition ease-in-out duration-500">Send Message</button>
                 </div>
             </form>
     </section>

    <footer class=" fixed bottom-0 left-0 right-0">
        <div class="text-center text-white -mt-8 text-sm">
            Copyright © Zidane Developer 2024
        </div>
    </footer>
    <script>
        feather.replace();
      </script>
    <script src="./src/mobile.js"></script>
    
<script src="sweetalert2.all.min.js"></script>
</body>
</html>