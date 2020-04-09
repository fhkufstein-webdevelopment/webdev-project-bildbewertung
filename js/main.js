// Event das beim klicken aud Burgermenü erscheint: Funktion

const elementAuswaehlen = function (element) {   /* bei welchem Elment das ausgelöst wirt weitergegeben */
    return document.querySelector(element);
};

let menüVerschwinden = elementAuswwehlen('.menu-hide');
let body = elementAuswaehlen('.body');

menüVerschwinden.addEventListener('click', function () {
    body.classList.toggle('open');
});