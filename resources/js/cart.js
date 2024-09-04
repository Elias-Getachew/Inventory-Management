// $(document).ready(function () {
//     $(".cart_update").change(function (e) {
//         e.preventDefault();

//         var ele = $(this);

//         $.ajax({
//             url: "/update-cart", // Make sure this matches your route
//             method: "PATCH",
//             data: {
//                 _token: $('meta[name="csrf-token"]').attr("content"),
//                 id: ele.closest("tr").data("id"),
//                 quantity: ele.val(),
//             },
//             success: function (response) {
//                 location.reload();
//             },
//             error: function (xhr) {
//                 console.error("Error:", xhr.responseText);
//                 alert("Failed to update cart.");
//             },
//         });
//     });

//     $(".cart_remove").click(function (e) {
//         e.preventDefault();

//         var ele = $(this);

//         if (confirm("Do you really want to remove?")) {
//             $.ajax({
//                 url: "/cart/remove", // Make sure this matches your route
//                 method: "DELETE",
//                 data: {
//                     _token: $('meta[name="csrf-token"]').attr("content"),
//                     id: ele.closest("tr").data("id"),
//                 },
//                 success: function (response) {
//                     if (response.success) {
//                         location.reload();
//                     } else {
//                         alert("Failed to remove item.");
//                     }
//                 },
//                 error: function (xhr) {
//                     console.error("Error:", xhr.responseText);
//                     alert("Failed to remove item.");
//                 },
//             });
//         }
//     });
// });
