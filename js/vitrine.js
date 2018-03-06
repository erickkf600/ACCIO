$('.owl-carousel').owlCarousel({
              loop:true,
              center: true,
              autoplay: 4000,
              margin:-750,
              nav:true,
              navText: [
                      "<i class='fas fa-chevron-circle-left'></i>",
                    "<i class='fas fa-chevron-circle-right'></i>"
                  ],  
              responsive:{
              0:{
                  items:1,
                  margin:50,
                  autoWidth:true,
              },
              1000:{
                  items:3,
                  margin:30,
                  autoWidth:true,
              },
              2000:{
                items:4
              }
    }
})


