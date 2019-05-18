// setInterval(function () {
//   chuyenSlide();
// }, 2000);

// setInterval(chuyenSlide, 2000);

var hinhMot = document.getElementById('hinh-1');
var hinhHai = document.getElementById('hinh-2');
var hinhBa = document.getElementById('hinh-3');

function chuyenSlide() {

  if (hinhMot.style.display == 'block') {
    hinhMot.style.display = 'none';
    hinhHai.style.display = 'block';
    // hinhBa.style.display = 'none';
  } else if (hinhHai.style.display == 'block') {
    // hinhMot.style.display = 'none';
    hinhHai.style.display = 'none';
    hinhBa.style.display = 'block';
  } else {
    hinhBa.style.display = 'none';
    hinhMot.style.display = 'block';
    // hinhHai.style.display = 'none';
  }

  setTimeout(chuyenSlide, 2000);
}

setTimeout(chuyenSlide, 2000);