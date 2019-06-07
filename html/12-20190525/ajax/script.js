function layDuLieu() {
  document.getElementById('button').style.display = 'none';
  var http = new XMLHttpRequest();
  http.onreadystatechange = function () {
    console.log(http.readyState, http.status);
    if (this.readyState == 4 && this.status == 200) {
      var data = JSON.parse(http.responseText);
      console.log(data.users);
      document.getElementById("demo").innerHTML =
        JSON.parse(this.responseText).users[0].name;
    }
  };
  // http.open("GET", "data.json", true);
  http.open("GET", "https://namcoi.com/projects/users-crud-laravel/public/api/users", true);

  http.send();


}

layDuLieu();