new Swiper('.swiper-container', {
    slidesPerView: 1,
    spaceBetween: 30,
    slidesPerGroup: 1,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        567: {
            slidesPerView: 2,
            spaceBetween: 30,
            slidesPerGroup: 2,
        },
        992: {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 3,
        },
    }
});

jQuery(function () {
    $(document).on('click', '.event_attend', function () {
        let title = $(this).parents('.event_block').find('.event_title').text();
        let event_id = $(this).data('id');
        $('.modal_title').text(title);
        $('.modal_event').val(event_id);
        $('.attend_modal').addClass('open');
    });

    $(document).on('click', '.modal_overlay', function () {
        $('.attend_modal').removeClass('open');
    });

    $(document).on('focusout', '#modal_name, #modal_email', function () {
        if($(this).val() !== ''){
            $(this).parent().addClass('show');
        }else{
            $(this).parent().removeClass('show');
        }
    });

    $(document).on('click', '.close', function () {
        $(this).parent().hide();
    });
});
