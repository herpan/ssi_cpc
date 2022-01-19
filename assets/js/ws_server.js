const socket = io("https://103.81.194.212", {
    withCredentials: true, 
    extraHeaders: { "xDPEAOEEssANz4gFAAAB": "UlCKearSRj0DgEfIAAAB" }
});

function update_data(to_bank) {
    socket.emit('new_update', {
        to_bank: to_bank,
    });
}