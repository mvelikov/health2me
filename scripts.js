$(document).ready(function() {

    // page is now ready, initialize the calendar...

    $('#calendar-jq').fullCalendar({
        // put your options and callbacks here
        selectable : true,
        defaultView: 'basicWeek',
        events: [
            {
                title: 'Breakfast',
                start: '2013-11-16',
                color : 'red'
            },
            {
                title: 'Lunch',
                start: '2013-11-16',
                color : 'red'
            },
            {
                title: 'Dinner',
                start: '2013-11-16',
                color : 'red'
            },
            {
                title: 'Breakfast',
                start: '2013-11-17',
                color : 'red'
            },
            {
                title: 'Medical',
                start: '2013-11-17',
                color : 'green'
            },
            {
                title: 'Medical',
                start: '2013-11-16',
                color : 'green'
            },
            {
                title: 'Emotional',
                start: '2013-11-16',
                color : 'blue'
            },
            {
                title: 'Emotional',
                start: '2013-11-17',
                color : 'blue'
            }
            // etc...
        ],
        eventClick : function(calEvent, jsEvent, view) {

            alert('Event: ' + calEvent.title);

            // change the border color just for fun
            $(this).css('border-color', 'red');

        },
        color: 'yellow',   // an option!
        textColor: 'black' // an option!
    });
    $('#calendar').on('pageshow', function(ui, event) {
        $('#calendar-jq').fullCalendar('render');
    });
});