require('./bootstrap');

// interazione con la dom per modificare il colore del tag

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

    else if (element.value == "LANGUAGES") {
        element.style.backgroundColor = "rgb(241, 154, 26)"
    }

    else {
        element.style.backgroundColor = "#22ADDD"
    }

}

// interazione con la dom per modificare il layout 

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

// interazione con la dom per modificare il colore del level bar

const meter = document.querySelectorAll("#difficulty-meter")

console.log(meter);

for (let index = 0; index < meter.length; index++) {
    const element = meter[index];
    const span = element.children
    //https://www.w3schools.com/jsref/prop_element_children.asp
    console.log(span);
    if (element.classList.contains("Beginner")) {
        span[0].style.backgroundColor = "white"
        span[1].style.backgroundColor = "rgba(0,0,0,0.25)"
        span[2].style.backgroundColor = "rgba(0,0,0,0.25)"
    }
    else if (element.classList.contains("Intermediate")) {
        span[0].style.backgroundColor = "white"
        span[1].style.backgroundColor = "white"
        span[2].style.backgroundColor = "rgba(0,0,0,0.25)"
    }
    else if (element.classList.contains("Advanced")) {
        for (let index = 0; index < span.length; index++) {
            span[index].style.backgroundColor = "white"
        }
    }


}

// interazione con la dom per modificare il colore del container-image

const container_image = document.querySelectorAll(".container-image")

for (let index = 0; index < container_image.length; index++) {
    const element = container_image[index];
    if (element.classList.contains("TOOLING")) {
        element.style.backgroundImage = "linear-gradient(to bottom, #8b60ed, #b372bd)"
    }
    else if (element.classList.contains("FRAMEWORKS")) {
        element.style.backgroundImage = "linear-gradient(to bottom, #f44881 , #ec454f)"
    }
    else if (element.classList.contains("TECHNIQUES")) {
        element.style.backgroundImage = "linear-gradient(to bottom, #21C8F6 , #637BFF)"
    }
    else {
        element.style.backgroundImage = "linear-gradient(to bottom, #f19a1a , #ffc73c)"
    }


}



