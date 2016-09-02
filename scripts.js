(function () {
	
	window.addEventListener ('load', function() {
		updateOnlineStatus ();
		window.addEventListener('online',  updateOnlineStatus);
  		window.addEventListener('offline', updateOnlineStatus);
		window.applicationCache.addEventListener ("updateready", onUpdateReady, false);
	});
	
	function updateOnlineStatus () {
		if (navigator.onLine) {
			$('.online-status').removeClass ('red').addClass ('green');
			$('.online-status').text ("Online");
		}
		else {
			$('.online-status').removeClass ('green').addClass ('red');
			$('.online-status').text ("Offline");
		}
	}
	
	function onUpdateReady () {
		if (window.applicationCache.status == window.applicationCache.UPDATEREADY) {
		   // update found reload the app.
			window.applicationCache.swapCache ();
		   	window.location.reload ();
		 } else {
		  // no update. don't bother.
		 }
	}
})();