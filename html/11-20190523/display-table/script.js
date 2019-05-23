var data = {
  "users": [{
      "id": 10,
      "name": "Ethyl Medhurst",
      "email": "noah.hand@example.org",
      "password": "$2y$10$GLfHbVK./jG2WD8QQ0.ZDOqqeJe7rz.hl827sKoHOhd9LLoXfyHHG",
      "created_at": "2019-03-26 04:55:04",
      "updated_at": "2019-03-26 04:55:04"
    },
    {
      "id": 9,
      "name": "Eula Lebsack PhD",
      "email": "schroeder.sylvan@example.org",
      "password": "$2y$10$.vzCIUVX34GibJ3.ObFqYu5Bd.Ig8PqF3adoLHza78eq510mfhy9G",
      "created_at": "2019-03-26 04:55:03",
      "updated_at": "2019-03-26 04:55:03"
    },
    {
      "id": 8,
      "name": "Mrs. Kathlyn Parisian DDS",
      "email": "ggrimes@example.net",
      "password": "$2y$10$N.DpYW9Sd0c8p3rSVjO0MeZ5e7idfPeKPZyOO77m8vNSEOnMws5O2",
      "created_at": "2019-03-26 04:55:03",
      "updated_at": "2019-03-26 04:55:03"
    }
  ]
};

function inDuLieu() {
  var thead = document.createElement('thead');
  var trow = document.createElement('tr');
  thead.appendChild(trow);
  var th = document.createElement('th');
  var thNoiDung = document.createTextNode('ID');
  th.appendChild(thNoiDung);
  trow.appendChild(th);

  var th = document.createElement('th');
  var thNoiDung = document.createTextNode('Name');
  th.appendChild(thNoiDung);
  trow.appendChild(th);


  var tbody = document.createElement('tbody');

  var table = document.createElement('table');
  table.appendChild(thead);
  table.appendChild(tbody);

  document.body.appendChild(table);

  for (var i = 0; i < data.users.length; i++) {
    var trow = document.createElement('tr');

    var td = document.createElement('td');
    var tdNoiDung = document.createTextNode(data.users[i].id);
    td.appendChild(tdNoiDung);
    trow.appendChild(td);

    var td = document.createElement('td');
    var tdNoiDung = document.createTextNode(data.users[i].name);
    td.appendChild(tdNoiDung);

    trow.appendChild(td);
    tbody.appendChild(trow);
  }
}