{
    'use strict';
    window.onload = function () {
        var dropdowns = document.querySelectorAll('.getmdl-select');
        [].forEach.call(dropdowns, function (i) {
            addEventListeners(i);
        })
    };

    var addEventListeners = function (dropdown) {
        var input = dropdown.querySelector('input');
        var list = dropdown.querySelectorAll('li');
        var icon = dropdown.querySelector('i');

        [].forEach.call(list, function (li) {
            li.onclick = function () {
                input.value = li.textContent;
                if ("createEvent" in document) {
                    var evt = document.createEvent("HTMLEvents");
                    evt.initEvent("change", false, true);
                    input.dispatchEvent(evt);
                } else {
                    input.fireEvent("onchange");
                }
            }
        });
    };


}
