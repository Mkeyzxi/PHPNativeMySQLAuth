<!DOCTYPE html >
<html lang="en" class="scroll-smooth" id="html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/tailwindcss">
    input[type="date"]{
        border: solid 1px rgb(33, 33, 33);
        font-size: 13px;
        padding: 3px;
        border-radius: 10px;
    }
    input[type="date"]:focus{
        background-color: rgb(67, 202, 255);
        color: aliceblue;
        border: 1px solid rgb(67, 202, 255);
    }
    #toggle:checked ~ label div.toggle-circle {
        @apply translate-x-3
    }
    </style>
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head >
<body class="dark:bg-slate-900">
    <!-- js tambahkan block -->
    <div id="alert" class="w-64 lg:w-96 bg-pink-400  p-3 rounded-md overflow-hidden max-h-max shadow-[0_0px_200px_900px_rgba(076,160,228,0.5)] mx-auto block invisible absolute opacity-100 top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 z-10"> 
        <p id="alertWarning" class="text-yellow-400 text-center m-3 font-bold text-5 lg:text-lg">⚠️ Peringatan ⚠️</p>
        <p id="alertPesan" class="text-white text-sm lg:text-lg"></p>
        <button type="submit" id="alertButton" class="bg-yellow-400 py-1 px-2 rounded-xl font-semibold mt-5 mb-1 text-sm cursor-pointer block mx-auto text-right">Mengerti</button>
    </div>


    <header class="w-full h-16 bg-sky-400 dark:bg-sky-900 fixed top-0 z-10 flex items-center justify-end ">
        <div class="flex mr-8">
                <input id="toggle"  type="checkbox" class="hidden" >
                <label for="toggle" class="cursor-pointer">
                    <div class="w-10 h-7 dark:bg-slate-700 rounded-full inline-block p-1 bg-slate-300">
                        <div class="w-5 h-5 m-0 rounded-full bg-slate-200 toggle-circle transition bg-[url('img/mode.png')] bg-cover bg-center"></div>
                    </div>
                </label>
        
        </div>
            
    </header>

<script>


  const toggle = document.getElementById('toggle');
  const html = document.getElementById('html');
  toggle.addEventListener('click', () => {
      toggle.checked ? html.classList.add('dark') : html.classList.remove('dark')
  })


  const parent = document.body;
  window.addEventListener('scroll', () => {
      let scrollTop = parseInt(window.scrollY) * 10;
      if (scrollTop > 0) {
          parent.querySelector('header').classList.add('shadow-[0_0px_10px_2px_rgba(0,0,0,0.7)]');
          parent.querySelector('header').classList.add('bg-white');
          parent.querySelector('header').classList.add('transition-all');
      } else {
          parent.querySelector('header').classList.remove('shadow-[0_0px_10px_2px_rgba(0,0,0,0.7)]');
          parent.querySelector('header').classList.remove('bg-slate-300');
          parent.querySelector('header').classList.remove('bg-white');

          // parent.querySelector('header').style.boxShadow = ''
      }
  });
</script>
    <script defer src="../script.js"></script>
