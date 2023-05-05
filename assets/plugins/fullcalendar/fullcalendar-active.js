$(document).ready(function () {

    "use strict"; // Start of use strict

    /* initialize the external events
     -----------------------------------------------------------------*/

    $('#external-events .fc-event').each(function () {

        // store data so the calendar knows to render an event upon drop
        $(this).data('event', {
            title: $.trim($(this).text()), // use the element's text as the event title
            stick: true // maintain when user navigates (see docs on the renderEvent method)
        });

        // make the event draggable using jQuery UI
        $(this).draggable({
            zIndex: 999,
            revert: true, // will cause the event to go back to its
            revertDuration: 0  //  original position after the drag
        });

    });


    /* initialize the calendar
     -----------------------------------------------------------------*/

    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay,listMonth'
        },
        defaultDate: '2016-12-12',
        navLinks: true, // can click day/week names to navigate views
        businessHours: true, // display business hours
        editable: true,
        droppable: true, // this allows things to be dropped onto the calendar
        drop: function () {
            // is the "remove after drop" checkbox checked?
            if ($('#drop-remove').is(':checked')) {
                // if so, remove the element from the "Draggable Events" list
                $(this).remove();
            }
        },
        events: [
            {
                title: 'Business Lunch',
                start: '2016-12-03T13:00:00',
                constraint: 'businessHours'
            },
            {
                title: 'Meeting',
                start: '2016-12-13T11:00:00',
                constraint: 'availableForMeeting', // defined below
                color: '#558B2F'
            },
            {
                title: 'Conference',
                start: '2016-12-18',
                end: '2016-12-20'
            },
            {
                title: 'Party',
                start: '2016-12-29T20:00:00'
            },
            // areas where "Meeting" must be dropped
            {
                id: 'availableForMeeting',
                start: '2016-12-11T10:00:00',
                end: '2016-12-11T16:00:00',
                rendering: 'background'
            },
            {
                id: 'availableForMeeting',
                start: '2016-12-13T10:00:00',
                end: '2016-12-13T16:00:00',
                rendering: 'background'
            },
            // red areas where no events can be dropped
            {
                start: '2016-12-24',
                end: '2016-12-28',
                overlap: false,
                rendering: 'background',
                color: '#ff9f89'
            },
            {
                start: '2016-12-06',
                end: '2016-12-08',
                overlap: false,
                rendering: 'background',
                color: '#ff9f89'
            }
        ]
    });

});