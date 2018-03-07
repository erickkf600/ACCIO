$('.owl-carousel').owlCarousel({
              loop:true,
              center: true,
              margin:-750,
              nav:true,
              navText: [
                      "<i class='fas fa-chevron-left'></i>",
                    "<i class='fas fa-chevron-right'></i>"
                  ],  
              responsive:{
              0:{
                  items:1,
                  margin:50,
                  autoWidth:true,
              },
              1000:{
                  items:3,
                  margin:50,
                  autoWidth:true,
              },
              2000:{
                items:10,
                  margin:80,
                  autoWidth:true,
              }
              
    }
})


