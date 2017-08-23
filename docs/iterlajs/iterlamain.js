$(function() {
    $('.js-carousel').carousel(3000);

    var $field = $('.js-field');

    $field.placeholder();

    $(".js-phone").inputmask("mask", {"mask": "+7 (999) 999-9999"});

    var $popupLink = $('.js-popup-link'),
        $popup = $('.js-popup'),
        popupOpenedClass = 'b-form__popup_state_opened';

    $popupLink.click(function(e) {
        $popup.toggleClass(popupOpenedClass);

        e.preventDefault();
    });

    var errorFieldClass = 'b-form__field_state_error',
        $formInner = $('.js-form-inner'),
        $submit = $('.js-submit'),
        disabledSubmitClass = 'b-form__btn_state_disabled',
        $formMessage = $('.js-form-message');

    $field.on('keyup change', function() {
        var $this = $(this);
        if($this.hasClass(errorFieldClass) && $this.val().length !== 0) {
            $this
                .removeClass(errorFieldClass)
                .addClass('removed-error');
        } else {
            if($this.hasClass('removed-error')) {
                $this.addClass(errorFieldClass);
            }
        }
    });

    $('.js-form').submit(function() {
        var $this = $(this);
        var data = $this.serialize();

        $submit
            .attr('disabled', true)
            .addClass(disabledSubmitClass);

        $.ajax({
            data: data,
            url: 'iterlainc/iterlacheckForm.php',
            success: function(data) {
                var result = JSON.parse(data);

                if(result['ok'] === false) {
                    var fields = [];

                    for(var i = 0; i < result['fields'].length; i++) {
                        var $field = result['fields'][i];
                        fields.push($field);

                        $this.find('[name="' + $field + '"]').addClass(errorFieldClass);
                    }

                    $.each($('.js-field'), function() {
                       if($.inArray($(this).attr('name'), fields) == -1) {
                           $(this).removeClass(errorFieldClass);
                       }
                    });
                } else {
                    $this.find('.js-field')
                        .removeClass(errorFieldClass)
                        .val('');
                }

                $submit
                    .removeAttr('disabled')
                    .removeClass(disabledSubmitClass);

                if(result['sent'] === true) {
                    $formInner.fadeOut(300);
                    $formMessage.hide();
                    $formMessage.html('<p class="b-form__result">Спасибо! Ваша заявка успешно отправлена.</p>');
                    $formMessage.fadeIn(300);

                    setTimeout(function() {
                        $('.js-field').val('');
                        $formInner.fadeIn(800);
                        $formMessage
                            .html('')
                            .hide();
                    }, 3000);
                }
            }
        });

        return false;
    });
});