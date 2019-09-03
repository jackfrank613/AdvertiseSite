import Event from './event.js';

Echo.join('chat')
    .listen('MessageSentEvent', (e) => {
        //
        console.log("father");
    });