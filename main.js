console.log("hello")


let shortLinks = document.querySelectorAll('.shortLink');

for (const link of shortLinks) {
    link.addEventListener('mouseover', function() {
        console.log('mouseover');
        this.classList.toggle('linksHover');
    })
}
