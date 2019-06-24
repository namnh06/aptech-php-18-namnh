var imageElement = document.getElementById('image');

// console.log(imageElement);
// console.log(imageElement.src);
// console.log(document.getElementById('image').src);

function batBongDen() {
  // document.getElementById('image').src = "pic_bulbon.gif";
  imageElement.src = "pic_bulbon.gif";

}

function tatBongDen() {
  // document.getElementById('image').src = 'pic_bulboff.gif';
  imageElement.src = "pic_bulboff.gif";
}

function chuyenDoiTrangThaiBongDen() {
  // console.log(imageElement.src);
  // if (5 == 4) {
  //   console.log('Nam');
  // }
  // if (imageElement.src == 'http://127.0.0.1:5500/bong-den-1-function/pic_bulbon.gif') {
  //   console.log('Tat Ne');
  //   imageElement.src = 'pic_bulboff.gif';
  // }
  // console.log('O giua');
  // if (imageElement.src == 'http://127.0.0.1:5500/bong-den-1-function/pic_bulboff.gif') {
  //   console.log('Mo Ne');
  //   imageElement.src = 'pic_bulbon.gif';
  // }
  // console.log(typeof (5));
  // if (imageElement.src == 'http://127.0.0.1:5500/bong-den-1-function/pic_bulbon.gif') {
  if (imageElement.src.includes('pic_bulbon.gif')) {
    console.log('Tat Ne');
    imageElement.src = 'pic_bulboff.gif';
  } else {
    console.log('Mo Ne');
    imageElement.src = 'pic_bulbon.gif';
  }
}