var PageComingSoon = function () {
    return {
      //Coming Soon
      initPageComingSoon: function () {
			var newYear = new Date('2017-06-30T00:00:00Z');
			//newYear = new Date(newYear + 1, 1 - 1, 1);
			console.log(newYear);
			$('#defaultCountdown').countdown({until: newYear})
        }
    };
}();
