  $(function() {
      
        // initialize semanticUI components

        $('.ui.menu .ui.dropdown').dropdown({
            on: 'hover'
        });

        $('.ui.menu a.item')
            .on('click', function() {
                $(this).addClass('active')
                       .siblings()
                       .removeClass('active');
            });

        $('.menu .item').tab();      
      
        $('.event.example .image').dimmer({
            on: 'hover'
        });
      
      
        $('#artwork').on('click', function () {
            $('.ui.fullscreen.modal').modal('show');             
        });     
      
});