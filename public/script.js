// FUNCTION TO SHOW SELECTED SECTION
function showSection(sectionID) {
    // select all sections (content + home)
    const sections = document.querySelectorAll('.content, .homecontent');

    // hide all sections
    sections.forEach(section => {
        section.style.display = 'none';
    });

    // show selected section
    const activeSection = document.getElementById(sectionID);
    if (activeSection) {
        activeSection.style.display = 'block';
    }
}


// ON PAGE LOAD (HOME + TOAST MESSAGE)
window.onload = function () {

    // show home section first
    showSection("home");

    // check URL parameter
    const urlParams = new URLSearchParams(window.location.search);

    if (urlParams.get('status') === 'success') {
        const toast = document.getElementById('success-toast');

        if (toast) {
            toast.classList.remove('toast-hidden');
            toast.classList.add('toast-show');

            // hide toast after 3 seconds
            setTimeout(() => {
                toast.classList.remove('toast-show');
                toast.classList.add('toast-hidden');
            }, 3000);
        }

        // remove ?status=success from URL
        window.history.replaceState({}, document.title, window.location.pathname);
    }
};