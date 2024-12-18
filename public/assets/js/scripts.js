document.getElementById('eventSelect').addEventListener('change', function () {
    const selectedEventId = this.value;

    // Find the selected event in the eventsData array
    const selectedEvent = eventsData.find(event => event.id == selectedEventId);

    if (selectedEvent) {
        // Autofill fields
        document.getElementById('eventDate').value = selectedEvent.date || '';
        document.getElementById('eventDescription').value = selectedEvent.description || '';
        document.getElementById('eventLocation').value = selectedEvent.location || '';
    }
});