// // var tenCuaNam = 'Nam'; // string
// // var tenCuaPhat = 'Phat';
// // var tuoi = 18; // number
// // var mang = ['Nam', 'Phat']; // array
// // console.log(mang[1]);
// var doiTuongNu = {};
var doiTuongNam = {
  ten: 'Nam',
  tuoi: 18,
  lop: 'php-18',
  dogs: ['phoc', 'cun'],
  girlFriend: {
    ten: 'Ngoc Trinh',
    tuoi: 16,
  },
  quetNha: function (tenCuaNha) {
    console.log('Quet nha cua ' + tenCuaNha);
    console.log('1. Lay Choi');
    console.log('2. Quet');
    console.log('3. Cat dung cu');
    return {
      nhaSach: true
    }
  }
};

console.log(doiTuongNam.girlFriend);

// console.log(doiTuongNam);
// console.log(doiTuongNam.quetNha('Phat').nhaSach);

// // quetNha();
// // console.log(doiTuongNam['tuoi']);
console.dir(document);
// console.log(document.getElementById('tieu-de').innerHTML);
function doiChu() {
  document.getElementById('tieu-de').innerHTML = 'PHP18';
}
doiChu();
// var tenCuaNha = 'Nam';

// function quetNha(tenCuaNha) {
//   console.log('Quet nha cua ' + tenCuaNha);
// }

// quetNha('Nam');
// quetNha();
// console.log('Quet nha cua');