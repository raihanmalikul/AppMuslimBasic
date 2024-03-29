// window.Components.radioGroup = function({
//     initialCheckedIndex: e = 0
// } = {}) {
//     return {
//         value: void 0,
//         active: void 0,
//         init() {
//             let t = Array.from(this.$el.querySelectorAll("input"));
//             this.value = t[e]?.value;
//             for (let e of t)
//                 e.addEventListener("change", (() => {
//                     this.active = e.value
//                 })),
//                 e.addEventListener("focus", (() => {
//                     this.active = e.value
//                 }));
//             window.addEventListener("focus", (() => {
//                 console.log("Focus change"),
//                     t.includes(document.activeElement) || (console.log("HIT"),
//                         this.active = void 0)
//             }), !0)
//         }
//     }
// }

// Navnbar fixed
window.onscroll = function() {
    const header = document.querySelector("header");
    const fixedNav = header.offsetTop;
    const toTop = document.querySelector("#toTop");

    if (window.pageYOffset > fixedNav) {
        header.classList.add("navbar-fixed");
        toTop.classList.remove("hidden");
        toTop.classList.add("flex");
    } else {
        header.classList.remove("navbar-fixed");
        toTop.classList.remove("flex");
        toTop.classList.add("hidden");
    }
};

// Hamburger
const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#navMenu");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("hamburger-active");
    navMenu.classList.toggle("hidden");
});

// Klik not hamburger
window.addEventListener("click", (e) => {
    if (e.target != hamburger && e.target != navMenu) {
        hamburger.classList.remove("hamburger-active");
        navMenu.classList.add("hidden");
    }
});

// dark mode toggle
document.querySelector("#disabledMode").classList.add("hidden")

const darkToggle = document.querySelector("#dark-toggle");
const html = document.querySelector("html");
html.classList.remove("dark");

darkToggle.addEventListener("click", () => {
    if (darkToggle.checked) {
        html.classList.add("dark");
        localStorage.theme = "dark";
    } else {
        html.classList.remove("dark");
        localStorage.theme = "light";
    }
});

// Tombol pindah sesuai mode
if (localStorage.theme === "dark" || (!("theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
    darkToggle.checked = true;
} else {
    darkToggle.checked = false;
}

const imgSwich = document.querySelector("#imgSwich");
if (imgSwich) {
    const foto = imgSwich.getElementsByTagName("div");
    for (var i = 1; i < foto.length; i++) {
        foto[i].classList.add("hidden");
    }
    
    var counter = 1;
    setInterval(function () {
        for (var i = 0; i < foto.length; i++) {
            foto[i].classList.add("hidden");
        }
        foto[counter].classList.remove("hidden")
        counter++;
        if (counter == foto.length) {
            counter = 0;
        }
    }, 5000);
}