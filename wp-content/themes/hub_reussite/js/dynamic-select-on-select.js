/*
 updated JS file for use with ACF >= 5.7.0
 */


jQuery(document).ready(function ($) {

    if (typeof acf == 'undefined') {
        return;
    }

    $radio_inputs = $('#thematique-wrapper').find('input[type=radio]');
    $radio_inputs.on('change', function () {
        $select = $('#tag-wrapper').find('select');
        $select.empty();
        var state = $(this).val();
        // set and prepare data for ajax
        var data = {
            action: 'load_tag_choices',
            state: state
        };
        // call the acf function that will fill in other values
        // like post_id and the acf nonce
        data = acf.prepareForAjax(data);
        // make ajax request
        // instead of going through the acf.ajax object to make requests like in <5.7
        // we need to do a lot of the work ourselves, but other than the method that's called
        // this has not changed much
        this.request = $.ajax({
            url: acf.get('ajaxurl'), // acf stored value
            data: data,
            type: 'post',
            dataType: 'json',
            success: function (json) {
                if (!json) {
                    return;
                }
               // add the new options to the city field
                for (i = 0; i < json.length; i++) {
                    var tag_item = '<option value="' + json[i]['value'] + '">' + json[i]['label'] + '</option>';
                    $select.append(tag_item);
                }
            }
        });

    });
    $radio_inputs.trigger('ready');
    // find a specific field
});


