const wrapper = document.querySelector(".wrapper");
const logInBtn = document.querySelector(".login-btn");
const iconClose = document.querySelector(".icon-close");
const navBar = document.querySelector(".nav-bar");
const banner = document.querySelector(".banner");
const main = document.querySelector(".main");

logInBtn.addEventListener("click", () =>{
    wrapper.classList.add("active");
    navBar.classList.add("active");
    banner.classList.add("active");
    main.classList.add("active");
    
});

iconClose.addEventListener("click", () =>{
    wrapper.classList.remove("active");
    navBar.classList.remove("active");
    banner.classList.remove("active");
    main.classList.remove("active");
});