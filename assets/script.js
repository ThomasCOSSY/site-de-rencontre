let imgManip = document.getElementById("img");

imgManip.onclick = function (e) {
        e.preventDefault();
        if (imgManip.src.match("vide")) {

            imgManip.src = "assets/img/coeur_plein.png";
        } else {
            imgManip.src = "assets/img/coeur_vide.png";
        };
    }