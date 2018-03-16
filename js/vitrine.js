$('.owl-carousel').owlCarousel({
              loop:true,
              margin:-750,
              nav:true,
              autoWidth:true,
              navText: [
                      "<i class='fas fa-chevron-left'></i>",
                    "<i class='fas fa-chevron-right'></i>"
                  ],  
              responsive:{
              0:{
                  items:1,
                  margin:20,
                  
              },
              1030:{
                  items:3,
                  margin:50,
              },
              2000:{
                items:10,
              }
              
    }
})