const fs = require("fs"); 
const httpServer = require("https").createServer({ 
    key: fs.readFileSync('sslcert/private.key', 'utf8'),
    cert: fs.readFileSync('sslcert/certificate.crt', 'utf8')
}); 

const port = 8080;
const io = require("socket.io")(httpServer, {
        cors: { 
        origin: "https://103.81.194.212",
            methods: ["GET", "POST"], 
            allowedHeaders: ["xDPEAOEEssANz4gFAAAB"],
            credentials: true 
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

httpServer.listen(3000);
