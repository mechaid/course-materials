---
layout: course-page
title: Function di Javascript
description: Function di Javascript dapat berlaku sebagai variable sekaligus object
course-parent: Web Frontend
course-parent-url: ../../2020-2021
tags: [javascript, function]
---

## Pendefinisian Fungsi

### Deklarasi Function
```javascript
function getLuas(panjang, lebar) {
  var luas = panjang * lebar;
  return luas;
}

console.log(getLuas(4, 5));
```

### Deklarasi Function Sebagai [Expression](https://masteringjs.io/tutorials/fundamentals/expressions)
```javascript
var getLuas = function (panjang, lebar) {return panjang * lebar};

console.log(getLuas(4, 5));
```

### [Hoisting](https://www.w3schools.com/js/js_hoisting.asp) Pada Function
```javascript
console.log(getLuas(4, 5));

var getLuas = function (panjang, lebar) {return panjang * lebar};
```

### Memasukan Nilai Balikan Function ke Dalam Variable
```javascript
var getLuas = function (panjang, lebar) {return panjang * lebar};

var luas = getLuas(7, 8);
console.log(luas);
```

### Function Sebagai Parameter Function Lainnya
```javascript
var getLuas = function (panjang, lebar) {return panjang * lebar};

function printGetLuas(f) {
  luas = f(4, 5);
  console.log(luas);
}

printGetLuas(getLuas);
```


## Artikel Terkait
- [Javascript Function Definitions](https://www.w3schools.com/js/js_functions.asp)
