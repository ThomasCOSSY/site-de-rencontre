// Mise en place du système de like 

let imgManip = document.querySelectorAll("img.img-like");

for (let img of imgManip) {
    img.onclick = function changeImg (e) {
        e.preventDefault();
        if (this.src.match("vide")) {
            this.src = "assets/img/coeur_plein1.png";
        } else {
            this.src = "assets/img/coeur_vide.png";
        };
    }
}

// Deuxième solution :
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

// Text scramble Effect from https://codepen.io/soulwire/pen/mErPAK
class TextScramble {
    constructor(el) {
        this.el = el
        this.chars = '!<>-_\\/[]{}—=+*^?#________'
        this.update = this.update.bind(this)
    }
    setText(newText) {
        const oldText = this.el.innerText
        const length = Math.max(oldText.length, newText.length)
        const promise = new Promise((resolve) => this.resolve = resolve)
        this.queue = []
        for (let i = 0; i < length; i++) {
            const from = oldText[i] || ''
            const to = newText[i] || ''
            const start = Math.floor(Math.random() * 40)
            const end = start + Math.floor(Math.random() * 40)
            this.queue.push({ from, to, start, end })
        }
        cancelAnimationFrame(this.frameRequest)
        this.frame = 0
        this.update()
        return promise
    }
    update() {
        let output = ''
        let complete = 0
        for (let i = 0, n = this.queue.length; i < n; i++) {
            let { from, to, start, end, char } = this.queue[i]
            if (this.frame >= end) {
                complete++
                output += to
            } else if (this.frame >= start) {
                if (!char || Math.random() < 0.28) {
                    char = this.randomChar()
                    this.queue[i].char = char
                }
                output += `<span class="dud">${char}</span>`
            } else {
                output += from
            }
        }
        this.el.innerHTML = output
        if (complete === this.queue.length) {
            this.resolve()
        } else {
            this.frameRequest = requestAnimationFrame(this.update)
            this.frame++
        }
    }
    randomChar() {
        return this.chars[Math.floor(Math.random() * this.chars.length)]
    }
}

// Set Geek quotes & timer

const phrases = [
    'Pikachu, attaque Séduction!',
    'We go together, like copy and paste',
    'Dating is coming',
    'You are the CSS to my HTML',
    'Je ne suis pas ton père',
    'With you, life is in all CAPS',
    'Chevron Love enclanché',
    'Let\'s go find your precious',
    'Que la force soit avec toi',
    'La loi de l\'amour, c\'est moi'
]

const el = document.querySelector('.text')
const fx = new TextScramble(el)

let counter = 0
const next = () => {
    fx.setText(phrases[counter]).then(() => {
        setTimeout(next, 2500)
    })
    counter = (counter + 1) % phrases.length
}

next()