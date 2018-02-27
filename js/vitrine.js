$('.owl-carousel').owlCarousel({
              loop:true,
              center: true,
              items:3,
              margin:50,
              nav:true,
              navText: [
                      "<i class='fas fa-chevron-circle-left'></i>",
                    "<i class='fas fa-chevron-circle-right'></i>"
                  ],  
              responsive:{
              0:{
                  items:1
              },
              1000:{
                  items:2
              },
              2000:{
                items:4
              }
    }
})

