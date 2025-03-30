$(function () {
    "use strict";
  
    // Default
    $(".repeater-default").repeater();
  
    // Custom Show / Hide Configurations
    $(".file-repeater, .email-repeater, .contact-number-repeater").repeater({
      show: function () {
        $(this).slideDown();
      },
      hide: function (remove) {
        if (confirm("Are you sure you want to remove this item?")) {
          $(this).slideUp(remove);
        }
      },
    });
  });
  
  var room = 1;
  
  

  function product_fields() {
      room++;
      var objTo = document.getElementById("product_fields");
      var divtest = document.createElement("div");
      divtest.setAttribute("class", "mb-3 removeclass" + room);
      var rdiv = "removeclass" + room;
      divtest.innerHTML =
        '<form class="row"><div class="col-sm-3"> <div class="form-group"><input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product Name"></div></div><div class="col-sm-2"> <div class="form-group"> <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity"> </div> </div><div class="col-sm-2">  <div class="form-group">    <input type="text" class="form-control" id="price" name="price" placeholder="Price"> </div> </div> <div class="col-sm-3">  <div class="form-group">     <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount">   </div>   </div>   <div class="col-sm-2">    <div class="form-group">    <button class="btn btn-danger" type="button" onclick="remove_product_fields(' +
        room + ');"> <i class="ti ti-minus"></i> </button> </div></div></form>';
  
      objTo.appendChild(divtest);
  }
  
  function remove_product_fields(rid) {
      $(".removeclass" + rid).remove();
  }
  
  