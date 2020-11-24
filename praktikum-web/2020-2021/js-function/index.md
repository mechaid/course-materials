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


## Artikel Terkait
- [Javascript Function Definitions](https://www.w3schools.com/js/js_functions.asp)
