
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

var use_vue = false;

if(use_vue){

    window.Vue = require('vue');

    /**
     * Next, we will create a fresh Vue application instance and attach it to
     * the page. Then, you may begin adding components to this application
     * or customize the JavaScript scaffolding to fit your unique needs.
     */

    Vue.component('example-component', require('./components/ExampleComponent.vue'));

    const app = new Vue({
        el: '#app'
    });
}


// Helper functions

function formToJSON ( form ) {
    var ary = form.serializeArray();
    var obj = {};
    for (var a = 0; a < ary.length; a++) obj[ary[a].name] = ary[a].value;
    return obj;
}


// ShopChat AJAX for updating message board

jQuery(document).on('submit', '#message-list-post-form', function(e){
    
    // Set up data vars
    var form = jQuery(this);
    var messages_panel = jQuery('#product-messages');

    // Prevent standard form submission
    e.preventDefault();

    // Set up token
    jQuery.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    // Make ajax call
    jQuery.ajax({
        url: '/messages/post',
        method: 'post',
        data: formToJSON( form ),
        dataType: "json",
        success: function( result ){
            console.log(result);

            // Our return will be JSOn - check for an errors property
            if( result.hasOwnProperty('errors') ){

                var message = '';
                jQuery.each(result.errors, function( key, value ) {
                    message += value + ' ';
                });
                alert(message);

            } else {
                // No errors! Replace the messages panel with the updated markup
                messages_panel.replaceWith( result.view );
            }
        }
    });
});


