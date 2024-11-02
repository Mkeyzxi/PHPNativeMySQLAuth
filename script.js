const formElement = document.getElementById('myForm');
formElement.addEventListener('submit', () => {
    const namaLengkap = document.getElementById('namaLengkap').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const nomorTelepon = document.getElementById('nomorTelepon').value;
    const tanggalLahir = document.getElementById('tanggalLahir').value;
    const alert = document.getElementById('alert');
    const alertButton = document.getElementById('alertButton');
    const alertPesan = document.getElementById('alertPesan')
    event.preventDefault(); 
    if(namaLengkap && email && password && nomorTelepon && tanggalLahir != ''){
        alertPesan.classList.add('text-center');
        alertPesan.innerHTML = "Pengisian berhasil";
        alert.classList.remove('invisible');
        alert.classList.add('visible');
        
    }else if(namaLengkap || email || password || nomorTelepon || tanggalLahir == ''){
        alertPesan.innerHTML = "Semuanya harus diisi!, tidak ada yang boleh kosong!.";
        alert.classList.remove('invisible');
        alert.classList.add('visible');
    }
    window.addEventListener('click', ()=>{
        alert.classList.remove('visible');
        alert.classList.add('invisible');
    })
    
    

});

  function pesanWa() {
    const chatWa = document.getElementById('chatWa').value;
    const waMbul = `https://wa.me/6282154540270?text=Halo Mbul, saya dari form loginmu ingin memberikan pesan : ${chatWa}`;
    window.open(waMbul, "_blank");
    window.preventDefault();
}

// darkmode
const toggle = document.getElementById('toggle');
const html = document.getElementById('html');
toggle.addEventListener('click', () => {
    toggle.checked ? html.classList.add('dark') : html.classList.remove('dark')
})
// scrool
const parent = document.body

window.addEventListener('scroll', () => {
    let scrollTop = parseInt(window.scrollY) * 10;
    if (scrollTop > 0) {
        parent.querySelector('header').style.boxShadow = '0 0px 15px #29244d'
        parent.querySelector('header').style.transition = 'all .3s ease-out';
    } else {
        parent.querySelector('header').style.boxShadow = '';
          // parent.querySelector('header').style.boxShadow = ''
      }
  });
// loading
// window.addEventListener('DOMContentLoaded', () => {
//     Pastikan elemen dengan class 'container' ada sebelum menambahkan kelas
//     const container = document.querySelector('div.container');
//     if (container) {
//         container.classList.add('gap-12');
//     }
// }); 