<?php  
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCYM5fTvdMRtgY8UrlyLL0Qw&key=AIzaSyBG4x5IZq4YrA1WYSLfQ0_S_CG0-zxPTzA');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);

$result = json_decode($result,true);

$youtubeProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$channelName = $result['items'][0]['snippet']['title'];
?>
<?php  
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://v1.nocodeapi.com/porto/instagram/PXkGSSsExdCqOjMa');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);

$result = json_decode($result,true);

$profilPic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$profilName = $result['data'][0]['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Tailwind CSS</title>
    <link href="dist/output.css" rel="stylesheet" />
    <link rel="stylesheet" href="w3.css">

</head>
<body>
<!-- header start  -->
<header class="bg-transparent absolute top-0 left-0 w-full flex 
items-center z-10">
<div class="container">
    <div class="flex items-center justify-between relative">
        <div class="px-4">
            <a href="#home" class="font-bold text-lg
            text-primary block py-6">Revealdone</a>
        </div>
        <div class="flex item-center px-4 ">
            <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                <span class="hamburger-line transition duration-300 ease-in-out"></span>
                <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
            </button>

            <nav id="nav-menu" class="hidden absolute py-5 bg-white
                shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent 
                lg:max-w-full lg:shadow-none lg:rounded-none">
                <ul class="block lg:flex">
                    <li class="group">
                        <a href="#home" class="text-base text-dark
                        py-2 mx-8 flex group-hover:text-primary">Beranda</a>
                    </li>
                    <li class="group">
                        <a href="#about" class="text-base text-dark
                        py-2 mx-8 flex group-hover:text-primary">TentangSaya</a>
                    </li>
                    <li class="group">
                        <a href="#portfolio" class="text-base text-dark
                        py-2 mx-8 flex group-hover:text-primary">Portfolio</a>
                    </li>
                    <li class="group">
                        <a href="#client" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Client</a>
                    </li>
                    <li class="group">
                        <a href="#blog" class="text-base text-dark
                        py-2 mx-8 flex group-hover:text-primary">Blog</a>
                    </li>
                    <li class="group">
                        <a href="#contact" class="text-base text-dark
                        py-2 mx-8 flex group-hover:text-primary">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
</header>
<!-- header end -->

<!--hero section start  -->
<section id="home" class="pt-36">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-center px-4 lg:w-1/2">
                <h1 class="text-base font-semibold text-primary md:text-xl ">Halo Semua 
                    ✌ saya <span class="block font-bold text-dark text-4xl mt-1">M wahid romdoni</span></h1>
                <h2 class="font-medium text-secondary text-lg mb-5 lg:text-2xl ">programer ✔ 
                    <span class="text-dark"> Web developer</span></h2>
                <p class="font-medium text-secondary mb-10 leading-relaxed">Semua itu akan terlaksana jika kamu bergerak
                    , <span class="text-dark"> ya kan?
                    </span></p>

                    <a href="#" class="text-base font-semibold text-white
                    bg-primary py-3 px-8 rounded-full hover:shadow-lg
                    hover:opacity-80 transition duration-300 ease-in-out" >Hubungi 
                    Saya</a>
            </div>
            <div class="w-full self-end px-4 lg:w-1/2">
                <div class="relative mt-10 lg:mt-9 lg:right-0 ">
                    <img src="dist/img/votop.png" alt="M wahid romdoni" 
                    class="max-w-full mx-auto" />
                    <span class="absolute bottom-0 -z-10 left-1/2 -translate-x-1/2">
                        <svg witdh="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg
                        ">
                            <path 
                            fill="#14b8a6"
                            d="M45.5,-16.6C53.3,9.3,50.1,36.9,33.1,50.4C16.1,63.9,-14.7,63.2,-35.5,48.2C-56.3,33.2,-67.1,4,-59.5,
                            -21.6C-51.9,-47.2,-26,-69,-3.6,-67.8C18.8,-66.7,37.7,-42.5,45.5,-16.6Z" 
                            transform="translate(100 100) scale(1.2)" 
                            />
                        </svg>                          
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- hero section end -->

    <!-- about section start -->
    <section id="about" class="pt-36 pc-32">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2">
                    <h4 class="font-bold uppercase text-primary text-lg mb-3
                    ">Tentang saya</h4>
                    <h2 class="font-bold text-dark text-3xl mb-5 max-w-
                    lg:text-4xl">Yuk, Semangat roda itu berputar 👏</h2>
                    <p class="font-medium text-base text-secondary 
                    max-w-xl lg:text-lg">
                    Jika kamu benar-benar menginginkan sesuatu,
                    lambat laun kamu pasti akan segera menemukan caranya</p>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl 
                    lg:pt-10 ">Mari berteman</h3>
                    <p class="font-medium text-base text-secondary mb-6 lg:text-lg">Bangunlah di pagi hari dengan senyuman,
                        karena hari ini kau akan selangkah 
                        lebih dekat dengan impianmu
                    </p>

                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <div class="row">
                                <div class="flex items-center mb-10">
                                    
                                    <img src="<?= $youtubeProfilePic; ?>" class=" w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white"><h5 class="mr-6">revealdone</h5>
                                    
                                    
                                
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-5"></div>
                    </div>
                    
                    <div class="flex items-center">
                        <!-- youtube -->
                        <a href="https://www.youtube.com/channel/UCYM5fTvdMRtgY8UrlyLL0Qw"
                        target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center
                        item-center border border-slate-300 text-slate-300
                        hover:border-primary hover:bg-primary hover:text-white mb-10">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>YouTube</title>
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                    <!-- instagram -->
                    <a href="https://www.instagram.com/muhamadwahidromdoni"
                    target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center
                    item-center border border-slate-300 text-slate-300
                    hover:border-primary hover:bg-primary hover:text-white mb-10">
                    <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                    </a>
                    <!-- facebook -->
                    <a href=""
                    target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center
                    item-center border border-slate-300 text-slate-300
                    hover:border-primary hover:bg-primary hover:text-white mb-10">
                    <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->

    <!-- portfolio section start -->
    <section id="portfolio" class="pt-36 pb-16 bg-slate-100">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary 
                    mb-2">Portfolio</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl
                    lg:text-5xl">Project Terbaru</h2>
                    <p class="font-medium text-md text-secondary md:text-lg">
                        "Nikmati Sensasi Nonton Film Terbaru Secara Gratis!" 
                        Dengan FilmGratisFest, Anda dapat mengeksplorasi koleksi film terlengkap dari berbagai genre, mulai dari aksi, petualangan, romantis, hingga film-film klasik yang tak terlupakan. Tanpa biaya langganan, tanpa iklan mengganggu, kami menyajikan pengalaman menonton yang bebas stres dan tak terbatas.
                        Duduklah dengan nyaman di rumah dan nikmati tontonan berkualitas tinggi dengan resolusi terbaik. 
                    </div>
            </div>

   

            <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img class="mySlides w-full" src="dist/foto/3g.png" alt="E-Commerce"
                        width="w-full">
                        <img class="mySlides w-full" src="dist/foto/1.png" alt="E-Commerce"
                        width="w-full">
                        <img class="mySlides w-full" src="dist/foto/2.png" alt="E-Commerce"
                        width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark nt-5
                    mb-3 ">Website Film</h3>
                    <p class="font-medium text-base text-secondary">Tunggu apa lagi? Segera kunjungi Wahidfilm dan temukan film-film paling epic dan menghibur dalam bahasa Indonesia, hanya di E-commerce terbaik untuk para pecinta film seja</p>
                </div>

            <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img class="mySlides1 w-full" src="dist/foto/as1.png" alt="E-Commerce"
                        width="w-full">
                        <img class="mySlides1 w-full" src="dist/foto/as2.png" alt="E-Commerce"
                        width="w-full">
                        <img class="mySlides1 w-full" src="dist/foto/as33.png" alt="E-Commerce"
                        width="w-full">
                        <img class="mySlides1 w-full" src="dist/foto/as3.png" alt="E-Commerce"
                        width="w-full">
                        <img class="mySlides1 w-full" src="dist/foto/as4.png" alt="E-Commerce"
                        width="w-full">
                        <img class="mySlides1 w-full" src="dist/foto/as5.png" alt="E-Commerce"
                        width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark nt-5
                    mb-3 ">Codeignitor 4 CRUD</h3>
                    <p class="font-medium text-base text-secondary">Dokumentasi fitur</p>
                </div>
                <!-- <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="dist/foto/2.png" alt="Technical Documentation"
                        width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark nt-5
                    mb-3 ">Technical Documentation</h3>
                    <p class="font-medium text-base text-secondary">Selamat datang di pusat film terupdate yang paling lengkap! Di sini, Anda akan menemukan jalan menuju pemahaman mendalam tentang produk dan teknologi terkini. Jangan biarkan diri Anda terombang-ambing dalam lautan pertanyaan tanpa jawaban—kini, semua solusi ada di sini!</p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="dist/foto/1.png" alt="Tribute Page"
                        width="w-full">
                    </div> -->
                    <!-- <h3 class="font-semibold text-xl text-dark nt-5
                    mb-3 ">Tribute Page</h3>
                    <p class="font-medium text-base text-secondary">Berikut cuplikan page di web kami</p>
                    </div> -->
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="dist/foto/6.png" alt="Tribute Page"
                        width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark nt-5
                    mb-3 ">Web Warung Sembako</h3>
                    <p class="font-medium text-base text-secondary">Web untuk preview warung</p>
                    <!-- <a href="https://revealdone.github.io/warungpaktoni/#" class="font-medium text-sm text-white
                    bg-primary py-2 px-4 rounded-lg hover:opacity-80">Klik Untuk melihat Website Warung</a> -->
                </div>

                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="dist/foto/12.png" alt="Tribute Page"
                        width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark nt-5
                    mb-3 ">Company Profile landing page</h3>
                    <p class="font-medium text-base text-secondary">Company</p>
                    <!-- <a href="https://revealdone.github.io/warungpaktoni/#" class="font-medium text-sm text-white
                    bg-primary py-2 px-4 rounded-lg hover:opacity-80">Klik Untuk melihat Website Warung</a> -->
                </div>

                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="dist/foto/kopi1.png" alt="landing page"
                        width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark nt-5
                    mb-3 ">Website kopi </h3>
                    <p class="font-medium text-base text-secondary"> <a href="https://revealdone.github.io/kopi-kupu/"></a> </p>
                    <!-- <a href="https://revealdone.github.io/kopi-kupu/" class="font-medium text-sm text-white
                    bg-primary py-2 px-4 rounded-lg hover:opacity-80">Klik Untuk melihat Website Ngopi</a> -->
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="dist/foto/KASIR.png" alt="landing page"
                        width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark nt-5
                    mb-3 ">Figma to Html</h3>
                    <p class="font-medium text-base text-secondary"> <a href="https://revealdone.github.io/kopi-kupu/"></a> </p>
                    <!-- <a href="https://revealdone.github.io/KW-program-kasir-alfatehah/" class="font-medium text-sm text-white
                    bg-primary py-2 px-4 rounded-lg hover:opacity-80">Klik Untuk melihat Kasir alfatekah</a> -->
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden mb-3">
                        <img src="dist/foto/invt.png" alt="landing page"
                        width="w-full">
                    </div>
                    <div class="rounded-md shadow-md overflow-hidden mb-3">
                        <img src="dist/foto/ksr.png" alt="landing page"
                        width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark nt-5
                    mb-3 ">Website inventory & kasir </h3>
                    <p class="font-medium text-base text-secondary"> <a href="https://revealdone.github.io/kopi-kupu/"></a> </p>
                    <!-- <a href="http://belanja299.rf.gd/login.php" class="font-medium text-sm text-white
                    bg-primary py-2 px-4 rounded-lg hover:opacity-80">Klik Untuk melihat Website inventory</a> -->
                </div>
            </div>

        </div>
    </section>    
    <!-- foptfolio section end -->

    <!-- client section start -->
    <section id="client" class="pt-36 pb-32 bg-slate-700 ">
        <div class="container">
            <div class="w-full px-4">
                <div class="mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary 
                    mb-2">Clients</h4>
                    <h2 class="font-bold text-white text-3xl mb-4 sm:text-4xl
                    lg:text-5xl">Yang Pernah Berkerjasama</h2>
                    <p class="font-medium text-md text-secondary 
                    md:text-lg">In our line of work, every partnership is a story waiting to be told. We take immense pride in the remarkable clients we've had the pleasure of collaborating with over the years. Each client has left an indelible mark on our journey, and their stories are etched in the very foundation of our success
                    </p>
            </div>

            <div class="w-full px-4">
                <div class="flex flex-wrap item-center justify-center">
                    <a href="#" class="max-w-[120px] mx-4 py-4 grayscale 
                    opacity-60 transition hover:grayscale-0 hover:opacity-100
                    lg:mx-6 xl:mx-8">
                        <img src="dist/client/1.g.svg" alt="Google" />
                    </a>
                    <a href="#" class="max-w-[120px] mx-4 py-4 grayscale 
                    opacity-60 transition hover:grayscale-0 hover:opacity-100
                    lg:mx-6 xl:mx-8">
                        <img src="dist/client/2g.svg" alt="Google" />
                    </a>
                    <a href="#" class="max-w-[120px] mx-4 py-4 grayscale 
                    opacity-60 transition hover:grayscale-0 hover:opacity-100
                    lg:mx-6 xl:mx-8">
                        <img src="dist/client/3g.svg" alt="Google" />
                    </a>
                    <a href="#" class="max-w-[120px] mx-4 py-4 grayscale 
                    opacity-60 transition hover:grayscale-0 hover:opacity-100
                    lg:mx-6 xl:mx-8">
                        <img src="dist/client/4g.svg" alt="Google" />
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- client section end -->

    <!-- blog section start -->
    <section id="blog" class="pt-36 pb-32 bg-slate-100">
        <div class="contaienr">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary 
                    mb-2">Blog</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl
                    lg:text-5xl">Tulisan Terkini</h2>
                    <p class="font-medium text-md text-secondary md:text-lg">
                        Sudah siap untuk petualangan penuh pengetahuan dan inspirasi? Selamat datang di blog terbaru kami, di mana Anda akan menemukan dunia ajaib yang dipenuhi dengan segala hal menarik yang patut Anda baca
                    </p>
                </div>
            </div>

            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl overflow-hidden
                    mb-10">
                        <img src="dist/foto/prog1.jpg" 
                        alt="programing" class="w-full"/>
                        <div class="py-8 px-6">
                            <h3>
                                <a href="#" class="block mb-3 font-semibold text-xl
                                text-dark hover:text-primary">Tips Belajar Programing</a>
                            </h3>
                            <p class="font-medium text-base text-secondary
                                mb-6">Mulailah dengan Dasar: Bangun pondasi yang kuat dengan memahami konsep dasar programming. Pelajari sintaks, variabel, dan struktur data sebagai langkah awal yang penting.</p>
                                <a href="#" class="font-medium text-sm text-white
                                bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca 
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl overflow-hidden
                    mb-10">
                        <img src="dist/foto/keybor3.jpg" 
                        alt="Mechanical keyboard" class="w-full"/>
                        <div class="py-8 px-6">
                            <h3>
                                <a href="#" class="block mb-3 font-semibold text-xl
                                text-dark hover:text-primary">Review Keyboard
                            GMMK Pro</a>
                            </h3>
                            <p class="font-medium text-base text-secondary
                                mb-6">Keyboard ini juga dilengkapi dengan beberapa tombol pintas yang berguna, membuat pekerjaan saya lebih efisien dan cepat. Saya juga menyukai fitur anti-ghosting yang memungkinkan saya menekan beberapa tombol secara bersamaan tanpa masalah.</p>
                                <a href="#" class="font-medium text-sm text-white
                                bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca 
                                Selengkapnya</a>
                                </div>
                            </div>
                        </div>

                        <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                            <div class="bg-white rounded-xl overflow-hidden
                            mb-10">
                                <img src="dist/foto/kopi13.jpg" 
                                alt="programing" class="w-full"/>
                                <div class="py-8 px-6">
                                    <h3>
                                        <a href="#" class="block mb-3 font-semibold text-xl
                                        text-dark hover:text-primary">Menikmati Secangkir 
                                        Kopi</a>
                                    </h3>
                                    <p class="font-medium text-base text-secondary
                                        mb-6">Kopi mengajarkan kita untuk merasakan setiap momen dengan penuh kesadaran. Saat kita menghirup aromanya yang menggoda, saat kita merasakan sentuhannya yang hangat, kita hadir sepenuhnya di saat ini</p>
                                        <a href="#" class="font-medium text-sm text-white
                                        bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca 
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>

                                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                                    <div class="bg-white rounded-xl overflow-hidden
                                    mb-10">
                                        <img src="dist/foto/mlbb1.jpg" 
                                        alt="programing" class="w-full"/>
                                        <div class="py-8 px-6">
                                            <h3>
                                                <a href="#" class="block mb-3 font-semibold text-xl
                                                text-dark hover:text-primary">Update terbaru Meta mobile legend</a>
                                            </h3>
                                            <p class="font-medium text-base text-secondary
                                                mb-6">Bagaimana tampilan tier list Mobile Legends akhir-akhir ini? Dalam lima tahun, Mobile Legends telah mengumpulkan lebih dari 100 daftar karakter petarung unik untuk dipilih pemain. Pemilihan memastikan setiap pertandingan 12-18 menit itu unik, tetapi seperti permainan kompetitif lainnya, sebuah meta akhirnya muncul, mengatur panggung untuk daftar tingkat di bawah.</p>
                                                <a href="#" class="font-medium text-sm text-white
                                                bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca 
                                                Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- blog section end -->

    <!-- contact section start -->
    <section id="contact" class="pt-36 pb-32">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary 
                    mb-2">Contact</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl
                    lg:text-5xl">Hubungi Kami</h2>
                    <p class="font-medium text-md text-secondary 
                    md:text-lg">
                    Kami di sini untuk Anda. Jadilah bagian dari perjalanan kami, karena Anda adalah inspirasi kami. Jangan ragu untuk menghubungi kami, kami sangat senang mendengar dari Anda. Bersama-sama, kita bisa menciptakan masa depan yang lebih baik. Terima kasih atas dukungan dan kepercayaan Anda. Kami menantikan untuk berbicara dengan Anda segera!</p>
                </div>
            </div>

            <form>
                <div class="w-full lg:w-2/3 lg:mx-auto">
                <div class="w-full px-4 mb-8">
                    <label for="name" class="text-base font-bold
                    text-primary">Nama</label>
                    <input type="text" id="name" class="w-full bg-slate-200 
                    text-dark p-3 rounded-md focus:outline-none
                    focus:ring-primary focus:ring-1 focus:border-primary"/>
                </div>
                <div class="w-full px-4 mb-8">
                    <label for="email" class="text-base font-bold
                    text-primary">Email</label>
                    <input type="text" id="email" class="w-full bg-slate-200 
                    text-dark p-3 rounded-md focus:outline-none
                    focus:ring-primary focus:ring-1 focus:border-primary"/>
                </div>
                <div class="w-full px-4 mb-8">
                    <label for="message" class="text-base font-bold
                    text-primary">Pesan</label>
                    <textarea type="message" id="message" class="w-full bg-slate-200 
                    text-dark p-3 rounded-md focus:outline-none
                    focus:ring-primary focus:ring-1 focus:border-primary
                    h-32"></textarea>
                </div>
                <div class="w-full px-4">
                    <button class="text-base font-semibold text-white
                    bg-primary py-3 px-8 rounded-full w-full
                    hover:opacity-80 hover:shadow-lg translition duration-500">Kirim</button>
                </div>
                </div>
            </form>
        </div>
    </section>
    <!-- contact section end -->

    <!-- footer start -->
    <footer class="bg-dark pt-24 pb-12">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb12 text-slate-300 font-medium md:w-1/3">
                    <h2 class="font-bold text-4xl'
                    text-white mb-5"></h2>
                    <h3 class="font-bold text-2xl mb-2">Hubungi Kami</h3>
                    <p>muhamadwahidromdoni@gmail.com</p>
                    <p>JL.H Jimin no 48</p>
                    <p class="mb-10">Jakarta selatan</p>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-white mb-5">Kategori 
                        Tulisan</h3>
                        <ul class="text-slate-300">
                            <li>
                            <a href="#" class="inline-block text-base
                            hover:text-primary mb-3">Programing</a>
                            </li>
                            <li>
                                <a href="#" class="inline-block text-base
                                hover:text-primary mb-3">Teknologi</a>
                                </li>
                                <li>
                                    <a href="#" class="inline-block text-base
                                    hover:text-primary mb-3">Gaya Hidup</a>
                                    </li>
                        </ul>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-white mb-5">
                        Tautan</h3>
                        <ul class="text-slate-300">
                            <li>
                            <a href="#home" class="inline-block text-base
                            hover:text-primary mb-3">Beranda</a>
                            </li>
                            <li>
                                <a href="#about" class="inline-block text-base
                                hover:text-primary mb-3">Tentangsaya</a>
                                </li>
                                <li>
                                    <a href="#portfolio" class="inline-block text-base
                                    hover:text-primary mb-3">Portfolio</a>
                                    </li>
                                    <li>
                                        <a href="#clients" class="inline-block text-base
                                        hover:text-primary mb-3">Client</a>
                                        </li>
                                        <li>
                                            <a href="#blog" class="inline-block text-base
                                            hover:text-primary mb-3">Blog</a>
                                            </li>
                                            <li>
                                                <a href="#contact" class="inline-block text-base
                                                hover:text-primary mb-3">Contact</a>
                                                </li>
                        </ul>
                </div>
            </div>

            <div class="w-full pt-10 border-t border-slate-700">
                <div class="flex items-center justify-center mb-5">
                    <!-- youtube -->
                    <a href="https://www.youtube.com/channel/UCYM5fTvdMRtgY8UrlyLL0Qw"
                    target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center
                    item-center border border-slate-300 text-slate-300
                    hover:border-primary hover:bg-primary hover:text-white">
                    <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>YouTube</title>
                        <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                </a>
                <!-- instagram -->
                <a href="https://www.instagram.com/muhamadwahidromdoni"
                target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center
                item-center border border-slate-300 text-slate-300
                hover:border-primary hover:bg-primary hover:text-white">
                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                </a>
                <!-- facebook -->
                <a href="https://www.facebook.com/BlackBiel/"
                target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center
                item-center border border-slate-300 text-slate-300
                hover:border-primary hover:bg-primary hover:text-white">
                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </a>
                </div>
                <p class="font-mediun text-xs text-slate-500 text-center
                ">Dibuat dengan <span class="text-pink-500">💓</span>
                oleh <a href="https://instagram.com/muhamadwahidromdoni" 
                target="_blank" class="font-bold text-primary "> M wahid romdoni</a>, menggunakan
                    <a href="https://tailwindcss.com" target="_blank"
                    class="font-bold text-sky-500">Tailwind CSS 3.</a>

                    </p>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <script src="dist/js/script.js"></script>
    </body>
</html>
