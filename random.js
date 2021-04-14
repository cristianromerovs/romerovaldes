let random = Math.round(Math.random());
var wsp = document.getElementById("whatsapp");
var phone = document.getElementById("phone");

if(random==1) {
    wsp.setAttribute("href", "https://wa.me/56978757896");
    phone.setAttribute("href", "tel:+56978757896")
} else {
    wsp.setAttribute("href", "https://wa.me/56978757896");
    phone.setAttribute("href", "tel:+56978757896")
}

/*wsp.setAttribute("href", "https://wa.me/56978757896");
phone.setAttribute("href", "tel:+56978757896")*/

