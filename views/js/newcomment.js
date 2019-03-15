let rates = [];
let color = '#2fb5d2';

// save jquery rates
for(let i = 1; i <= 5; i++) {
   rates.push($(`#rate${i}`));
}

////* HOVER PART *////

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


////* CLICK PART *////
rates[0].click(() => {
    if(!$("#rate1").hasClass("rates-highlight")) {
        $("#rate1").addClass("rates-highlight");
    }
   for(let i = 2; i <= 5; i++) {
       if($(`#rate${i}`).hasClass("rates-highlight")) {
           $(`#rate${i}`).removeClass("rates-highlight");
       }
   }
   $(`#rate_input`).val(1);
});

rates[1].click(() => {
   for(let i = 1; i <= 2; i++) {
       if(!$(`#rate${i}`).hasClass("rates-highlight")) {
           $(`#rate${i}`).addClass("rates-highlight");
       }
   }
   for(let i = 3; i <= 5; i++) {
       if($(`#rate${i}`).hasClass("rates-highlight")) {
           $(`#rate${i}`).removeClass("rates-highlight");
       }
   }
   $(`#rate_input`).val(2);
});

rates[2].click(() => {
   for(let i = 1; i <= 3; i++) {
       if(!$(`#rate${i}`).hasClass("rates-highlight")) {
           $(`#rate${i}`).addClass("rates-highlight");
       }
   }
   for(let i = 4; i <= 5; i++) {
       if($(`#rate${i}`).hasClass("rates-highlight")) {
           $(`#rate${i}`).removeClass("rates-highlight");
       }
   }
   $(`#rate_input`).val(3);
});

rates[3].click(() => {
   for(let i = 1; i <= 4; i++) {
       if(!$(`#rate${i}`).hasClass("rates-highlight")) {
           $(`#rate${i}`).addClass("rates-highlight");
       }
   }
   if($("#rate5").hasClass("rates-highlight")) {
       $("#rate5").removeClass("rates-highlight");
   }
   $(`#rate_input`).val(4);
});

rates[4].click(() => {
   for(let i = 1; i <= 5; i++) {
       if(!$("#rate5").hasClass("rates-highlight")) {
           $(`#rate${i}`).addClass("rates-highlight");
       }
   }
   $(`#rate_input`).val(5);
});
