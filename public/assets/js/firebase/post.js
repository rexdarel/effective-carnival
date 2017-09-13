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

                var postRef = database.ref('post/');
                postRef.off();

                postRef.limitToLast(12).on('child_added', function(snapshot){
                        var data = "<div class='timeline-item card mb-6'>" +
                        			"<header class='row no-gutters align-items-center justify-content-between p-4'>" +
                        			"<div class='user col'>"+
                        			"<div class='row no-gutters align-items-center justify-content-start'>" +
                        			"<img class='avatar col-auto mr-2' src='../../assets/images/avatars/garry.jpg'>" +
                        			"<div class='col'>"+
                        			"<div class='title font-weight-bold'>"+
                        			"<span class='username'>"+snapshot.child('name').val()+"</span></div>"+
                        			"<div class='time text-muted'>32 minutes ago</div></div></div></div>"+
                        			"<button type='button' class='col-auto btn btn-icon' aria-label='more'>"+"<i class='icon icon-dots-vertical'></i></button></header>"+
                        			"<div class='content'>"+
                        			"<div class='message py-2 px-4'>"+snapshot.child('message').val()+"</div></div></div>";

                        $("#postList").html($("#postList").html() + data);

                        // Show the card fading-in and scroll to view the new message.
                        //setTimeout(function() {document.getElementById('chat-messages').classList.add('visible')}, 1);
                        //var list = document.getElementById('chatscroll');
                        //list.scrollTop = list.scrollHeight;
                        //this.messageInput.focus();
                    });

                name = $("#name").val();
                    

                    $("#postButton").on('click', function(){
                    var mess = $("#postText").val();
                    mess = mess.replace(/\r?\n/g, '<br />');

                    
                    firebase.database().ref('post/' + Date.now()).set({
                        message: mess,
                        name: name,
                        postedOn: firebase.database.ServerValue.TIMESTAMP
                        
                    });
                    
                    $("#postText").val("");
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