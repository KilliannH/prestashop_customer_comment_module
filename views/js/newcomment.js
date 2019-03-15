let rates = [];
let color = '#2fb5d2';

// save jquery rates
for(let i = 1; i <= 5; i++) {
   rates.push($(`#rate${i}`));
}

console.log(rates);

// hover the first rate
rates[0].hover(() => {
   $("#rate1").css("color", color);
}, function(){
   $("#rate1").css("color", "");
});

// and so one ...
rates[1].hover(() => {
   for(let i = 1; i <= 2; i++) {
      $(`#rate${i}`).css("color", color);
   }
}, function(){
   for(let i = 1; i <= 2; i++) {
      $(`#rate${i}`).css("color", "");
   }
});

rates[2].hover(() => {
   for(let i = 1; i <= 3; i++) {
      $(`#rate${i}`).css("color", color);
   }
}, function(){
   for(let i = 1; i <= 3; i++) {
      $(`#rate${i}`).css("color", "");
   }
});

rates[3].hover(() => {
   for(let i = 1; i <= 4; i++) {
      $(`#rate${i}`).css("color", color);
   }
}, function(){
   for(let i = 1; i <= 4; i++) {
      $(`#rate${i}`).css("color", "");
   }
});

rates[4].hover(() => {
   for(let i = 1; i <= 5; i++) {
      $(`#rate${i}`).css("color", color);
   }
}, function(){
   for(let i = 1; i <= 5; i++) {
      $(`#rate${i}`).css("color", "");
   }
});