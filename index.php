    <!-- header -->
    <?php include "includes/header.php" ?>

    <!-- main -->
    <div class="container rounded-sm dark:bg-slate-900  bg-white sm:w-full md:mt-28 mt-[70px] lg:flex lg:justify-center lg:gap-12 lg:mt-[100px] lg:items-center">
        <div id="bgImage" class="w-1/4 h-[600px]  bg-[url('img/backgroundForm.webp')] bg-no-repeat bg-cover bg-center hidden lg:block" ></div>
        <div id="parentForm" class="w-full max-w mx-auto sm:w-10/12 sm:shadow-[0_0px_10px_2px_rgba(0,0,0,0.3)] dark:bg-slate-800 rounded px-8 pt-6 pb-8 md:h-[100%] lg:w-[30%]  lg:mr-0 lg:ml-0">
            <form action="proses.php" method="post">
                <h1 class="mx-auto mb-9 md:text-4xl text-center font-bold text-3xl dark:text-white lg:mb-5">Buat Akun</h1>
                <!-- responsive div -->
                <div class="md:flex flex-wrap justify-evenly gap-3 lg:gap-0   lg:flex-col">
                    <div class="md:order-first md:w-[45%] lg:w-full">
                        <label for="namaLengkap">
                            <span class="block dark:text-slate-300 text-slate-700 md:text-base font-semibold text-sm after:content-['*'] my-1 after:text-pink-500 after:ml-0.5" >Nama Lengkap</span>
                            <input type="text" name="namaLengkap" placeholder="masukkan nama lengkap" id="namaLengkap" pattern="[a-zA-Z\s]+" class=" px-2 py-1 shadow-md block dark:bg-slate-800 placeholder:text-slate-400 border-sm border-slate-700 ring-1 ring-slate-600  rounded-sm w-full placeholder:tracking-wide focus:outline-none focus:ring-1 focus:ring-sky-400 placeholder:text-sm focus:border-sky-400  invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer">
                            <p class="text-[12px] text-pink-700 invisible peer-invalid:visible ml-1 mt-1">Nama tidak valid</p>
                        </label>
                    </div>
                    <div class="md:w-[45%] lg:w-full">
                    <label for="email"  >
                        <span class="block dark:text-slate-300 text-slate-700 font-semibold my-1 text-sm after:content-['*'] after:text-pink-500 after:ml-0.5 md:text-base" >Email</span>
                        <input type="email" placeholder="masukkan email" name="email" id="email" class="px-2 py-1 shadow-md block placeholder:text-slate-400 border-sm border-slate-700 ring-1 dark:bg-slate-800 ring-slate-600 rounded-sm w-full placeholder:tracking-wide focus:outline-none focus:ring-1 focus:ring-sky-400 placeholder:text-sm focus:border-sky-400  invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer">
                        <p class="text-[12px] text-pink-700 invisible peer-invalid:visible ml-1 mt-1">Email tidak valid</p>
    
                    </label>
                </div>
                    <div class="md:w-[45%] lg:w-full">
                        <label for="password">
                            <span class="block dark:text-slate-300 md:text-base text-slate-700 font-semibold text-sm after:content-['*'] my-1  after:text-pink-500 after:ml-0.5" >Password</span>
                            <input type="password" placeholder="masukkan password" name="password" id="password" minlength="8" class="px-2 py-1  shadow-md block placeholder:text-slate-400 border-sm border-slate-700 ring-1 dark:bg-slate-800 ring-slate-600 rounded-sm w-full placeholder:tracking-wide focus:outline-none focus:ring-1 focus:ring-sky-400 placeholder:text-sm focus:border-sky-400  invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer">
                            <p class="text-[12px] text-pink-700 invisible peer-invalid:visible ml-1 mt-1">Password tidak valid</p>
        
                        </label>
                    </div>
                    <div class="md:w-[45%] lg:w-full">
                        <label for="nomorTelepon">
                            <span class="block dark:text-slate-300 md:text-base text-slate-700 font-semibold text-sm after:content-['*'] my-1 lg:m-0 after:text-pink-500 after:ml-0.5" >Nomor Telepon</span>
                            <input type="text" placeholder="masukkan nomor telepon" name="nomorTelepon" id="nomorTelepon"pattern="[0-9]*" class="dark:bg-slate-800 px-2 py-1 shadow-md block placeholder:text-slate-400 border-sm border-slate-700 ring-1 dark:bg-slate-800 ring-slate-600  rounded-sm w-full placeholder:tracking-wide focus:outline-none focus:ring-1 focus:ring-sky-400 placeholder:text-sm focus:border-sky-400  invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer">
                            <p class="text-[12px] text-pink-700 invisible peer-invalid:visible ml-1 mt-1">Nomor telepon berupa angka</p>
                        </label>
                    </div>
                    
                    <div class="md:order-5">
                        
                        <label for="jenisKelamin">
                            <span class="md:text-base  text-slate-700 font-semibold mt-4 text-sm dark:text-slate-300 dark:bg-slate-800" >Jenis Kelamin :</span>
                            <div class="inline bg-sky-200 rounded-md m-2 cursor-pointer dark:bg-slate-800">
                                <label for="pria" class=" text-slate-800 text-sm m-1 md:text-base cursor-pointer dark:text-slate-300 dark:bg-slate-800">Pria</label>
                                <input type="radio" required id="pria" name="jenisKelamin" value="pria  " >

                            </div>
                            <div class="inline  bg-pink-200 rounded-md cursor-pointer dark:bg-slate-800">
                                <label for="wanita" class="md:text-base text-slate-800 text-sm m-1 cursor-pointer dark:text-slate-300">Wanita</label>
                                <input type="radio" required id="wanita" name="jenisKelamin" value="wanita" >
                            </div>
                        </label>
                        <div class="my-1 lg:m-0">
                            <span class=" font-semibold dark:text-slate-300 md:text-base text-slate-700 text-sm ">Tanggal Lahir :</span>
                            <label for="tanggalLahir" ></label>
                            <input type="date" id="tanggalLahir" required name="tanggalLahir" class="hover:bg-pink-500 md:text-base dark:bg-slate-800 dark:text-slate-300 hover:text-white w-[115px] cursor-pointer ml-2 focus:outline-none shadow-md mt-2 mb-7 lg:mb-5 ">
                        </div>
                    </div>
                    <div class="order-last md:w-full">
                        <?php date_default_timezone_set('Asia/Makassar'); ?>
                        <button type="submit" value="<?= date("Y-m-d H:i:s");?>" name="submit" class="bg-sky-400 dark:bg-sky-900 dark:hover:text-slate-900 dark:hover:bg-slate-300 dark:text-white md:text-base md:w-11/12 py-1 px-2 block text-center rounded-md shadow-lg hover:bg-slate-700 hover:text-sky-500 text-slate-700 mx-auto font-medium ease-in-out delay-150 hover:-translate-y-1 hover:scale-105  duration-300">Kirim</button>
                    </div>
                </div>
                
            
                

            </form>

            
        </div>
    </div>
    
    <!-- footer -->
    <script src="script.js"></script>
    <?php include "includes/footer.php" ?>
    