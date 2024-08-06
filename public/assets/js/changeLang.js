const langKh = ()=>{
    localStorage.setItem('langKh',false);
    localStorage.removeItem('langEn',false);
}
const langEn = ()=>{
    localStorage.setItem('langEn',false);
    localStorage.removeItem('langKh',false);
}
const load = ()=>{
    let localeKh;
    if (localStorage.getItem('langKh')==false) {
        localeKh == true
    } else {
        localeKh=localStorage.getItem('langKh')
    }

    if (localeKh) {
        document.getElementById('btn-1').classList.remove('inline-flex')
        document.getElementById('btn-1').classList.add('hidden')
        document.getElementById('btn-2').classList.remove('hidden')
        document.getElementById('btn-2').classList.add('inline-flex')
    }
}
