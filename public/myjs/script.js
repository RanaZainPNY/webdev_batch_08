alert("hello js");

liElems = document.querySelectorAll(".item");
for (let index = 0; index < liElems.length; index++) {
    const element = liElems[index];
    element.addEventListener("click", function (event) {
        console.log(this);
        // alert(this.innerText);
        this.style.borderLeft = "5px solid green";
    });
}
