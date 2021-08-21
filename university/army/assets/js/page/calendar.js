$(function() {

    enableDrag();
    function enableDrag(){
        $('#external-events .fc-event').each(function() {
            $(this).data('event', {
                title: $.trim($(this).text()), // use the element's text as the event title
                stick: true // maintain when user navigates (see docs on the renderEvent method)
            });
            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 999,
                revert: true,      // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
            });
        });
    }

    $(".save-event").on('click', function() {
        var categoryName = $('#addNewEvent form').find("input[name='category-name']").val();
        var categoryColor = $('#addNewEvent form').find("select[name='category-color']").val();
        if (categoryName !== null && categoryName.length != 0) {
            $('#event-list').append('<div class="fc-event bg-' + categoryColor + '" data-class="bg-' + categoryColor + '">' + categoryName + '</div>');
            $('#addNewEvent form').find("input[name='category-name']").val("");
            $('#addNewEvent form').find("select[name='category-color']").val("");
            enableDrag();
        }
    });



    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();

    if(dd<10) { dd = '0'+dd }
    if(mm<10) { mm = '0'+mm } 

    var current = yyyy + '-' + mm + '-';
    var calendar = $('#calendar');



    // Add direct event to calendar

    var newEvent = function(start) {
        $('#addDirectEvent input[name="event-name"]').val("");
        $('#addDirectEvent select[name="event-bg"]').val("");
        $('#addDirectEvent').modal('show');
        $('#addDirectEvent .save-btn').unbind();
        $('#addDirectEvent .save-btn').on('click', function() {
            var title = $('#addDirectEvent input[name="event-name"]').val();
            var classes = 'bg-'+ $('#addDirectEvent select[name="event-bg"]').val();

            if (title) {

                var eventData = {
                    title: title,
                    start: start,
                    className: classes
                };

                calendar.fullCalendar('renderEvent', eventData, true);
                $('#addDirectEvent').modal('hide');
                }

            else {
                alert("Title can't be blank. Please try again.")
            }
        });
    }
  

    // initialize the calendar
    calendar.fullCalendar({

        header: {
            left: 'title',
            center: '',
            right: 'month, agendaWeek, agendaDay, prev, next'
        },

        editable: true,
        droppable: true,
        eventLimit: true, // allow "more" link when too many events
        selectable: true,
        events: [
            {
                title  : 'Republic Day',
                start  : '2021-01-26',
                className: 'bg-warning'
            },{
                title  : 'Martyrs Day',
                start  : '2021-01-31',
                className: 'bg-warning'
            },{
                title  : 'Independence',
                start  : '2021-08-15',
                className: 'bg-warning'
            },{
                title  : 'Christmas',
                start  : '2021-12-31',
                className: 'bg-warning'
            },{
                title  : 'NCC Day',
                start  : '2021-11-28',
                className: 'bg-primary'
            },{
                title  : 'Gandhi Jayanthi',
                start  : '2021-10-02',
                className: 'bg-warning'
            },{
                title  : 'Good Friday',
                start  : '2021-04-02',
                className: 'bg-warning'
            },{
                title  : 'Ambedkar Jayanthi',
                start  : '2021-04-14',
                className: 'bg-warning'
            },{
                title  : 'Rama Navami',
                start  : '2021-04-21',
                className: 'bg-warning'
            },{
                title  : 'EID',
                start  : '2021-05-14',
                className: 'bg-warning'
            },{
                title  : 'Dussehra',
                start  : '2021-10-15',
                className: 'bg-warning'
            },{
                title  : 'Diwali',
                start  : '2021-11-04',
                className: 'bg-warning'
            },{
                title  : 'Republic Day',
                start  : '2022-01-26',
                className: 'bg-warning'
            },{
                title  : 'Martyrs Day',
                start  : '2022-01-31',
                className: 'bg-warning'
            },{
                title  : 'Independence',
                start  : '2022-08-15',
                className: 'bg-warning'
            },{
                title  : 'Christmas',
                start  : '2022-12-31',
                className: 'bg-warning'
            },{
                title  : 'NCC Day',
                start  : '2022-11-27',
                className: 'bg-warning'
            },{
                title  : 'Gandhi Jayanthi',
                start  : '2022-10-02',
                className: 'bg-warning'
            },{
                title  : 'Good Friday',
                start  : '2022-04-02',
                className: 'bg-warning'
            },{
                title  : 'Ambedkar Jayanthi',
                start  : '2022-04-14',
                className: 'bg-warning'
            },{
                title  : 'Rama Navami',
                start  : '2022-04-21',
                className: 'bg-warning'
            },{
                title  : 'EID',
                start  : '2022-05-14',
                className: 'bg-warning'
            },{
                title  : 'Dussehra',
                start  : '2022-10-15',
                className: 'bg-warning'
            },{
                title  : 'Diwali',
                start  : '2022-11-04',
                className: 'bg-warning'
            }
        ],

        drop: function(date,jsEvent) {

        // var originalEventObject = $(this).data('eventObject');
        // var $categoryClass = $(this).attr('data-class');
        // var copiedEventObject = $.extend({}, originalEventObject);
        // //console.log(originalEventObject + '--' + $categoryClass + '---' + copiedEventObject);
        // copiedEventObject.start = date;
        // if ($categoryClass)
        //   copiedEventObject['className'] = [$categoryClass];
        // calendar.fullCalendar('renderEvent', copiedEventObject, true);
        // is the "remove after drop" checkbox checked?

        if ($('#drop-remove').is(':checked')) {
                // if so, remove the element from the "Draggable Events" list
                $(this).remove();
            }
        },

        select: function(start, end, allDay) { 
            newEvent(start);
        },

        eventClick: function(calEvent, jsEvent, view) {
            //var title = prompt('Event Title:', calEvent.title, { buttons: { Ok: true, Cancel: false} });

            var eventModal = $('#eventEditModal');
            eventModal.modal('show');
            eventModal.find('input[name="event-name"]').val(calEvent.title);

            eventModal.find('.save-btn').click(function(){
                calEvent.title = eventModal.find("input[name='event-name']").val();
                calendar.fullCalendar('updateEvent', calEvent);
                eventModal.modal('hide');
            });

            // if (title){
            //     calEvent.title = title;
            //     calendar.fullCalendar('updateEvent',calEvent);
            // }
        }
    });
});