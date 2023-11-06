console.log("Hello");

let fetchBtn = document.getElementById("fetchBtn");
fetchBtn.addEventListener("click", buttonClickHandler);

function buttonClickHandler() {
  //instantiate an xhr object
  const xhr = new XMLHttpRequest();

  //Open the object
  xhr.open("GET", "mahabub.txt", true);

  //what to do when the respons is ready
  xhr.onload = function () {
    console.log(this.responseText);
  };
  xhr.send();
}
