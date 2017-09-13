var config = {
                apiKey: "AIzaSyAnV-GbTfyhGutT_8MBfRpqSJByRXMZCy0",
    authDomain: "alumni-chat-2e3d6.firebaseapp.com",
    databaseURL: "https://alumni-chat-2e3d6.firebaseio.com",
    projectId: "alumni-chat-2e3d6",
    storageBucket: "alumni-chat-2e3d6.appspot.com",
    messagingSenderId: "377311387120"
};
firebase.initializeApp(config);

var name = "";        
            $(document).ready(function(){
                
                    var database = firebase.database();

                    var messagesRef = database.ref('chat/');

                    messagesRef.off();

                    messagesRef.limitToLast(12).on('child_added', function(snapshot){
                        var data = "<div class='row flex-nowrap message-row contact p-4'><img class='avatar mr-4' src='../../assets/images/avatars/profile.jpg' alt=''/><div class='bubble' id='bubble'><div class='message'>" + snapshot.child('message').val() + "</div><div class='time text-muted text-right mt-2'>" + snapshot.child('name').val() + "</div></div></div>";

                        $("#chat-messages").html($("#chat-messages").html() + data);

                        // Show the card fading-in and scroll to view the new message.
                        setTimeout(function() {document.getElementById('chat-messages').classList.add('visible')}, 1);
                        var list = document.getElementById('chatscroll');
                        list.scrollTop = list.scrollHeight;
                        //this.messageInput.focus();
                    });
                    messagesRef.limitToLast(12).on('child_changed', function(snapshot){
                        var data = "<div class='row flex-nowrap message-row contact p-4'><img class='avatar mr-4' src='../../assets/images/avatars/profile.jpg' alt=''/><div class='bubble' id='bubble'><div class='message'>" + snapshot.child('message').val() + "</div><div class='time text-muted text-right mt-2'>" + snapshot.child('name').val() + "</div></div></div>";

                        $("#chat-messages").html($("#chat-messages").html() + data);

                        // Show the card fading-in and scroll to view the new message.
                        setTimeout(function() {document.getElementById('chat-messages').classList.add('visible')}, 1);
                        var list = document.getElementById('chatscroll');
                        list.scrollTop = list.scrollHeight;
                    });

                    name = $("#name").val();
                                  
                $("#send_button").on('click', function(){
                    var mess = $("#msg").val();

                    
                    firebase.database().ref('chat/' + Date.now()).set({
                        message: mess,
                        name: name
                        
                    });
                    
                    $("#msg").val("");
                });


               
               /* const messaging = firebase.messaging();
                var userid = $("#userid").val();

                saveMessagingDeviceToken = function(){
                	messaging.getToken().then(function(currentToken){
                		if (currentToken) {
                			console.log('Got FCM device token:', currentToken);
                			firebase.database().ref('/fcmTokens').child(currentToken).set(userid)
                		}else{
                			requestPermission();
                		}
                	});
                };

            
               messaging.requestPermission()
               .then(function(){
               	console.log("Have permisiion");
               	saveMessagingDeviceToken();
               })
               .catch(function(error){
               	console.error('Error Occured');
               })*/
           
         
});