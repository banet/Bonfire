
//  Activating initialit the plugin 
$(document).ready(function () {
    $('.thumbnails').simpleGal({
        mainImage: '.custom'
    });
});

// Activating initialit the plugin

$(document).ready(function () {
    $("#carousel").owlCarousel({
        item:5,
        autoplay:true,
        smartSpeed: 700,
        loop: true,
        autoplayPause: true,
        responsive: {
            // breakpoint from 0 up
            0: {
               items: 1 
            },
            // breakpoint from 480 up
            480: {
               items: 3
            },
            // breakpoint from 768 up
            768: {
                items: 3
            },
            
            992 : {
                items: 3
            }
        }
    });

});

// Function for filling the modal with product name and message
function add_to_cart_confirmation() {
    var product_name = $(".product-detail-name").text(); // Get the name of the item
    $("#modal-product-name").text(product_name); // Add the product name to the modal
    $("#modal-product-text").html("Add <b>" + product_name + "</b> to your shopping cart?"); // Add the corresponding text to the modal
}

// Function for increasing the count on the shopping cart notification
function add_to_cart() {
    var notification = $('#header-icons-noti'); // Get the notification span
    var existing_amount = notification.text(); // Get the text from it
    notification.text(parseInt(existing_amount) +1 ); // Parse the text to number and increase by one
    notification.css('background', '#e65440'); //Change the background color to red
}

// Function for clearing the shopping cart
function clear_cart() {
    var notification = $('#header-icons-noti');
    notification.text("0"); // Set the text to 0
    notification.css('background', "black");
}