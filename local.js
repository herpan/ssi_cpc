const port = 8080;
const io = require("socket.io")(port, {
    cors: {
        origin: "http://localhost",
        methods: ["GET", "POST"],
    }
});

io.on('connection', (socket) => {
    console.log('a user connected ' + socket.id);
    socket.on('disconnect', () => {
        console.log('user disconnected ' + socket.id);
    });
    socket.on('chat message', (msg) => {
        console.log('message: ' + msg);
        io.emit('chat message', msg);
    });

    socket.on('new_update', function (data) {
        io.sockets.emit('new_update', {
            to_bank: data.to_bank,
        });
    });

});