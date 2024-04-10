document.addEventListener("DOMContentLoaded", function () {
    const openNavBtn = document.querySelector(".open-nav");
    const closeNavBtn = document.querySelector(".close-nav");
    const nav = document.querySelector(".header .nav-list ul");

    if (openNavBtn && closeNavBtn && nav) {
        openNavBtn.addEventListener("click", function () {
            nav.classList.add("show");
            openNavBtn.style.display = "none";
            closeNavBtn.style.display = "block";
        });

        closeNavBtn.addEventListener("click", function () {
            nav.classList.remove("show");
            closeNavBtn.style.display = "none";
            openNavBtn.style.display = "block";
        });
    }

    var userBtn = document.getElementById("user-btn");
    var accountBox = document.getElementById("account-box");

    userBtn.addEventListener("click", function (event) {
        accountBox.style.display = accountBox.style.display === "none" ? "block" : "none";
        event.stopPropagation(); // Prevents the click event from propagating to the document
    });

    document.addEventListener("click", function (event) {
        if (!accountBox.contains(event.target) && event.target !== userBtn) {
            accountBox.style.display = "none";
        }
    });

});
