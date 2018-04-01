$('.owl-carousel').owlCarousel({
              loop:true,
              autoWidth:true,
              nav:true,
              navText: [
                      "<i class='fas fa-chevron-left'></i>",
                    "<i class='fas fa-chevron-right'></i>"
                  ],  
              responsive:{
              0:{
                  items:1,
                  margin:60,
                  
              },
              1030:{
                  items:3,
                  margin:30,
              },
              2560:{
                items:6,
                margin:30,
                nav:true,
              }
              
    }
})