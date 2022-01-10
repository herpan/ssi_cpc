const socket = io.connect(window.location.hostname + ':8080');

function update_data(to_bank) {
    socket.emit('new_update', {
        to_bank: to_bank,
    });
}