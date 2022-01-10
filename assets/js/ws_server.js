const socket = io("https://nitro.ssilink.co.id:8080", {
    withCredentials: true, 
    extraHeaders: { "xDPEAOEEssANz4gFAAAB": "UlCKearSRj0DgEfIAAAB" }
});

function update_data(to_bank) {
    socket.emit('new_update', {
        to_bank: to_bank,
    });
}