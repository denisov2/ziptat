$(document).ready(function () {

    $('[name="subcategory[]"]').on('click', function (e) {
        doFilter();
    });
});

function doFilter() {
    var url_params_array = [];
    if ($('[name="subcategory[]"]:checked').length) {

        var filter_subcategories = [];
        $('[name="subcategory[]"]:checked').each(function (i, element) {
            //console.log ( element.value ) ;
            var j = $(this);
            filter_subcategories.push(j.val());

            /*
             element.on('click', function(){
             // //console.log (element);
             });
             */
        });



        if (filter_subcategories) url_params_array.push('subcategories-filter=' + filter_subcategories.join(';'));
    }
    //url_params_array.push('search=flowers');

    console.log(url_params_array);
    url_base = 'http://ziptat.ga/en/search/';
    search_param = '?search=trees';

    var final_redirect = url_base + '?' +  url_params_array.join('&') ;
    window.location.assign(final_redirect);


}

/*
 $(document).on('click','.imgw', function(){
 $(this).parent("div").remove();
 });

 */