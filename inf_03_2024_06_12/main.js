function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function useEffect() {
    const img = document.querySelector("img[src='pszczola.jpg']")
    const filters = document.querySelectorAll("input[name='efekt']")
    filters.forEach((filter) => {
        if (filter.checked) {
            if (filter.value == "blur") {
                img.style.filter = `blur(${getRandomInt(4,8)}px)`;
            } else {
                img.style.filter = filter.value
            }
        }
    });
}

function addColor() {
    const img = document.querySelector("img[src='pomarancza.jpg']")
    img.style.filter = "none"
}

function removeColor() {
    const img = document.querySelector("img[src='pomarancza.jpg']")
    img.style.filter = "grayscale(100%)"
}

function setOpacity() {
    const img = document.querySelector("img[src='owoce.jpg']")
    const value = document.querySelector("input[id='przezroczystosc']").value
    img.style.filter = `opacity(${value}%)`
}

function setBrigtness() {
    const img = document.querySelector("img[src='zolw.jpg']")
    const value = document.querySelector("input[id='jasnosc']").value
    img.style.filter = `brightness(${value}%)`
}