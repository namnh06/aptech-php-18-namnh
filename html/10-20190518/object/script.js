// var nam = [
//   'Nam',
//   19,
//   'male',
//   false,
//   [
//     'phoc',
//     'cun'
//   ]
// ]

var doiTuongNam = {
  name: 'Nam',
  age: 19,
  "gioi-tinh": 'male',
  married: false,
  "name-of-dogs": [
    'phoc', 'cun'
  ],
  tiengKeu: function (hanhDong) {
    console.log(hanhDong);
    // console.log(hanhDong + ' ec ec');
    return {
      name: 'Heo'
    }
  }
};
// console.log(doiTuongNam.name);
// console.log(doiTuongNam["gioi-tinh"]);
// console.log(doiTuongNam['name-of-dogs']);
// console.log(doiTuongNam.tiengKeu('dungKeu'));
// console.log(doiTuongNam.tiengKeu().name);

// console.log(doiTuongNam['name-of-dogs']);
var arrayNameOfDogs = doiTuongNam['name-of-dogs'];
console.log(arrayNameOfDogs);
// i = i + 1 ~ i++
for (var i = 0; i < arrayNameOfDogs.length; i++) {
  console.log(i);
  var heading = document.createElement('h1');

  var styleAttribute = document.createAttribute('style');
  styleAttribute.value = "color:red";
  heading.setAttributeNode(styleAttribute);

  var contentOfHeading = document.createTextNode(arrayNameOfDogs[i]);
  heading.appendChild(contentOfHeading);

  document.body.appendChild(heading);
}