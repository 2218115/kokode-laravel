<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <header class="border-b border-amber-900 h-20 flex items-center justify-between px-40 fixed top-0 right-0 left-0 bg-white/50 backdrop-blur-sm">
        <h1 class="font-bold text-2xl text-amber-900">KoKode</h1>
        <div>
            <ul class="flex gap-6 items-center">
                <li>
                    <a href="#langganan" class="text-amber-900">Langganan</a>
                </li>
                <li>
                    <a href="#tentang" class="text-amber-900">Tentang</a>
                </li>
                <li>
                    <button class="px-4 py-3 text-amber-900 border border-amber-900 rounded-sm hover:bg-amber-900 hover:text-white duration-200" id="modalLoginButtonTrigger">Masuk</button>
                </li>

                <!-- Modal Login -->
                <div class="fixed top-0 left-0 right-0 bottom-0 w-screen h-screen bg-black/50 backdrop-blur-lg justify-center hidden" id="modalLogin">
                    <div class="bg-white w-[32rem] h-fit p-8 rounded-sm shadow-sm mt-52 relative">
                        <button class="absolute -right-6 -top-6 w-12 h-12 text-red-500 bg-white flex items-center justify-center rounded-full" id="modalLoginButtonClose">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        </button>
                        <button class="absolute -right-32 top-1/2 w-32 h-24 text-amber-900 bg-white flex items-center justify-center">
                            <p>Belum punya akun ?</p>
                        </button>

                        <h2 class="font-bold text-xl text-center mb-8 text-amber-900">Masuk ke akun anda</h2>
                        <form>
                            <div class="mb-6">
                                <label class="block text-amber-900 mb-3">Nama Pengguna</label>
                                <input type="text" name="" id="" class="placeholder:text-amber-900/50 w-full h-12 border-amber-900 border rounded-sm outline-none p-2 text-amber-900 focus:ring-2 focus:ring-amber-900" placeholder="Masukkan nama pengguna">
                            </div>                            
                            <div class="mb-6">
                                <label class="block text-amber-900 mb-3">Nama Pengguna</label>
                                <input type="text" name="" id="" class="placeholder:text-amber-900/50 w-full h-12 border-amber-900 border rounded-sm outline-none p-2 text-amber-900 focus:ring-2 focus:ring-amber-900" placeholder="Masukkan katasandi">
                            </div>
                            <button class="bg-amber-900 text-white p-4 w-full hover:bg-amber-900/90">Masuk</button>
                        </form>
                    </div>
                </div>

                <!-- Modal Register -->
                <div class="fixed top-0 left-0 right-0 bottom-0 w-screen h-screen bg-black/50 backdrop-blur-lg justify-center hidden" id="modalRegister">
                    <div class="bg-white w-[32rem] h-fit p-8 rounded-sm shadow-sm mt-52 relative">
                        <button class="absolute -right-6 -top-6 w-12 h-12 text-red-500 bg-white flex items-center justify-center rounded-full" id="modalRegisterButtonClose">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        </button>
                        <button class="absolute -right-32 top-1/2 w-32 h-24 text-amber-900 bg-white flex items-center justify-center">
                            <p>Sudah punya akun ?</p>
                        </button>

                        <h2 class="font-bold text-xl text-center mb-8 text-amber-900">Masuk ke akun anda</h2>
                        <form>
                            <div class="mb-6">
                                <label class="block text-amber-900 mb-3">Nama Pengguna</label>
                                <input type="text" name="" id="" class="placeholder:text-amber-900/50 w-full h-12 border-amber-900 border rounded-sm outline-none p-2 text-amber-900 focus:ring-2 focus:ring-amber-900" placeholder="Masukkan nama pengguna">
                            </div>                            
                            <div class="mb-6">
                                <label class="block text-amber-900 mb-3">Nama Pengguna</label>
                                <input type="text" name="" id="" class="placeholder:text-amber-900/50 w-full h-12 border-amber-900 border rounded-sm outline-none p-2 text-amber-900 focus:ring-2 focus:ring-amber-900" placeholder="Masukkan katasandi">
                            </div>
                            <button class="bg-amber-900 text-white p-4 w-full hover:bg-amber-900/90">Masuk</button>
                        </form>
                    </div>
                </div>
            </ul>
        </div>
    </header>

    <main class="px-40 mt-28">
        <section class="">
            <ul class="w-full overflow-hidden whitespace-nowrap" id="carousel">
                <li class="inline-block w-full carousel-item">
                    <div class="w-full h-[38rem] bg-cover rounded-sm bg-red-500" >
                    </div>
                </li>
                <li class="inline-block w-full carousel-item">
                    <div class="w-full h-[38rem] bg-cover rounded-sm bg-green-500" >
                    </div>
                </li>
                <li class="inline-block w-full carousel-item">
                    <div class="w-full h-[38rem] bg-cover rounded-sm bg-blue-500" >
                    </div>
                </li>
            </ul>
            <ul class="flex gap-4 items-center mt-4" id="carouselIndicator">
            </ul>
        </section>

        <section>
            <h2 class="font-bold text-lg text-amber-900 mt-12">Artikel Terbaru</h2>

            <form class="mt-4">
                <div>
                    <label class="text-amber-900 block">Cari Artikel</label>
                    <div class="flex gap-4 items-center w-full h-12 mt-2">
                        <input type="text" name="" id="" class="placeholder:text-amber-900/50 w-full h-12 border-amber-900 border rounded-sm outline-none p-2 text-amber-900 focus:outline-1" placeholder="Masukkan kata kunci artikel">
                        <button type="submit" class="w-20 h-12 rounded-sm bg-amber-900 text-white flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </form>

            <ul class="mt-4 flex flex-col gap-8">
                
                <li>
                    <a href="http://" class="duration-300 hover:bg-amber-900/10 hover:px-8 rounded-sm py-4 cursor-pointer block">
                        <p class="text-sm text-amber-900/50">22 Januari 2024</p>
                        <h3 class="font-bold text-lg text-amber-900">Kopi dan Kode yang sangat indah.</h3>
                        <p class="text-sm text-amber-900/50">@Budi</p>
                        <p class="text-amber-900/90 text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos provident distinctio sint fugiat natus voluptatibus vero, nostrum alias ullam est? Nam laborum veniam nesciunt facilis modi deserunt a natus quasi.</p>
                        <ul class="flex gap-4 mt-4">
                            <li class="p-2 bg-amber-900 rounded-sm text-white text-sm">Seni</li>
                            <li class="p-2 bg-amber-900 rounded-sm text-white text-sm">Programmer</li>
                        </ul>
                    </a>
                </li>

                <li>
                    <a href="http://" class="duration-300 hover:bg-amber-900/10 hover:px-8 rounded-sm py-4 cursor-pointer block">
                        <p class="text-sm text-amber-900/50">22 Januari 2024</p>
                        <h3 class="font-bold text-lg text-amber-900">Kopi dan Kode yang sangat indah.</h3>
                        <p class="text-sm text-amber-900/50">@Candra</p>
                        <p class="text-amber-900/90 text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos provident distinctio sint fugiat natus voluptatibus vero, nostrum alias ullam est? Nam laborum veniam nesciunt facilis modi deserunt a natus quasi.</p>
                        <ul class="flex gap-4 mt-4">
                            <li class="p-2 bg-amber-900 rounded-sm text-white text-sm">Seni</li>
                            <li class="p-2 bg-amber-900 rounded-sm text-white text-sm">Programmer</li>
                        </ul>
                    </a>
                </li>

                <li>
                    <a href="http://" class="duration-300 hover:bg-amber-900/10 hover:px-8 rounded-sm py-4 cursor-pointer block">
                        <p class="text-sm text-amber-900/50">22 Januari 2024</p>
                        <h3 class="font-bold text-lg text-amber-900">Kopi dan Kode yang sangat indah.</h3>
                        <p class="text-sm text-amber-900/50">@Candra</p>
                        <p class="text-amber-900/90 text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos provident distinctio sint fugiat natus voluptatibus vero, nostrum alias ullam est? Nam laborum veniam nesciunt facilis modi deserunt a natus quasi.</p>
                        <ul class="flex gap-4 mt-4">
                            <li class="p-2 bg-amber-900 rounded-sm text-white text-sm">Seni</li>
                            <li class="p-2 bg-amber-900 rounded-sm text-white text-sm">Programmer</li>
                        </ul>
                    </a>
                </li>
                <li>
                    <a href="http://" class="duration-300 hover:bg-amber-900/10 hover:px-8 rounded-sm py-4 cursor-pointer block">
                        <p class="text-sm text-amber-900/50">22 Januari 2024</p>
                        <h3 class="font-bold text-lg text-amber-900">Kopi dan Kode yang sangat indah.</h3>
                        <p class="text-sm text-amber-900/50">@Candra</p>
                        <p class="text-amber-900/90 text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos provident distinctio sint fugiat natus voluptatibus vero, nostrum alias ullam est? Nam laborum veniam nesciunt facilis modi deserunt a natus quasi.</p>
                        <ul class="flex gap-4 mt-4">
                            <li class="p-2 bg-amber-900 rounded-sm text-white text-sm">Seni</li>
                            <li class="p-2 bg-amber-900 rounded-sm text-white text-sm">Programmer</li>
                        </ul>
                    </a>
                </li>
                <li>
                    <a href="http://" class="duration-300 hover:bg-amber-900/10 hover:px-8 rounded-sm py-4 cursor-pointer block">
                        <p class="text-sm text-amber-900/50">22 Januari 2024</p>
                        <h3 class="font-bold text-lg text-amber-900">Kopi dan Kode yang sangat indah.</h3>
                        <p class="text-sm text-amber-900/50">@Candra</p>
                        <p class="text-amber-900/90 text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos provident distinctio sint fugiat natus voluptatibus vero, nostrum alias ullam est? Nam laborum veniam nesciunt facilis modi deserunt a natus quasi.</p>
                        <ul class="flex gap-4 mt-4">
                            <li class="p-2 bg-amber-900 rounded-sm text-white text-sm">Seni</li>
                            <li class="p-2 bg-amber-900 rounded-sm text-white text-sm">Programmer</li>
                        </ul>
                    </a>
                </li>
                <li>
                    <a href="http://" class="duration-300 hover:bg-amber-900/10 hover:px-8 rounded-sm py-4 cursor-pointer block">
                        <p class="text-sm text-amber-900/50">22 Januari 2024</p>
                        <h3 class="font-bold text-lg text-amber-900">Kopi dan Kode yang sangat indah.</h3>
                        <p class="text-sm text-amber-900/50">@Candra</p>
                        <p class="text-amber-900/90 text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos provident distinctio sint fugiat natus voluptatibus vero, nostrum alias ullam est? Nam laborum veniam nesciunt facilis modi deserunt a natus quasi.</p>
                        <ul class="flex gap-4 mt-4">
                            <li class="p-2 bg-amber-900 rounded-sm text-white text-sm">Seni</li>
                            <li class="p-2 bg-amber-900 rounded-sm text-white text-sm">Programmer</li>
                        </ul>
                    </a>
                </li>
                <li>
                    <a href="http://" class="duration-300 hover:bg-amber-900/10 hover:px-8 rounded-sm py-4 cursor-pointer block">
                        <p class="text-sm text-amber-900/50">22 Januari 2024</p>
                        <h3 class="font-bold text-lg text-amber-900">Kopi dan Kode yang sangat indah.</h3>
                        <p class="text-sm text-amber-900/50">@Candra</p>
                        <p class="text-amber-900/90 text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos provident distinctio sint fugiat natus voluptatibus vero, nostrum alias ullam est? Nam laborum veniam nesciunt facilis modi deserunt a natus quasi.</p>
                        <ul class="flex gap-4 mt-4">
                            <li class="p-2 bg-amber-900 rounded-sm text-white text-sm">Seni</li>
                            <li class="p-2 bg-amber-900 rounded-sm text-white text-sm">Programmer</li>
                        </ul>
                    </a>
                </li>
                <li>
                    <a href="http://" class="duration-300 hover:bg-amber-900/10 hover:px-8 rounded-sm py-4 cursor-pointer block">
                        <p class="text-sm text-amber-900/50">22 Januari 2024</p>
                        <h3 class="font-bold text-lg text-amber-900">Kopi dan Kode yang sangat indah.</h3>
                        <p class="text-sm text-amber-900/50">@Candra</p>
                        <p class="text-amber-900/90 text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos provident distinctio sint fugiat natus voluptatibus vero, nostrum alias ullam est? Nam laborum veniam nesciunt facilis modi deserunt a natus quasi.</p>
                        <ul class="flex gap-4 mt-4">
                            <li class="p-2 bg-amber-900 rounded-sm text-white text-sm">Seni</li>
                            <li class="p-2 bg-amber-900 rounded-sm text-white text-sm">Programmer</li>
                        </ul>
                    </a>
                </li>
            </ul>

            <a href="http://" class="text-amber-900 underline mt-4 inline-block">Lihat semua list artikel terbaru</a>
        </section>

        <!-- <section>
            <h2 class="font-bold text-lg text-amber-900 mt-12">Artikel terbitan terbaru</h2>
            <article class="mt-12">
                <p class="text-sm text-amber-900/50">22 Januari 2024</p>
                <h2 class="font-bold text-5xl text-amber-900 mt-4">Makan nasi makan ayam enak sekali</h2>
                <p class="text-sm text-amber-900/50 mt-4">@Budi</p>
                <ul class="flex gap-4 mt-4">
                    <li class="p-2 bg-amber-900 rounded-sm text-white text-sm">Seni</li>
                    <li class="p-2 bg-amber-900 rounded-sm text-white text-sm">Programmer</li>
                </ul>
                <p class="text-amber-900 text-md mt-6 leading-loose text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit tenetur excepturi totam, ab maiores harum minus sunt dolorem alias cumque autem unde, quos dolor, ipsa asperiores libero. Esse non ipsa unde distinctio! Totam reiciendis quod maxime ducimus magni quos ex, aliquam repellat repudiandae quasi corporis obcaecati nobis debitis consequatur dignissimos quia vitae eligendi? Error ad ipsa dolore alias sapiente tempora deserunt est impedit hic officiis, commodi optio in, veniam, illo excepturi magni placeat laudantium fugit? Vero tempore ducimus, nisi sed id aspernatur! Dolorum voluptatibus distinctio, repudiandae blanditiis eveniet inventore obcaecati? Ducimus et repudiandae omnis maiores perferendis accusamus, nisi dolore doloribus ab eveniet harum voluptate consequatur rerum voluptas, possimus doloremque porro at quasi? Minima, quos laborum sed ab, repudiandae animi accusamus praesentium ipsa reprehenderit nobis deserunt sequi maxime eligendi quia consequuntur iure pariatur consequatur, nostrum quod quasi temporibus sunt magnam sit provident? Porro eius architecto dignissimos nisi aliquam debitis ducimus iste quae tenetur voluptate perspiciatis vitae esse placeat hic dolore in, enim obcaecati sunt alias, voluptates consectetur dolor numquam. Cumque, laborum voluptate! Quam officiis ab maxime? Impedit quasi est porro minus ipsum soluta omnis rerum, asperiores, vitae deserunt, maiores recusandae ratione in cupiditate aperiam atque nulla nostrum mollitia numquam fuga ipsa. Pariatur quam modi nulla ut voluptates ea, magnam labore exercitationem facere iusto fugit nihil voluptate molestiae, aperiam qui suscipit, deleniti iste. Alias, molestias! Fuga tempora quia ab eius ipsa vel cum harum quam a error impedit exercitationem architecto molestiae, ducimus, nostrum nemo facilis voluptates ipsam. Est, dolorem, nemo fugiat distinctio possimus at laboriosam voluptatem voluptates quaerat corporis culpa impedit. In at eos nulla quibusdam, placeat voluptatibus enim suscipit numquam temporibus saepe unde veniam molestias nisi sed voluptas excepturi distinctio iure provident! Sapiente illum repudiandae perspiciatis nostrum quam, impedit non ipsam doloribus reprehenderit ad modi, error odio qui quia! Iste deleniti blanditiis atque deserunt itaque obcaecati est molestias. Obcaecati nobis saepe eveniet ab, officiis beatae, illo aliquid reiciendis vero quod, sapiente placeat quas quisquam quaerat nam quo vel minima! Aut, accusamus odio maiores obcaecati tempore recusandae dicta laudantium illo eos quibusdam odit molestiae, deserunt itaque aliquam voluptate possimus voluptates non voluptatem sunt, nisi hic totam? Numquam vero rem aliquid asperiores dignissimos, minima eligendi voluptatum repudiandae dolores laborum reiciendis, repellendus fuga consequuntur quo aperiam ipsam officia. Laboriosam, dignissimos illum repellat harum vero quaerat! Maxime nemo explicabo velit nam, aperiam, incidunt tempora consequuntur ut harum rem iure, cumque inventore cum. Ut dolore nisi fugit ipsa amet exercitationem voluptatibus veniam delectus optio, totam perferendis id vel corrupti blanditiis necessitatibus modi ex rerum omnis ad? Dolores non cumque atque unde recusandae quia doloribus quibusdam nostrum dignissimos fuga perspiciatis amet, nemo aliquid officiis, consequuntur ad at impedit quos iure. Ducimus dolores itaque iusto animi consequatur doloremque molestias explicabo suscipit ut sed! Odit repellendus laboriosam impedit minima accusantium consequatur sequi quam error vero delectus voluptas modi nulla tenetur ipsa sunt, nostrum laborum est quibusdam? Ipsam velit magni animi cumque aliquam assumenda modi ad sequi repellendus quibusdam voluptates sunt, possimus dicta quas ipsum quisquam commodi perferendis dolor? Corrupti.</p>
            </article>
        </section> -->

        <section id="tentang">
            <h2 class="font-bold text-lg text-amber-900 mt-12">Tentang</h2>
             <p class="text-amber-900 text-md mt-6 leading-loose text-justify">
             Website "Kopi Kode" adalah suatu platform yang menggabungkan dua dunia yang unik: dunia pengembangan perangkat lunak dan budaya kopi. Dengan penuh semangat, situs ini menawarkan berbagai artikel informatif dan inspiratif yang membahas tentang peran kopi dalam kehidupan sehari-hari para pengembang dan bagaimana minuman ini telah menjadi bagian integral dari proses kreatif dalam dunia pemrograman.
             </p>
        </section>

        <section id="langganan">
            <h2 class="font-bold text-lg text-amber-900 mt-12">Langganan</h2>
             <p class="text-amber-900 text-md mt-6 leading-loose text-justify">
             Jadilah Bagian dari Komunitas "Kopi Kode": Berlangganan untuk Petualangan Pemrograman dan Rasa Kopi yang Tak Terlupakan! Selamat datang di "Kopi Kode", tempat di mana kecintaan pada kopi bertemu dengan keajaiban pemrograman. Apakah Anda seorang pengembang berpengalaman atau penikmat kopi yang ingin mendalami koneksi unik antara kode dan secangkir kopi, berlanggananlah sekarang untuk menikmati manfaat eksklusif berikut: 1. Artikel Eksklusif Setiap Minggu Dapatkan akses ke artikel panjang dan mendalam setiap minggu, yang membahas aspek menarik dan inspiratif tentang hubungan antara dunia pemrograman dan kopi. 2. Rahasia Ritual Kopi Pengembang Pelajari rahasia ritual kopi para pengembang sukses, dari bagaimana mereka memulai pagi hingga cara mereka tetap fokus dalam sesi coding larut malam. 3. Panduan Kode dan Resep Kopi Eksklusif Terima panduan pemrograman terbaru dan resep kopi eksklusif yang akan memberikan nuansa baru pada pengalaman minum kopi Anda. 4. Galeri Gambar Penuh Inspirasi Jelajahi galeri gambar yang memukau, membawa Anda ke dalam dunia kopi Jawa yang eksotis dan suasana kerja yang dipenuhi semangat pengkodean. 5. Komunitas Pengembang dan Pencinta Kopi Bergabunglah dengan komunitas eksklusif "Kopi Kode", di mana Anda dapat berbagi pengalaman, bertukar ide, dan terhubung dengan sesama pengembang dan pecinta kopi di seluruh dunia. 6. Diskon dan Penawaran Spesial Nikmati diskon eksklusif dan penawaran khusus untuk produk-produk kopi terbaik dan barang-barang terkait pemrograman. 7. Pemberitahuan Pertama tentang Konten Baru Jadilah yang pertama mengetahui artikel, panduan, dan konten eksklusif lainnya yang akan memperkaya pengetahuan Anda dalam dunia kopi dan kode. Berlangganan sekarang untuk mendapatkan tiket eksklusif ke dalam dunia "Kopi Kode" dan bergabunglah dalam perjalanan unik yang menggabungkan cita rasa kopi yang luar biasa dengan keindahan pemrograman.
             </p>
        </section>
    </main>

    <footer class="h-48 mt-12 px-12 flex items-center justify-center flex-col gap-4">
        <p class="text-sm text-amber-900/50"> Copyright artikel oleh <a href="https://openai.com" class="underline"> Chat GPT</a></p>    
        <p class="text-sm text-amber-900/50"> Dibuat dengan 💖 di @Malang </p>
    </footer>

    <script>
        const modalLoginElement = document.getElementById("modalLogin");
        const modalLoginButtonClose = document.getElementById("modalLoginButtonClose");
        const modalLoginButtonTrigger = document.getElementById("modalLoginButtonTrigger");
        modalLoginButtonTrigger.onclick = () => {
            modalLoginElement.style.display = "flex";
        }
        modalLoginButtonClose.onclick = () => {
            modalLoginElement.style.display = "none";
        }

        const modalRegisterElement = document.getElementById("modalRegister");
        const modalRegisterButtonClose = document.getElementById("modalRegisterButtonClose");
        const modalRegisterButtonTrigger = document.getElementById("modalRegisterButtonTrigger");
        modalRegisterButtonTrigger.onclick = () => {            
            modalLoginElement.style.display = "none"  ;
            modalRegisterElement.style.display = "flex";
        }
        modalRegisterButtonClose.onclick = () => {
            modalRegisterElement.style.display = "none";
        }

        const carouselIndicatorElement = document.getElementById("carouselIndicator");
        const carouselElement = document.getElementById("carousel");
        const carouselCount = carouselElement.childElementCount;
        const carouselScrollWidth = carouselElement.scrollWidth;
        const widthPerItem = carouselScrollWidth / carouselCount;

        let right = true;
        let offset = 0;
        let lsIndex = -1;
        let index = 0;

        setInterval(() => {
            if (right) {
                offset += 0.001;
            } else {
                offset -= 0.001;
            }

            carouselElement.scroll({left: widthPerItem * offset, behavior: "smooth"});
            if (offset >= 2) {
                right = false;
            }
            if (offset <= 0) {
                right = true;
            }

            // @Cleanup: acuan perhitungan di bawah tidak cocok untuk memberikan gambaran lokasi index pada item yang mana yang sedang aktif. 
            index = carouselCount - Math.round(carouselScrollWidth / (widthPerItem*(offset + 1)));
            if (lsIndex != index) {
                lsIndex = index;

                let indicator = "";
                for (let i = 0; i < carouselCount; ++i) {
                    if (i == index) {
                        indicator += `<li class="rounded-sm w-4 h-4 bg-amber-900"></li> `;
                    } else {
                        indicator += `<li class="rounded-sm w-4 h-4 border border-amber-900"></li>`;
                    }
                }

                carouselIndicatorElement.innerHTML = indicator;
            }

        }, 1);
</script>

</body>
</html>