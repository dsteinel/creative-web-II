/* MEDIA QUERY */

var ie, t, n;

queries = [
	{
		context: 'mobile',
		match: function() {
			ie.innerHTML = 'mobile';
			console.log('mobile callback woohoo!');
		},
		unmatch: function(){
			console.log('mobile callback unmatched!');
		}
	},
	{
		context: 'skinny',
		match: function() {
			console.log('skinny callback woohoo!');
			ie.innerHTML = 'skinny';
		},
		unmatch: function(){
			console.log('skinny callback unmatched!');
		}
	},
	{
		context: ['mobile', 'skinny'],
		call_for_each_context: false,
		match: function() {
			console.log('a callback which spans multiple breakpoints, skinny and mobile!');
			// setting 'call_for_each_context' to false means this callback will only fire once across this range of breakpoints
		},
		unmatch: function() {
			console.log('leaving small context!');
		}
	},
	{
		context: 'desktop',
		match: function() {
			console.log('desktop callback woohoo!');
			ie.innerHTML = 'desktop';
		},
		unmatch: function(){
			console.log('desktop callback unmatched!');
		}
	}
];

window.onload = function() {
 	ie = document.getElementById('ie_test');
	MQ.init(queries);
	
	var my_query = MQ.addQuery({
		context: ['skinny'],
		match: function() { 
			console.log( 'second skinny callback!' )
		}
	});
	
	//Add a media query test
	var my_query = MQ.addQuery({
		context: 'skinny', 
		match: function() { 
			console.log( 'second skinny callback!' )
		}
	});
	var callbacklen = MQ.callbacks.length;
	//Remove a media query test by reference
	MQ.removeQuery( my_query );
	if(callbacklen - MQ.callbacks.length === 1){
		console.log("RemoveQuery test success");
	}else{
		console.log("RemoveQuery test failture");
	}
}