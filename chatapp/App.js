import React, { Component } from 'react';
import { Text, View } from 'react-native';

import Echo from 'laravel-echo';
import socketio from 'socket.io-client';

const echo = new Echo({
  host: 'http://127.0.0.1:6001',
  broadcaster: 'socket.io',
  client: socketio,
});






class HelloWorldApp extends Component {

  componentDidMount(){
    echo
    .channel('chats.1')
    .listen('ChatMessageCreated', ev => console.log(ev.message.text));
  }

  render() {
    return (
      <View style={{ flex: 1, justifyContent: "center", alignItems: "center" }}>
        <Text>Hello, world!</Text>
      </View>
    );
  }
}

export default HelloWorldApp;