document.addEventListener('DOMContentLoaded', function () {
    var tabs = document.querySelectorAll('#myTabs .nav-link');
    var imageToHide = document.getElementById('tabimage')

    tabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            // Hide the image when a tab is clicked
            imageToHide.style.display = 'none';
        });
    });
});
document.addEventListener('DOMContentLoaded', function () {
    var tabs = document.querySelectorAll('#myTabs .nav-link');
    var imageToHide = document.getElementById('tabimage1')

    tabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            // Hide the image when a tab is clicked
            imageToHide.style.display = 'none';
        });
    });
});