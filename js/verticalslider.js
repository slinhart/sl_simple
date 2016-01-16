(function(jquery) {
	var $ = jquery;
	var $vs = $('.vertical-slider'); 

	var words = [
		'clean',
		'maintainable',
		'readable',
		'scalable',
		'plugable',
		'efficient',
		'predictable',
		'reusable'
	];
	// shuffle list for random order each time page loads
	
	shuffle(words);

	var colors = [
		'#39ADD1',
		'#71DB8C',
		'#7D669E',
		'#FFD34E'
	];
	shuffle(colors);

	// build nodes, append them
	var $nodes = [];
	$nodes.push($vs.find(".code-quality"));
	$.each(words, function(w) {
		var $n = $('<div class="code-quality" style="color:' + colors[w % colors.length] + '">' + words[w] + '</div>');
		$n.addClass('hidden');
		$nodes.push($n);
		$vs.append($n);
	});

	var i = 0;

	window.setInterval(function() {
		slideword();
	}, 1300);

	function slideword() {
		$nodes[i].addClass('hidden');
		(i<$nodes.length-1) ? i++ : i=0;
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