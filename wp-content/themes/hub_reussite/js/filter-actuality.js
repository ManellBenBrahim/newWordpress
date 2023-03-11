( function( $ ) {
    var $select = $("#archive-filters");
    var url = window.location.protocol + "//" + window.location.host + "/" + window.location.pathname;

    function findGetParameter(parameterName) {
        var result = null,
            tmp = [];
        location.search
            .substr(1)
            .split("&")
            .forEach(function (item) {
                tmp = item.split("=");
                if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
            });
        return result;
    }
    select_value = findGetParameter('tag_id');
    if (select_value !== null) {
        $select.val(select_value);
    }
    $select.on("change", function () {
        if ($(this).val()!== null && $(this).val()!== "") {
            if ($(this).val() !== 'all') {
                url += '?tag_id'+ '=' + $(this).val();
            }
        }
        window.location.replace(url);
    });

} )( jQuery );
