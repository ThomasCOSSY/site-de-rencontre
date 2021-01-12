// Mise en place du système de like 

let imgManip = document.querySelectorAll("img.img-like");

for (let img of imgManip) {
    img.onclick = function changeImg (e) {
        e.preventDefault();
        if (this.src.match("vide")) {
            this.src = "assets/img/coeur_plein.png";
        } else {
            this.src = "assets/img/coeur_vide.png";
        };
    }
}

// deuxieme solution :
// imgManip.forEach(function (img) {
//     img.onclick = function changeImg(e) {
//         e.preventDefault();
//         if (img.src.match("vide")) {
//             console.log("toto");
//             img.src = "assets/img/coeur_plein.png";
//         } else {
//             console.log("fifi");
//             img.src = "assets/img/coeur_vide.png";
//         };
//     }
// });