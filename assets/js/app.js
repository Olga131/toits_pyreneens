import '../css/app.scss';

// window.document.addEventListener('DOMContentLoaded', () => {
//     document.getElementById('page-' + (window.location.pathname.replace(/\//g, '') || 'accueil')).classList.add('active')
// })
document.getElementById('menutoggle').addEventListener('click', () => {
    document.getElementById('mobilemenu').classList.toggle('hidden')
})
