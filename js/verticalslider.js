(function(jquery) {
	var $ = jquery;
	var $vs = $('.vertical-slider'); 

	var words = [
		'clean',
		'maintainable',
		'readable',
		'scalable',
		'plugable',
		'efficient'
	];
	// shuffle list for random order each time page loads
	
	shuffle(words);

	// var colors = [];

	// build nodes, append them
	var $nodes = [];
	$vs.html();
	$.each(words, function(w) {
		var $n = $('<div class="code-quality">' + words[w] + '</div>');
		$n.addClass('hidden');
		$nodes.push($n);
		$vs.append($n);
	});

	var i = 0;

	window.setInterval(function() {
		slideword();
	}, 1000);

	function slideword() {
		console.log(i);
		$nodes[i].addClass('hidden');
		(i<words.length-1) ? i++ : i=0;
		$nodes[i].removeClass('hidden');
	}

	// function taken straight from stackoverflow
	// http://stackoverflow.com/questions/2450954/how-to-randomize-shuffle-a-javascript-array
	function shuffle(array) {
	  var currentIndex = array.length, temporaryValue, randomIndex;

	  // While there remain elements to shuffle...
	  while (0 !== currentIndex) {

	    // Pick a remaining element...
	    randomIndex = Math.floor(Math.random() * currentIndex);
	    currentIndex -= 1;

	    // And swap it with the current element.
	    temporaryValue = array[currentIndex];
	    array[currentIndex] = array[randomIndex];
	    array[randomIndex] = temporaryValue;
	  }

	  return array;
	}
})(jQuery);