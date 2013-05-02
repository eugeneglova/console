$(function () {

    var consoleElement = $('<div>', {
        class: 'console'
    });

    $('body').append(consoleElement);

    consoleElement.console({

        autofocus: true,
        animateScroll: true,
        promptHistory: true,
        promptLabel: '$ ',

        commandValidate: function (line) {
            if (line == '') return false;
            else return true;
        },

        commandHandle: function (line, fn) {
            $.post('api.php', {
                cmd: line
            }, function (data) {
                fn([{
                    msg: data,
                    className : 'jquery-console-message-value'
                }]);
            });
        }

    });
    var inner = $('.console .jquery-console-inner');
    inner.height($(window).height() - 2 * (inner.innerHeight() - inner.height()));
});