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
