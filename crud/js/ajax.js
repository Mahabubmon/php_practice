console.log("Hello");
//https://dummy.restapiexample.com/api/v1/employees
let fetchBtn = document.getElementById("fetchBtn");
fetchBtn.addEventListener("click", buttonClickHandler);

function buttonClickHandler() {
  //instantiate an xhr object
  const xhr = new XMLHttpRequest();

  //Open the object
  //   xhr.open("GET", "https://jsonplaceholder.typicode.com/todos/1", true);
  //post requist
  xhr.open("POST", "https://dummy.restapiexample.com/api/v1/create", true);
  xhr.getAllResponseHeaders("Content-type", "appilication/json");
  //what to do when the respons is ready
  xhr.onload = function () {
    if (this.status === 200) {
      console.log(this.responseText);
    } else {
      console.log("some error occured");
    }
  };
  //send the request
  params = `{ name: "test", salary: "123", age: "23" }`;
  xhr.send(params);
}

let popBtn = document.getElementById("popBtn");
popBtn.addEventListener("click", popHandler);

function popHandler() {
  console.log("you have click the pophandler");
  const xhr = new XMLHttpRequest();

  //Open the object
  xhr.open("GET", "https://dummy.restapiexample.com/api/v1/employees", true);

  //what to do when the respons is ready
  xhr.onload = function () {
    if (this.status === 200) {
      let obj = JSON.parse(this.responseText);
      console.log(obj);
      let list = document.getElementById("list");
      str = "";
      for (key in obj) {
        str += `<li>${obj[key].employee_name}</li>`;
      }
      list.innerHTML = str;
    } else {
      ("some error occured");
    }
  };
  //send the request

  xhr.send();
  console.log("we are done fetching employee");
}
