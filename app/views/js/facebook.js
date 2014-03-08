/**
 * Created by tan-c on 2014/03/06.
 */
window.fbAsyncInit = function() {
    FB.init({
        appId      : '446560652141637', // Set YOUR APP ID
        status     : true, // check login status
        cookie     : true, // enable cookies to allow the server to access the session
        xfbml      : true  // parse XFBML
    });

    FB.Event.subscribe('auth.authResponseChange', function(response)
    {
        if (response.status === 'connected')
        {
            //SUCCESS
        }
        else if (response.status === 'not_authorized'){
            //FAILED
        }
        else{
            //UNKNOWN ERROR
        }
    });
};

function Login(FBLoginProcess)
{
    FB.login(function(response) {
        if (response.authResponse)
        {
            GetUserInfo(FBLoginProcess);
            // TODO pass in later for friend recommendation purposes
//            GetFriendInfo();
        } else
        {
            console.log('User cancelled login or did not fully authorize.');
        }
    },{scope: 'email'});
}

function GetUserInfo(FBLoginProcess) {
    FB.api('/me', function(response) {
        localStorage.setItem("userInfo", JSON.stringify(response));
        $.ajax("http://graph.facebook.com/"+response.id+"/?fields=picture",{
            success: function(response){
                localStorage.setItem("userProfilePicUrl", response.picture.data.url);
                $.ajax("http://graph.facebook.com/"+response.id+"/?fields=picture.type(large)",{
                    success: function(response){
                        console.log(response);
                        localStorage.setItem("userProfilePicUrlBig", response.picture.data.url);
                        FBLoginProcess();
                    }
                });
            }
        });
    });
}

function GetFriendInfo() {
    FB.api('/me/friends', function(response){
        $.ajax("http://tan-c.artutor.sg/app/index.php/user/updateFacebookFriendList",{
            type: "post",
            data:response,
            success: function(response){
                localStorage.setItem("userFacebookFriendList",response);

                // TODO: instead of reloading the thing, make comparision and change the observables
                // YAY! This will get the VM from item and update it accordingly
                var loadingContent = $("#frontpageInfLoading")[0];
                var vm = ko.dataFor(loadingContent);

                ko.utils.arrayForEach(vm.shownItems(), function(oneItem){
                    // check if the creatorID of the item is within localStorage.userFacebookFriendList
                    for(var j =0; j< JSON.parse(response).length; j++){
                        if(JSON.parse(response)[j].id==oneItem.creatorID)
                            oneItem.isFacebookFriend("1");
                    }
                });
            }
        });
    });
}

// Load the SDK asynchronously
(function(d){
    var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement('script'); js.id = id; js.async = true;
    js.src = "//connect.facebook.net/en_US/all.js";
    ref.parentNode.insertBefore(js, ref);
}(document));
