var fontHtml, scroll, windowFix, windowFixRemove, windowWidth, resize, setCircle;
window.onload = () => {
    adaptive();
    bodyFix();
    handleMenu();
    handleUser();
    customeSizeElemes();
    handleSelect();
    handleTable();
    handleCustomers();
    handleVehicle();
    handleCircle();
    handleUploadPhoto();
    handleCounter();
    handlePopup();
}
window.onresize = function() {
    resize();
    let circles = document.querySelectorAll('.JScircle._complete');
    [].forEach.call(circles, function(circle) {
        setCircle(circle, true);
    })
}