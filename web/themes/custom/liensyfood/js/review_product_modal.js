(function ($, Drupal) {
    Drupal.behaviors.modalForm = {
        attach: function (context, settings) {
            $(once('openModal', '.review-ajax', context)).on('click', function (event) {
                event.preventDefault();
                let classValue = $('.pricetag').next().attr('class');
                let number = classValue.match(/\d+/)[0];
                let url = '/paragraphs_item/add/product_reviews/commerce_product_variation/field_product_review/' + number;

                $.ajax({
                    url: url,
                    success: function (data) {
                        $('#modal-form-content').html(data).dialog({
                            modal: true,
                            title: 'Đánh giá sản phẩm',
                            width: 600,
                            close: function () {
                                $('#modal-form-content').dialog('destroy').html('');
                            }
                        });
                    }
                });
            });
        }
    };
})(jQuery, Drupal);
