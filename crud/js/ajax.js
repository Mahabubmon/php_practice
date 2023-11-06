console.log("Hello");

let fetchBtn = document.getElementById("fetchBtn");
fetchBtn.addEventListener("click", buttonClickHandler);

function buttonClickHandler() {
  //instantiate an xhr object
  const xhr = new XMLHttpRequest();

  //Open the object
  //   xhr.open("GET", "https://jsonplaceholder.typicode.com/todos/1", true);
  //post requist
  xhr.open("POST", "https://dummy.restapiexample.com/api/v1/create", true);
  xhr.getAllResponseHeaders(
    "Content-type",
    "appilication/x-www-form-urlencoded"
  );
  //what to do when the respons is ready
  xhr.onload = function () {
    console.log(this.responseText);
  };
  //send the request
  params = "name=test&salary=123&age=23";
  xhr.send(params);
}
