function loadDoc() {
  var xhttp = new XMLHttpRequest(); //class
  xhttp.onreadystatechange = function () {
    console.log(this.readyState);
    if (this.readyState == 4 && this.status == 200) {
      console.log(JSON.parse(this.responseText));
      document.getElementById("demo").innerHTML =
        JSON.parse(this.responseText);
    }
  };
  // xhttp.open("GET", "data.json", true);
  xhttp.open("GET", "https://namcoi.com/projects/users-crud-laravel/public/api/users", true);

  xhttp.send();
}