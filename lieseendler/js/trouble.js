$(document).ready(function(){

    $('.right ol li').draggable({
      cancel: "a.ui-icon,img[src=placeholder.svg]", // clicking an icon won't initiate dragging
      revert: "invalid", // when not dropped, the item will revert back to its initial position
      containment: "document",
      cursor: "move",
      helper: "clone"
    });
  
    $('.left ol li').draggable({
      cancel: "a.ui-icon", // clicking an icon won't initiate dragging
      revert: "invalid", // when not dropped, the item will revert back to its initial position
      containment: "document",
      helper: "clone",
      cursor: "move"
    });

    $('.right ol li').droppable({
      accept: "ol > li",
      activeClass: "ui-state-highlight",
      drop: function( event, ui ) {

        var placeholderSave = $( this ).index();
        //console.log(placeholderSave);
        var place = $('.right ol li').get(placeholderSave);
        $(place).html(ui.draggable.html());
        $(place).css({border: 'white dashed 2px'});

        var source = ui.draggable.offsetParent();

        if(source.hasClass('right'))
        {
          ui.draggable
            .html('<img src="placeholder.svg" alt="">')
            .css({border: '#666 dashed 2px'});
        }

      }

    });

    $('li').on('click','span.trash',function(){
      $(this).parents('li')
        .html('<img src="placeholder.svg" alt="">')
        .css({border: '#666 dashed 2px'});
    });

/*
    $('.hide').on('click',function(){
      document.getElementById("selection").style.display = "none";
      document.getElementById("hide").style.display = "none";
      document.getElementById("unhide").style.display = "block";
    });

    $('.unhide').on('click',function(){
      document.getElementById("selection").style.display = "block";
      document.getElementById("unhide").style.display = "none";
      document.getElementById("hide").style.display = "block";
    });
*/
    $('.clear').on('click',function(){
      $('.right ol li')
        .html('<img src="placeholder.svg" alt="">')
        .css({border: '#666 dashed 2px'});
    });

});