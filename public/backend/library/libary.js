(function ($) {
    var status = {};
    var document = $(document);
    status.switchery = () => {
        $(".js-switch").each(function () {
            var switchery = new Switchery(this, { color: "#1AB394" });
        });
    };

    document.ready(function () {
        status.switchery();
    });
})(jQuery);
