/*  ===========================
        FUNCTIONS && OBJECTS
========================== */

// Open Modal
var openModal = function(modalContent) {
    closeModal();
    var $modal = $('#modal');

    if (modalContent != '' && $modal.css('display') == 'none') {
        // Modal customization
        $modal.css('display', 'flex');
        $('body').css('overflow', 'hidden');

        // Append the modal
        $modal.append(modalContent);
    }
}

// Close Modal
var closeModal = function() {
    var $modal = $('#modal');

    if ($modal.css('display') == 'flex') {
        $modal.css('display', 'none');
    }

    $('body').css('overflow', 'auto');
    $modal.html('');
}

// Hide Alert
var hideAlert = function() {
    var $alert = $('#alert');
    $alert.removeClass();               // Remove All Classes
    $alert.addClass('alert hide');      // hiding alert 
}

// Show Alert
var showAlert = function(message, status) {    
    if (status != '') {
        var $alert = $('#alert');
        $alert.removeClass();
        $alert.addClass('alert show ' + status);
        $alert.find('.alert-text').text(message);

        setTimeout(hideAlert, 3000);
    }
}

// Show Loader
var showLoader = function() {
    if ($('.loader-outer').hasClass('active')) {
        $('.loader-outer').removeClass('active');
    }
    $('.loader-outer').addClass('active');
}

// Hide Loader
var hideLoader = function() {
    if ($('.loader-outer').hasClass('active')) {
        $('.loader-outer').removeClass('active');
    }
}

// Post Data
var postData = function(data, onSuccess, onError=null, beforeSend=null) {
    if (data) {
        $.ajax({
            url: (data.url ? data.url : ''),
            type: 'post',
            dataType: 'json',
            data: data,
            cache: false,
            processData: false,
            contentType: false,
            beforeSend: function() {
                // Before Send
                if (typeof beforeSend === 'function') beforeSend();

                // Show Loader
                if (data.isShowLoader && data.isShowLoader === true) showLoader();
            },
            success: function(res){
                // Hide Loader
                if (data.isShowLoader && data.isShowLoader === true) hideLoader();

                // Success
                if (res.error === false) {
                    // On Success
                    if (typeof onSuccess === 'function') onSuccess(res);
                    // Success Message
                    if (typeof res.message !== 'undefined' && res.message) showAlert(res.message, 'success');
                } 

                // Error
                if (res.error === true) {
                    // On Error
                    if (typeof onError === 'function') onError(res);
                    // Error Message
                    if (typeof res.message !== 'undefined' && res.message) showAlert(res.message, 'error');
                }
            },
            xhr: function() {
                var xhr = new window.XMLHttpRequest();

                // Upload progress
                xhr.upload.addEventListener("progress", function(evt){
                    if (evt.lengthComputable) {
                        var percentComplete = evt.loaded / evt.total;
                        //Do something with upload progress
                        // console.log(percentComplete);
                    }
                }, false);
                
                // Download progress
                xhr.addEventListener("progress", function(evt){
                    if (evt.lengthComputable) {
                        var percentComplete = evt.loaded / evt.total;
                        // Do something with download progress
                        // console.log(percentComplete);
                    }
                }, false);
                
                return xhr;
            }
        });
    }
}

// WA Chat Toggle
var wa_chat_toggle = function() {
    if ($(this).parent().hasClass('show')) {
        $(this).parent().removeClass('show');
    } else {
        $(this).parent().addClass('show');
    }
}

// WA Chat Trigger
var wa_chat_trigger = function() {
    $('#wa-chat-send-button').trigger('click');
}

// Copy to Clipboard
var copyToClipboard = function(text) {
    var dummy = document.createElement("textarea");

    // to avoid breaking orgain page when copying more words
    // cant copy when adding below this code
    // dummy.style.display = 'none'
    document.body.appendChild(dummy);

    //Be careful if you use texarea. setAttribute('value', value), which works with "input" does not work with "textarea". – Eduard
    dummy.value = text;
    dummy.select();
    
    document.execCommand("copy");
    document.body.removeChild(dummy);

    // Show Alert
    showAlert('Berhasil di salin ke papan klip', 'success');

    return text;
}

// Copy Text
var copy_text = function(e) {
    e.preventDefault();
    var txt = $(this).attr('data-copy');
    if (txt && txt != '') return copyToClipboard(txt);
}

// Get Offset
var getOffset = function(elem) {
    var offsetLeft = 0, offsetTop = 0, parent = elem;

    do {
        if ( !isNaN( elem.offsetLeft ) ) {        
            offsetLeft += elem.offsetLeft;
            offsetTop += elem.offsetTop;
            parent = elem;
        }
    } while ( elem = elem.offsetParent );

    return {
        left: offsetLeft, 
        top: offsetTop,
        parent: parent
    };
}

// Generate Tooltip
var generate_tooltip = function() {
    var target  = this;
    var tip     = target.getAttribute("title");

    var tooltip = document.createElement("div");
    tooltip.id = "tooltip";

    if(!tip || tip == "") return false;

    target.removeAttribute("title");

    tooltip.style.opacity = 0;
    tooltip.innerHTML = tip;

    document.body.appendChild(tooltip);

    // Init Tooltip
    var init_tooltip = function() {
        // console.log(getOffset(target));

        // set width of tooltip to half of window width
        if (window.innerWidth < tooltip.offsetWidth * 1.5) {
            tooltip.style.maxWidth = window.innerWidth / 2;
        } else {
            tooltip.style.maxWidth = 340;
        }

        var pos_left = getOffset(target).left + (target.offsetWidth / 2) - (tooltip.offsetWidth / 2);
        var pos_top  = getOffset(target).top - tooltip.offsetHeight - 10;

        // Landing
        var landingClassNames = ['background', 'active', 'shown'];
        if (landingClassNames.some(className => getOffset(target).parent.classList.contains(className))) {        
            pos_top = (getOffset(target).top - tooltip.offsetHeight - 10) - ((getOffset(target).parent.offsetHeight * 12) / 100);
        }

        if ( pos_left < 0 ) {
            pos_left = getOffset(target).left + target.offsetWidth / 2 - 20;
            tooltip.classList.add("left");
        } else {
            tooltip.classList.remove("left");
        }

        if ( pos_left + tooltip.offsetWidth > window.innerWidth ) {
            pos_left = getOffset(target).left - tooltip.offsetWidth + target.offsetWidth / 2 + 20;
            tooltip.classList.add("right");

            if (pos_left < 0) {
                pos_left = 10;
                tooltip.classList.add("left");
                tooltip.classList.remove("right");
            } else {
                tooltip.classList.remove("left");
            }            
        } else {
            tooltip.classList.remove("right");
        }

        if ( pos_top < 0 ) {
            pos_top = getOffset(target).top + target.offsetHeight + 15;
            tooltip.classList.add("top");
        } else {
            tooltip.classList.remove("top");
        }

        // adding "px" is very important
        tooltip.style.left = pos_left + "px";
        tooltip.style.top = pos_top + "px";
        tooltip.style.opacity  = 1;
    };

    // Init
    init_tooltip();

    // Resize
    window.addEventListener("resize", init_tooltip);

    // Remove Tooltip
    var remove_tooltip = function() {
        tooltip.style.opacity  = 0;
        document.querySelector("#tooltip") && document.body.removeChild(document.querySelector("#tooltip"));
        target.setAttribute("title", tip );
    };

    // Mouse Leave
    target.addEventListener("mouseleave", remove_tooltip );

    // Click
    tooltip.addEventListener("click", remove_tooltip );
}

// Generate Chart
var generate_chart = function(canvas, type, data, options) {
    if (canvas) return new Chart( canvas, { type, data, options } );
}

// Generate Chart Data
var generate_chart_data = function(data, colors, labels) {
    return {
        datasets: [
            {
                data: data,
                backgroundColor: colors.background,
                hoverBackgroundColor: colors.hoverbackground,
                hoverBorderColor : colors.hoverBorder,
            }
        ],
        labels: labels
    }
}

// Chart Options 'Default'
var chart_options = {
    tooltips: {
        enabled: false
    },
    legend: {
        display: false
    },
    cutoutPercentage: 65
}

// Init Selectize
var init_selectize = function(el, opt) {
    if (el) {
        var select = $(el).selectize(opt);
        if (select.length) {
            $(".selectize-input input").attr('readonly','readonly');
            return $(select)[0].selectize;        
        }
    }
}

// Selected Selectize
var selected_selectize = function(selectize, items=[]) {
    if (items && items != '') return selectize.setValue(items, 1);
}

// Selectize Options
var selectize_options = function(opt) {
    if (opt) {
        return {
            maxItems: (opt.maxItems ? opt.maxItems : null),
            valueField: (opt.valueField ? opt.valueField : ''),
            labelField: (opt.labelField ? opt.labelField : ''),
            searchField: (opt.searchField ? opt.searchField : []),
            options: (opt.options ? opt.options : []),
            create: (opt.create ? opt.create : false),
            render: (opt.render ? opt.render : {})
        }
    }
}

// WhatsApp Template Selection Options
var whatsapp_template_selection_options = function(data) {
    if (data && data != '') {
        // Options
        var opt = {
            maxItems: 1,
            valueField: 'id',
            labelField: 'title',
            searchField: ['body', 'title'],
            options: (data ? data : []),
            render: {
                item: function(item, escape) {
                    return '<div>' + (item.title ? '<p>' + escape(item.title) + '</p>' : '') + '</div>';
                },
                option: function(item, escape) {
                    var label = item.title || item.body;
                    return '<div class="item">' + '<p style="font-size: 14px;"><strong>' + escape(label) + '</strong></p>' + '</div>';
                }
            }
        }
        // Options
        return selectize_options(opt);
    }
}    

// WhatsApp Template Selection
var whatsapp_template_selection = function(el, data=[], sel=[]) {
    var options = whatsapp_template_selection_options(data);
    // Element && Options was set
    if (el && options != '') {
        // Selectizing
        var selectize = init_selectize(el, options);
        if (selectize) {
            // Selected
            if (sel && sel != '') {
                var selected = selected_selectize(selectize, sel);
                $(el).trigger('change');
            }
        }
    }
}

// Guest Group Selection Options
var guest_group_selection_options = function(data) {
    if (data && data != '') {
        // Options
        var opt = {
            maxItems: 1,
            valueField: 'title',
            labelField: 'title',
            searchField: ['title', 'description'],
            options: (data ? data : []),
            render: {
                item: function(item, escape) {
                    return '<div>' + '<p>' + (item.title ? escape(item.title) : '(Tanpa Grup)') + '</p>' + '</div>';
                },
                option: function(item, escape) {
                    return '<div class="item">' +
                                '<p style="font-size: 14px;"><strong>' + (item.title ? escape(item.title) : '(Tanpa Grup)') + '</strong></p>' +
                                (item.description ? '<p style="font-size: 13px;">' + escape(item.description) + '</p>' : '') +
                            '</div>';
                }
            }
        }
        // Options
        return selectize_options(opt);
    }
}

// Guest Group Selection
var guest_group_selection = function(el, data=[], sel=[]) {
    var options = guest_group_selection_options(data);
    // Element && Options was set
    if (el && options != '') {
        // Selectizing
        var selectize = init_selectize(el, options);
        if (selectize) {
            // Selected            
            if (sel) {
                var selected = selected_selectize(selectize, sel);
            }
        }
    }            
}



// Counter
var counter = function(count, bar=null, step=10) {    
    if (count.length) {
        if (count.length == -1 && count.text && count.element) {
            return $(count.element).text(count.text);
        }

        var width = 0;
        var interval = setInterval(begin, step);

        // Begin
        function begin() {
            if (width >= count.length) {
                clearInterval(interval);
            } else {
                width++;
                // Bar Element && Bar length
                if (bar && bar.element && bar.length) {
                    // $(bar.element).text(bar.length);
                    $(bar.element).css('width', ((count.length * 100) / bar.length) + '%');
                }
                // Count Element
                if (count.element) {
                    $(count.element).text(width);
                }
            }
        }
    }
}

// Textarea Height
var textarea_height = function() {
    this.style.height = '1px';
    this.style.height = (0 + this.scrollHeight) + 'px';
}

// Go To
var goto = function(page) {    
    return window.location.href = page;
}

// Go To Handler
var goto_handler = function(e) {
    e.preventDefault();
    var page = $(this).attr('data-goto');
    if (page) return goto(page);
}

// Dropdown Button
var dropdown_toggle = function(e) {
    e.preventDefault();
    e.stopPropagation();
    return $(this).next('.dropdown-content').addClass('show');
}

// Hide Dropdown
var hide_dropdown = function() {
    var dropdownContent = $('.dropdown-content');
    if (dropdownContent.length && $(dropdownContent).hasClass('show')) return $(dropdownContent).removeClass('show');
}

// Init Tab
var init_tab = function(parent='') {
    var navs = $('[data-tab-content]');
    for (var i = 0; i < navs.length; i++) {
        if ( parent != '' && $(navs[i]).closest(parent).length && $(navs[i]).hasClass('active') ) $(navs[i]).trigger('click');
        if ( parent == '' && $(navs[i]).hasClass('active') ) $(navs[i]).trigger('click');
    }
}

// Tab Content Toggle
var tab_content_toggle = function(e) {
    e.preventDefault();  
    var wrapper = $(this).attr('data-tab-wrapper');        
    var target = $(this).attr('data-tab-content');

    // Navs
    var navs = $('[data-tab-content]');
    for (var i = 0; i < navs.length; i++) {
        if ($(navs[i]).attr('data-tab-wrapper') == wrapper) {
            $(navs[i]).removeClass('active');
            $($(navs[i]).attr('data-tab-content')).hide();
        }
    }
            
    $(this).addClass('active');
    if ($(target).css('display') == 'none') $(target).show();
}



/*  ===========================
        EVENT LISTENER
========================== */

// Close Modal
$(document).on('click', '.close-modal', closeModal);

// Close Alert
$(document).on('click', '.alert-close', hideAlert);

// Wa Chat Send Button
$(document).on('click', '#wa-chat-send-button', wa_chat_toggle);

// Close Wa Widget
$(document).on('click', '#close-wa-widget', wa_chat_trigger);

// Generate Tooltip
$(document).on('mouseenter', '[rel="tooltip"]', generate_tooltip);

// Textarea Height
$(document).on('keyup focus focusout', 'textarea', textarea_height);

// [Data Copy]
$(document).on('click', '[data-copy]', copy_text);

// Go To
$(document).on('click', '[data-goto]', goto_handler);

// Dropdown Toggle
$(document).on('click', '.dropdown-btn', dropdown_toggle);

// Tab Content
$(document).on('click', '[data-tab-content]', tab_content_toggle);


// Accordion Toggle
var accordion_toogle = function(e) {
    e.preventDefault();

    var wrapper = $(this).closest('.accordion');
    var item = $(this).closest('.accordion-item');

    if (wrapper && wrapper.length && item && item.length) {

        var isItemShow = false;
        if ($(item).hasClass('show')) isItemShow = true;

        // Accordion Items
        var items = $(wrapper).find('.accordion-item');
        for (var i = 0; i < items.length; i++) {
            // Close Accordion
            if ( $(items[i]).hasClass('show') ) {
                $(items[i]).removeClass('show');                
                $(items[i]).find('.accordion-panel').removeClass('show').slideUp();
            }            
        }            

        // Show Accordion
        if (!isItemShow) {
            $(item).addClass('show');
            $(item).find('.accordion-panel').addClass('show').slideDown();
        }
        
        // Close Accordion
        if (isItemShow) {
            $(item).removeClass('show');
            $(item).find('.accordion-panel').removeClass('show').slideUp();
        }
        
    }
}

// Accordion On Click
$(document).on('click', '.accordion-label', accordion_toogle);








// Key Up
$(document).on('keyup', function(e) {
    // Escape
    if (e.key === "Escape") { // escape key maps to keycode `27`
        
        // Close Modal
        if ($('#modal').length) closeModal();

    }
});

// Nprogress
if (typeof NProgress !== 'undefined') {
    // Show the progress bar 
    NProgress.start();

    // Increase randomly
    var nprogressInterval = setInterval(function() { NProgress.inc(); }, 1000);        

    // Trigger finish when page fully loaded
    $(window).on('load', function () {
        clearInterval(nprogressInterval);
        NProgress.done();
    });

    // Trigger bar when exiting the page
    $(window).on('unload', function () { NProgress.start(); });

    // Ajax Start
    $(document).ajaxStart(function() { NProgress.start(); });

    // Ajax Stop
    $(document).ajaxStop(function() { NProgress.done(); });
}


/*  ===========================
        ON READY
========================== */
$(document).ready(function(){

    // Init Tab
    setTimeout(init_tab, 500);

    // Window on Click
    window.onclick = function(event) {

        // Hide Dropdown
        if (event.target != $('.dropdown-btn')) hide_dropdown();
        
    }
    

    // Check if 'pickadate' exists
    if ( $.fn.pickadate ) {
        // Extend the default picker options for all instances.
        $.extend($.fn.pickadate.defaults, {
            // Strings and Translations
            monthsFull: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
            monthsShort: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"],
            weekdaysFull: ["Minggu", "Senin", "Selasa", "Rabu", "kamis", "Jum'at", "Sabtu"],
            weekdaysShort: ["Min", "Sen", "Sel", "Rab", "Kam", "Jum", "Sab"],

            // Buttons
            today: 'Hari Ini',
            clear: 'Hapus',
            close: 'Tutup',

            // Formats
            formatSubmit: 'yyyy-mm-dd',
            format: 'dddd, dd mmmm yyyy'
        });
    }

});
