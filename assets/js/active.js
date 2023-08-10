// ACTIVE SCRIPT
const activePage = window.location.pathname;
const navLinks = document.querySelectorAll('sidebar-items a').forEach(link => {
    if(link.href.includes(`${activePage}`)){
        link.classList.add('active');
    }
})