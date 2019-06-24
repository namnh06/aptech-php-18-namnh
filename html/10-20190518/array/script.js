// var nam = 'Nam';
// var phat = 'Phat';

var array = ['Nam', 'Phat', 'A'];
console.log(array);
console.log(array[0]);

// var index = 0;
// document.getElementById('nguoi-so-' + (index + 1)).innerHTML = array[index];
// index = index + 1;
// document.getElementById('nguoi-so-' + (index + 1)).innerHTML = array[index];
// index = index + 1;
// document.getElementById('nguoi-so-' + (index + 1)).innerHTML = array[index];

for (var index = 0; index < array.length; index = index + 1) {
  document.getElementById('nguoi-so-' + (index + 1)).innerHTML = array[index];
}