require('./bootstrap');

const button_tag = document.querySelectorAll(".tag")
/* console.log(button_tag); */
for (let index = 0; index < button_tag.length; index++) {
    const element = button_tag[index];
    if (element.value == "TOOLING") {
        element.style.backgroundColor = "#845BE2"
    }

    else if (element.value == "FRAMEWORKS") {
        element.style.backgroundColor = "#E1424B"
    }

}

const metasingolo = document.querySelectorAll(".metaSingolo")
console.log(metasingolo);
for (let index = 0; index < metasingolo.length; index++) {
    const element = metasingolo[index];
    if (index % 2 == 0) {
        element.style.flexDirection = "row"

    }
    else if (index % 2 !== 0) {
        element.style.flexDirection = "row-reverse"

    }

}

const immagine = document.querySelectorAll(".metaSingolo img")
console.log(immagine);
for (let index = 0; index < immagine.length; index++) {
    const element = immagine[index];
    if (index % 2 == 0) {
        element.style.right = "40px"

    }
    else if (index % 2 !== 0) {
        element.style.right = "-185px"

    }


}


//ho aggiunto una classe con lo stesso livello di difficoltà dall'array

const meter = document.querySelectorAll("#difficulty-meter")

console.log(meter);

for (let index = 0; index < meter.length; index++) {
    const element = meter[index];
    const span = element.children
    //https://www.w3schools.com/jsref/prop_element_children.asp
    console.log(span);
    if (element.classList.contains("Beginner")) {
        span[0].style.backgroundColor = "white"
        span[1].style.backgroundColor = "#B2343E"
        span[2].style.backgroundColor = "#B2343E"
    }
    else if (element.classList.contains("Intermediate")) {
        span[0].style.backgroundColor = "white"
        span[1].style.backgroundColor = "white"
        span[2].style.backgroundColor = "#B2343E"
    }
    else if (element.classList.contains("Advanced")) {
        for (let index = 0; index < span.length; index++) {
            span[index].style.backgroundColor = "white"
        }
    }


}



