// Event field control

var events = 1;

function addEvent(divName) {
    events++;
    var newdiv = document.createElement('div');

    newdiv.innerHTML =
        '<br>' +
        '<div class="row" id="event' + events + '">\n' +
        '    <div class="col-xl-2 col-md-3 col-sm-6">\n' +
        '        <div class="input-group">\n' +
        '            <input type="number" class="form-control" placeholder="Jaar Van" id="eventStart' + events + '">\n' +
        '        </div>\n' +
        '    </div>\n' +
        '    <div class="col-xl-2 col-md-3 col-sm-6">\n' +
        '        <div class="input-group">\n' +
        '            <input type="number" class="form-control" placeholder="Jaar Tot" id="eventEnd' + events + '">\n' +
        '        </div>\n' +
        '    </div>\n' +
        '    <div class="col-xl-8 col-md-6 col-sm-12">\n' +
        '        <div class="input-group">\n' +
        '            <input type="text" class="form-control" placeholder="Gebeurtenis" id="eventName' + events + '">\n' +
        '        </div>\n' +
        '    </div>\n' +
        '</div>';

    document.getElementById(divName).appendChild(newdiv);
}

// Title Setter

function updateTitle(text, divName) {
    document.getElementById(divName).innerHTML = text;
}

function emptyDiv(divName) {
    document.getElementById(divName).innerHTML = "";
}

// Make timeline

function createTimeline(timelineDiv, titleBoxDiv, titleDiv, downloadDiv) {
    emptyDiv(timelineDiv);
    updateTitle(document.getElementById(titleBoxDiv).value, titleDiv);

    // DOM element where the Timeline will be attached
    var container = document.getElementById('visualization');

    // Get the events from the HTML
    var eventStart = [];
    var eventEnd = [];
    var eventName = [];

    for (var i = 1; i <= events; i++) {
        var eventStartId = 'eventStart' + i.toString();
        eventStart.push(document.getElementById(eventStartId).value);
        var eventEndId = 'eventEnd' + i.toString();
        eventEnd.push(document.getElementById(eventEndId).value);
        var eventNameId = 'eventName' + i.toString();
        eventName.push(document.getElementById(eventNameId).value);
    }

    var timelineData = new vis.DataSet();
    for (var j = 0; j < events; j++) {
        timelineData.add([{id: (j + 1), content: eventName[j], start: eventStart[j]}]);
        // Add eventEnd when there is one
        if (eventEnd[j] !== '') {
            timelineData.update({id: (j + 1), end: eventEnd[j]})
        }
    }

    // Configuration for the Timeline
    var options = {};

    // Create a Timeline
    var timeline = new vis.Timeline(container, timelineData, options);

    setVisisble(downloadDiv);
}

function downloadTimeline(divName, downloadId) {
    html2canvas(document.getElementById(divName), {
        allowTaint: true,
        taintTest: false,
        onrendered: function(canvas) {
            document.getElementById(downloadId).href = canvas.toDataURL("image/png");
        }
    });
}

function convertCanvasToImage(canvas) {
    var image = new Image();
    image.src = canvas.toDataURL("image/png");
    return image;
}

function startDownload(file) {
    downloadFile(file);
}

function setVisisble(divName) {
    document.getElementById(divName).style.visibility = "visible";
}