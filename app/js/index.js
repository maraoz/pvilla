$(document).ready(function() {

	var tags = [ "fueobregon", "fuesalasbarraza", "fueherrera", "fuecalles" ]
	var list_votos = $("#list-votos");
	var elems = {};
	for ( var i = 0; i < tags.length; i++) {
		var tag = tags[i];
		elems[tag] = $("#" + tag);
		elems[tag].remove();
	}

	var compare = function(a, b) {
		if (a[0] < b[0])
			return -1;
		if (a[0] > b[0])
			return 1;
		return 0;
	};

	var pad = function(x) {
		x = ''+x;
		var l = x.length;
		var pre = '';
		if (l < 3) {
			for (var i = 0; i<(3-l); i++)
				pre += "0";
		}
		return pre + x
	}

	var process_data = function(data) {
		var s = [];
		for ( var i = 0; i < tags.length; i++) {
			var tag = tags[i];
			var count = data[tag];
			s.push([ count, tag ]);
		}
		s.sort(compare);
		s.reverse();
		for ( var i = 0; i < s.length; i++) {
			var tag = s[i][1];
			var count = s[i][0];
			elems[tag].find('.posicion').html('#' + (i + 1));
			elems[tag].find('.puntos-numero').html(pad(count));
			list_votos.append(elems[tag]);
		}
	}

	var update_data = function() {
		$.getJSON('/api/count', function(data) {
			process_data(data);
			setTimeout(update_data, 5000);
		});
	}
	update_data();

});