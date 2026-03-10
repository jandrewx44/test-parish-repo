    var calendar;
    var Calendar = FullCalendar.Calendar;
    var events = [];
    var pageSize = 10;
    var currentKeys = [];
    var currentPage = 1;
    var currentTotalPages = 1;
    if (typeof scheds === 'undefined' || !scheds) { scheds = {}; }

    function renderBottomList(keys, page){
        var bottomContainer = $('#bottom-list-container');
        var pageInfo = $('#bottom-page-info');
        if(!keys) keys = [];
        keys = keys.slice(); // copy
        // sort desc by start_datetime
        keys.sort(function(a, b) {
            var da = new Date((scheds[a] && scheds[a].start_datetime) || 0);
            var db = new Date((scheds[b] && scheds[b].start_datetime) || 0);
            if (da < db) return 1;
            if (da > db) return -1;
            return 0;
        });
        currentKeys = keys;
        currentTotalPages = Math.max(1, Math.ceil(keys.length / pageSize));
        currentPage = Math.min(Math.max(1, page || 1), currentTotalPages);
        var start = (currentPage - 1) * pageSize;
        var slice = keys.slice(start, start + pageSize);

        var html = '';
        var rowCount = 0;
        slice.forEach(function(id){
            var row = scheds[id];
            if(!row) return;
            var startText = row.sdate || row.start_datetime || "";
            var endText = row.edate || row.end_datetime || "";
            var title = row.title || "No Title";
            rowCount++;
            html += '<tr class="text-center">' +
                '<td>' + ((start + rowCount)) + '</td>' +
                '<td class="font-weight-bold text-maroon text-left">' + title + '</td>' +
                '<td><small>' + startText + '</small></td>' +
                '<td><small>' + endText + '</small></td>' +
                '<td class="text-left"><small>' + (row.description || "") + '</small></td>' +
                '<td><button type="button" class="btn btn-xs btn-info edit-event" data-id="' + id + '"><i class="fa fa-edit"></i></button></td>' +
            '</tr>';
        });
        for (var i = rowCount + 1; i <= pageSize; i++) {
            html += '<tr style="height: 45px;">' +
                '<td class="text-center text-muted">' + (start + i) + '</td>' +
                '<td></td><td></td><td></td><td></td><td></td>' +
            '</tr>';
        }
        if (bottomContainer.length > 0) {
            bottomContainer.html(html);
        }
        if(pageInfo.length > 0){
            pageInfo.text('Page ' + currentPage + '/' + currentTotalPages);
        }
        var $prev = $('#bottom-prev'), $next = $('#bottom-next');
        if ($prev.length) $prev.prop('disabled', currentPage <= 1);
        if ($next.length) $next.prop('disabled', currentPage >= currentTotalPages);
    }
    $(function() {
        if (!!scheds) {
            Object.keys(scheds).map(k => {
                var row = scheds[k]
                events.push({ id: row.id, title: row.title, start: row.start_datetime, end: row.end_datetime });
            })
        }
        var date = new Date()
        var d = date.getDate(),
            m = date.getMonth(),
            y = date.getFullYear()

        calendar = new Calendar(document.getElementById('calendar'), {
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: ''
            },
            height: 430,
            selectable: true,
            themeSystem: 'bootstrap',
            events: events,
        dayCellDidMount: function(arg){
            var y = arg.date.getFullYear();
            var m = ('0' + (arg.date.getMonth() + 1)).slice(-2);
            var d = ('0' + arg.date.getDate()).slice(-2);
            var dateStr = y + '-' + m + '-' + d;

            var hasSched = false;
            if(!!scheds){
                Object.keys(scheds).forEach(function(k){
                    var row = scheds[k];
                    var startDate = String(row.start_datetime).substring(0, 10);
                    if(startDate === dateStr){
                        hasSched = true;
                    }
                });
            }
            if(hasSched){
                $(arg.el).addClass('fc-day-has-sched');
            }
        },
            dateClick: function(info) {
                var dateStr = info.dateStr;
                if (!!scheds) {
                    var keys = Object.keys(scheds).filter(function(k) {
                        var row = scheds[k];
                        var startDate = String(row.start_datetime).substring(0, 10);
                        return startDate === dateStr;
                    });
                    if (keys.length === 0) {
                        var form = $('#schedule-form');
                        form.trigger('reset');
                        form.find('[name="id"]').val('');
                        form.find('[name="start_datetime"]').val(dateStr);
                        form.find('[name="end_datetime"]').val(dateStr);
                        form.find('[name="title"]').focus();
                        
                        renderBottomList([], 1);
                    } else {
                        renderBottomList(keys, 1);
                        $('html, body').animate({ scrollTop: $('#bottom-schedule-list').offset().top - 100 }, 'slow');
                    }
                } else {
                    var formNew = $('#schedule-form');
                    formNew.trigger('reset');
                    formNew.find('[name="id"]').val('');
                    formNew.find('[name="start_datetime"]').val(dateStr);
                    formNew.find('[name="end_datetime"]').val(dateStr);
                    formNew.find('[name="title"]').focus();
                }
            },
            eventClick: function(info) {
            },
            eventDidMount: function(info) {
                // Do Something after events mounted
            },
            editable: true
        });

        calendar.render();
        // initial bottom list from all schedules
        if(!!scheds){
            renderBottomList(Object.keys(scheds), 1);
        }

        $('#schedule-form').on('reset', function() {
            $(this).find('input:hidden').val('')
            $(this).find('input:visible').first().focus()
        })

        $('#add-another-event').click(function() {
            var dateStr = $(this).data('date');
            var form = $('#schedule-form');
            form.trigger('reset');
            form.find('[name="id"]').val('');
            form.find('[name="start_datetime"]').val(dateStr);
            form.find('[name="end_datetime"]').val(dateStr);
            $('#event-details-modal').modal('hide');
            form.find('[name="title"]').focus();
        });

        $(document).on('click', '.edit-event', function() {
            var id = $(this).attr('data-id')
            if (!!scheds[id]) {
                var _form = $('#schedule-form')
                console.log(String(scheds[id].start_datetime), String(scheds[id].start_datetime).replace(" ", "\\t"))
                _form.find('[name="id"]').val(id)
                _form.find('[name="title"]').val(scheds[id].title)
                _form.find('[name="description"]').val(scheds[id].description)
                _form.find('[name="start_datetime"]').val(String(scheds[id].start_datetime).split(' ')[0])
                _form.find('[name="end_datetime"]').val(String(scheds[id].end_datetime).split(' ')[0])
                
                // Scroll to the form for editing
                $('html, body').animate({ scrollTop: $('#schedule-card').offset().top - 100 }, 'slow');
                _form.find('[name="title"]').focus()
            } else {
                alert("Event is undefined");
            }
        })

        // pagination controls
        $(document).on('click', '#bottom-next', function(){
            if(currentPage < currentTotalPages){
                renderBottomList(currentKeys, currentPage + 1);
            }
        });
        $(document).on('click', '#bottom-prev', function(){
            if(currentPage > 1){
                renderBottomList(currentKeys, currentPage - 1);
            }
        });
        $(document).on('click', '#bottom-all', function(){
            if(!!scheds){
                renderBottomList(Object.keys(scheds), 1);
                $('html, body').animate({ scrollTop: $('#bottom-schedule-list').offset().top - 100 }, 'slow');
            }
        });
        // delete action removed
    })
